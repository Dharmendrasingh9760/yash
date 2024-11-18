<?php

namespace App\Http\Controllers;

use App\Models\Complains;
use Illuminate\Http\Request;
use App\Models\ComplainMessage;
use App\Services\complainservice;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ComplainsController extends Controller
{
    protected $complainservice;

    public function __construct(complainservice $complainservice)
    {
        $this->complainservice = $complainservice;
    }

    public function complains()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = Complains::where('user_id', $user_id)->get()->Count();
            return view('Complains.complains', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function ComplainsAdd()
    {
        try {
            return view('Complains.complains-add');
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function ComplainsSave(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'mobile_number' => 'required|digits:10',
                'email_id' => 'required|email',
                'complain' => 'required',
                'select_query' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user_id = Auth::user()->id;
            $complain = $this->complainservice->ComplainsSave($request, $user_id);
            return redirect()->route('complains')->with(['success' => 'Complain successfully registered', 'data' => $complain]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function ComplainsList()
    {
        try {
            $user_id = Auth::user()->id;
            $complains = Complains::OrderBy('id', 'DESC')->where('user_id', $user_id)->get();
            return view('Complains.complains-list', [
                "complains" => $complains,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function Complainschat($id)
    {
        try {
            $user_id = Auth::user()->id;
            $complains = Complains::where('id', $id)->where('user_id', $user_id)->first();
            $complains_messages = ComplainMessage::where('complain_id', $id)->where('user_id', $user_id)->get();
            return view('Complains.complains-chat', [
                "complains" => $complains,
                "complains_messages" => $complains_messages
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function Complainsmessage(Request $request)
    {
        try {
            $user_id = Auth::user()->id;
            $complain = $this->complainservice->Complainsmessage($request, $user_id);

            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
}
