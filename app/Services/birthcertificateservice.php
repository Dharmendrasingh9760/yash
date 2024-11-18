<?php
namespace App\Services;

use App\Models\BirthCertificate;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class birthcertificateservice
{

    public function birthCertificateSave($request,$user_id)
    {
        try {


            $birthCertificate = [
                'user_id' => $user_id ?? null,
                'date_of_birth' => $request['date_of_birth'] ?? null,
                'gender' => $request['gender'] ?? null,
                'name' => strtoupper($request['name'] ?? null),
                'name_of_father' => strtoupper($request['name_of_father'] ?? null),
                'name_of_mother' => strtoupper($request['name_of_mother'] ?? null),
                'address_parent_child' => strtoupper($request['address_parent_child'] ?? null),
                'permanent_address' => strtoupper($request['permant_address'] ?? null),
                'place_of_birth' => strtoupper($request['place_of_birth'] ?? null),
                'name_of_informant' => strtoupper($request['name_of_informant'] ?? null),
                'mobile_number' => strtoupper($request['mobile_number'] ?? null),
                'address' => strtoupper($request['address'] ?? null),
                'email_id' => strtoupper($request['email_id'] ?? null),
                'mother_resides_place' => strtoupper($request['mother_resides_place'] ?? null),
                'family_tradition' => $request['family_tradition'] ?? null,
                'father_educational_level' => strtoupper($request['father_educational_level'] ?? null),
                'mother_educational_level' => strtoupper($request['mother_educational_level'] ?? null),
                'father_business' => strtoupper($request['father_business'] ?? null),
                'mother_age_at_marriage' => strtoupper($request['mother_age_at_marriage'] ?? null),
                'time_of_child_birth' => strtoupper($request['time_of_child_birth'] ?? null),
                'uninhabited_people_this_year_of_mother' => strtoupper($request['uninhabited_people_this_year_of_mother'] ?? null),
                'Under_auspices_delivery_take_place' => $request['Under_auspices_delivery_take_place'] ?? null,
                'time_of_conception' => strtoupper($request['time_of_conception'] ?? null),
                'weight_at_birth' => strtoupper($request['weight_at_birth'] ?? null)
              ];
              $birthCertificateData = BirthCertificate::create($birthCertificate);
              if($birthCertificateData)
              {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Birth Certificate Created Which is Pending",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);

              }
            return $birthCertificateData;
        } catch (\Exception $e) {
            Log::error('Error creating birthCertificate: ' . $e->getMessage());
            throw new \Exception('Failed to create birthCertificate');
        }
    }

    public function birthCertificateList($user_id)
    {
        $birthcertificate = BirthCertificate::OrderBy('id', 'DESC')->where('user_id',$user_id)->get();
        $birthcertificate_data = [];
        foreach($birthcertificate as $birthCertificate_list)
        {
            if($birthCertificate_list->status == 1 && $birthCertificate_list->payment_status == 0)
            {

                $givenDate = Carbon::create($birthCertificate_list->date_of_birth);

                // Current date and time
                $currentDate = Carbon::now();
                // dd($currentDate);
                // Calculate the difference in days
                $differenceInDays = $currentDate->diffInDays($givenDate);
               if($differenceInDays <= 21)
               {
                   $birthCertificate_list->amount = '0';
               }
                // Logic to determine the message
                elseif ($differenceInDays <= 30) {
                    $birthCertificate_list->amount = "2";

                } elseif ($differenceInDays <= 365) {
                    $birthCertificate_list->amount = "5";
                } else {
                    $birthCertificate_list->amount = "10";
                }
                    $data = [
                        'amount' => $birthCertificate_list->amount
                    ];
                    BirthCertificate::where('id',$birthCertificate_list->id)->update($data);
                }

                $birthcertificate_data[] = $birthCertificate_list;
        }
        return $birthcertificate_data;

    }

}
