<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ForgetPassword;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Property;
use App\Models\UserLog;
use App\Models\OldPassword;
use App\Models\Ward;
use App\Models\Colony;
use Str;
use Carbon\Carbon;
use phpseclib3\Crypt\AES;

class UserController extends Controller
{


    public function generateCaptcha()
    {
        $letters = Str::upper(Str::random(3));
        $numbers = strval(rand(100, 999));

        $codeArray = array_merge(str_split($letters), str_split($numbers));
        shuffle($codeArray);

        $code = implode('', $codeArray);

        Session::put('captcha', $code);

        $width = 160;
        $height = 60;
        $image = imagecreate($width, $height);

        $background = imagecolorallocate($image, 242, 242, 242);
        $text_color = imagecolorallocate($image, 26, 26, 26);

        $font_size = 5;
        $x = ($width - imagefontwidth($font_size) * strlen($code)) / 2;
        $y = ($height - imagefontheight($font_size)) / 2;

        imagestring($image, $font_size, $x, $y, $code, $text_color);

        header('Content-Type: image/png');
        imagepng($image);
        imagedestroy($image);
    }

    public function refreshCaptcha()
    {
        $code = Str::random(6);
        Session::put('captcha', $code);

        $image = imagecreate(120, 40);
        $background = imagecolorallocate($image, 242, 242, 242);
        $text_color = imagecolorallocate($image, 26, 26, 26);

        imagestring($image, 5, 20, 10, $code, $text_color);

        ob_start();
        imagepng($image);
        $imageData = ob_get_clean();
        imagedestroy($image);

        return response()->json(['captcha' => 'data:image/png;base64,' . base64_encode($imageData)]);
    }

    public function decryptFunction($encryptedData, $ivHex)
    {
        $key = '1234567890123456';
        $decodedData = base64_decode($encryptedData);
        $iv = hex2bin($ivHex); // Convert hex IV back to binary
        $aes = new AES('cbc');
        $aes->setKey($key);
        $aes->setIV($iv);
        $decryptedData = $aes->decrypt($decodedData);
        return $decryptedData;
    }

