@extends('include.main')
@section('content')
    <style>
        input.uppercase {
            text-transform: uppercase;
        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Death Certificate
            Application</h2>
        <div>
            <form action="{{ route('death.certificate.save') }}" method="post" id="myForm">
                @csrf
                <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px]">
                    <h3 class=" font-semibold text-[18px] leading-[30px] lg:px-[20px] px-[10px] py-[20px] text-[#000000]">
                        Details</h3>
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[20px] pb-[80px] flex flex-col gap-5">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">1. Date Of
                                Death<span class="text-red-600">*</span></div>
                            <input type="date" id="date_of_death" name="date_of_death" value="{{ old('date_of_death') }}"
                                class="w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]">
                            <span class="" style="color:red">{{ $errors->first('date_of_death') }}</span>

                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">2. Name of the
                                Deceased (full name as usually written)<span class="text-red-600">*</span></div>
                            <input type="text" id="deceased_name" name="deceased_name" value="{{ old('deceased_name') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('deceased_name') }}</span>

                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">3. UID No. of the
                                deceased (if any)</div>
                            <input type="text" id="deceased__uid_number" name="deceased__uid_number"
                                value="{{ old('deceased__uid_number') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('deceased__uid_number') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">4. Mother's name
                            </div>
                            <input type="text" id="mother_name" name="mother_name" value="{{ old('mother_name') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mother_name') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">5. UID No. of the
                                Mother (if any)</div>
                            <input type="text" id="mother_uid_number" name="mother_uid_number"
                                value="{{ old('mother_uid_number') }}"
                                class=" uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mother_uid_number') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">6. Father's name
                            </div>
                            <input type="text" id="father_name" name="father_name" value="{{ old('father_name') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('father_name') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">7. UID No of the
                                Father (if any)</div>
                            <input type="text" id="father_uid_number" name="father_uid_number"
                                value="{{ old('father_uid_number') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('father_uid_number') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">8. Name of
                                Husband/Wife</div>
                            <input type="text" id="spouse_name" name="spouse_name" value="{{ old('spouse_name') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('spouse_name') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">9. Spouse's UID No
                                (if any)
                            </div>
                            <input type="text" id="spouse_uid_number" name="spouse_uid_number"
                                value="{{ old('spouse_uid_number') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('spouse_uid_number') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">10. Age of the
                                deceased <span class="text-red-600">*</span><br>(If the age of the deceased is more than 1
                                year then give the age in complete years. If the age of the deceased is less than 1 year
                                then give it in complete months and if the age of the deceased is less than 1 year then give
                                it in complete days and if the age is less than 1 year then give it in complete days. If
                                less than days then give in full hours)
                            </div>
                            <input type="number" id="death_person_age" name="death_person_age"
                                value="{{ old('death_person_age') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('death_person_age') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">11. Address of the
                                deceased at the time of death</div>
                            <input type="text" id="time_of_death_address" name="time_of_death_address"
                                value="{{ old('time_of_death_address') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('time_of_death_address') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">12. Permanent
                                address of the deceased:</div>
                            <input type="text" id="address_of_death_person" name="address_of_death_person"
                                value="{{ old('address_of_death_person') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('address_of_death_person') }}</span>
                        </div>
                        <p>Place of death (mark 1.2 or 3 along with the name/address of the Hospital/institution and the
                            address of that house)</p>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">13.
                                Hospital/Institution</div>
                            <input type="text" id="hospital_institution" name="hospital_institution"
                                value="{{ old('hospital_institution') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('hospital_institution') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">14. Home Path
                            </div>
                            <input type="text" id="home_path" name="home_path" value="{{ old('home_path') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('home_path') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">15. Other Location
                            </div>
                            <input type="text" id="another_location" name="another_location"
                                value="{{ old('another_location') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('another_location') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">16. Name of
                                Informant</div>
                            <input type="text" id="name_of_informant" name="name_of_informant"
                                value="{{ old('name_of_informant') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('name_of_informant') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">17. Path</div>
                            <input type="text" id="path" name="path" value="{{ old('path') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('path') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">18. Mobile Number
                            </div>
                            <input type="number" id="mobile_number" name="mobile_number"
                                value="{{ old('mobile_number') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mobile_number') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">19. Email id</div>
                            <input type="email" id="email_id" name="email_id" value="{{ old('email_id') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('email_id') }}</span>
                        </div>

                        <br>
                        <br>
                        <div>
                            <p>Name of the village or town where the deceased resided</p>
                            <p>(Deceased usually resides as the place of death may be a friend's place, address entry is not
                                necessary)</p>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">20. City/Village
                                Name</div>
                            <input type="text" id="city_or_village_name" name="city_or_village_name"
                                value="{{ old('city_or_village_name') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('city_or_village_name') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                21. Is it a city or a village (check mark)
                            </div>
                            <br>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="city_or_village" value="City" class="w-[36px]"
                                        {{ old('city_or_village') == 'City' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">City</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="city_or_village" value="Village" class="w-[36px]"
                                        {{ old('city_or_village') == 'Village' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Village</span>
                                </div>
                            </div>
                            <span class="" style="color:red">{{ $errors->first('city_or_village') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">22. Religion
                                (check mark)</div>
                            <br>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="religion" value="Hindu" class="w-[36px]"
                                        {{ old('religion') == 'Hindu' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Hindu</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="religion" value="Muslim" class="w-[36px]"
                                        {{ old('religion') == 'Muslim' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Muslim</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="religion" value="Christian" class="w-[36px]"
                                        {{ old('religion') == 'Christian' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Christian</span>
                                </div>
                            </div>
                            <span class="" style="color:red">{{ $errors->first('religion') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">23. Occupation of
                                the deceased (write zero if no occupation)</div>
                            <input type="text" id="occupation" name="occupation" value="{{ old('occupation') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('occupation') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                24. Type of treatment received before death (tick)
                            </div>
                            <br>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="received_treatment_before_death" value="Institutional"
                                        class="w-[36px]"
                                        {{ old('received_treatment_before_death') == 'Institutional' ? 'checked' : '' }} />
                                    <span
                                        class="font-normal text-[15px] leading-[30px] text-[#000000]">Institutional</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="received_treatment_before_death"
                                        value="of institutional other than medical" class="w-[36px]"
                                        {{ old('received_treatment_before_death') == 'of institutional other than medical' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Of institutional
                                        other than medical.</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="received_treatment_before_death"
                                        value="Did not receive any medical treatment" class="w-[36px]"
                                        {{ old('received_treatment_before_death') == 'Did not receive any medical treatment' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Did not receive any
                                        medical treatment.</span>
                                </div>
                            </div>
                            <span class=""
                                style="color:red">{{ $errors->first('received_treatment_before_death') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                25. Whether the cause of death was medically certified (check mark)
                            </div>
                            <br>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="medical_certified" value="Yes" class="w-[36px]"
                                        {{ old('medical_certified') == 'Yes' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Yes</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="medical_certified" value="No" class="w-[36px]"
                                        {{ old('medical_certified') == 'No' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">No</span>
                                </div>
                            </div>
                            <span class="" style="color:red">{{ $errors->first('medical_certified') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">26. Name of the
                                disease or actual cause of death.</div>
                            <input type="text" id="disease_name" name="disease_name"
                                value="{{ old('disease_name') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('disease_name') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                27. In case of female death, whether the death occurred during pregnancy, at the time of
                                delivery or within 6 weeks after termination of pregnancy (correct)
                            </div>
                            <br>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="female_death" value="Yes" class="w-[36px]"
                                        {{ old('female_death') == 'Yes' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">Yes</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="female_death" value="No" class="w-[36px]"
                                        {{ old('female_death') == 'No' ? 'checked' : '' }} />
                                    <span class="font-normal text-[15px] leading-[30px] text-[#000000]">No</span>
                                </div>
                            </div>
                            <span class="" style="color:red">{{ $errors->first('female_death') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">28. If you were
                                addicted to smoking, form how many.</div>
                            <input type="text" id="smoking_addicted" name="smoking_addicted"
                                value="{{ old('smoking_addicted') }}"
                                class=" uppercase    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('smoking_addicted') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">29. If you were
                                addicted to chewing tobacco in any form then form how many years?</div>
                            <input type="text" id="chewing_tobacco" name="chewing_tobacco"
                                value="{{ old('chewing_tobacco') }}"
                                class=" uppercase w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('chewing_tobacco') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">30. If you were
                                addicted to chewing betel nut (including pan masala), then form how many years?</div>
                            <input type="text" id="chewing_betel_nut" name="chewing_betel_nut"
                                value="{{ old('chewing_betel_nut') }}"
                                class=" uppercase w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('chewing_betel_nut') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">31. If you were
                                addicted to alcohol then form how many years?</div>
                            <input type="text" id="alchol_addicted" name="alchol_addicted"
                                value="{{ old('alchol_addicted') }}"
                                class=" uppercase w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('alchol_addicted') }}</span>
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
@endsection
