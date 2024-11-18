<?php
namespace App\Services;

use App\Models\Complains;
use App\Models\ComplainMessage;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class complainservice
{

    public function ComplainsSave($request,$user_id)
    {
        try {
            $complains = [
                'user_id' => $user_id,
                'name'=> $request['name'],
                'mobile_number'=> $request['mobile_number'],
                'email_id'=> $request['email_id'],
                'select_query'=> $request['select_query'],
                'complain'=> $request['complain'],
              ];
              $complainsData = Complains::create($complains);
              if($complainsData)
              {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Complain Created",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);

              }
            return $complainsData;
        } catch (\Exception $e) {
            Log::error('Error creating complains: ' . $e->getMessage());
            throw new \Exception('Failed to create complains');
        }
    }

    public function Complainsmessage($request,$user_id)
    {
        try {
            $adminId = User::where('role', '1')->first()->id;
            $complains = [
                'complain_id'=> (int)$request->id,
                'user_id'=> $user_id,
                'send'=> $user_id,
                'message' => $request->message,
                'received'=> $adminId,
              ];
              $complainsData = ComplainMessage::create($complains);
              if($complainsData)
              {
                $data = [
                    'send' => $user_id,
                    'notification' => "User has responded '{$request->message}' to Our complaint with ID:{$request->id}",
                    'received' => $adminId,
                    'mark_as_read' => '0'
                ];

                Notification::create($data);
              }
            return $complainsData;
        } catch (\Exception $e) {
            Log::error('Error creating complains: ' . $e->getMessage());
            throw new \Exception('Failed to create complains');
        }
    }

}
