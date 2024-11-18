@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] md:px-[20px] px-[10px] py-[3rem]">
        <h2 class="font-bold text-[24px] lg:text-[32px] leading-[40px] text-[#000000]">
            Marriage Registration Application</h2>
        <div class="">
            <div class="w-full max-w-4xl bg-white mx-auto">
                <div class="relative mb-8 mt-[30px]">
                    <div class="flex justify-between text-sm font-medium">
                        <div id="step1"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            1</div>
                        <div id="step2"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            2</div>
                        <div id="step3"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            3</div>
                        <div id="step4"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            4</div>
                        <div id="step5"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            5</div>
                        <div id="step6"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            6</div>
                    </div>
                    <div class="absolute top-1/2 transform -translate-y-1/2 w-full h-1 bg-gray-300">
                        <div id="progressBar" class="progress-bar absolute top-0 left-0 h-full bg-orange-500"
                            style="width: 16.67%;"></div>
                    </div>
                </div>
            </div>

            <form action="{{ route('marriage.certificate.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="part1" class="mb-6">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
                        <h3
                            class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                            Marriage Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">City
                                </div>
                                <input type="text" id="city" name="city"
                                    class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter City" autocomplete="off" value="{{ old('city') }}">
                                <span class="" style="color:red">{{ $errors->first('city') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Village
                                </div>
                                <input type="text" id="village" name="village"
                                    class="outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter village" autocomplete="off" value="{{ old('village') }}">
                                <span class="" style="color:red">{{ $errors->first('village') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Marriage
                                    Place</div>
                                <input type="text" id="MarriagePlace" name="marrage_place"
                                    class="   outline-none    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Enter Marriage Place" autocomplete="off"
                                    value="{{ old('marrage_place') }}">
                                <span class="" style="color:red">{{ $errors->first('marrage_place') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Marriage
                                    Date</div>
                                <input type="date" id="MarriageDate" name="marrage_date"
                                    value="{{ old('marrage_date') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Select Date">
                                <span class="" style="color:red">{{ $errors->first('marrage_date') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Pincode
                                </div>
                                <input type="number" id="MobileNumber" name="pin_code" value="{{ old('pin_code') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Pincode" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('pin_code') }}</span>
                            </div>
                        </div>
                        <div class="flex justify-center my-10">
                            <div
                                class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5 pb-[20px]">
                                <button type="reset"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                                    Reset
                                </button>
                                <button type="button" onclick="nextPart('part2')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="part2" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
                        <h3
                            class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                            Bride Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2  border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px] ">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name<span
                                        class="text-red-600">*</span></div>
                                <div>
                                    <input type="text" id="soValue3" name="bride_name" value="{{ old('bride_name') }}"
                                        class="soValue outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]"
                                        placeholder="Enter name" autocomplete="off">
                                    <span class="" style="color:red">{{ $errors->first('bride_name') }}</span>
                                </div>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">Date of
                                    Birth</div>
                                <input type="date" id="DateofBirth" name="bride_date_birth"
                                    value="{{ old('bride_date_birth') }}"
                                    class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Select" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_date_birth') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Contact</div>
                                <input type="number" id="Contact" name="bride_contact"
                                    value="{{ old('bride_contact') }}"
                                    class="   outline-none w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Enter" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_contact') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email</div>
                                <input type="email" id="Email" name="bride_email"
                                    value="{{ old('bride_email') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Email" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_email') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Enter
                                    Fathers
                                    Name</div>
                                <input type="text" id="FathersName" name="bride_father_name"
                                    value="{{ old('bride_father_name') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Fathers Name" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_father_name') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Mother’s
                                    Name
                                </div>
                                <input type="text" id="Mother’sName" name="bride_mother_name"
                                    value="{{ old('bride_mother_name') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Mothers Name" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_mother_name') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Address</div>
                                <input type="text" id="Address" name="bride_address_name"
                                    value="{{ old('bride_address_name') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter " autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_address_name') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    District</div>
                                <input type="text" id="District" name="bride_district_name"
                                    value="{{ old('bride_district_name') }}"
                                    class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter " autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_district_name') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">State</div>
                                <input type="text" id="State" name="bride_state_name"
                                    value="{{ old('bride_state_name') }}"
                                    class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_state_name') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Pincode</div>
                                <input type="number" id="Pincode" name="bride_pincode"
                                    value="{{ old('bride_pincode') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter " autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('bride_pincode') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Is Divyang ?
                                </div>
                                <div class="relative">
                                    <select id="bride_is_divyang" name="bride_is_divyang"
                                        class="outline-none w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px] cursor-pointer">
                                        <option value="" disabled
                                            {{ old('bride_is_divyang') == '' ? 'selected' : '' }}>Select</option>
                                        <option value="yes" {{ old('bride_is_divyang') == 'yes' ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="no" {{ old('bride_is_divyang') == 'no' ? 'selected' : '' }}>No
                                        </option>
                                    </select>
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_is_divyang') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-10">
                            <div
                                class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5 pb-[20px]">
                                <button type="button" onclick="prevPart('part1')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                                    Previous
                                </button>
                                <button type="button" onclick="nextPart('part3')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="part3" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
                        <h3
                            class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                            Groom Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2  border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px] ">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name<span
                                        class="text-red-600">*</span></div>
                                <div class>
                                    <input type="text" id="soValue3" name="groom_name"
                                        value="{{ old('groom_name') }}"
                                        class="soValue outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]"
                                        placeholder="Enter name" autocomplete="off">
                                    <span class="" style="color:red">{{ $errors->first('groom_name') }}</span>
                                </div>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">Date of
                                    Birth</div>
                                <input type="date" id="DateofBirth" name="groom_date_birth"
                                    value="{{ old('groom_date_birth') }}"
                                    class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Select" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_date_birth') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Contact</div>
                                <input type="number" id="Contact" name="groom_contact"
                                    value="{{ old('groom_contact') }}"
                                    class="outline-none w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                    placeholder="Enter" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_contact') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email</div>
                                <input type="email" id="Email" name="groom_email"
                                    value="{{ old('groom_email') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Email" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_email') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Enter
                                    Fathers
                                    Name</div>
                                <input type="text" id="FathersName" name="groom_father_name"
                                    value="{{ old('groom_father_name') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Fathers Name" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_father_name') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Mother’s
                                    Name
                                </div>
                                <input type="text" id="Mother’sName" name="groom_mother_name"
                                    value="{{ old('groom_mother_name') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Mothers Name" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_mother_name') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Address</div>
                                <input type="text" id="Address" name="groom_address"
                                    value="{{ old('groom_address') }}"
                                    class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter " autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_address') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    District</div>
                                <input type="text" id="District" name="groom_district"
                                    value="{{ old('groom_district') }}"
                                    class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter " autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_district') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">State</div>
                                <input type="text" id="State" name="groom_state"
                                    value="{{ old('groom_state') }}"
                                    class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter" autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_state') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Pincode</div>
                                <input type="number" id="Pincode" name="groom_pincode"
                                    value="{{ old('groom_pincode') }}"
                                    class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter " autocomplete="off">
                                <span class="" style="color:red">{{ $errors->first('groom_pincode') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Is Divyang?
                                </div>
                                <div class="relative">
                                    <select id="groom_is_divyang" name="groom_is_divyang"
                                        class="outline-none w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px] cursor-pointer">
                                        <option value="" disabled
                                            {{ old('groom_is_divyang') == '' ? 'selected' : '' }}>Select</option>
                                        <option value="yes" {{ old('groom_is_divyang') == 'yes' ? 'selected' : '' }}>
                                            Yes</option>
                                        <option value="no" {{ old('groom_is_divyang') == 'no' ? 'selected' : '' }}>No
                                        </option>
                                    </select>
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_is_divyang') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-10">
                            <div
                                class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5 pb-[20px]">
                                <button type="button" onclick="prevPart('part2')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                                    Previous
                                </button>
                                <button type="button" onclick="nextPart('part4')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="part4" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
                        <div class="border-b border-[#B1B6C6]">
                            <h3
                                class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                                Bride Guardian Details</h3>
                            <div
                                class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2   gap-10 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px] ">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Relation
                                        with Bride</div>
                                    <div class="relative">
                                        <select id="relation_with_bride" name="relation_with_bride"
                                            class="outline-none w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px] cursor-pointer">
                                            <option value="" disabled
                                                {{ old('relation_with_bride') == '' ? 'selected' : '' }}>Select</option>
                                            <option value="father"
                                                {{ old('relation_with_bride') == 'father' ? 'selected' : '' }}>Father
                                            </option>
                                            <option value="mother"
                                                {{ old('relation_with_bride') == 'mother' ? 'selected' : '' }}>Mother
                                            </option>
                                            <option value="sister"
                                                {{ old('relation_with_bride') == 'sister' ? 'selected' : '' }}>Sister
                                            </option>
                                            <option value="brother"
                                                {{ old('relation_with_bride') == 'brother' ? 'selected' : '' }}>Brother
                                            </option>
                                        </select>
                                        <span class=""
                                            style="color:red">{{ $errors->first('relation_with_bride') }}</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Name</div>
                                    <input type="text" id="Name" name="bride_guardian_name"
                                        value="{{ old('bride_guardian_name') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_name') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Address</div>
                                    <input type="text" id="Address" name="bride_guardian_address"
                                        value="{{ old('bride_guardian_address') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_address') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        District</div>
                                    <input type="text" id="District" name="bride_guardian_district"
                                        value="{{ old('bride_guardian_district') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_district') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">State
                                    </div>
                                    <input type="text" id="State" name="bride_guardian_state"
                                        value="{{ old('bride_guardian_state') }}"
                                        class="  outline-none  w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_state') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Pincode</div>
                                    <input type="number" id="Pincode" name="bride_guardian_pincode"
                                        value="{{ old('bride_guardian_pincode') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_pincode') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Contact</div>
                                    <input type="number" id="Contact" name="bride_guardian_contact"
                                        value="{{ old('bride_guardian_contact') }}"
                                        class="   outline-none    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_contact') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Email</div>
                                    <input type="email" id="Email" name="bride_guardian_email"
                                        value="{{ old('bride_guardian_email') }}"
                                        class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter Email" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_guardian_email') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-[#B1B6C6] mt-6">
                            <h3
                                class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                                Groom Guardian Details</h3>
                            <div
                                class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2  border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px] ">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Relation
                                        with Groom</div>
                                    <div class="relative">
                                        <select id="guardian_relation_with_groom" name="guardian_relation_with_groom"
                                            class="outline-none w-full border border-[#B1B6C6] rounded-[100px] h-[60px] pl-[19px] cursor-pointer">
                                            <option value="" disabled
                                                {{ old('guardian_relation_with_groom') == '' ? 'selected' : '' }}>Select
                                            </option>
                                            <option value="father"
                                                {{ old('guardian_relation_with_groom') == 'father' ? 'selected' : '' }}>
                                                Father</option>
                                            <option value="mother"
                                                {{ old('guardian_relation_with_groom') == 'mother' ? 'selected' : '' }}>
                                                Mother</option>
                                            <option value="sister"
                                                {{ old('guardian_relation_with_groom') == 'sister' ? 'selected' : '' }}>
                                                Sister</option>
                                            <option value="brother"
                                                {{ old('guardian_relation_with_groom') == 'brother' ? 'selected' : '' }}>
                                                Brother</option>
                                        </select>
                                        <span class=""
                                            style="color:red">{{ $errors->first('guardian_relation_with_groom') }}</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Name</div>
                                    <input type="text" id="Name" name="groom_guardian_name"
                                        value="{{ old('groom_guardian_name') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_guardian_name') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Address</div>
                                    <input type="text" id="Address" name="guardian_groom_address"
                                        value="{{ old('guardian_groom_address') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('guardian_groom_address') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        District</div>
                                    <input type="text" id="District" name="guardian_groom_district"
                                        value="{{ old('guardian_groom_district') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('guardian_groom_district') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">State
                                    </div>
                                    <input type="text" id="State" name="guardian_groom_state"
                                        value="{{ old('guardian_groom_state') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('guardian_groom_state') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Pincode</div>
                                    <input type="number" id="Pincode" name="guardian_groom_pincode"
                                        value="{{ old('guardian_groom_pincode') }}"
                                        class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('guardian_groom_pincode') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Contact</div>
                                    <input type="number" id="Contact" name="guardian_groom_contact"
                                        value="{{ old('guardian_groom_contact') }}"
                                        class="   outline-none w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('guardian_groom_contact') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Email</div>
                                    <input type="email" id="Email" name="guardian_groom_email"
                                        value="{{ old('guardian_groom_email') }}"
                                        class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter Email" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('guardian_groom_email') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-10">
                            <div
                                class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5 pb-[20px]">
                                <button type="button" onclick="prevPart('part3')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                                    Previous
                                </button>
                                <button type="button" onclick="nextPart('part5')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="part5" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
                        <div class="border-b border-[#B1B6C6]">
                            <h3
                                class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                                Bride Witness Details
                            </h3>
                            <div
                                class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2   border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px] ">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Name</div>
                                    <input type="text" id="Name" name="bride_witness_name"
                                        value="{{ old('bride_witness_name') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_witness_name') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Address</div>
                                    <input type="text" id="Address" name="bride_witness_address"
                                        value="{{ old('bride_witness_address') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_witness_address') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        District</div>
                                    <input type="text" id="District" name="bride_witness_district"
                                        value="{{ old('bride_witness_district') }}"
                                        class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_witness_district') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">State
                                    </div>
                                    <input type="text" id="State" name="bride_witness_state"
                                        value="{{ old('bride_witness_state') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_witness_state') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Pincode</div>
                                    <input type="number" id="Pincode" name="bride_witness_pincode"
                                        value="{{ old('bride_witness_pincode') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_witness_pincode') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Contact</div>
                                    <input type="number" id="Contact" name="bride_witness_contact"
                                        value="{{ old('bride_witness_contact') }}"
                                        class="   outline-none    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('bride_witness_contact') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-[#B1B6C6] mt-6">
                            <h3
                                class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[40px] py-[20px] text-[#000000]">
                                Groom Witness Details
                            </h3>
                            <div
                                class="lg:grid lg:grid-cols-3 lg:gap-10 flex flex-col gap-5 md:grid md:grid-cols-2  border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[40px] pb-[100px] ">

                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Name</div>
                                    <input type="text" id="Name" name="groom_witness_name"
                                        value="{{ old('groom_witness_name') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_witness_name') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px] ">
                                        Address</div>
                                    <input type="text" id="Address" name="groom_witness_address"
                                        value="{{ old('groom_witness_address') }}"
                                        class=" outline-none   w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_witness_address') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        District</div>
                                    <input type="text" id="District" name="groom_witness_district"
                                        value="{{ old('groom_witness_district') }}"
                                        class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_witness_district') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">State
                                    </div>
                                    <input type="text" id="State" name="groom_witness_state"
                                        value="{{ old('groom_witness_state') }}"
                                        class="  outline-none w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_witness_state') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Pincode</div>
                                    <input type="number" id="Pincode" name="groom_witness_pincode"
                                        value="{{ old('groom_witness_pincode') }}"
                                        class="  outline-none     w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter " autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_witness_pincode') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                        Contact</div>
                                    <input type="number" id="Contact" name="groom_witness_contact"
                                        value="{{ old('groom_witness_contact') }}"
                                        class="   outline-none    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                        placeholder="Enter" autocomplete="off">
                                    <span class=""
                                        style="color:red">{{ $errors->first('groom_witness_contact') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-10">
                            <div
                                class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5 pb-[20px]">
                                <button type="button" onclick="prevPart('part4')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                                    Previous
                                </button>
                                <button type="button" onclick="nextPart('part6')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="part6" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 p-6">
                        <h3 class="font-semibold text-[18px] leading-[30px] text-[#000000]">Required Documents</h3>
                        <p class="font-normal text-[15px] leading-[30px] text-[#000000]">Only one file can be uploaded for
                            one document. If multiple files need to be uploaded, please combine all files into a .pdf and
                            then upload.</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-5">
                            <!-- ID/Age proof of Bride -->
                            <div>
                                <h4 class="font-semibold text-[18px] leading-[30px] text-[#000000]">ID/Age proof of Bride
                                </h4>
                                <div class="flex flex-col items-center gap-5 mt-4">
                                    <div id="image-container"
                                        class="w-[100px] h-[100px] border border-[#647986] rounded-[20px] flex justify-center items-center cursor-pointer"
                                        onclick="document.getElementById('file-input').click();">
                                        <img id="preview-image" src="{{ asset('admin-assets/images/gallery-add.png') }}"
                                            alt="Preview" />
                                    </div>
                                    <input type="file" name="birde_age_proof" id="file-input"
                                        accept=".jpg,.jpeg,.pdf" class="hidden"
                                        onchange="previewFile(this, 'preview-image')">
                                    <span class="text-red-500">{{ $errors->first('birde_age_proof') }}</span>
                                    <p class="font-normal text-[16px] leading-[30px] text-[#11142D]">Allowed documents are
                                        Pan Card, Voter ID, or Driving License. Only .jpg and .pdf files. Max size: 5MB.</p>
                                </div>
                            </div>

                            <!-- ID/Age proof of Bride Father -->
                            <div>
                                <h4 class="font-semibold text-[18px] leading-[30px] text-[#000000]">ID/Age proof of Bride's
                                    Father</h4>
                                <div class="flex flex-col items-center gap-5 mt-4">
                                    <div id="image-container1"
                                        class="w-[100px] h-[100px] border border-[#647986] rounded-[20px] flex justify-center items-center cursor-pointer"
                                        onclick="document.getElementById('file-input1').click();">
                                        <img id="preview-image1"
                                            src="{{ asset('admin-assets/images/gallery-add.png') }}" alt="Preview" />
                                    </div>
                                    <input type="file" name="bride_age_father_proof" id="file-input1"
                                        accept=".jpg,.jpeg,.pdf" class="hidden"
                                        onchange="previewFile(this, 'preview-image1')">
                                    <span class="text-red-500">{{ $errors->first('bride_age_father_proof') }}</span>
                                    <p class="font-normal text-[16px] leading-[30px] text-[#11142D]">Allowed documents are
                                        Pan Card, Voter ID, or Driving License. Only .jpg and .pdf files. Max size: 5MB.</p>
                                </div>
                            </div>

                            <!-- ID/Age proof of Bride Mother -->
                            <div>
                                <h4 class="font-semibold text-[18px] leading-[30px] text-[#000000]">ID/Age proof of Bride's
                                    Mother</h4>
                                <div class="flex flex-col items-center gap-5 mt-4">
                                    <div id="image-container2"
                                        class="w-[100px] h-[100px] border border-[#647986] rounded-[20px] flex justify-center items-center cursor-pointer"
                                        onclick="document.getElementById('file-input2').click();">
                                        <img id="preview-image2"
                                            src="{{ asset('admin-assets/images/gallery-add.png') }}" alt="Preview" />
                                    </div>
                                    <input type="file" name="bride_age_mother_proof" id="file-input2"
                                        accept=".jpg,.jpeg,.pdf" class="hidden"
                                        onchange="previewFile(this, 'preview-image2')">
                                    <span class="text-red-500">{{ $errors->first('bride_age_mother_proof') }}</span>
                                    <p class="font-normal text-[16px] leading-[30px] text-[#11142D]">Allowed documents are
                                        Pan Card, Voter ID, or Driving License. Only .jpg and .pdf files. Max size: 5MB.</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-10">
                            <div class="flex flex-col items-center justify-center gap-5">
                                <button type="button" onclick="prevPart('part5')"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">Previous</button>
                                <button type="submit"
                                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- <script>
        function updateProgressBar(step) {
            const progressBar = document.getElementById('progressBar');
            const progress = (step / 6) * 100;
            progressBar.style.width = progress + '%';
            console.log(`Progress bar updated to ${progress}% for step ${step}`);
        }

        function nextPart(partId, step) {
            document.querySelectorAll('[id^="part"]').forEach(part => {
                part.classList.add('hidden');
            });
            document.getElementById(partId).classList.remove('hidden');
            updateProgressBar(step);
            console.log(`Moved to next part: ${partId}, step: ${step}`);
        }

        function prevPart(partId, step) {
            document.querySelectorAll('[id^="part"]').forEach(part => {
                part.classList.add('hidden');
            });
            document.getElementById(partId).classList.remove('hidden');
            updateProgressBar(step);
            console.log(`Moved to previous part: ${partId}, step: ${step}`);
        }
    </script> --}}
    <script>
        function previewFile(input, imgId) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(imgId).src = e.target.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        function nextPart(partId) {
            document.querySelectorAll('[id^="part"]').forEach(part => {
                part.classList.add('hidden');
            });
            document.getElementById(partId).classList.remove('hidden');
        }

        function prevPart(partId) {
            document.querySelectorAll('[id^="part"]').forEach(part => {
                part.classList.add('hidden');
            });
            document.getElementById(partId).classList.remove('hidden');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const closeButton = document.getElementById('close-button');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');

            if (menuButton) {
                menuButton.addEventListener('click', function() {
                    console.log('Menu button clicked');
                    sidebar.classList.toggle('-translate-x-full');
                    sidebar.classList.toggle('xl:-translate-x-full');
                    mainContent.classList.toggle('shifted');
                });
            } else {
                console.error('Menu button not found');
            }

            if (closeButton) {
                closeButton.addEventListener('click', function() {
                    console.log('Close button clicked');
                    sidebar.classList.toggle('-translate-x-full');
                    sidebar.classList.toggle('xl:-translate-x-full');
                    mainContent.classList.toggle('shifted');
                });
            } else {
                console.error('Close button not found');
            }

            const currentLocation = window.location.href;
            const sidebarLinks = document.querySelectorAll('#sidebar a');

            sidebarLinks.forEach(link => {
                if (link.href === currentLocation) {
                    link.classList.add('bg-[#FFE4CD]', '');
                    link.closest('div').classList.remove('hidden');
                }
            });
        });
    </script>
    <script>
        const selectBoxes = document.querySelectorAll('.select-box');

        selectBoxes.forEach(function(selectBox, index) {
            const selectOption = selectBox.querySelector('.select-option');
            const soValue = selectBox.querySelector('.soValue');
            const optionsLi = selectBox.querySelectorAll('.options li');

            selectOption.addEventListener('click', function() {
                selectBox.classList.toggle('active');
            });

            optionsLi.forEach(function(option) {
                option.addEventListener('click', function() {
                    const text = this.textContent;
                    soValue.value = text;
                    selectBox.classList.remove('active');
                });
            });
        });
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
@endsection
