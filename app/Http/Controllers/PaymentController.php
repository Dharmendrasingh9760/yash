<?php

namespace App\Http\Controllers;

use App\Models\Complains;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Services\complainservice;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use PDF;

class PaymentController extends Controller
{
    protected $modelName    = "payments";
    protected $singularName = "Payment";
    protected $pluralName   = "Payment";

    public function __construct()
    {
      View::share('modelName', $this->modelName);
      View::share('singularName', $this->singularName);
      View::share('pluralName', $this->pluralName);
    }


    public function index(Request $request)
    {
        try {
            $userId = Auth::user()->id;
            $payments = Payment::where('user_id', $userId)->OrderBy('id', 'DESC')->get();
            return view('payments.index', compact('payments'));
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function show($id)
    {
        try {
            $user_id = Auth::user()->id;
            $payment = Payment::where('user_id', $userId)->OrderBy('id', 'DESC')->get();
           return view('payments.view', compact('payment'));
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function download($id)
    {
        try {
            $userId = Auth::user()->id;
            $modelId = $id;
            $payment = Payment::where('id', $modelId)->where('user_id', $userId)->first();
            // $pdf = PDF::loadView('payments.pdf', compact('payment'));
            $pdf = PDF::loadView('payments.pay_pdf', compact('payment'));
           return $pdf->download('payment.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

}
