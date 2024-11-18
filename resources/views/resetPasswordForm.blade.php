<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-10 w-full max-w-md">
        <div class="mb-4" style="justify-content: center; display: flex;">
            <img src="{{ asset('images/appentus-logo 1.png') }}" />
        </div>
        <h1 class="text-2xl font-bold mb-6 text-center">Reset Password</h1>

        @if (session('error'))
            <div class="bg-red-500 text-white p-2 rounded mb-4 text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" name="password" id="password"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your new password" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Confirm your new password" required>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg w-full hover:bg-blue-600 transition duration-200">Reset
                Password</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-500">Remembered your password? <a href="{{ route('login.page') }}"
                    class="text-blue-500 hover:underline">Login</a></p>
        </div>
    </div>

</body>

</html>
