<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DeathCertificate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Services\deathcertificateservice;
use Illuminate\Support\Facades\Validator;


class DeathCertificateController extends Controller
{
    protected $deathcertificateservice;

    public function __construct(deathcertificateservice $deathcertificateservice)
    {
        $this->deathcertificateservice = $deathcertificateservice;
    }

    public function deathCertificate()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = DeathCertificate::where('user_id', $user_id)->get()->Count();
            return view('DeathCertificate.deathCertificate', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function deathCertificateAdd()
    {
        try {
            return view('DeathCertificate.deathcertificate-add');
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function deathCertificateSave(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'date_of_death' => 'required|date|date_format:Y-m-d',
                'deceased_name' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                'father_name' => 'required|string|max:255',
                'spouse_name' => 'required|string|max:255',
                'name_of_informant' => 'required|string|max:255',
                'death_person_age' => 'required|numeric|min:0',
                'deceased__uid_number' => 'required|integer',
                'mother_uid_number' => 'required|integer',
                'father_uid_number' => 'required|integer',
                'spouse_uid_number' => 'required|integer',
                'mobile_number' => 'required|digits:10|numeric',
                'time_of_death_address' => 'required',
                'address_of_death_person' => 'required|string|max:255',
                'hospital_institution' => 'required|string|max:255',
                'home_path' => 'required|string|max:255',
                'another_location' => 'required|string|max:255',
                'path' => 'required|string|max:255',
                'city_or_village_name' => 'required|string|max:255',
                'city_or_village' => 'required|string|max:255',
                'religion' => 'required|string|max:255',
                'occupation' => 'required|string|max:255',
                'received_treatment_before_death' => 'required|string|max:255',
                'medical_certified' => 'required|string|max:255',
                'disease_name' => 'required|string|max:255',
                'female_death' => 'required|string|max:255',
                'smoking_addicted' => 'required|string|max:255',
                'chewing_tobacco' => 'required|string|max:255',
                'chewing_betel_nut' => 'required|string|max:255',
                'alchol_addicted' => 'required|string|max:255',
                'email_id' => 'required|email|max:255',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            // dd($request->all());
            $user_id = Auth::user()->id;
            $deathcertificate = $this->deathcertificateservice->deathCertificateSave($request, $user_id);
            // dd($deathcertificate);
            return redirect()->route('death.certificate')->with(['success' => 'death Certificate successfully registered', 'data' => $deathcertificate]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function deathCertificateList()
    {
        try {
            $user_id = Auth::user()->id;
            $deathcertificate = $this->deathcertificateservice->deathCertificateList($user_id);
            return view('DeathCertificate.deathcertificate-list', [
                "deathcertificate" => $deathcertificate,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function deathCertificateView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $deathcertificate = deathCertificate::where('id', $id)->where('user_id', $user_id)->first();
            return view('DeathCertificate.deathcertificate-view', [
                "deathcertificate" => $deathcertificate,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function deathCertificatePdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $deathcertificate = deathCertificate::where('id', $id)->where('user_id', $user_id)->first();
            $deathcertificate = ['deathcertificate' => $deathcertificate];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.deathcertificate', $deathcertificate)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->download('death-certificate.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function deathCertificatePrintPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $deathcertificate = deathCertificate::where('id', $id)->where('user_id', $user_id)->first();
            $deathcertificate = ['deathcertificate' => $deathcertificate];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.deathcertificate', $deathcertificate)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->stream('Property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
}
