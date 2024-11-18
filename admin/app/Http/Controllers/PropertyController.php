<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Notification;
use App\Models\Complains;
use App\Models\BirthCertificate;
use App\Models\DeathCertificate;
use App\Models\Marriage;
use App\Models\TradeLicense;
use App\Models\WastageCollection;
use App\Models\WaterTax;
use App\Models\Ward;
use App\Models\Colony;
use App\Models\Payment;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PropertyExport;
use App\Services\propertyservice;
use App\Models\PropertyPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PropertyImport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Mail;
class PropertyController extends Controller
{

    protected $propertyservice;

    public function __construct(propertyservice $propertyservice)
    {
        $this->propertyservice = $propertyservice;
    }

    public function myPropertyList4444(Request $request)
    {
        try {
            $query = Property::query();
            if ($request->has('search')) {
                $search = $request->input('search');
                
                $query->where(function($q) use ($search) {
                    $q->where('property_id', 'LIKE', "%{$search}%")
                    ->orWhere('house_no', 'LIKE', "%{$search}%")
                    ->orWhere('created_at', 'LIKE', "%{$search}%")
                    ->orWhere('property_owner_name', 'LIKE', "%{$search}%")
                    ->orWhere('property', 'LIKE', "%{$search}%")
                    ->orWhere('remarks', 'LIKE', "%{$search}%");
                });
            }

            $property = $query->orderBy('id', 'DESC')->paginate(20);
            if ($request->has('search')) {
                $property->appends(['search' => $request->input('search')]);
            }

            return view('property.property-verification-list', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

// dfvsdvsdf
    public function propertyCount()
    {
        $today = now()->startOfDay();
        $citizenComplaint  = Complains::where('created_at', '>=', $today)->count();
        $propertyTaxAsset     = Property::where('created_at', '>=', $today)->count();
        $birthCertificate     = BirthCertificate::where('created_at', '>=', $today)->count();
        $deathCertificate     = DeathCertificate::where('created_at', '>=', $today)->count();
        $marriageCertificate  = Marriage::where('created_at', '>=', $today)->count();
        $tradeLicenes         = TradeLicense::where('created_at', '>=', $today)->count();
        $wastageCollection    = WastageCollection::where('created_at', '>=', $today)->count();
        $waterTax             = WaterTax::where('created_at', '>=', $today)->count();
        return view('property.property_count', compact('citizenComplaint', 'propertyTaxAsset',
         'birthCertificate', 'deathCertificate', 'marriageCertificate', 'tradeLicenes', 'wastageCollection', 'waterTax'));
    }



    public function myPropertyList(Request $request)
    {
        try {
            // Initialize the query
            $query = Property::select();
            $formData = $request->all();
            $date = $request->date_filter;
            $search = $request->input('search');
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date'); 

             if ($startDate && $endDate) {
                  $query = $query->whereBetween('created_at', [$startDate, $endDate]);
                  // dd($query->orderBy('id', 'DESC')->get());
                  Session::put('propertyData', $query->orderBy('id', 'DESC')->get());
                }

            // \DB::enableQueryLog();
            // Apply search filters if present
            if ($request->has('search')) {
                if(!empty($search)){
                    $query = $query->where(function($q) use ($search) {
                        $q->where('property_id', 'LIKE', "%{$search}%")
                        // ->orWhere('created_at', 'LIKE', "%{$search}%")
                        ->orWhere('property_owner_name', 'LIKE', "%{$search}%")
                        ->orWhere('mobile_number', 'LIKE', "%{$search}%")
                        ->orWhere('property', 'LIKE', "%{$search}%")
                        ->orWhere('remarks', 'LIKE', "%{$search}%")
                        ->orWhere('house_no', 'LIKE', "%{$search}%")
                        ->orWhere(function ($qu) use($search){
                            $qu->whereHas('user', function($qq) use($search){
                                $qq->where('name','like',"%{$search}%")
                                ->orWhere('mobile','like',"%{$search}%");
                            });
                        });
                    });
                }

               
            }

            // if($date){
            //     $query = $query->whereBetween('created_at',[$date.' 00:00:00',$date.' 23:59:59']);
            // }
            

            // \Log::info($query->toSql());

            // Order by 'id' and paginate the results
            $property = $query->orderBy('id', 'DESC')->paginate(20);

            // Append the search query to pagination links if search was performed
            if ($request->has('search')) {
                $property->appends(['search' => $request->input('search'),'date_filter'=>$date]);
            }

            // Return the view with the filtered data
            return view('property.property-verification-list', [
                "property" => $property,
                'date'=>$date,
                'search'=>$search
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function store(Request $request)
    {
        $wards = Ward::get();
        return view('property.store', compact('wards'));
    }

    public function propertycashsave(Request $request)
    {
        $thisData = $request->all();
        $id = $request->input('property_id');
        $type_tax = $request->type_tax;
        
        $property = Property::find($id);
        $amount = 0;
        if (in_array('house', $type_tax) && in_array('water', $type_tax)) {
            $amount = $property->total_tax_number + $property->total_water_tax;
        } elseif (in_array('house', $type_tax)) {
            $amount = $property->total_tax_number;
        } elseif (in_array('water', $type_tax)) {
            $amount = $property->total_water_tax;
        }

        $orderId = "order_".Str::random(10);
        $payment = new Payment();
        $payment->razorpay_order_id = $orderId;
        $payment->razorpay_payment_id = "pay_".Str::random(10);
        $payment->razorpay_signature = Str::random(20);
        $payment->order_id = $orderId;
        $payment->amount = (int)$amount;
        $payment->type = "PROPERTY";
        $payment->pay_type = "Cash";
        $payment->data_id = $id;
        $payment->user_id = Auth::id();
        $payment->save();
            $property = Property::find($id);
            if ($property) {
                $property->payment_status = 1;
                $property->amount = 0;
                $type_tax = $request->input('type_tax');
                if (in_array('house', $type_tax) && in_array('water', $type_tax)) {
                    $property->total_tax_number = 0;
                    $property->total_water_tax = 0;
                } elseif (in_array('house', $type_tax)) {
                    $property->total_tax_number = 0;
                } elseif (in_array('water', $type_tax)) {
                    $property->total_water_tax = 0;
                }
                $property->save();

                $property = Property::where('properties.id', $id)->
                leftjoin('payments', 'payments.data_id', 'properties.id')
                ->select('properties.*', 'payments.razorpay_order_id', 'payments.pay_type', 'payments.amount as pay_amount')->first();

                return response()->json(['result' => $property, 'message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Property not found'], 404);
            }
    }

     public function downloadPdf($id)
    {
        try {
            $userId = Auth::user()->id;
            $modelId = $id;
            $payment = Payment::where('data_id', $modelId)->where('user_id', $userId)->first();
            // $pdf = PDF::loadView('payments.pdf', compact('payment'));
            $pdf = PDF::loadView('payments.pay_pdf', compact('payment'));
           return $pdf->download('payment.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function PropertyExport(Request $request,$type='')
    {
        try {
            // $query = Property::query();
            // $date = $request->date;
            // \Log::info($date);
            // if ($request->has('search')) {
            //     $search = $request->input('search');

            //     if(!empty($search)){
            //         $query->where(function($q) use ($search) {
            //             $q->where('property_id', 'LIKE', "%{$search}%")
            //             ->orWhere('created_at', 'LIKE', "%{$search}%")
            //             ->orWhere('property_owner_name', 'LIKE', "%{$search}%")
            //             ->orWhere('property', 'LIKE', "%{$search}%")
            //             ->orWhere('remarks', 'LIKE', "%{$search}%")
            //             ->orWhere('house_no', 'LIKE', "%{$search}%")
            //             ->orWhere(function ($qu) use($search){
            //                 $qu->whereHas('user', function($qq) use($search){
            //                     \Log::info($search);
            //                     $qq->where('name','like',"%{$search}%")
            //                     ->orWhere('mobile','like',"%{$search}%");
            //                 });
            //             });
            //         });
            //     }
            // }

            // if($date){
            //     $query = $query->whereBetween('created_at',[$date.' 00:00:00',$date.' 23:59:59']);
            // }

            // Order by 'id' and paginate the results
            // $property = $query->orderBy('id', 'DESC')->paginate(20);
            $property = Session::get('propertyData');
            if(!empty($property)){
            $exportFile = Excel::download(new PropertyExport($property), 'property-verification-requests.xlsx');
            Session::forget('propertyData');
            return $exportFile;
        }else{
            return redirect()->back()->with('error', 'Please Select date range');
        }

        } catch (\Exception $e) {
            Log::error('Error something went wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function propertyNotification($id)
    {
           // try {
           //      // Initialize PHPMailer
           //      $mail = new PHPMailer(true); // Initialize PHPMailer with exceptions enabled

           //      // Enable SMTP debugging
           //      // SMTPDebug = 2 will output detailed debug info
           //      $mail->SMTPDebug = 2;  // Debugging level (1 = client messages, 2 = client and server messages)
                
           //      // Set SMTP as the mailer
           //      $mail->isSMTP();

           //      // SMTP server settings
           //      $mail->Host = 'smtp.mailtrap.io';  // Use your SMTP server host here (Mailtrap is used for testing)
           //      $mail->SMTPAuth = true;           // Enable SMTP authentication
           //      $mail->Username = 'jvnbs99@gmail.com';  // Your Mailtrap username
           //      $mail->Password = 'gfilsanotssikhzf';  // Your Mailtrap password
           //      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Encryption protocol (TLS is recommended)
           //      $mail->Port = 587;  // SMTP port for TLS

           //      // Set sender info
           //      $mail->setFrom('jvnbs99@gmail.com', 'jvnbs99@gmail.com');
                
           //      // Add a recipient
           //      $mail->addAddress('saukatali5200@gmail.com');  // Recipient email address
                
           //      // Set the email subject and body
           //      $mail->Subject = 'Test Email from PHPMailer with SMTP Debugging';
           //      $mail->Body    = 'This is a test email sent using PHPMailer with SMTP debugging enabled.';
                
           //      // Optionally, you can add HTML content or an attachment
           //      // $mail->isHTML(true);  // If you need to send HTML content

           //      // Attempt to send the email
           //      if (!$mail->send()) {
           //          echo 'Mailer Error: ' . $mail->ErrorInfo;
           //          Log::info('Error occurred: ' . $mail->ErrorInfo);
           //      } else {
           //          echo 'Message sent!';
           //      }

           //      } catch (Exception $e) {
           //          Log::info('Error occurred: ' . $e->getMessage());
           //          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
           //      }


         try {
                Mail::raw('You can get a property for sale in Jaipur at a price range of ₹14.4 Lac - ₹7.13 Cr. Some of the popular localities in Jaipur are Jagatpura, Malviya Nagar, Mansarovar,', function ($message) {
                    $message->to('saukatali5200@gmail.com')  // Recipient's email
                            ->subject('Properties bill due Please clear due');  // Subject
                });

                return redirect()->back()->with('success', 'Properties Email sent successfully !');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to send email. Error: ' . $e->getMessage());
            }
    }


    public function Property($id)
    {
        try {
            $property = Property::where('id', $id)->first();
            $deedCharge = 0;
            $fixChargeType = 1;  // 1 = renaming, 2 = reconstruction, 3 = reconstruction on roof
            $fixCharge = 0;
            if ($property->property == "Residential") {
                $propertyValue = $property->res_monthly_rate ?? 0;
            } else {
                $propertyValue = $property->total_annual_value ?? 0;
            }

            if ($propertyValue >= 1 && $propertyValue < 99999) {
                $deedCharge = 1000;
            } elseif ($propertyValue >= 100000 && $propertyValue <= 299999) {
                $deedCharge = 2000;
            } elseif ($propertyValue >= 300000 && $propertyValue <= 599999) {
                $deedCharge = 3000;
            } elseif ($propertyValue >= 600000 && $propertyValue <= 1499999) {
                $deedCharge = 6000;
            } else {
                $deedCharge = 10000;
            }

            $charges['PropertyValue'] = $propertyValue;
            // $charges['fixCharges'] = $fixCharge;
            $charges['deedCharge'] = $deedCharge;
            $charges['TotalAmount'] = $propertyValue + $deedCharge;
            $view = $property->property === 'Non Residential'
                ? 'property.my-property-nonresidential-view'
                : 'property.my-property-residential-view';

            return view($view, [
                "property" => $property,
                "charges" => $charges
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function UploadPropertyTaxSlip(Request $request)
    {
        try {
            $paySlip = $request->pay_slip;
            $file = fileUploadOnServer($paySlip, 'pay_slip');
            $property = Property::where('id', $request->id)->update(['pay_slip' => $file, 'payment_status' => 1]);
            if ($property) {
                return redirect()->back()->with('success', 'Pay slip uploaded successfully');
            } else {
                return redirect()->back()->with('error', 'Pay slip not uploaded, Try again');
            }
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function PropertyStatus(Request $request)
    {
        $marriage = Property::find($request->id);

        $chalan_number = 'PROP' . rand(1, 10);

        if (Property::where('chalan_number', $chalan_number)) {
            $chalan_number = 'PROP' . rand(1, 100000);
        }

        if ($marriage) {
            $marriage->status = $request->status;
            if ($request->status == "1") {
                $chalan_number = 'PROP' . rand(1, 10);

                if (Property::where('chalan_number', $chalan_number)) {
                    $chalan_number = 'PROP' . rand(1, 100000);
                }
                $notification = "Property Tax Approved with Application ID id {$request->id} Where Payment Amount is {$request->charges}₹";
                $marriage->amount = $request->charges;
                $marriage->remaining = intval($request->charges);
                $marriage->chalan_number = $chalan_number;
            } else {
                $notification = "Property Tax Rejected with Application ID is {$request->id} Where Reason is {$request->remark}";
            }
            $marriage->remark = $request->remark;
            $marriage->save();
            if ($marriage) {
                $data = [
                    'send' => 8,
                    'notification' => $notification,
                    'received' => $marriage->user_id,
                    'mark_as_read' => '0'
                ];

                Notification::create($data);
            }
            return response()->json(['success' => true, 'message' => 'Status changed successfully.']);
        }
        return response()->json(['success' => false, 'message' => 'Marriage not found.'], 404);
    }

    public function myPropertyPermissionList(Request $request)
    {
        try {
            $property = PropertyPermission::orderBy('id', 'DESC')->get();
            return view('property_permission.property-verification-list', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function PropertyPermission($id)
    {
        try {

            //fix charges ---->>  renaming = 50000, reconstruction = 25000, reconstruction on roof = 50000

            $property = PropertyPermission::where('id', $id)->first();
            $deedCharge = 0;
            $fixChargeType = 1;  // 1 = renaming, 2 = reconstruction, 3 = reconstruction on roof
            $fixCharge = 0;
            if ($property->property == "Residential") {
                $propertyValue = $property->res_monthly_rate ?? 0;
            } else {
                $propertyValue = $property->total_annual_value ?? 0;
            }

            if ($property->action_type === "Transfer") {
                $fixCharge = 50000;
            } elseif ($property->action_type === "Reconstruction") {
                $fixCharge = 25000;
            } else {
                $fixCharge = 50000;
            }

            if ($propertyValue >= 1 && $propertyValue < 99999) {
                $deedCharge = 1000;
            } elseif ($propertyValue >= 100000 && $propertyValue <= 299999) {
                $deedCharge = 2000;
            } elseif ($propertyValue >= 300000 && $propertyValue <= 599999) {
                $deedCharge = 3000;
            } elseif ($propertyValue >= 600000 && $propertyValue <= 1499999) {
                $deedCharge = 6000;
            } else {
                $deedCharge = 10000;
            }

            $charges['PropertyValue'] = $propertyValue;
            $charges['fixCharges'] = $fixCharge;
            $charges['deedCharge'] = $deedCharge;
            $charges['TotalAmount'] = $propertyValue + $fixCharge + $deedCharge;

            $view = $property->property === 'Non Residential'
                ? 'property_permission.my-property-nonresidential-view'
                : 'property_permission.my-property-residential-view';

            return view($view, [
                "property" => $property,
                "charges" => $charges
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function PropertyPermissionStatus(Request $request)
    {
        $marriage = PropertyPermission::find($request->id);



        if ($marriage) {
            $marriage->status = $request->status;
            if ($request->status == "1") {
                $chalan_number = 'PROP' . rand(1, 10);

                if (PropertyPermission::where('chalan_number', $chalan_number)) {
                    $chalan_number = 'PROP' . rand(1, 100000);
                }
                $notification = "Property Permission Approved with Application ID is {$request->id} Where Payment Amount is {$request->charges}₹";
                $marriage->chalan_number = $chalan_number;
            } else {
                $notification = "Property Permission Rejected with Application ID is {$request->id} Where Reason is {$request->remark}";
            }
            $marriage->remark = $request->remark;
            $marriage->amount = $request->charges;
            $marriage->save();
            if ($marriage) {
                $data = [
                    'send' => 8,
                    'notification' => $notification,
                    'received' => $marriage->user_id,
                    'mark_as_read' => '0'
                ];

                Notification::create($data);
            }
            return response()->json(['success' => true, 'message' => 'Status changed successfully.']);
        }
        return response()->json(['success' => false, 'message' => 'Marriage not found.'], 404);
    }

    public function UploadPropertyPermissionTaxSlip(Request $request)
    {
        try {
            $paySlip = $request->pay_slip;
            $file = fileUploadOnServer($paySlip, 'pay_slip');
            $property = PropertyPermission::where('id', $request->id)->update(['pay_slip' => $file, 'payment_status' => 1]);
            if ($property) {
                return redirect()->back()->with('success', 'Pay slip uploaded successfully');
            } else {
                return redirect()->back()->with('error', 'Pay slip not uploaded, Try again');
            }
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

   
    public function PropertyImport()
    {
        return view('property_permission.import');
    }

    public function PropertyImportStore666(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
        $file = $request->file('file');
        
        // Import file with the custom import class
        try {
            Excel::import(new PropertyImport, $file); 
        } catch (\Exception $e) {
            return back()->with('error', 'Error reading the spreadsheet file: ' . $e->getMessage());
        }

        return back()->with('success', 'Properties imported successfully!');
    }
}




public function PropertyImportStore(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xls,xlsx|max:10240',
    ]);

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
        $file = $request->file('file');
        $path = $file->store('uploads');
        $absolutePath = storage_path('app/' . $path); 
        $ext = $file->getClientOriginalExtension();

        $reader = null;
        if ($ext == 'xlsx') {
            $reader = new Xlsx();
        } elseif ($ext == 'xls') {
            $reader = new Xls();
        }

        // Check if reader is set correctly
        if (!$reader) {
            return back()->with('error', 'Unsupported file format.');
        }
            $spreadsheet = $reader->load($absolutePath);

        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();
        $data = array_slice($data, 1);
        $duplicateEntries = 0;
        $totalImported = 0; 
        
        foreach ($data as $row) {
            $propertyId  = $row[1] . substr($row[2], 0, 2) . $row[4]; 
            // dd($row, $propertyId);
            if ($row[0] == 'Name' || empty($row[0])) continue;
        if (!Property::where('colony_name', $row[2])->where('house_no', $row[4])->exists()) {
            $property                            = new Property();
            $property->property                  = $row[0];
            $property->ward_no                   = $row[1];
            $property->colony_name               = $row[2];
            $property->building_type             = $row[3];
            $property->house_no                  = $row[4];
            $property->property_owner_name       = $row[5];
            $property->father_or_husband_name    = $row[6];
            $property->mobile_number             = $row[7];
            $property->total_arv                 = $row[8];
            $property->house_tax_current         = $row[9];
            $property->house_tax_arrear          = $row[10];
            $property->house_surcharge           = $row[11];
            $property->total_tax_number          = $row[12];
            $property->water_tax_current         = $row[13];
            $property->water_tax_arrear          = $row[14];
            $property->water_surcharge           = $row[15];
            $property->total_water_tax           = $row[16];
            $property->water_charge_current      = $row[17];
            $property->water_charge_arrear       = $row[18];
            $property->water_charge_surcharge    = $row[19];
            $property->total_water_charge        = $row[20];
            $property->total_property_tax_charge = $row[21];
            $property->deposite_house_tax        = $row[22];
            $property->deposite_water_tax        = $row[23];
            $property->deposite_water_charges    = $row[24];
            $property->remarks                   = trim($row[25]);
            $property->amount                    = $row[12] ? $row[12] : 0;
            $property->remaining                 = $row[12] ? $row[12] : 0;
            $property->status                    = 1;
            $property->payment_status            = (trim($row[25]) == "स्वकर नहीं लगा है") ? 0 : 1;
            $property->property_id               = $propertyId;
            $property->user_id                   = Auth::user()->id;
            $property->save();
            $totalImported++;
          }
          else{
             $duplicateEntries++;
          }
        }

          if ($duplicateEntries > 0) {
            return redirect()->route('my.property.list')->with('warning', "Some properties were skipped because they already exist. Duplicates skipped: {$duplicateEntries}");
        }

        return redirect()->route('my.property.list')->with('success', "Properties imported successfully! Total: {$totalImported} properties.");
    }

    return back()->with('error', 'There was an issue with the file.');
}



 public function getColonies(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $colonies = Colony::where('ward_id', $modelId)->pluck('name', 'id')->toArray();
        // dd($modelId, $colonies);
        return response()->json($colonies);
    }

    public function getHouses(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $ward = Colony::where('id', $modelId)->select('id', 'ward_id', 'name')->first();
        $houses = Property::where('ward_no', $ward->ward_id)->where('colony_name', $ward->name)->pluck('house_no', 'id')->toArray();
        return response()->json($houses);
    }

    public function getProperty(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $property = Property::where('id', $modelId)->select('id', 'user_id', 'property', 'property_id', 'ward_no', 'colony_name', 'building_type', 'house_no', 'property_owner_name', 'father_or_husband_name', 'mobile_number', 'total_arv', 'house_tax_current', 'house_tax_arrear', 'surcharge', 'total_tax_house', 'water_tax_current', 'water_tax_arrear', 'water_tax_surcharge', 'total_water_tax', 'water_charge_current', 'water_charge_arrear', 'water_charge_surcharge', 'water_surcharge', 'total_water_charge', 'total_property_tax', 'deposite_house_tax', 'deposite_water_tax', 'deposite_water_charges', 'total_property_tax_charge', 'remarks', 'total_tax_number', 'house_surcharge', 'registry_file', 'amount', 'remaining', 'status', 'payment_status', 'created_at', 'updated_at')->first();
        return response()->json($property);
    }


}
