<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hello {{$name}},</p>
    <p>You requested to reset your password. Click the link below to reset it:</p>
    <a href="{{ $resetLink }}">Reset Password</a>
    <p>If you did not request a password reset, no further action is required.</p>
</body>
</html>
