[13:26] Sumit Gyanani
@extends('include.main')
@section('content')
    <style>
        .hidden-Residential {
            display: none;
        }

        img#profileImage {
            width: 31%;
            border-radius: 9px;
        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Profile Details
        </h2>
        <div>
            <form action="{{ route('profile.update') }}" method="post" id="myForm" enctype="multipart/form-data">
                @csrf
                <div id="nonResidentialContent" class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 border-b border-[#B1B6C6] mt-5   px-[10px] lg:px-[20px]   pb-[80px] flex flex-col gap-5">

                        <div>

                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name<span
                                    class="text-red-600">*</span></div>
                            <input type="text" name="name" value="{{ $user_data->name }}"
                                class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter" autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('name') }}</span>

                        </div>
                        <div>

                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email<span
                                    class="text-red-600">*</span></div>
                            <input type="email" name="email" value="{{ $user_data->email }}"
                                class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter" autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('email') }}</span>

                        </div>
                        <div>

                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Number<span
                                    class="text-red-600">*</span></div>
                            <input type="number" name="number" value="{{ $user_data->mobile }}"
                                class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter" autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('number') }}</span>

                        </div>
                        <div class="w-full flex flex-col items-center">
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Profile Image</div>
                            <div class="relative">
                                <label for="profileImageInput" class="cursor-pointer">
                                    <div
                                        class="w-[200px] h-[200px] border-2 border-[#B1B6C6] rounded-[12px] flex items-center justify-center overflow-hidden transition-all duration-300
                                                {{ Auth::user()->profile_image ? 'bg-cover bg-center' : 'bg-[#F26F00] text-white' }}">
                                        @if (Auth::user()->profile_image)
                                            <img src="{{ Auth::user()->profile_image }}" class="w-full h-full object-cover"
                                                alt="Profile Image">
                                        @else
                                            <span class="font-semibold text-[16px]">Choose File</span>
                                        @endif
                                    </div>
                                    <input type="file" id="profileImageInput" name="profile_image"
                                        class="absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                                </label>
                            </div>
                            <span class="text-red-600 mt-2">{{ $errors->first('profile_image') }}</span>
                        </div>

                    </div>
                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button id="resetButton"
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                            Reset
                        </button>
                        <button type="submit"
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Update→</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div>
            <form action="{{ route('profile.update') }}" method="post" id="myForm" enctype="multipart/form-data"
                class="bg-white p-10 rounded-xl shadow-lg max-w-xl mx-auto transition-all duration-500 hover:shadow-2xl transform hover:scale-105">
                @csrf
                <div id="nonResidentialContent" class="space-y-8">
                    <!-- Name Field -->
                    <div class="relative z-0">
                        <input type="text" name="name" value="{{ $user_data->name }}" id="name" required
                            class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#F26F00] peer transition-all duration-300"
                            placeholder=" " autocomplete="off" />
                        <label for="name"
                            class="absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-[#F26F00] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Name<span class="text-red-600">*</span>
                        </label>
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    </div>

                    <!-- Email Field -->
                    <div class="relative z-0">
                        <input type="email" name="email" value="{{ $user_data->email }}" id="email" required
                            class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#F26F00] peer transition-all duration-300"
                            placeholder=" " autocomplete="off" />
                        <label for="email"
                            class="absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-[#F26F00] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Email<span class="text-red-600">*</span>
                        </label>
                        <span class="text-red-600">{{ $errors->first('email') }}</span>
                    </div>

                    <!-- Number Field -->
                    <div class="relative z-0">
                        <input type="number" name="number" value="{{ $user_data->mobile }}" id="number" required
                            class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#F26F00] peer transition-all duration-300"
                            placeholder=" " autocomplete="off" />
                        <label for="number"
                            class="absolute text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-[#F26F00] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Number<span class="text-red-600">*</span>
                        </label>
                        <span class="text-red-600">{{ $errors->first('number') }}</span>
                    </div>

                    <!-- Profile Image Field -->
                    <div class="w-full flex flex-col items-center">
                        <div class="font-medium text-[16px] leading-[30px] text-gray-900 pb-2">Profile Image</div>
                        <div class="relative group transition-all duration-500 hover:scale-105 transform">
                            <label for="profileImageInput" class="cursor-pointer">
                                <div
                                    class="w-[200px] h-[200px] border-2 border-gray-300 rounded-lg flex items-center justify-center overflow-hidden bg-gray-100 group-hover:bg-gray-200">
                                    @if (Auth::user()->profile_image)
                                        <img src="{{ Auth::user()->profile_image }}" class="w-full h-full object-cover"
                                            alt="Profile Image">
                                    @else
                                        <span class="font-semibold text-[16px] text-[#F26F00]">Choose File</span>
                                    @endif
                                </div>
                                <input type="file" id="profileImageInput" name="profile_image"
                                    class="absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                            </label>
                        </div>
                        <span class="text-red-600 mt-2">{{ $errors->first('profile_image') }}</span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-between mt-10">
                        <button id="resetButton"
                            class="w-full md:w-[45%] py-3 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                            Reset
                        </button>
                        <button type="submit"
                            class="w-full md:w-[45%] py-3 bg-[#F26F00] text-white rounded-full hover:bg-[#D25500] transition duration-300 ease-in-out transform hover:scale-105">
                            Update →
                        </button>
                    </div>
                </div>
            </form>
        </div> --}}
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
    {{-- <script>
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
    </script> --}}
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
    {{-- <script>
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
    </script> --}}
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
@endsection
