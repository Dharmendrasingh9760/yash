<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | Page Not Found</title>
    <style>
        /* Resetting margins and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 100px;
            margin-bottom: 20px;
            color: #ff6b6b;
            font-weight: 900;
            animation: fadeInDown 1s ease-in-out;
        }

        p {
            font-size: 24px;
            margin-bottom: 40px;
            color: #777;
            animation: fadeInUp 1.2s ease-in-out;
        }

        a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #ff6b6b;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            animation: fadeInUp 1.4s ease-in-out;
        }

        a:hover {
            background-color: #ff4747;
        }

        /* Keyframe animations */
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animation for background effect */
        .background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            z-index: -1;
        }

        .background .circle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 107, 107, 0.2);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0) translateX(0) scale(1);
            }

            50% {
                transform: translateY(-20px) translateX(10px) scale(1.1);
            }

            100% {
                transform: translateY(0) translateX(0) scale(1);
            }
        }

        /* Styling and positioning floating circles */
        .circle.small {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 10%;
        }

        .circle.medium {
            width: 200px;
            height: 200px;
            top: 30%;
            right: 20%;
        }

        .circle.large {
            width: 300px;
            height: 300px;
            bottom: 15%;
            right: 10%;
        }

    </style>
</head>

<body>
    <div class="background">
        <!-- Animated floating circles -->
        <div class="circle small"></div>
        <div class="circle medium"></div>
        <div class="circle large"></div>
    </div>
    <div class="container">
        <h1>404</h1>
        <p>Sorry, the page you are looking for does not exist.</p>
        <a href="javascript:void(0);" onclick="history.back()">Go Back</a>

    </div>
</body>

</html>
