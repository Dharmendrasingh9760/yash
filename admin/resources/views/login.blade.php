<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sitapur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap.min.css') }}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('admin/jquery.min.js')}}"></script>
    <script src="{{asset('admin/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
 
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
     <script type="text/javascript">
        $(document).ready(function() {
            @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
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
                    <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Nagar Palika Login</h1>
                    <p class="font-medium text-[16px] leading-[22px] text-center pt-5">To continue, please enter your
                        email address and password</p>
                </div>
 
                <form class="mt-5" action="{{ route('login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div>
                        <label class="font-bold text-[15px] leading-[18px] text-[#000000]">Email Address</label>
                        <input type="hidden" name="encrypt_email" class="encrypt_email" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly>
                        <input type="email" id="email" placeholder="Enter Email Address" class="email w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1" autocomplete="off" maxlength="32" required>
                        @error('encrypt_email')
                        <div class="font-bold text-red-600 text-sm mt-1" id="errorMessageEmail">{{ $message }}</div>
                        @enderror
                     <div class="font-bold text-sm mt-1" id="errorMessageEmail"></div>
                    </div>

                    <div class="mt-4 relative">
                        <label class="font-bold text-[15px] leading-[18px] text-[#000000]">Password</label>
                        <input type="hidden" name="encrypt_password" class="encrypt_password" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly>
                        <input type="password" id="password" placeholder="Enter password"
                        class="password w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1" autocomplete="off" minlength="8" maxlength="12" required>
                        @error('encrypt_password')
                         <div class="font-bold text-red-600 text-sm mt-1" id="errorMessagePassword">{{ $message }}</div>
                        @enderror
                        <img id="togglePassword" src="{{ asset('admin-assets/images/EYE.svg') }}" class="absolute right-[16px] bottom-[18px]" />
                        <div class="font-bold text-sm mt-1" id="errorMessagePassword"></div>
                    </div>

                    <div class="mt-4">
                        <label class="font-bold text-[15px] leading-[18px] text-[#000000]">Enter CAPTCHA</label>
                        <div class="flex items-center space-x-2">
                            <input type="text" name="captcha" placeholder="Enter CAPTCHA" class="w-[60%] h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1" autocomplete="off" minlength="4" maxlength="8" required>
                            <img id="captcha-img" src="{{ route('generate.captcha') }}?{{ time() }}" class="captcha-img h-[60px]" alt="CAPTCHA Image">
                            <button type="button" id="refresh-captcha" class="bg-gray-300 text-black p-2 rounded">Refresh</button>
                        </div>
                        @error('captcha')
                         <div class="font-bold text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                        
                    </div>
 
                    <div class="flex justify-center my-10">
                        <a href="{{ route('custom.password.forgot') }}" target="_blank" rel="noopener noreferrer"
                            class="font-semibold text-[15px] leading-[18px] text-[#000000] text-center">
                            Forgot Password?
                        </a>
                    </div>
 
                    <div class="flex justify-center">
                        <button
                            class="login w-[374px] h-[60px] bg-[#B1B6C6] text-center font-bold text-[20px] text-[#FFFFFF] leading-[20px] rounded-[100px]">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('form').setAttribute('autocomplete', 'off');
    });
</script>

<script>
    function encryptEmail() {
        const emailInput = document.getElementById("email");
        const emailValue = emailInput.value;
        const errorMessage = document.getElementById("errorMessageEmail");
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailValue === "") {
            errorMessage.textContent = "Email is required.";
            errorMessage.classList.add("text-red-600");
            emailInput.classList.add("border-red-600");
            emailInput.classList.remove("border-green-600");
            return false;
        } else if (!emailPattern.test(emailValue)) {
            errorMessage.textContent = "Please enter a valid email address.";
            errorMessage.classList.add("text-red-600");
            emailInput.classList.add("border-red-600");
            emailInput.classList.remove("border-green-600");
            return false;
        } else if (emailValue.length > 32) {
            errorMessage.textContent = "Email must be 32 characters or less.";
            errorMessage.classList.add("text-red-600");
            emailInput.classList.add("border-red-600");
            emailInput.classList.remove("border-green-600");
            return false;
        } else {
            errorMessage.textContent = "Email is valid.";
            errorMessage.classList.remove("text-red-600");
            errorMessage.classList.add("text-green-600");
            emailInput.classList.remove("border-red-600");
            emailInput.classList.add("border-green-600");

            // const encryptedEmail = btoa(emailValue);
            // document.querySelector(".encrypt_email").value = encryptedEmail;
            // document.querySelector(".encrypt_data_iv").value = "your_iv_here";

            return true;
        }
    }

  function encryptPassword() {
    const passwordInput = document.getElementById("password");
    const passwordValue = passwordInput.value;
    const errorMessage = document.getElementById("errorMessagePassword");
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (passwordValue === "") {
        errorMessage.textContent = "Password is required.";
        errorMessage.classList.add("text-red-600");
        passwordInput.classList.add("border-red-600");
        passwordInput.classList.remove("border-green-600");
        return false;
    } else if (!passwordPattern.test(passwordValue)) {
        errorMessage.textContent = "Password must be at least 8 characters long and include uppercase, lowercase, number, and special character.";
        errorMessage.classList.add("text-red-600");
        passwordInput.classList.add("border-red-600");
        passwordInput.classList.remove("border-green-600");
        return false;
    } else {
        errorMessage.textContent = "Password is valid.";
        errorMessage.classList.remove("text-red-600");
        errorMessage.classList.add("text-green-600");
        passwordInput.classList.remove("border-red-600");
        passwordInput.classList.add("border-green-600");

        // // Encrypt password (example)
        // const encryptedPassword = btoa(passwordValue);
        // document.querySelector(".encrypt_password").value = encryptedPassword;

        return true;
    }
}


    document.querySelector("form").addEventListener("submit", function (event) {
        const isEmailValid = encryptEmail();
        const isPasswordValid = encryptPassword();
        if (!isEmailValid || !isPasswordValid) {
            event.preventDefault();
        }
    });
</script>
    <script>
        function encryptFunction(data) {
            const key = CryptoJS.enc.Utf8.parse('1234567890123456');
            const iv = CryptoJS.enc.Utf8.parse('1234567890123456');
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
        document.getElementById('refresh-captcha').addEventListener('click', function() {
            var img = document.getElementById('captcha-img');
            img.src = '{{ route('generate.captcha') }}?' + Date.now();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.refresh-captcha').click(function() {
            alert(33)
                $.ajax({
                    url: "{{ route('refresh.captcha') }}",
                    type: 'GET',
                    success: function(data) {
                        $('.captcha-img').attr('src', data.captcha);
                    }
                });
            });
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
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
 
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