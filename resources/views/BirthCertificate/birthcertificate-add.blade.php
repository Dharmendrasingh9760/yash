@extends('include.main')
@section('content')
    <style>
        input.uppercase {
            text-transform: uppercase;
        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Birth Certificate
        </h2>
        <div>
            <form action="{{ route('birth.certificate.save') }}" method="post" id="myForm">
                @csrf
                <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px]">
                    <h3 class=" font-semibold text-[18px] leading-[30px] lg:px-[20px] px-[10px] py-[20px] text-[#000000]">
                        Birth Certificate Details</h3>
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[20px] pb-[80px] flex flex-col gap-5">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">1. Born Date <br>
                                (Enter the correct day, month and year of birth of the child like 01-01-2000)<span
                                    class="text-red-600">*</span></div>
                            <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('date_of_birth') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">2. Gender</div>
                            <select id="gender" name="gender"
                                class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px]">
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Transgender" {{ old('gender') == 'Transgender' ? 'selected' : '' }}>
                                    Transgender</option>
                                <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others</option>
                            </select>
                            <span class="" style="color:red">{{ $errors->first('gender') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">3. Name of new born
                                baby, if any <br> (Leave blank if name is not there) (in Hindi) (in English capital letters)
                            </div>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('name') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">4. Father's name
                                <br> (in full as usually written) (in Hindi) (in English capital letters)</div>
                            <input type="text" name="name_of_father" value="{{ old('name_of_father') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('name_of_father') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">5. Mother's name
                                <br> (in full as usually written) (in Hindi) (in English capital letters)</div>
                            <input type="text" name="name_of_mother" value="{{ old('name_of_mother') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('name_of_mother') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">6. Address of
                                parents at the time of birth's</div>
                            <input type="text" name="address_parent_child" value="{{ old('address_parent_child') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('address_parent_child') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">7. Permanent
                                residential address of parents</div>
                            <input type="text" name="permant_address" value="{{ old('permant_address') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('permant_address') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">8. Place of Birth
                                <br> (address of the house where the birth took place)</div>
                            <input type="text" name="place_of_birth" value="{{ old('place_of_birth') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('place_of_birth') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">9. Name of
                                Informant</div>
                            <input type="text" name="name_of_informant" value="{{ old('name_of_informant') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('name_of_informant') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">10. Address</div>
                            <input type="text" name="address" value="{{ old('address') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('address') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">11. Mobile Number
                            </div>
                            <input type="number" name="mobile_number" value="{{ old('mobile_number') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mobile_number') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">12. Email id</div>
                            <input type="email" name="email_id" value="{{ old('email_id') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('email_id') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">13. Name of the
                                village or town where the mother resides <br> (where the mother usually resides as the place
                                of delivery may be Egypt address not required)</div>
                            <input type="text" name="mother_resides_place" value="{{ old('mother_resides_place') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mother_resides_place') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">14. Family
                                Tradition</div>
                            <select id="family_tradition" name="family_tradition"
                                class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px]">
                                <option value="" disabled selected>Select Family Tradition</option>
                                <option value="Hindu" {{ old('family_tradition') == 'Hindu' ? 'selected' : '' }}>Hindu
                                </option>
                                <option value="Muslim" {{ old('family_tradition') == 'Muslim' ? 'selected' : '' }}>Muslim
                                </option>
                                <option value="Islam" {{ old('family_tradition') == 'Islam' ? 'selected' : '' }}>Islam
                                </option>
                                <option value="Others" {{ old('family_tradition') == 'Others' ? 'selected' : '' }}>Others
                                </option>
                            </select>
                            <span class="" style="color:red">{{ $errors->first('family_tradition') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">15. Father's
                                educational level <br> (Enter educational level completed e.g. if father is up to class 7 If
                                you have studied only and passed class 6 exam then write class 8 only)</div>
                            <input type="text" name="father_educational_level"
                                value="{{ old('father_educational_level') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class=""
                                style="color:red">{{ $errors->first('father_educational_level') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">16. Mother's
                                educational level <br> (Enter the educational level completed, like if the father has
                                studied only till class 7 and has passed the examination of class 6 only, then write class 6
                                only)</div>
                            <input type="text" name="mother_educational_level"
                                value="{{ old('mother_educational_level') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class=""
                                style="color:red">{{ $errors->first('mother_educational_level') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">17. Father's
                                business <br> (If there is no business then write zero)</div>
                            <input type="text" name="father_business" value="{{ old('father_business') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('father_business') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">18. Mother's age
                                at the time of marriage <br></div>
                            <input type="number" name="mother_age_at_marriage"
                                value="{{ old('mother_age_at_marriage') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mother_age_at_marriage') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">19. At the time of
                                this child's birth <br> (Mother's age in complete years)</div>
                            <input type="number" name="time_of_child_birth" value="{{ old('time_of_child_birth') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('time_of_child_birth') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">20. Write the
                                number of uninhabited people this year of Mother. <br> (Number of children from Purna's
                                marriage if Jodi Javeni)</div>
                            <input type="text" name="uninhabited_people_this_year_of_mother"
                                value="{{ old('uninhabited_people_this_year_of_mother') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class=""
                                style="color:red">{{ $errors->first('uninhabited_people_this_year_of_mother') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Under what
                                auspices did the delivery take place?(check mark)</div>
                            <br>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="Under_auspices_delivery_take_place" value="Yes"
                                        {{ old('Under_auspices_delivery_take_place') == 'Yes' ? 'checked' : '' }}
                                        class="w-[36px]" />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Yes</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="Under_auspices_delivery_take_place" value="No"
                                        {{ old('Under_auspices_delivery_take_place') == 'No' ? 'checked' : '' }}
                                        class="w-[36px]" />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">No</span>
                                </div>
                                <span class=""
                                    style="color:red">{{ $errors->first('Under_auspices_delivery_take_place') }}</span>
                            </div>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">21. time of
                                conception <br></div>
                            <input type="number" name="time_of_conception" value="{{ old('time_of_conception') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('time_of_conception') }}</span>
                        </div>

                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">22. Weight at the
                                time of birth <br> (kg). (if known)</div>
                            <input type="number" name="weight_at_birth" value="{{ old('weight_at_birth') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('weight_at_birth') }}</span>
                        </div>
                    </div>
                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button id="resetButton" type="button"
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
                form.reset();
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
