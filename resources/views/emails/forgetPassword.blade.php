<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset</title>
    <style>
        /* Reset default styles */
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
            text-align: center;
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
    </style>
</head>

<body>

    <div class="email-container">
        <h2>Password Reset Request</h2>
        <p class="greeting">Hello {{ $name }},</p>
        <p>You requested to reset your password. Click the link below to reset it:</p>
        <a href="{{ $resetLink }}">Reset Password</a>
        <p>If you did not request a password reset, no further action is required.</p>

        <div class="footer-text">
            <p>If you have any questions, feel free to contact our support team.</p>
        </div>
    </div>

</body>

</html>
