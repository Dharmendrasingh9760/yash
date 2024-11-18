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
                <a href="{{ route('user.dashboard') }}">
                    <img src="{{ asset('images/app_logo.png') }}" />
                </a>
                </div>
                <div class="mt-10">
                    <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Nagar Palika Login</h1>
                    <p class="font-medium text-[16px] leading-[22px] text-center py-3">To continue, please enter your
                        email address and password</p>
                </div>
 
                <form action="{{ route('login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div>
                        <label class="font-bold text-[15px] leading-[18px] text-[#000000]">House Id</label>
                        <!-- <input type="hidden" name="encrypt_email" class="encrypt_email" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly> -->
                        <input type="text" name="house_id" id="house_id" placeholder="Enter House Id" class="phone w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1" autocomplete="off" maxlength="12">
                        @error('house_id')
                        <div class="font-bold text-red-600 text-sm mt-1" id="errorMessageHouseId">{{ $message }}</div>
                        @enderror
                     <div class="font-bold text-sm mt-1" id="errorMessageHouseId"></div>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('houseId') }}" target="_blank" rel="noopener noreferrer"
                            class="font-semibold text-[15px] leading-[18px] text-[#000000] text-center text-danger">
                            Know Your House Id?
                        </a>
                    </div>


                    <div class="mt-4 relative">
                        <label class="font-bold text-[15px] leading-[18px] text-[#000000]">Password</label>
                        <!-- <input type="hidden" name="encrypt_password" class="encrypt_password" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly> -->
                        <input type="password" name="password" id="password" placeholder="Enter password"
                        class="password w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1" autocomplete="off" minlength="8" maxlength="12">
                        @error('password')
                         <div class="font-bold text-red-600 text-sm mt-1" id="errorMessagePassword">{{ $message }}</div>
                        @enderror
                        <img id="togglePassword" src="{{ asset('admin-assets/images/EYE.svg') }}" class="absolute right-[16px] bottom-[18px]" />
                        <div class="font-bold text-sm mt-1" id="errorMessagePassword"></div>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('createProperty') }}" target="_blank" rel="noopener noreferrer"
                            class="font-semibold text-[15px] leading-[18px] text-[#000000] text-center text-danger">
                            New User Register Here?
                        </a>
                    </div>
                    <!-- <div class="flex justify-end">
                        <a href="{{ route('forgetpassword') }}" target="_blank" rel="noopener noreferrer"
                            class="font-semibold text-[15px] leading-[18px] text-[#000000] text-center text-danger">
                            Forgot Password?
                        </a>
                    </div> -->

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
 
                    <div class="flex justify-center mt-5">
                        <button
                            class="login w-[374px] h-[40px] bg-[#B1B6C6] text-center font-bold text-[20px] text-[#FFFFFF] leading-[10px] rounded-[100px]">Login</button>
                    </div>
                     <!-- <div class="flex justify-center mt-2">
                        <a href="{{ route('createProperty') }}" 
                            class="login w-[374px] h-[40px] bg-[#B1B6C6] text-center font-bold text-[20px] text-[#FFFFFF] leading-[35px] rounded-[100px]">New User Register Here...</a>
                    </div> -->
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
function validateHouseId() {
    const houseInput = document.getElementById("house_id");
    const houseValue = houseInput.value;
    const errorMessage = document.getElementById("errorMessageHouseId");
    const housePattern = /^[A-Za-z0-9]{1,10}$/;

    if (houseValue === "") {
        errorMessage.textContent = "House id is required.";
        errorMessage.classList.add("text-red-600");
        houseInput.classList.add("border-red-600");
        houseInput.classList.remove("border-green-600");
        return false;
    // } else if (!housePattern.test(houseValue)) {
    //     errorMessage.textContent = "Please enter a valid house id (1-10 alphanumeric characters).";
    //     errorMessage.classList.add("text-red-600");
    //     houseInput.classList.add("border-red-600");
    //     houseInput.classList.remove("border-green-600");
    //     return false;
    } else {
        errorMessage.textContent = "House id is valid.";
        errorMessage.classList.remove("text-red-600");
        errorMessage.classList.add("text-green-600");
        houseInput.classList.remove("border-red-600");
        houseInput.classList.add("border-green-600");
        return true;
    }
  }


  function validatePassword() {
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
        return true;
    }
}


    document.querySelector("form").addEventListener("submit", function (event) {
        const isHouseIdValid = validateHouseId();
        const isPasswordValid = validatePassword();
        if (!isHouseIdValid || !isPasswordValid) {
            event.preventDefault();
        }
    });
</script>
    <!-- <script>
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
    </script> -->
 
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