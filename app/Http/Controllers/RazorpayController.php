<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\Payment;
use App\Models\Property;
use App\Models\WaterTax;
use App\Models\Marriage;
use Illuminate\Http\Request;
use App\Models\TradeLicense;
use App\Models\BirthCertificate;
use App\Models\DeathCertificate;
use App\Models\WastageCollection;
use Illuminate\Support\Facades\Auth;

class RazorpayController extends Controller
{
    private $razorpayId;
    private $razorpaySecret;

    public function __construct()
    {
        $this->razorpayId = env('RAZORPAY_KEY_ID');
        $this->razorpaySecret = env('RAZORPAY_KEY_SECRET');
    }

    public function createOrder(Request $request)
    {
        $amount = (int)$request->amount;
        $id = $request->id;
        $type = $request->type;
        $api = new Api($this->razorpayId, $this->razorpaySecret);

        $orderData = [
            'receipt'         => 'order_rcptid_11',
            'amount'          => $amount * 100,
            'currency'        => 'INR',
            'payment_capture' => 1
        ];

        try {
            $order = $api->order->create($orderData);
            return response()->json(['order_id' => $order['id'], 'amount' => $order['amount'], 'type' => $type, 'id' => $id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function verifyPayment(Request $request)
    {
        $thisData = $request->all();
        $razorpayOrderId = $request->input('razorpay_order_id');
        $razorpayPaymentId = $request->input('razorpay_payment_id');
        $razorpaySignature = $request->input('razorpay_signature');

        $type = $request->input('data.type');
        $id = $request->input('data.id');
        $amount = $request->input('data.amount') / 100;

        $payment = new Payment();
        $payment->razorpay_order_id = $razorpayOrderId;
        $payment->razorpay_payment_id = $razorpayPaymentId;
        $payment->razorpay_signature = $razorpaySignature;
        $payment->order_id = $request->input('data.order_id');
        $payment->amount = $amount;
        $payment->type = $type;
        $payment->data_id = $id;
        $payment->user_id = Auth::id();
        $payment->save();
        

        if ($type === "DEATH") {
            $death = DeathCertificate::find($id);
            if ($death) {
                $death->payment_status = 1;
                $death->amount = 0;
                $death->save();
                return response()->json(['message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Death certificate not found'], 404);
            }
        }

        if ($type === "BIRTH") {
            $birth = BirthCertificate::find($id);
            if ($birth) {
                $birth->payment_status = 1;
                $birth->amount = 0;
                $birth->save();

                return response()->json(['message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Birth certificate not found'], 404);
            }
        }

        if ($type === "MARRIAGE") {
            $marriage = Marriage::find($id);
            if ($marriage) {
                $marriage->payment_status = 1;
                $marriage->amount = 0;
                $marriage->save();

                return response()->json(['message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Marriage certificate not found'], 404);
            }
        }

        if ($type === "TRADE") {
            $trade = TradeLicense::find($id);
            if ($trade) {
                $trade->payment_status = 1;
                $trade->amount = 0;
                $trade->save();

                return response()->json(['message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Trade not found'], 404);
            }
        }

        if ($type === "PROPERTY") {
            $property = Property::find($id);
            if ($property) {
                $property->payment_status = 1;
                $property->amount = 0;
                $property->save();
                return response()->json(['result' => $property, 'message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Property not found'], 404);
            }
        }

        if ($type === "WASTAGE") {
            $wastage = WastageCollection::findOrFail($id);
            if ($wastage) {
                $wastage->payment_status = 1;
                $wastage->amount = 0;
                $wastage->save();
                return response()->json(['message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Wastage not found'], 404);
            }
        }

        if ($type === "WATER") {
            $water = WaterTax::findOrFail($id);
            if ($water) {
                $water->payment_status = 1;
                $water->amount = 0;
                $water->save();

                return response()->json(['message' => 'Payment updated successfully.'], 200);
            } else {
                return response()->json(['message' => 'Water Tax not found'], 404);
            }
        }

        $api = new Api($this->razorpayId, $this->razorpaySecret);
        $generatedSignature = hash_hmac('sha256', $razorpayOrderId . "|" . $razorpayPaymentId, $this->razorpaySecret);

        

        if ($generatedSignature === $razorpaySignature) {
            return response()->json(['message' => 'Payment verified successfully'], 200);
        } else {
            return response()->json(['message' => 'Payment verification failed'], 400);
        }
    }
}
