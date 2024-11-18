<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_signature',
        'order_id',
        'amount',
        'type',
        'user_id',
        'data_id',
    ];
}
