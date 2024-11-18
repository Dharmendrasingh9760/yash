
@extends('include.main')
@section('content')
    <style>
        /* Add your CSS styles here */
        .hidden-Residential {
            display: none;
        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Profile Details
        </h2>

        <div>

        <form action="{{ route('profile.update') }}" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            <div id="nonResidentialContent" class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                <div class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 mt-5   px-[10px] lg:px-[20px]   pb-[40px] flex flex-col gap-5">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name<span
                                class="text-red-600">*</span></div>
                        <input type="text" name="name" value="{{ $user_data->name }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter">
                        <span class="" style="color:red">{{ $errors->first('name') }}</span>
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email<span
                                class="text-red-600">*</span></div>
                        <input type="email" name="email" value="{{ $user_data->email }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter">
                        <span class="" style="color:red">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="w-full">
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            Profile Image<span class="text-red-600">*</span>
                        </div>

                        <label class="relative select-box w-full">
                            <input type="text" id="soValue13"
                                class="soValue outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]"
                                placeholder="Choose Profile Image" readonly>
                            <input type="file" name="profile_image" class="absolute inset-0 opacity-0 cursor-pointer"
                                id="profileImageInput" onchange="showFileName()">
                            <button type="button"
                                class="absolute right-0 top-0 w-[85px] h-[60px] bg-[#F26F00] text-white font-normal text-[12px] leading-[20px] text-center rounded-tr-[32px] rounded-br-[32px] z-30">
                                Choose File
                            </button>
                        </label>

                        <br>

                        @if ($errors->has('profile_image'))
                        <span class="text-red-600">{{ $errors->first('profile_image') }}</span>
                        @endif

                        @if (Auth::user()->profile_image)
                        <img src="{{ Auth::user()->profile_image }}" class="w-[200px] mt-2" alt="Profile Image" />
                        @endif
                    </div>
                </div>

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                    <button id="resetButton"
                        class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                        Reset
                    </button>
                    <button type="submit"
                        class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Update Profile →</button>
                </div>
            </div>
        </form>
        
        
        
            <form action="{{ route('profileChangePassword') }}" method="POST" onsubmit="return encryptPassword();">
            @csrf
            <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                <div class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 mt-5   px-[10px] lg:px-[20px]   pb-[40px] flex flex-col">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Current
                            Password<span class="text-red-600">*</span></div>
                        <input type="password" name="current_password"
                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                            placeholder="Enter Current Password" minlength="8" maxlength="12" required>
                        <span style="color:red">{{ $errors->first('current_password') }}</span>
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">New Password<span
                                class="text-red-600">*</span></div>
                        <input type="password" name="password" id="password" 
                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                            placeholder="Enter New Password" minlength="8" maxlength="12" required>
                        <span style="color:red">{{ $errors->first('password') }}</span>
                       <div class="font-bold text-sm mt-1" id="errorMessagePassword"></div>
                    </div>
                </div>

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center">
                    <button type="submit"
                        class="profileChangePassword w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Change Password→</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div id="successModal"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50  px-[10px] hidden  overflow-scroll">
        <div class=" lg:w-[770px] popup w-full bg-[#FFFFFF] rounded-[20px] px-[10px] lg:px-[40px] pb-[40px] mt-[30px]">
            <div class="flex justify-center my-6">
                <img src="{{ asset('admin-assets/images/success.png') }}" />
            </div>
            <h5 class=" font-semibold text-[22px] lg:text-[28px] text-center  leading-[40px]  lg:pt-10">
                Profile Update Successfully</h5>



        </div>
    </div>

<script>
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

            // Encrypt the password value for storage or further processing
            // const encryptedPassword = btoa(passwordValue); // Basic encoding, replace with actual encryption if needed
            // document.querySelector(".encrypt_password").value = encryptedPassword;

            return true; // Allow form submission
        }
    }
