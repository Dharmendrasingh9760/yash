<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function notification()
    {
       $user_id = Auth::user()->id;
       $notification_data =  Notification::where('mark_as_read','0')->OrderBy('id', 'DESC')->where('received',$user_id)->get();
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
