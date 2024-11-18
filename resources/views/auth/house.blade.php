<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>house</title>
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
                    <a href="{{ route('login.page') }}">
                    <img src="{{ asset('images/app_logo.png') }}" />
                    </a>
                </div>
                <div class="mt-10">
                    <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Nagar Palika House</h1>
                    <p class="font-medium text-[16px] leading-[22px] text-center py-3">To continue, please enter your
                        phone number and captch</p>
                </div>
 
                <form action="{{ route('fetchHouseId') }}" method="POST" autocomplete="off">
                    @csrf
                    <div>
                        <label class="font-bold text-[15px] leading-[18px] text-[#000000]">Phone Number</label>
                        <!-- <input type="hidden" name="encrypt_email" class="encrypt_email" readonly>
                        <input type="hidden" name="encrypt_data_iv" class="encrypt_data_iv" readonly> -->
                        <input type="text" name="phone_number" id="phone_number" placeholder="Enter Phone Number" class="phone w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-1" autocomplete="off" maxlength="12">
                        @error('phone_number')
                        <div class="font-bold text-red-600 text-sm mt-1" id="errorMessagePhone">{{ $message }}</div>
                        @enderror
                     <div class="font-bold text-sm mt-1" id="errorMessagePhone"></div>
                    </div>
                   <!--  <div class="flex justify-end">
                        <a href="{{ route('createProperty') }}" target="_blank" rel="noopener noreferrer"
                            class="font-semibold text-[15px] leading-[18px] text-[#000000] text-center text-danger">
                            New User Register Here?
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
                            class="login w-[374px] h-[40px] bg-[#B1B6C6] text-center font-bold text-[20px] text-[#FFFFFF] leading-[10px] rounded-[100px]">Fetch House</button>
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
function validatePhoneNumber() {
    const phoneInput = document.getElementById("phone_number");
    const phoneValue = phoneInput.value;
    const errorMessage = document.getElementById("errorMessagePhone");

    // Define the phone number pattern (this example is for a 10-digit number; adjust as needed)
    const phonePattern = /^\d{10}$/;

    if (phoneValue === "") {
        errorMessage.textContent = "Phone number is required.";
        errorMessage.classList.add("text-red-600");
        phoneInput.classList.add("border-red-600");
        phoneInput.classList.remove("border-green-600");
        return false;
    } else if (!phonePattern.test(phoneValue)) {
        errorMessage.textContent = "Please enter a valid 10-digit phone number.";
        errorMessage.classList.add("text-red-600");
        phoneInput.classList.add("border-red-600");
        phoneInput.classList.remove("border-green-600");
        return false;
    } else {
        errorMessage.textContent = "Phone number is valid.";
        errorMessage.classList.remove("text-red-600");
        errorMessage.classList.add("text-green-600");
        phoneInput.classList.remove("border-red-600");
        phoneInput.classList.add("border-green-600");
        return true;
    }
}


    document.querySelector("form").addEventListener("submit", function (event) {
        const isPhoneNoValid = validatePhoneNumber();
        if (!isPhoneNoValid) {
            event.preventDefault();
        }
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
 
</body>
 
</html>