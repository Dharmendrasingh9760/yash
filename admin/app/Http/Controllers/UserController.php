<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLog;
use App\Models\admin;
use App\Models\OldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Str;
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


 public function loginForm(Request $request)
    {
        if(Auth::check()){
            return back();
        }
        return view('login');
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

public function login(Request $request)
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

        if ($request->captcha !== Session::get('captcha')) {
            return redirect()->back()->withErrors(['captcha' => 'CAPTCHA is incorrect.']);
        }
        
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
                $obj->type = "login";
                $obj->save();

                // Save current password in old passwords table
                $oldPasswordEntry = new OldPassword();
                $oldPasswordEntry->user_id = $user->id;
                $oldPasswordEntry->password = $user->password;
                $oldPasswordEntry->save();
               
        
                if ($user->role == '1') {
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

 
    public function loginnnnn(Request $request)
    {
        try {
 
            $validator = Validator::make($request->all(), [
                'encrypt_email' => 'required',
                'encrypt_password' => 'required',
            ]);
 
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        
        if ($request->captcha !== Session::get('captcha')) {
            return redirect()->back()->withErrors(['captcha' => 'CAPTCHA is incorrect.']);
        }
 
            $formData = $request->all();
            $encryptedDataiv = $request->encrypt_data_iv;
            $encrypt_email = $request->encrypt_email;
            $encrypt_password = $request->encrypt_password;
            $email    = $this->decryptFunction($encrypt_email, $encryptedDataiv);
            $password = $this->decryptFunction($encrypt_password, $encryptedDataiv);
 
            $Role = User::where('email', $email)->where('role', '1')->first();
 
            if ($Role) {
                    Auth::login($Role);
                    $newToken = Str::random(60);
                    Auth::user()->forceFill([
                        'session_id' => $newToken,
                    ])->save();
 
                    session(['session_id' => $newToken]);
 
                    UserLog::create([
                        'name' => Auth::user()->name,
                        'email' => Auth::user()->email,
                        'phone_number' => Auth::user()->mobile,
                        'logged_out_at' => Carbon::now(),
                        'type' => 'login',
                    ]);
 
                    session()->forget('captcha');
                    return redirect()->route('admin.dashboard')->with('success', 'Admin successfully logged in');
 
            } else {
                return redirect()->route('login.page')->with('error', 'These credentials do not match our records.');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage() . " " . $e->getFile() . " " . $e->getLine());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function dashboard()
    {
        try {
            $user = Auth::user();
            $sess_id = Session::get('curSessionId');
            if($user->session_id != $sess_id){
                      Session::flush();
                     Cache::flush();
                    Auth::logout();
                $sess_idd = Session::get('curSessionId');
               return redirect('/')->with('error', 'Session Expired.');
            }
            return view('dashboard');
        } catch (\Exception $e) {
            Log::error('Error Somthing went to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $currentSessionId = session()->getId();
            try {
                $obj = new UserLog();
                $obj->name = $user->name;
                $obj->email = $user->email;
                $obj->phone_number = $user->mobile;
                $obj->logged_out_at = now();
                $obj->type = 'logout';
                $obj->save();
                    
                    $user = Auth::user();
                    $user->session_id = null;
                    $user->save();
            } catch (\Exception $e) {
                Log::error('Failed to log user logout: ' . $e->getMessage());
            }
            
                     Session::flush();
                     Cache::flush();
                    Auth::logout();
            return redirect('/')->with('success', 'You have been logged out successfully.');
        }
        return redirect('/')->with('error', 'You are not logged in.');
    }


    public function userList()
    {
        try {

            $user = User::OrderBy('id', "Desc")->get();
            return view('user.user-list', compact('user'));
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function userView($id)
    {
        try {
            $user = User::where('id', $id)->first();;
            return view('user.user-view', compact('user'));
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function statusUserChange(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $user->status = $request->status;
            $user->save();

            return response()->json(['success' => true, 'message' => 'Status changed successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Trade not found.'], 404);
    }

    public function profileDetails()
    {
        try {
            $user_id = Auth::user()->id;
            $user_data = User::where('id', $user_id)->first();

            return view('user.profile-details', [
                "user_data" => $user_data,
            ]);
        } catch (\Exception $e) {
            Log::error('Error Somthing went to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->hasFile('profile_image')) {
                $user->profile_image = fileUploadOnServer($request->file('profile_image'), 'profile_image');
            }

            $user->save();
          
            return redirect()->route('profile.details')->with('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            Log::error('Error in UserController@profileUpdate: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
    
    
     public function profileChangePassword(Request $request)
        {
            $user = Auth::user();
            $request->validate([
                'current_password' => 'required',
                'password' => 'required',
            ]);
       
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
    }

    if ($request->current_password === $request->password) {
        return redirect()->back()->withErrors(['password' => 'New password must be different from the current password.']);
    }

        $oldPasswords =OldPassword::where('user_id', Auth::user()->id)->limit(3)->OrderByDesc('id')->pluck('password');
        foreach ($oldPasswords as $oldPassword) {
            if (Hash::check($request->password, $oldPassword)) {
                return redirect()->back()->withErrors(['password' => 'You cannot reuse an old password.']);
            }
        }

        $oldPasswordEntry = new OldPassword();
        $oldPasswordEntry->user_id = $user->id;
        $oldPasswordEntry->password = $user->password;
        $oldPasswordEntry->save();
    
        $user->password = Hash::make($request->password);
        $user->save();
        
         Session::flush();
         Cache::flush();
        Auth::logout();
    
        return redirect()->route('profile.details')->with('success', 'password updated successfully');
    }
}
