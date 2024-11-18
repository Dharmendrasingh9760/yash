<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        /* Resetting styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .email-container {
            background-color: #fff;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
            margin-bottom: 20px;
        }

        .greeting {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            padding: 12px 20px;
            background-color: #5cb85c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #4cae4c;
        }

        .footer-text {
            font-size: 12px;
            color: #888;
            margin-top: 30px;
            text-align: center;
        }

        .email-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .email-logo img {
            max-width: 100px;
        }
    </style>
</head>

<body>

    <div class="email-container">
        {{-- <div class="email-logo">
            <img src="https://yourcompanylogo.com/logo.png" alt="Company Logo">
        </div>
        <h2>Password Reset Request</h2>
        <p class="greeting">Hi {{ $name }},</p>
        <p>You requested to reset your password. Click the link below to reset it:</p>
        <a href="{{ $resetLink }}">Reset Password</a> --}}
        {{-- <p>If you didn't request this, please ignore this email.</p> --}}

        {{-- <div class="footer-text">
            <p>If you have any questions, feel free to contact our support team at <a
                    href="mailto:support@yourcompany.com">support@yourcompany.com</a>.</p>
        </div> --}}
    </div>

</body>

</html>
