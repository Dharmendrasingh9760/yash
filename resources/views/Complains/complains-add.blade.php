@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Complain
            Application</h2>
        <div>
            <form action="{{ route('complains.save') }}" method="post" id="myForm">
                @csrf
                <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                    <h3
                        class=" font-semibold text-[18px] leading-[30px]   lg:px-[20px] px-[10px]   py-[20px] text-[#000000]">
                        Details</h3>
                    <div class="border-b border-[#B1B6C6] pb-[40px]">
                        <div
                            class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10  mt-5   px-[10px] lg:px-[20px]   pb-[30px] flex flex-col gap-5">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Name<span class="text-red-600">*</span>
                                </div>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter name" autocomplete="off">
                                {{-- <span class="" style="color:red">{{ $errors->first('name') }}</span> --}}
                                @if ($errors->has('name'))
                                    <div
                                        class="mt-[10px] p-[10px] bg-[#ffe6e6] border-l-4 border-[#ff4d4d] text-[#cc0000] rounded-[5px] text-sm">
                                        <strong>Error:</strong> {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Mobile
                                    Number<span class="text-red-600">*</span></div>
                                <input type="number" id="mobile_number" name="mobile_number"
                                    value="{{ old('mobile_number') }}"
                                    class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Enter mobile number" autocomplete="off">
                                {{-- <span class="" style="color:red">{{ $errors->first('mobile_number') }}</span> --}}
                                @if ($errors->has('mobile_number'))
                                    <div
                                        class="mt-[10px] p-[10px] bg-[#ffe6e6] border-l-4 border-[#ff4d4d] text-[#cc0000] rounded-[5px] text-sm">
                                        <strong>Error:</strong> {{ $errors->first('mobile_number') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email id<span
                                        class="text-red-600"></span></div>
                                <input type="text" id="email_id" name="email_id" value="{{ old('email_id') }}"
                                    class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Enter email id" autocomplete="off">
                                {{-- <span class="" style="color:red">{{ $errors->first('email_id') }}</span> --}}
                                @if ($errors->has('email_id'))
                                    <div
                                        class="mt-[10px] p-[10px] bg-[#ffe6e6] border-l-4 border-[#ff4d4d] text-[#cc0000] rounded-[5px] text-sm">
                                        <strong>Error:</strong> {{ $errors->first('email_id') }}
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Select Query<span class="text-red-600">*</span>
                                </div>
                                <select id="select_query" name="select_query"
                                    class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px]">
                                    <option value="" disabled selected>Select Query</option>
                                    <option value="Property Tax Complain"
                                        {{ old('select_query') == 'Property Tax Complain' ? 'selected' : '' }}>Property Tax
                                        Complain</option>
                                    <option value="Birth Certificate Complain"
                                        {{ old('select_query') == 'Birth Certificate Complain' ? 'selected' : '' }}>Birth
                                        Certificate Complain</option>
                                    <option value="Death Certificate Complain"
                                        {{ old('select_query') == 'Death Certificate Complain' ? 'selected' : '' }}>Death
                                        Certificate Complain</option>
                                    <option value="Marriage Certificate Complain"
                                        {{ old('select_query') == 'Marriage Certificate Complain' ? 'selected' : '' }}>
                                        Marriage Certificate Complain</option>
                                    <option value="Trade License Management Complain"
                                        {{ old('select_query') == 'Trade License Management Complain' ? 'selected' : '' }}>
                                        Trade License Management Complain</option>
                                </select>
                                {{-- <span class="" style="color:red">{{ $errors->first('select_query') }}</span> --}}
                                @if ($errors->has('select_query'))
                                    <div
                                        class="mt-[10px] p-[10px] bg-[#ffe6e6] border-l-4 border-[#ff4d4d] text-[#cc0000] rounded-[5px] text-sm">
                                        <strong>Error:</strong> {{ $errors->first('select_query') }}
                                    </div>
                                @endif
                            </div>
                            <div class="px-[20px]">
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Complain<span class="text-red-600">*</span>
                                </div>
                                <textarea name="complain" class="w-full border outline-none border-[#B1B6C6] p-[19px] rounded-[30px] h-[200px]"
                                    placeholder="Write Here">{{ old('complain') }}</textarea>
                                {{-- <span class="" style="color:red">{{ $errors->first('complain') }}</span> --}}
                                @if ($errors->has('complain'))
                                    <div
                                        class="mt-[10px] p-[10px] bg-[#ffe6e6] border-l-4 border-[#ff4d4d] text-[#cc0000] rounded-[5px] text-sm">
                                        <strong>Error:</strong> {{ $errors->first('complain') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button id="resetButton"
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                            Reset
                        </button>
                        <button type="submit"
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Submit→</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const resetButton = document.getElementById('resetButton');
            const form = document.getElementById('myForm');

            resetButton.addEventListener('click', (event) => {
                event.preventDefault();

                // Clear all input fields
                const inputs = form.querySelectorAll('input, select, textarea');
                inputs.forEach(input => input.value = '');

                // If you are using old() for select fields
                const selects = form.querySelectorAll('select');
                selects.forEach(select => select.value = '');

                // You can also clear validation error messages here if needed
                const errorMessages = form.querySelectorAll('.error-message');
                errorMessages.forEach(message => message.textContent = '');
            });
        });
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
@endsection
