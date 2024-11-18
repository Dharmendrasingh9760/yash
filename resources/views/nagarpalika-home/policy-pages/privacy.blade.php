@extends('nagarpalika-home.include-home.main')
@section('content')
    <style>
        .privacy-policy-header {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .privacy-policy-header h1 {
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .privacy-policy-header p {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        .privacy-content {
            padding: 60px 0;
        }

        .privacy-section {
            margin-bottom: 50px;
        }

        .privacy-section h4 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            position: relative;
        }

        .privacy-section h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            /* background-color: #0072ff; */
        }

        .privacy-section ul {
            list-style: disc;
            /* Use bullets */
            padding-left: 40px;
            /* Space for bullets */
        }

        .privacy-section ul li {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .privacy-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .privacy-footer {
            text-align: center;
            margin-top: 30px;
        }

        .privacy-footer a {
            color: #0072ff;
            font-weight: bold;
            text-decoration: none;
        }

        .privacy-footer a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Privacy Policy Header Section -->
    <div class="privacy-policy-header">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p>Your privacy matters to us</p>
        </div>
    </div>

    <!-- Privacy Policy Content -->
    <div class="max-w-[1170px] m-auto mt-10">
        <div class="privacy-content container mx-4">
            <div class="privacy-section">
                <h4>1. How We Use Your Information</h4>
                <ul>
                    <li>Facilitate user requests, property tax payments, and trade license applications.</li>
                    <li>Process transactions and send confirmations.</li>
                    <li>Provide customer support and address issues.</li>
                    <li>Analyze usage patterns to improve our services.</li>
                    <li>Comply with legal obligations.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h4>2. Sharing of Information</h4>
                <ul>
                    <li>We do not share your personal information with third parties except:</li>
                    <li>With government or regulatory bodies for processing your property tax and trade license requests.
                    </li>
                    <li>With trusted third-party service providers to securely process payments.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h4>3. Security</h4>
                <ul>
                    <li>We implement appropriate measures to protect your data from unauthorized access or misuse, including
                        encryption and secure storage. However, no system is entirely secure, and we cannot guarantee the
                        absolute
                        security of your information.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h4>4. Your Rights</h4>
                {{-- <p>You have the right to:</p> --}}
                <ul>
                    <li>Access or update your personal information through your account settings.</li>
                    <li>Request the deletion of your data by contacting us.</li>
                    <li>Opt-out of receiving marketing communications.</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h4>5. Changes to This Privacy Policy</h4>
                <ul>
                    <li>We may update this Privacy Policy from time to time. Any changes will be posted on this page with
                        the
                        updated
                        effective date.</li>
                    <li>For questions or concerns, please contact us at <a
                            href="mailto:nppsitapur@gmail.com"><b>nppsitapur@gmail.com</b></a>.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="privacy-footer container">
        <p>Have questions? Contact us at <a href="https://nppsitapur.com/">https://nppsitapur.com/</a>.</p>
    </div>
@endsection
