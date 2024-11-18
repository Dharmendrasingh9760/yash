@extends('nagarpalika-home.include-home.main')
@section('content')
    <!-- Custom Styles for the Refund Policy -->
    <style>
        .refund-policy-header {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .refund-policy-header h1 {
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .refund-policy-content {
            padding: 60px 0;
        }

        .refund-section {
            margin-bottom: 50px;
        }

        .refund-section h4 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            position: relative;
        }

        .refund-section h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            /* background-color: #0072ff; */
        }

        .refund-section ul {
            list-style: disc;
            /* Use bullet points */
            padding-left: 40px;
            /* Space for bullets */
        }

        .refund-section ul li {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .refund-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .refund-footer {
            text-align: center;
            margin-top: 30px;
        }

        .refund-footer a {
            color: #0072ff;
            font-weight: bold;
            text-decoration: none;
        }

        .refund-footer a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Refund Policy Header -->
    <div class="refund-policy-header">
        <div class="container">
            <h1>Refund Policy</h1>
        </div>
    </div>

    <!-- Refund Policy Content -->
    <div class="max-w-[1170px] m-auto mt-10">
        <div class="refund-policy-content container mx-4">
            <div class="refund-section">
                <h4>1. Eligibility for Refunds</h4>
                <ul>
                    <li><strong>Property Tax Payments:</strong> Once a property tax payment is processed and submitted to
                        the
                        relevant government authority, it is non-refundable.</li>
                    <li><strong>Trade License Fees:</strong> Fees paid for trade license applications may be refunded only
                        if
                        the application is rejected by the authority and the payment has not been processed.</li>
                </ul>
            </div>

            <div class="refund-section">
                <h4>2. Requesting a Refund</h4>
                <ul>
                    <li>Refund requests must be submitted within 7 Working days of the payment date. To request a refund,
                        please
                        contact
                        our customer service at nppsitapur@gmail.com, providing the following details:</li>
                    <li>Your full name</li>
                    <li>Transaction ID or order number</li>
                    <li>Reason for the refund request</li>
                </ul>
            </div>

            <div class="refund-section">
                <h4>3. Processing of Refunds</h4>
                <ul>
                    <li>
                        Once a refund is approved, the amount will be credited back to the original payment method within
                        5-7
                        business days. Please note that we do not take responsibility for delays caused by your payment
                        provider.
                    </li>
                </ul>
            </div>

            <div class="refund-section">
                <h4>4. Non-Refundable Circumstances</h4>
                <ul>
                    <li>Payments processed by the government or relevant authorities are non-refundable.</li>
                    <li>Administrative fees and processing charges are non-refundable.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Refund Policy Footer -->
    <div class="refund-footer container">
        <p>For more details or inquiries, please contact us at <a
                href="https://nppsitapur.com/">https://nppsitapur.com/</a>.</p>
    </div>
@endsection
