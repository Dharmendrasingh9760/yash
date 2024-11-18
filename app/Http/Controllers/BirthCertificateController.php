<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BirthCertificate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Services\birthcertificateservice;


class BirthCertificateController extends Controller
{
    //
    protected $birthcertificateservice;

    public function __construct(birthcertificateservice $birthcertificateservice)
    {
        $this->birthcertificateservice = $birthcertificateservice;
    }

    public function birthCertificate()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = BirthCertificate::where('user_id', $user_id)->get()->Count();
            return view('BirthCertificate.birthCertificate', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function birthCertificateAdd()
    {
        try {
            return view('BirthCertificate.birthcertificate-add');
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function birthCertificateSave(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'date_of_birth' => 'required|date|before:today',
                'gender' => 'required',
                'name' => 'required|string|max:255',
                'name_of_father' => 'required|string|max:255',
                'name_of_mother' => 'required|string|max:255',
                'address_parent_child' => 'required|string|max:255',
                'permant_address' => 'required|string|max:255',
                'place_of_birth' => 'required|string|max:255',
                'name_of_informant' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'mobile_number' => 'required|numeric|digits_between:10,15',
                'email_id' => 'required|email|unique:users,email',
                'mother_resides_place' => 'required|string|max:255',
                'family_tradition' => 'required|string|max:255',
                'father_educational_level' => 'required|string|max:255',
                'mother_educational_level' => 'required|string|max:255',
                'father_business' => 'required|string|max:255',
                'mother_age_at_marriage' => 'required|numeric|min:0',
                'time_of_child_birth' => 'required|numeric|min:0',
                'uninhabited_people_this_year_of_mother' => 'required|integer|min:0',
                'Under_auspices_delivery_take_place' => 'required|string|max:255',
                'time_of_conception' => 'required|numeric|min:0',
                'weight_at_birth' => 'nullable|numeric|min:0',
            ]);


            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user_id = Auth::user()->id;
            $birthcertificate = $this->birthcertificateservice->birthCertificateSave($request, $user_id);
            return redirect()->route('birth.certificate')->with(['success' => 'Birth Certificate successfully registered', 'data' => $birthcertificate]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function birthCertificateList()
    {
        try {
            $user_id = Auth::user()->id;
            $birthcertificate = $this->birthcertificateservice->birthCertificateList($user_id);
            return view('BirthCertificate.birthcertificate-list', [
                "birthcertificate" => $birthcertificate,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function birthCertificateView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $birthcertificate = BirthCertificate::where('id', $id)->where('user_id', $user_id)->first();
            return view('BirthCertificate.birthcertificate-view', [
                "birthcertificate" => $birthcertificate,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function birthCertificatePdf(Request $request)
    {
        try {
            $id = $request->id;
            $user_id = Auth::user()->id;
            $birthcertificate = BirthCertificate::where('id', $id)->where('user_id', $user_id)->first();
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
                'defaultFont' => 'Noto Sans Devanagari',
                'isRemoteEnabled',
                true
            );

            $birthcertificate = ['birthcertificate' => $birthcertificate];
            $pdf = PDF::loadView('PDF.birthcertificate', $birthcertificate)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->download('birth-certificate.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function birthCertificatePrintPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $birthcertificate = BirthCertificate::where('id', $id)->where('user_id', $user_id)->first();
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
                'defaultFont' => 'Noto Sans Devanagari',
                'isRemoteEnabled',
                true
            );

            $birthcertificate = ['birthcertificate' => $birthcertificate];
            $pdf = PDF::loadView('PDF.birthcertificate', $birthcertificate)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->stream('Property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
}