</script>

    <script>
        document.getElementById('nonResidentialBtn').addEventListener('click', function() {
            document.getElementById('nonResidentialContent').classList.remove('hidden-Residential');
            document.getElementById('residentialContent').classList.add('hidden-Residential');
            document.getElementById('Non_Residential').value = "Non Residential";
            document.getElementById('Residential').value = "";
        });

        document.getElementById('residentialBtn').addEventListener('click', function() {
            document.getElementById('residentialContent').classList.remove('hidden-Residential');
            document.getElementById('nonResidentialContent').classList.add('hidden-Residential');
            document.getElementById('Non_Residential').value = "";
            document.getElementById('Residential').value = "Residential";
        });
    </script>

    <script>
        function nextPart(nextPartId) {
            hideAllParts();
            document.getElementById(nextPartId).classList.remove('hidden');

            updateProgressBar(nextPartId);
        }

        function prevPart(prevPartId) {
            hideAllParts();
            document.getElementById(prevPartId).classList.remove('hidden');

            updateProgressBar(prevPartId);
        }

        function hideAllParts() {
            document.getElementById('part1').classList.add('hidden');
            document.getElementById('part2').classList.add('hidden');
            document.getElementById('part3').classList.add('hidden');
            document.getElementById('part4').classList.add('hidden');
            document.getElementById('part5').classList.add('hidden');
        }

        function updateProgressBar(partId) {
            let progressBar = document.getElementById('progressBar');
            let stepElements = document.querySelectorAll('.step');
            stepElements.forEach(step => step.classList.remove('bg-orange-500', 'border-orange-500'));

            if (partId === 'part1') {
                progressBar.style.width = '20%';
                document.getElementById('step1').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part2') {
                progressBar.style.width = '40%';
                document.getElementById('step2').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part3') {
                progressBar.style.width = '60%';
                document.getElementById('step3').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part4') {
                progressBar.style.width = '80%';
                document.getElementById('step4').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part5') {
                progressBar.style.width = '100%';
                document.getElementById('step5').classList.add('bg-orange-500', 'border-orange-500');
            }
        }
    </script>



    <script>
        function toggleOptionContent() {
            console.log("hello")
            var optionContent = document.getElementById('optionContent');

            optionContent.classList.toggle('hidden');

        }

        function toggleOptionContent2() {
            var optionContent2 = document.getElementById('optionContent2');
            optionContent2.classList.toggle('hidden');
        }

        function toggleOptionContent3() {
            var optionContent3 = document.getElementById('optionContent3');
            optionContent3.classList.toggle('hidden');
        }
    </script>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');

            menu.classList.toggle('hidden');

        }
    </script>
    <script>
        function openModal() {
            document.getElementById('successModal').classList.remove('hidden');
        }

        var modal = document.getElementById('successModal');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                document.getElementById('successModal').classList.add('hidden');
            }
        }
    </script>
    <script>
        function toggleDropdown(id) {
            var dropdownContent = document.getElementById('dropdown-content-' + id);
            var toggleButton = document.getElementById('toggle-button-' + id);

            dropdownContent.classList.toggle('hidden');

            if (!dropdownContent.classList.contains('hidden')) {
                toggleButton.classList.remove('rounded-full');
                toggleButton.classList.add('rounded-tr-[35px]', 'rounded-tl-[35px]');
            } else {
                toggleButton.classList.remove('rounded-tr-[35px]', 'rounded-tl-[35px]');
                toggleButton.classList.add('rounded-full');
            }
        }
    </script>
    <script>
        // Select all select-box elements
        const selectBoxes = document.querySelectorAll('.select-box');

        // Loop through each select box
        selectBoxes.forEach(function(selectBox, index) {
            const selectOption = selectBox.querySelector('.select-option');
            const soValue = selectBox.querySelector('.soValue');
            const optionsLi = selectBox.querySelectorAll('.options li');
            const chooseFileButton = selectBox.querySelector('button');

            // Toggle active class on click of select-option
            selectOption.addEventListener('click', function() {
                selectBox.classList.toggle('active');
                if (selectBox.classList.contains('active')) {
                    chooseFileButton.classList.add('rounded-tr-[19px]');
                    chooseFileButton.classList.add('rounded-br-[0px]');
                } else {
                    chooseFileButton.classList.remove('rounded-tr-[19px]');
                }
            });
            // Set value on click of options
            optionsLi.forEach(function(option) {
                option.addEventListener('click', function() {
                    const text = this.textContent;
                    soValue.value = text;
                    selectBox.classList.remove('active');
                    chooseFileButton.classList.remove('rounded-tr-[19px]');
                    chooseFileButton.classList.remove('rounded-br-[0px]');
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const resetButton = document.getElementById('resetButton');
            const form = document.getElementById('myForm');

            resetButton.addEventListener('click', (event) => {
                event.preventDefault();
                form.reset();
            });
        });
    </script>
    @if (session('success'))
        <script>
            openModal()
        </script>
    @endif

    <script>
        function showFileName() {
            var input = document.getElementById('profileImageInput');
            var fileName = input.files[0].name;
            document.getElementById('soValue13').value = fileName;
        }
    </script>
@endsection
