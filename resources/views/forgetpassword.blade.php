<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .swiper-slide {
            position: relative;
            text-align: center;
            color: white;
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
        }

        .swiper-slide .text-overlay {
            position: absolute;
            bottom: 18%;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .login:hover {
            background-color: rgb(242, 111, 0);
        }

        .login {
            transition: background-color 0.3s ease;
        }

        .input-field {
            transition: border-color 0.3s ease;
        }

        .input-field:focus {
            border-color: rgb(59, 130, 246);
            /* Tailwind blue-500 */
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>

<body class="bg-gray-100">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="flex justify-center min-h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 lg:w-[600px] w-full mx-4">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/appentus-logo 1.png') }}" alt="Logo" class="h-16">
            </div>
            <h2 class="text-2xl font-semibold text-center mb-4">Change Your Password</h2>

            <form action="{{ route('forgetpassword.send.mail') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700" for="newpassword">New Password</label>
                    <input type="password" id="newpassword" name="newpassword"
                        class="input-field w-full h-12 border border-gray-300 rounded-lg pl-3 mt-2 focus:outline-none"
                        placeholder="Enter new password" required>
                    <img id="newtogglePassword" src="{{ asset('admin-assets/images/EYE.svg') }}"
                        class="absolute right-3 top-9 cursor-pointer" />
                </div>

                <div class="mb-6 relative">
                    <label class="block text-sm font-medium text-gray-700" for="confirmpassword">Confirm
                        Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword"
                        class="input-field w-full h-12 border border-gray-300 rounded-lg pl-3 mt-2 focus:outline-none"
                        placeholder="Re-enter password" required>
                    <img id="confirmtogglePassword" src="{{ asset('admin-assets/images/EYE.svg') }}"
                        class="absolute right-3 top-9 cursor-pointer" />
                </div>

                <div class="flex justify-center">
                    <button
                        class="login w-full h-12 bg-gray-400 text-white font-bold text-lg rounded-full hover:bg-orange-500">Send</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Toggle Password Visibility
        function togglePasswordVisibility(toggleId, inputId) {
            const toggle = document.querySelector(toggleId);
            const input = document.querySelector(inputId);

            toggle.addEventListener('click', function() {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                toggle.setAttribute('src', type === 'password' ? '{{ asset('admin-assets/images/EYE.svg') }}' :
                    '{{ asset('admin-assets/images/EYE 1.svg') }}');
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            togglePasswordVisibility('#newtogglePassword', '#newpassword');
            togglePasswordVisibility('#confirmtogglePassword', '#confirmpassword');
        });
    </script>

</body>

</html>