    public function loginold(Request $request)
    {
        $formData = $request->all();

         $validator = Validator::make(
            $formData, [
            'encrypt_email' => 'required',
            'encrypt_password' => 'required|min:8',
            ], [
                'encrypt_email.required' => 'The email field is required.',
                'encrypt_password.required' => 'The password field is required.',
                'encrypt_password.min' => 'The password must be at least 8 characters long.',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // if ($request->captcha !== Session::get('captcha')) {
        //     return redirect()->back()->withErrors(['captcha' => 'CAPTCHA is incorrect.']);
        // }
        
        $encryptedDataiv = $request->encrypt_data_iv;
        $encrypt_email = $request->encrypt_email;
        $encrypt_password = $request->encrypt_password;

        $email    = $this->decryptFunction($encrypt_email, $encryptedDataiv);
        $password = $this->decryptFunction($encrypt_password, $encryptedDataiv);
          // dd($formData, $email, $password);

        $credentials = [
                'email' => $email,
                'password' => $password,
            ];
               
        try {
           
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $curSessionId = Str::random(32);
                Session::put('curSessionId', $curSessionId);
                $user->session_id = $curSessionId;
                $user->save();
                
                $obj = new UserLog();
                $obj->name = $user->name;
                $obj->email = $user->email;
                $obj->phone_number = $user->mobile;
                $obj->logged_in_at = now();
                $obj->save();

                $oldPasswordEntry = new OldPassword();
                $oldPasswordEntry->user_id = $user->id;
                $oldPasswordEntry->password = $user->password;
                $oldPasswordEntry->save();
        
                if ($user->role === '1') {
                    return redirect()->route('admin.dashboard')->with('success', 'User Logged In successfully');
                } else {
                     Session::flush();
                     Cache::flush();
                    Auth::logout();
                    return redirect()->back()->with('error', 'You are not authorized to access this area.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid email or password. Please try again.');
            }
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
             \Log::info($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
   
    public function login(Request $request)
    {
        $formData = $request->all();
        try {
 
            $validator = Validator::make($request->all(), [
                'house_id' => 'required',
                'password' => 'required',
            ]);
 
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($request->captcha !== Session::get('captcha')) {
               return redirect()->back()->withErrors(['captcha' => 'CAPTCHA is incorrect.']);
            }
            
            $house_id  = $request->house_id;
            $password  = $request->password;

            $checkExist = Property::where('property_id', $house_id)->first();
            // dd($checkExist, $formData);
            if ($checkExist && Hash::check($password, $checkExist->password)) {
                Auth::login($checkExist);
                return redirect()->route('my.property.application.list')->with('success', 'User successfully logged in');
            } else {
                Log::info($formData);
                return redirect()->back()->with('error', 'Invalid email or password. Please try again.');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage() . " " . $e->getFile() . " " . $e->getLine());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function houseId()
     {
            try {
                return view('auth.house');
            } catch (\Exception $e) {
                Log::error('Error in UserController@create: ' . $e->getMessage());
                return redirect()->back()->with('error', 'An error occurred. Please try again.');
            }
    }

    public function fetchHouseId(Request $request)
    {
        $formData = $request->all();
        try {
 
            $validator = Validator::make($request->all(), [
                'phone_number' => 'required',
            ]);
 
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($request->captcha !== Session::get('captcha')) {
               return redirect()->back()->withErrors(['captcha' => 'CAPTCHA is incorrect.']);
            }
            
            $phoneNumber = $request->phone_number;
            $password     = $request->password;

             $propert = Property::where('mobile_number', $phoneNumber)->exists();
            if ($propert) {
                $properties = Property::where('mobile_number', $phoneNumber)->get();
                return view('auth.house_list', compact('properties'));
            } else {
                return redirect()->back()->with('error', 'You need to register before logging in.');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage() . " " . $e->getFile() . " " . $e->getLine());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function createProperty()
    {
        try {
            $wards = Ward::where('is_active', 1)->get();
            return view('signup', compact('wards'));
        } catch (\Exception $e) {
            Log::error('Error in property: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }



    public function storeProperty(Request $request)
    {
        $formData = $request->all();
        $validator = Validator::make(
            $formData,
            [
                'ward_no'          => 'required',
                'colony_name'      => 'required',
                'house_no'         => 'required',
                'phone_number'     => 'required',
                'password'         => ['required', 'string', 'min:8', 'max:12'],
                'confirm_password' => 'required|same:password'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $property = Property::where('ward_no', $request->ward_no)->where('house_no', $request->house_no)->first();
            $property->password = Hash::make($request->password);
            $property->mobile_number = $request->phone_number;
            $property->save();
            DB::commit();
            return redirect()->route('login.page')->with('success', 'User registered successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Property save failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to register user. Please try again.');
        }
    }



    public function propertyTextAddSave(Request $request)
    {
        try {
               
                $property = new Property();
                // $property->property_id = "PRTY".mt_rand(100000, 999999);
                $property->property_id = "PRTY".Str::random(8);
                $property->property   = $request->property_type;
                $property->ward_no = $request->ward_no;
                $property->colony_name = $request->colony_name;
                $property->building_type = $request->building_type;
                $property->house_no = $request->house_no;
                $property->property_owner_name = $request->property_owner_name;
                $property->father_or_husband_name = $request->father_husband_name;
                $property->mobile_number = $request->mobile_number;
                $property->total_arv = $request->total_arv;
                $property->house_tax_current = $request->house_tax_current;
                $property->house_tax_arrear = $request->house_tax_arrear;
                $property->house_surcharge = $request->house_surcharge;
                $property->total_tax_number = $request->total_tax_number;
                $property->user_id = Auth::user()->id;
                $property->save();

                return redirect()->route('property.text')->with(['success' => 'Property successfully registered']);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }




    public function dashboard()
    {
        try {
            return view('dashboard');
        } catch (\Exception $e) {
            Log::error('Error Somthing went to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        try {
            
            Auth::logout();
            return redirect('/')->with('success', 'You have been logged out successfully.');
        } catch (\Exception $e) {
            Log::error('Something went wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function profileDetails()
    {
        try {
            $user_id = Auth::user()->id;
            $user_data = User::where('id', $user_id)->first();

            return view('Profile.profile-details', [
                "user_data" => $user_data,
            ]);
        } catch (\Exception $e) {
            Log::error('Error Somthing went to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function profileUpdate(Request $request)
    {
        try {
            $user_id = Auth::user()->id;
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'number' => 'required',

            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $name = $request['name'];
            $filename = null;
            $profile_image = (!$request->hasFile('profile_image'))
                ? null
                : fileUploadOnServer($request->file('profile_image'), "profile_image");

            $user_data = [
                'name' => $request['name'],
                'email' => $request['email'],
                'mobile' => $request['number'],
                'profile_image' => $profile_image ?? Auth::user()->profile_image
            ];

            User::where('id', $user_id)->update($user_data);

            return redirect()->route('profile.details')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            Log::error('Error in UserController@profileUpdate: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function forgetpassword()
    {
        try {
            return view('forgetPasswordEmailSend');
        } catch (\Exception $e) {
            Log::error('Error Something went wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function forgetPasswordSendMail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->email)->first();
        // dd('Badmosi Ne Mitr!');
        if (!$user) {
            return back()->with('error', 'Email does not exist.');
        }

        $token = Password::broker()->createToken($user);

        $resetLink = route('password.reset', ['token' => $token, 'email' => $request->email]);

        Mail::to($user->email)->send(new ForgetPassword($resetLink, $user->name));

        return back()->with('success', 'Reset password email has been sent successfully.');
    }

    public function resetPasswordForm($token, Request $request)
    {
        return view('resetPasswordForm', ['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                // dd($user);
                $user->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login.page')->with('success', 'Password has been reset successfully.');
        }

        return back()->with('error', 'An error occurred. Please try again.');
    }

    public function showResetForm()
    {
        return view('forgetpassword');
    }

    public function nagarpalika()
    {

        return view('landingpage');
    }


     public function getUserColonies(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $colonies = Colony::where('ward_id', $modelId)->pluck('name', 'id')->toArray();
        // dd($modelId, $colonies);
        return response()->json($colonies);
    }

    public function getUserHouses(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $ward = Colony::where('id', $modelId)->select('id', 'ward_id', 'name')->first();
        $houses = Property::where('ward_no', $ward->ward_id)->where('colony_name', $ward->name)->pluck('house_no', 'id')->toArray();
        return response()->json($houses);
    }

    public function getUserProperty(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $property = Property::where('id', $modelId)->select('id', 'user_id', 'property', 'property_id', 'ward_no', 'colony_name', 'building_type', 'house_no', 'property_owner_name', 'father_or_husband_name', 'mobile_number', 'total_arv', 'house_tax_current', 'house_tax_arrear', 'surcharge', 'total_tax_house', 'water_tax_current', 'water_tax_arrear', 'water_tax_surcharge', 'total_water_tax', 'water_charge_current', 'water_charge_arrear', 'water_charge_surcharge', 'water_surcharge', 'total_water_charge', 'total_property_tax', 'deposite_house_tax', 'deposite_water_tax', 'deposite_water_charges', 'total_property_tax_charge', 'remarks', 'total_tax_number', 'house_surcharge', 'registry_file', 'amount', 'remaining', 'status', 'payment_status', 'created_at', 'updated_at')->first();
        return response()->json($property);
    }

}
