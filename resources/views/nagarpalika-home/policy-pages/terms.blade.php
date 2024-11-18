@extends('nagarpalika-home.include-home.main')
@section('content')
    <!-- Custom Styles for the Terms of Service -->
    <style>
        .terms-header {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .terms-header h1 {
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .terms-content {
            padding: 60px 0;
        }

        .terms-section {
            margin-bottom: 50px;
        }

        .terms-section h4 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            position: relative;
        }

        .terms-section h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            /* background-color: #0072ff; */
        }

        .terms-section ul {
            list-style: disc;
            /* Use bullet points */
            padding-left: 40px;
            /* Space for bullets */
        }

        .terms-section ul li {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .terms-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .terms-footer {
            text-align: center;
            margin-top: 30px;
        }

        .terms-footer a {
            color: #0072ff;
            font-weight: bold;
            text-decoration: none;
        }

        .terms-footer a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Terms of Service Header -->
    <div class="terms-header">
        <div class="container">
            <h1>Terms of Service</h1>
        </div>
    </div>

    <!-- Terms of Service Content -->
    <div class="max-w-[1170px] m-auto mt-10">
        <div class="terms-content container mx-2">
            <div class="terms-section">
                <h4>1. User Accounts</h4>
                <ul>
                    <li>
                        To use certain features of our Services, you must create an account. You agree to provide accurate
                        information and keep your account secure. You are responsible for all activities under your account.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>2. Request for Admin Access</h4>
                <ul>
                    <li>
                        Users can request admin access through the platform for purposes like property tax and trade license
                        processing. The request is subject to review and approval by the admin. We reserve the right to
                        reject
                        or
                        accept any admin request based on our internal policies and legal requirements.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>3. Payment for Services</h4>
                <ul>
                    <li>
                        Once the admin approves a request, you will be notified to make the payment for services such as
                        property
                        tax or trade licenses. Payment must be completed through the platform using the available payment
                        methods.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>4. Rejection of Admin Requests</h4>
                <ul>
                    <li>
                        The admin reserves the right to reject any user requests based on incorrect information, fraud
                        suspicion, or
                        non-compliance with legal requirements. The decision will be final, and you will be informed of the
                        reasons
                        where applicable.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>5. Service Availability</h4>
                <ul>
                    <li>
                        We strive to ensure our Services are available at all times but do not guarantee uninterrupted
                        access.
                        We may
                        suspend or terminate services for maintenance, updates, or legal obligations without prior notice.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>6. Compliance with Laws</h4>
                <ul>
                    <li>
                        By using our Services, you agree to comply with all applicable laws and regulations, including those
                        related
                        to tax, licenses, and data privacy.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>7. Changes to the Terms</h4>
                <ul>
                    <li>
                        We may update these Terms at any time. Continued use of the Services after any updates means you
                        agree
                        to the
                        new terms.
                    </li>
                </ul>
            </div>

            <div class="terms-section">
                <h4>8. Termination</h4>
                <ul>
                    <li>
                        We may suspend or terminate your access to the Services at any time if you violate these Terms or if
                        required
                        by law.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Terms Footer -->
    <div class="terms-footer container">
        <p>For any questions or additional information, please contact us at <a
                href="mailto:nppsitapur@gmail.com">nppsitapur@gmail.com</a>.</p>
    </div>
@endsection
