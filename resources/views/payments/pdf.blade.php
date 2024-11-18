<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .payment-details {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            background-color: #fafafa;
        }
        .payment-details p {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
        }
        .payment-details p strong {
            color: #333;
        }
        .payment-details p + p {
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Details</h1>
        <?php 
           if ($payment->type == "PROPERTY") {
			   $data =  DB::table('properties')->where('id', $payment->data_id)->first();
			} elseif ($payment->type == "DEATH") {
			 $data =  DB::table('deathcertificate')->where('id', $payment->data_id)->first();
			} elseif ($payment->type == "BIRTH") {
			   $data = DB::table('birthcertificate')->where('id', $payment->data_id)->first();
			}
        ?>
        <div class="payment-details">
            <p><strong>Name:</strong> {{ auth()->user()->name ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email ?? 'N/A' }}</p>
            <p><strong>Phone Number:</strong> {{ auth()->user()->mobile ?? 'N/A' }}</p>
            <p><strong>Order ID:</strong> {{ $payment->razorpay_order_id ?? 'N/A' }}</p>
            <p><strong>Payment ID:</strong> {{ $payment->razorpay_payment_id ?? 'N/A' }}</p>
            <p><strong>Amount:</strong> ${{ number_format($payment->amount, 2) ?? '0.00' }}</p>
            <p><strong>Type:</strong> {{ $payment->type ?? 'N/A' }}</p>
            @if(!empty($data) && !empty($data->payment_status))
            <p><strong>Payment Status:</strong> {{ $data->payment_status == 1 ? 'Paid' : 'Failed' }}</p>
            @endif
            <p><strong>Date:</strong> {{ $payment->created_at->format('Y-m-d H:i:s') }}</p>
        </div>
        
        <div class="footer">
            <p>Thank you for using our service!</p>
        </div>
    </div>
</body>
</html>
