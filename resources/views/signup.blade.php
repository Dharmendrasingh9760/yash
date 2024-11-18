<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
    <div class="flex justify-center lg:mx-auto pt-[20px] pb-[20px] lg:pb-[100px]">
        <div class="lg:w-[1000px] w-full border border-[#00000033] rounded-[20px] p-5 shade">
            <div class="flex justify-center">
                <a href="{{ route('login.page') }}">
                    <img src="{{ asset('images/app_logo.png') }}" />
                </a>
            </div>
            <div class="mt-10">
                <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Nagar Palika Register</h1>
                <p class="font-medium text-[16px] leading-[22px] text-center py-3">To continue, please enter user Detail</p>
            </div>

            <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                <form action="{{ route('storeProperty') }}" method="POST" autocomplete="off">
                    @csrf
                    <h3 class=" font-semibold text-[18px] leading-[30px]   lg:px-[20px] px-[10px]   py-[20px] text-[#000000]">
                        Tax self-assessment form on annual value of Property Type both.</h3>
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 ] border-b border-[#B1B6C6] px-[10px] lg:px-[20px] pb-[80px] flex flex-col gap-5">

                       

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                               Ward No. वार्ड नंबर  <span class="text-red-600">*</span>
                            </div>
                            <select name="ward_no" id="wardByColony"
                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" required>
                                <option value="">Select Word No. </option>
                                @if(!empty($wards))
                                    @foreach($wards as $ward)
                                     <option value="{{ $ward->id }}" {{ old('ward_no') == $ward->id ? 'selected' : '' }}> 
                                      {{ $ward->word_number }} </option>
                                    @endforeach
                                @endif
                            </select>
                            @error('ward_no')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}
                                </p>
                            @enderror
                        </div>

                       <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                               COLONY NAME मोहल्ले का नाम <span class="text-red-600">*</span>
                            </div>
                            <select name="colony_name" id="colonyByHouse"
                                class="colonyByHouse w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" required>
                            </select>
                            @error('colony_name')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}
                                </p>
                            @enderror                    
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                               HOUSE NO.भवन का विवरण <span class="text-red-600">*</span>
                            </div>
                            <select name="house_no" id="houseByData"
                                class="houseByData w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" required>
                            </select>
                            @error('house_no')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}
                                </p>
                            @enderror                    
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                MOBILE NO. दूरभाष संख्या <span class="text-red-600">*</span>
                                </div>
                            <div>
                                <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="MOBILE NO. दूरभाष संख्या " autocomplete="off" minlength="8" maxlength="12" required>
                            </div>
                            @error('phone_number')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <div class="font-bold text-sm mt-1" id="errorMessagePhone"></div>
                         </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                Password पासवर्ड <span class="text-red-600">*</span>
                            </div>
                            <input type="text" name="password" value="{{ old('password') }}"
                                class="password w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter Password पासवर्ड" autocomplete="off" minlength="8" maxlength="12" required>
                            @error('password')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <div class="font-bold text-sm mt-1" id="errorMessagePassword"></div>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                Confirm Password पासवर्ड की पुष्टि कीजिये <span class="text-red-600">*</span>
                            </div>
                            <input type="text" name="confirm_password" value="{{ old('confirm_password') }}"
                                class="confirm_password w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter Confirm Password पासवर्ड की पुष्टि कीजिये" autocomplete="off" minlength="8" maxlength="12" required>
                            @error('confirm_password')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <div class="font-bold text-sm mt-1" id="errorMessageConfirmPassword"></div>
                        </div>

                      <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-3 gap-5">
                        <button type="submit" id="submitButton" 
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">User Register→</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="{{asset('frontend/jquery.min.js')}}"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    function validatePhoneNumber() {
        const phoneInput = document.querySelector('input[name="phone_number"]');
        const phoneValue = phoneInput.value;
        const errorMessage = document.getElementById("errorMessagePhone");
        const phonePattern = /^[0-9]{10}$/;

        if (phoneValue === "") {
            errorMessage.textContent = "Phone number is required.";
            errorMessage.classList.add("text-red-600");
            phoneInput.classList.add("border-red-600");
            return false;
        } else if (!phonePattern.test(phoneValue)) {
            errorMessage.textContent = "Phone number must be 10 digits long.";
            errorMessage.classList.add("text-red-600");
            phoneInput.classList.add("border-red-600");
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
    // Validate Password
    function validatePassword() {
        const passwordInput = document.querySelector('input[name="password"]');
        const passwordValue = passwordInput.value;
        const errorMessage = document.getElementById("errorMessagePassword");
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/;

        if (passwordValue === "") {
            errorMessage.textContent = "Password is required.";
            errorMessage.classList.add("text-red-600");
            passwordInput.classList.add("border-red-600");
            return false;
        } else if (!passwordPattern.test(passwordValue)) {
            errorMessage.textContent = "Password must be between 8-12 characters, include at least one uppercase letter, one number, and one special character.";
            errorMessage.classList.add("text-red-600");
            passwordInput.classList.add("border-red-600");
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

    // Validate Confirm Password
    function validateConfirmPassword() {
        const passwordInput = document.querySelector('input[name="password"]');
        const confirmPasswordInput = document.querySelector('input[name="confirm_password"]');
        const confirmPasswordValue = confirmPasswordInput.value;
        const errorMessage = document.getElementById("errorMessageConfirmPassword");

        if (confirmPasswordValue === "") {
            errorMessage.textContent = "Please confirm your password.";
            errorMessage.classList.add("text-red-600");
            confirmPasswordInput.classList.add("border-red-600");
            return false;
        } else if (confirmPasswordValue !== passwordInput.value) {
            errorMessage.textContent = "Passwords do not match.";
            errorMessage.classList.add("text-red-600");
            confirmPasswordInput.classList.add("border-red-600");
            return false;
        } else {
            errorMessage.textContent = "Passwords match.";
            errorMessage.classList.remove("text-red-600");
            errorMessage.classList.add("text-green-600");
            confirmPasswordInput.classList.remove("border-red-600");
            confirmPasswordInput.classList.add("border-green-600");
            return true;
        }
    }

    // Form Submit Event Listener
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        const isPasswordValid = validatePassword();
        const isConfirmPasswordValid = validateConfirmPassword();
        const isPhoneNumberValid = validatePhoneNumber();

        if (!isPasswordValid || !isConfirmPasswordValid || !isPhoneNumberValid) {
            event.preventDefault(); 
        }
    });
});
</script>

<script>
    $(document).ready(function() {
        $('#wardByColony').on('change', function() {
            var wardId = $(this).val();
            if (wardId) {
                $.ajax({
                    url: "{{ route('getUserColonies') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: wardId
                    },
                    success: function(data) {
                        console.log('fetching colonies', data)
                        $('#colonyByHouse').empty().append('<option value="">Select Colony</option>');
                        $.each(data, function(key, value) {
                            $('#colonyByHouse').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function() {
                        console.log('Error fetching colonies');
                    }
                });
            } else {
                $('#colony').empty().append('<option value="">Select Colony</option>');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#colonyByHouse').on('change', function() {
            var colonyId = $(this).val();
            if (colonyId) {
                $.ajax({
                    url: "{{ route('getUserHouses') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: colonyId
                    },
                    success: function(data) {
                        console.log('fetching house', data)
                        $('.houseByData').empty().append('<option value="">Select House</option>');
                        $.each(data, function(key, value) {
                            $('.houseByData').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function() {
                        console.log('Error fetching house');
                    }
                });
            } else {
                $('#colony').empty().append('<option value="">Select House</option>');
            }
        });
    });
</script>

</body>
</html>
