<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function notification()
    {
       $admin = User::where('role', '1')->first();
       $notification_data =  Notification::where('mark_as_read','0')->OrderBy('id', 'DESC')->where('received', $admin->id)->get();
       foreach($notification_data as $notification_data_list)
       {
                $data = [
                    'mark_as_read' => '1'
                ];
                Notification::where('id',$notification_data_list->id)->update($data);
       }
       return view('notification', compact('notification_data'));
    }
}
