<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
            background-color: rgb(242 111 0);
        }
    </style>
</head>
 
<body class="">
    <script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        // Display success message
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        // Display error message
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    });
</script>

    <div class="lg:flex justify-between px-[10px] ">
        <div class="flex justify-center lg:mx-auto pt-[40px] pb-[20px] lg:pb-[200px]">
            <div class="lg:w-[600px] w-full border border-[#00000033] rounded-[20px] p-5 shade">
                <div class="flex justify-center">
                  <img src="{{ asset('images/app_logo.png') }}" />
                </div>
                <div class="mt-10">
                  <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Citizen Login</h1>
                  <p class="font-medium text-[16px] leading-[22px] text-center pt-5">To continue, please enter your
                        email address and password</p>
                </div>
 
                <form class="mt-5" action="{{ route('login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div>
                        <label class="font-normal text-[15px] leading-[18px] text-[#000000]">Email Address</label>
                        <input type="hidden" name="encrypt_email" class="encrypt_email" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly>
                        <input type="email" placeholder="Enter Email Address" autocomplete="off"
                            class="email w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1"
                            required>
                        @error('encrypt_email')
                            <span class="text-danger">{{ $errors->first('encrypt_email') }}</span>
                        @enderror
                    </div>
 
                    <div class="mt-4 relative">
                        <label class="font-normal text-[15px] leading-[18px] text-[#000000]">Password</label>
                        <input type="hidden" name="encrypt_password" class="encrypt_password" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly>
                        <input type="password" id="password" autocomplete="new-password"
                            class="password w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1"
                            placeholder="Enter password" required>
                        <img id="togglePassword" src="{{ asset('admin-assets/images/EYE.svg') }}"
                            class="absolute right-[16px] bottom-[18px]" />
 
                        @error('encrypt_password')
                            <span class="text-danger">{{ $errors->first('encrypt_password') }}</span>
                        @enderror
                    </div>
 
                    <div class="flex justify-center my-10">
                        <a href="{{ route('forgetpassword') }}"
                            class="font-semibold text-[15px] leading-[18px] text-[#000000] text-center">Forgot
                            Password?</a>
                    </div>
 
                    <div class="flex justify-center">
                        <button
                            class="login w-[374px] h-[60px] bg-[#B1B6C6] text-center font-bold text-[20px] text-[#FFFFFF] leading-[20px] rounded-[100px]">Login</button>
                    </div>
 
                    <div class="font-normal mt-6 text-center text-[16px] leading-[22px]">I don’t have an account? <a
                            href="{{ route('user.sign.up') }}" class="text-[#F47458]">Sign Up</a></div>
                </form>
            </div>
        </div>
 
        <div class="lg:w-[600px] w-full overflow-hidden">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('admin-assets/images/sliderimg.png') }}" alt="Slide 1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
 
    </div>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
 
 
    <script src="{{asset('js/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('js/crypto-js.min.js')}}"></script>
 
    <script>
        function encryptFunction(data) {
            const key = CryptoJS.enc.Utf8.parse('1234567890123456'); // 16-byte key
            const iv = CryptoJS.enc.Utf8.parse('1234567890123456'); // 16-byte IV
            const encrypted = CryptoJS.AES.encrypt(data, key, {
                iv: iv
            }).toString();
            const encryptedData = {
                data: encrypted,
                iv: iv.toString(CryptoJS.enc.Hex)
            };
            return encryptedData;
        }
 
        function encryptData(inputElement, encryptedInputSelector, ivInputSelector) {
            var inputValue = $(inputElement).val();
            var encryptedResult = encryptFunction(inputValue);
            $(encryptedInputSelector).val(encryptedResult.data);
            $(ivInputSelector).val(encryptedResult.iv);
        }
 
        $('.email').on('keyup', function() {
            encryptData(this, '.encrypt_email', '.encrypt_data_iv');
        });
        $('.password').on('keyup', function() {
            encryptData(this, '.encrypt_password', '.encrypt_data_iv');
        });
    </script>
 
 
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
 
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
 
            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
 
                // Toggle the eye icon
                if (type === 'password') {
                    togglePassword.setAttribute('src', '{{ asset('admin-assets/images/EYE.svg') }}');
                } else {
                    togglePassword.setAttribute('src', '{{ asset('admin-assets/images/EYE 1.svg') }}');
                }
            });
        });
    </script>
 
</body>
 
</html>