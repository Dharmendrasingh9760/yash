<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use App\Models\WaterTax;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\WastageCollection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class WastageController extends Controller
{
    public function firstWastage()
    {
        $user_id = Auth::user()->id;
        $totalCetificateCouont = WastageCollection::where('user_id', $user_id)->get()->Count();
        return view('wastage.first', compact('totalCetificateCouont'));
    }

    public function index()
    {
        return view('wastage.wastage');
    }

    public function wastageStore(Request $request)
    {
        // Define your validation rules
        $rules = [
            '12_code' => 'required|numeric|digits:12',
            'mobile' => 'required|numeric|digits:10',
            'email' => 'required|email',
        ];
    
        // Define custom validation messages
        $messages = [
            '12_code.required' => 'The 12 Digit code is required.',
            '12_code.numeric' => 'The 12 Digit code must be a numeric value.',
            '12_code.digits' => 'The 12 Digit code must be 12 digits.',
    
            'mobile.required' => 'The mobile number is required.',
            'mobile.numeric' => 'The mobile number must be a numeric value.',
            'mobile.digits' => 'The mobile number must be 10 digits.',
    
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email format.',
        ];
    
        // Create a validator instance
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Check for validation failures
        if ($validator->fails()) {
            // Log validation errors
            Log::error('Validation errors:', $validator->errors()->toArray());
    
            // Return back with errors and old input
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        try {
            $data = new WastageCollection();
            $data->code_12 = $request->input('12_code');
            $data->mobile = $request->input('mobile');
            $data->email = $request->input('email');
            $data->user_id = auth()->id();
            $data->save();

            if ($data) {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => auth()->id(),
                    'notification' => Auth::user()->name." Apply for wastage collection.",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);
            }

            return redirect()->route('firstWastage')->with('success', 'Wastage data saved successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving the wastage data. Please try again.')->withInput();
        }
    }

    public function wastageList()
    {
        $user_id = Auth::user()->id;
        $data = WastageCollection::OrderBy('id', "Desc")->where('user_id', $user_id)->get();
        return view('wastage.list-wastage', compact('data'));
    }

    public function wastageView($id)
    {
        $wastage = WastageCollection::where('id', $id)->first();
        return view('wastage.wastage-view', compact('wastage'));
    }


    public function firstWater()
    {
        $user_id = Auth::user()->id;
        $totalCetificateCouont = WaterTax::where('user_id', $user_id)->get()->Count();
        return view('water-tax.first', compact('totalCetificateCouont'));
    }

    public function waterList()
    {
        $user_id = Auth::user()->id;
        $data = WaterTax::OrderBy('id', "Desc")->where('user_id', $user_id)->get();
        // dd($data);
        return view('water-tax.list-water', compact('data'));
    }

    public function waterView($id)
    {
        $water = WaterTax::where('id', $id)->first();
        return view('water-tax.water-view', compact('water'));
    }

    public function waterStore(Request $request)
    {
        // Define your validation rules
        $rules = [
            'emitra_12_code' => 'required|numeric|digits:12',
            'mobile' => 'required|numeric|digits:10',
            'email' => 'required|email',
        ];
    
        // Define custom validation messages
        $messages = [
            'emitra_12_code.required' => 'The 12 Digit Emitra code is required.',
            'emitra_12_code.numeric' => 'The 12 Digit Emitra code must be a numeric value.',
            'emitra_12_code.digits' => 'The 12 Digit Emitra code must be 12 digits.',
    
            'mobile.required' => 'The mobile number is required.',
            'mobile.numeric' => 'The mobile number must be a numeric value.',
            'mobile.digits' => 'The mobile number must be 10 digits.',
    
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email format.',
        ];
    
        // Create a validator instance
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Check for validation failures
        if ($validator->fails()) {
            // Log validation errors
            Log::error('Validation errors:', $validator->errors()->toArray());
    
            // Return back with errors and old input
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $waterData = new WaterTax();
            $waterData->emitra_12_code = $request->input('emitra_12_code');
            $waterData->mobile = $request->input('mobile');
            $waterData->email = $request->input('email');
            $waterData->user_id = auth()->id();
            $waterData->save();

            if ($waterData) {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $waterData->user_id,
                    'notification' => "Notification on Watertax.",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);
            }

            return redirect()->route('firstWater')->with('success', 'Water data saved successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving the Water data. Please try again.')->withInput();
        }
    }

    public function waterTax()
    {
        return view('water-tax.water-tax');
    }

    public function wastagePdf($id)
    {
        try {
            $wastage = WastageCollection::find($id);

            if (!$wastage) {
                return redirect()->back()->with('error', 'Wastage collection not found.');
            }

            $user = User::find($wastage->user_id);

            $data = compact('wastage', 'user');

            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );

            $pdf = PDF::loadView('wastage.wastage-pdf', $data)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');

            return $pdf->download('wastage-pdf.pdf');
        } catch (\Exception $e) {
            Log::error('Error occurred while generating wastage collection PDF: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while generating the PDF. Please try again.');
        }
    }

    public function wastagePrintPdf($id)
    {
        try {
            $wastage = WastageCollection::find($id);

            if (!$wastage) {
                return redirect()->back()->with('error', 'Wastage collection not found.');
            }

            $user = User::find($wastage->user_id);

            $data = compact('wastage', 'user');

            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );

            $pdf = PDF::loadView('wastage.wastage-pdf', $data)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');

            return $pdf->stream('wastage-pdf.pdf');
        } catch (\Exception $e) {
            Log::error('Error occurred while generating wastage collection PDF: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while generating the PDF. Please try again.');
        }
    }

    public function waterPdf($id)
    {
        try {
            $water = WaterTax::find($id);

            if (!$water) {
                return redirect()->back()->with('error', 'Water tax not found.');
            }

            $user = User::find($water->user_id);

            $data = compact('water', 'user');

            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );

            $pdf = PDF::loadView('water-tax.water-pdf', $data)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');

            return $pdf->download('water-pdf.pdf');
        } catch (\Exception $e) {
            Log::error('Error occurred while generating water tax PDF: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while generating the PDF. Please try again.');
        }
    }

    public function waterPrintPdf($id)
    {
        try {
            $water = WaterTax::find($id);

            if (!$water) {
                return redirect()->back()->with('error', 'Water tax not found.');
            }

            $user = User::find($water->user_id);

            $data = compact('water', 'user');

            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );

            $pdf = PDF::loadView('water-tax.water-pdf', $data)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');

            return $pdf->stream('water-pdf.pdf');
        } catch (\Exception $e) {
            Log::error('Error occurred while generating water tax PDF: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while generating the PDF. Please try again.');
        }
    }
}
