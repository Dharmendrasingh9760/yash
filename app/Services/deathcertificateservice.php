<?php
namespace App\Services;

use App\Models\DeathCertificate;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class deathcertificateservice
{

    public function deathCertificateSave($request,$user_id)
    {
        try {


            $deathCertificate = [
                'user_id' => $user_id ?? null,
                'date_of_death' => $request['date_of_death'] ?? null,
                'deceased_name' => strtoupper($request['deceased_name'] ?? null),
                'deceased__uid_number' => strtoupper($request['deceased__uid_number'] ?? null),
                'mother_name' => strtoupper($request['mother_name'] ?? null),
                'mother_uid_number' => strtoupper($request['mother_uid_number'] ?? null),
                'father_name' => strtoupper($request['father_name'] ?? null),
                'father_uid_number' => strtoupper($request['father_uid_number'] ?? null),
                'spouse_names' => strtoupper($request['spouse_name'] ?? null),
                'spouse_uid_number' => strtoupper($request['spouse_uid_number'] ?? null),
                'death_person_age' => strtoupper($request['death_person_age'] ?? null),
                'time_of_death_address' => strtoupper($request['time_of_death_address'] ?? null),
                'address_of_death_person' => strtoupper($request['address_of_death_person'] ?? null),
                'hospital_institution' => strtoupper($request['hospital_institution'] ?? null),
                'home_path' => strtoupper($request['home_path'] ?? null),
                'another_location' => strtoupper($request['another_location'] ?? null),
                'name_of_informant' => strtoupper($request['name_of_informant'] ?? null),
                'path' => strtoupper($request['path'] ?? null),
                'mobile_number' => strtoupper($request['mobile_number'] ?? null),
                'email_id' => strtoupper($request['email_id'] ?? null),
                'city_or_village_name' => $request['city_or_village_name'] ?? null,
                'city_or_village' => $request['city_or_village'] ?? null,
                'religion' => $request['religion'] ?? null,
                'occupation' => strtoupper($request['occupation'] ?? null),
                'received_treatment_before_death' => $request['received_treatment_before_death'] ?? null,
                'medical_certified' => $request['medical_certified'] ?? null,
                'disease_name' => strtoupper($request['disease_name'] ?? null),
                'female_death' => $request['female_death'] ?? null,
                'smoking_addicted' => strtoupper($request['smoking_addicted'] ?? null),
                'chewing_tobacco' => strtoupper($request['chewing_tobacco'] ?? null),
                'chewing_betel_nut' => strtoupper($request['chewing_betel_nut'] ?? null),
                'alchol_addicted' => strtoupper($request['alchol_addicted'] ?? null),
            ];
              $deathCertificateData = DeathCertificate::create($deathCertificate);
              if($deathCertificateData)
              {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Death Certificate Created Which is Pending",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);

              }
            return $deathCertificateData;
        } catch (\Exception $e) {
            Log::error('Error creating deathCertificate: ' . $e->getMessage());
            throw new \Exception('Failed to create deathCertificate');
        }
    }

    public function deathCertificateList($user_id)
    {
        $deathcertificate = DeathCertificate::OrderBy('id', 'DESC')->where('user_id',$user_id)->get();
        $deathcertificate_data = [];
        foreach($deathcertificate as $deathcertificate_list)
        {
            if($deathcertificate_list->status == 1)
            {

                    // Given date
                    $givenDate = Carbon::create($deathcertificate_list->date_of_death);

                    // Current date and time
                    $currentDate = Carbon::now();
                    // dd($currentDate);
                    // Calculate the difference in days
                    $differenceInDays = $currentDate->diffInDays($givenDate);
                    if($differenceInDays < 21)
                    {
                        $deathcertificate_list->amount = "0";
                    }
                    // Logic to determine the message
                    elseif ($differenceInDays <= 30) {
                        $deathcertificate_list->amount = "2";
                    } elseif ($differenceInDays <= 365) {
                        $deathcertificate_list->amount = "5";
                    } else {
                        $deathcertificate_list->amount = "10";
                    }
                    $data = [
                        'amount' => $deathcertificate_list->amount
                    ];
                    DeathCertificate::where('id',$deathcertificate_list->id)->update($data);
                }


                $deathcertificate_data[] = $deathcertificate_list;
        }
        return $deathcertificate_data;

    }
}
