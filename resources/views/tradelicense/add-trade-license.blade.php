@extends('include.main')
@section('content')
    @php
        use App\Models\TradeCategory;
    @endphp
    <div class="xl:px-[4rem] md:px-[20px] px-[10px] py-[1rem]">
        <div class="lg:flex justify-between">
            <h2 class=" font-bold text-[23px] lg:text-[32px] leading-[32px] lg:leading-[40px] text-[#000000]">Apply
                for New Trade License</h2>
        </div>
        <div class="">
            <div class="w-full max-w-4xl bg-white  mx-auto">
                <div class="relative mb-8 mt-[30px]">
                    <div class="flex justify-between text-sm font-medium">
                        <div id="step1"
                            class="step z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            1</div>
                        <div id="step2"
                            class="step  z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            2</div>
                        <div id="step3"
                            class="step  z-40 bg-gray-400 text-white rounded-full h-8 w-8 flex items-center justify-center border-4 border-gray-400">
                            3</div>
                    </div>
                    <div class="absolute top-1/2 transform -translate-y-1/2 w-full h-1 bg-gray-300">
                        <div id="progressBar" class="progress-bar absolute top-0 left-0 h-full bg-orange-500"
                            style="width: 20%;"></div>
                    </div>
                </div>
            </div>
            <form action="{{ route('trade.license.save') }}" method="Post" enctype="multipart/form-data" id="myForm">
                @csrf
                <div id="part1" class="mb-6">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px]">
                        <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Trade Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 mt-5 flex flex-col gap-5 pb-[30px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade License
                                    Type
                                    <span class="text-red-600">*</span>
                                </div>
                                <div class="select-box relative">
                                    <select name="license_type" id="license_type"
                                        class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                        <option value="" disabled {{ old('license_type') ? '' : 'selected' }}>Select
                                            Trade License</option>
                                        <option value="New License"
                                            {{ old('license_type') == 'New License' ? 'selected' : '' }}>New License
                                        </option>
                                        <option value="Temporary License"
                                            {{ old('license_type') == 'Temporary License' ? 'selected' : '' }}>Temporary
                                            License</option>
                                        <option value="Renewal License"
                                            {{ old('license_type') == 'Renewal License' ? 'selected' : '' }}>Renewal License
                                        </option>
                                    </select>
                                </div>
                                <span class="text-red-600">{{ $errors->first('license_type') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of Trade
                                </div>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Ex: ABC Shop" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('name') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade
                                    Commencement Date</div>
                                <input type="date" name="commencement_date" value="{{ old('commencement_date') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('commencement_date') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade Period
                                </div>
                                <div class="select-box relative">
                                    <select name="trade_period" id="trade_period"
                                        class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                        <option value="" disabled {{ old('trade_period') ? '' : 'selected' }}>Select
                                            Trade Period</option>
                                        <option value="1 Year" {{ old('trade_period') == '1 Year' ? 'selected' : '' }}>1
                                            Year</option>
                                        <option value="2 Year" {{ old('trade_period') == '2 Year' ? 'selected' : '' }}>2
                                            Year</option>
                                        <option value="3 Year" {{ old('trade_period') == '3 Year' ? 'selected' : '' }}>3
                                            Year</option>
                                        <option value="4 Year" {{ old('trade_period') == '4 Year' ? 'selected' : '' }}>4
                                            Year</option>
                                        <option value="5 Year" {{ old('trade_period') == '5 Year' ? 'selected' : '' }}>5
                                            Year</option>
                                    </select>
                                </div>
                                <span class="text-red-600">{{ $errors->first('trade_period') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade GST No
                                </div>
                                <input type="number" name="trade_gst_no" value="{{ old('trade_gst_no') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Trade GST No." autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('trade_gst_no') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade Purpose
                                </div>
                                <input type="text" name="trade_purpose" value="{{ old('trade_purpose') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="TL_NEW_TRADE_PURPOSE" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('trade_purpose') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="lg:flex md:flex justify-between items-center">
                        <button onclick="addTradeUnitForm(event)"
                            class="w-[200px] mx-[20px] mt-3 lg:mt-5 h-[60px] rounded-[100px] border border-[#F26F00] text-center font-semibold text-[16px] leading-[30px] text-[#F26F00]">
                            + Add Trade Units
                        </button>
                    </div>

                    <div id="trade-units-container">
                        <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px] trade-unit-form">
                            <div class="lg:flex md:flex justify-between items-center">
                                <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Trade Unit
                                </h3>
                                <button onclick="removeTradeUnitForm(this)" type="button"
                                    class="flex items-center justify-center bg-red-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-red-600 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-400">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Remove
                                </button>

                            </div>
                            <div class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 flex flex-col gap-5 mt-5 pb-[30px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade Type
                                    </div>
                                    <div class="select-box relative">
                                        <select name="unit[0][trade_type]" id="trade_type_0"
                                            class="trade_type outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]"
                                            onchange="filterSubTypes(this)">
                                            <option value="" disabled selected>Select Trade Type</option>
                                            @foreach ($TradeCategory as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <span class="text-red-600">{{ $errors->first('unit.0.trade_type') }}</span>
                                </div>

                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Trade
                                        Sub-Type</div>
                                    <div class="select-box relative">
                                        <select name="unit[0][trade_subType]" id="trade_subType_0"
                                            class="trade_subType outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                            <option value="" disabled selected>Select Trade Sub-Type</option>
                                            <!-- Sub-Type options will be dynamically added based on the selected category -->
                                        </select>
                                    </div>
                                    <span class="text-red-600">{{ $errors->first('unit.0.trade_subType') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">UOM (Unit
                                        of Measurement)</div>
                                    <input type="text" name="unit[0][mou]" value="{{ old('unit.0.mou') }}"
                                        class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Ex: SQFT" autocomplete="off">
                                    <span class="text-red-600">{{ $errors->first('unit.0.mou') }}</span>
                                </div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">UOM Value
                                    </div>
                                    <input type="number" name="unit[0][mou_value]"
                                        value="{{ old('unit.0.mou_value') }}"
                                        class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                        placeholder="Enter UOM Value" autocomplete="off">
                                    <span class="text-red-600">{{ $errors->first('unit.0.mou_value') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px]">
                        <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Trade Location
                            Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 mt-5 pb-[30px] flex flex-col gap-5">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">City</div>
                                <input type="text" name="city" value="{{ old('city') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter city" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('city') }}</span>

                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Door/House
                                    Number</div>
                                <input type="number" name="door" value="{{ old('door') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Door/House Number" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('door') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Building
                                    /Colony Name</div>
                                <input type="text" name="colony_name" value="{{ old('colony_name') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Building /Colony Name" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('colony_name') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Street Name
                                </div>
                                <input type="text" name="state_name" value="{{ old('state_name') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Street Name" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('state_name') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Village</div>
                                <input type="text" name="village" value="{{ old('village') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter village" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('village') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Pincode</div>
                                <input type="number" name="pin_code" value="{{ old('pin_code') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Pin code" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('pin_code') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Electricity
                                    Connection Number</div>
                                <input type="number" name="collection_name" value="{{ old('collection_name') }}"
                                    class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                    placeholder="Enter Electricity Connection Number" autocomplete="off">
                                <span class="text-red-600">{{ $errors->first('collection_name') }}</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button type="button" id="resetButton"
                        class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">Reset</button>
                        <button type="button" onclick="nextPart('part2')"
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Next</button>

                    </div>
                </div>
                <div id="part2" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px]">
                        <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Owner Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 mt-3 flex flex-col gap-5 pb-[30px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Type of Ownership <span class="text-red-600">*</span>
                                </div>
                                <div class="select-box relative">
                                    <select name="type_of_ownership" id="type_of_ownership"
                                        class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                        <option value="" disabled {{ old('type_of_ownership') ? '' : 'selected' }}>
                                            Select Type of Ownership</option>
                                        <option value="Individual"
                                            {{ old('type_of_ownership') == 'Individual' ? 'selected' : '' }}>Individual
                                        </option>
                                        <option value="Institutional - Government"
                                            {{ old('type_of_ownership') == 'Institutional - Government' ? 'selected' : '' }}>
                                            Institutional - Government</option>
                                        <option value="Institutional - Private"
                                            {{ old('type_of_ownership') == 'Institutional - Private' ? 'selected' : '' }}>
                                            Institutional - Private</option>
                                    </select>
                                </div>
                                <span class="text-red-600">{{ $errors->first('type_of_ownership') }}</span>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Type of Sub -
                                    Ownership</div>
                                <div class="select-box relative">
                                    <select name="type_of_sub_ownership" id="type_of_sub_ownership"
                                        class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                        <option value="" disabled
                                            {{ old('type_of_sub_ownership') ? '' : 'selected' }}>Select Type of Sub -
                                            Ownership</option>
                                        <option value="Multiple Owners"
                                            {{ old('type_of_sub_ownership') == 'Multiple Owners' ? 'selected' : '' }}>
                                            Multiple Owners</option>
                                        <option value="Single Owner"
                                            {{ old('type_of_sub_ownership') == 'Single Owner' ? 'selected' : '' }}>Single
                                            Owner</option>
                                    </select>
                                </div>
                                <span class="text-red-600">{{ $errors->first('type_of_sub_ownership') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex justify-between items-center">
                        <button onclick="addOwnerInfoForm(event)"
                            class="mt-4 mx-[20px] w-[200px] h-[60px] rounded-[100px] border border-[#F26F00] text-center font-semibold text-[16px] leading-[30px] text-[#F26F00]">+Add
                            Owner</button>
                    </div>
                    <div id="owner-info-container">
                        <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px] owner-info-form">
                            <div class="lg:flex justify-between items-center">
                                <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Owner
                                    Information</h3>
                            </div>
                            <div>
                                <div
                                    class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 mt-5 flex flex-col gap-5 pb-[30px]">
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Mobile
                                            Number</div>
                                        <input type="number" name="owner[0][mobile_no]"
                                            value="{{ old('owner.0.mobile_no') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Enter Mobile Number" autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.mobile_no') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name
                                        </div>
                                        <input type="text" name="owner[0][name]" value="{{ old('owner.0.name') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Enter Name" autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.name') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                            Father/Husband’s Name</div>
                                        <input type="text" name="owner[0][father_name]"
                                            value="{{ old('owner.0.father_name') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Enter Father or Husband’s Name" autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.father_name') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                            Relationship</div>
                                        <div class="flex 2xl:gap-3 gap-[10px]">
                                            <div class="flex items-center gap-[2px] 2xl:gap-2">
                                                <input type="radio" name="owner[0][relationship]" value="father"
                                                    {{ old('owner.0.relationship') == 'father' ? 'checked' : '' }}
                                                    class="w-[36px]" />
                                                <span
                                                    class="font-normal text-[15px] leading-[30px] text-[#000000]">Father</span>
                                            </div>
                                            <div class="flex items-center gap-[2px] 2xl:gap-2">
                                                <input type="radio" name="owner[0][relationship]" value="husband"
                                                    {{ old('owner.0.relationship') == 'husband' ? 'checked' : '' }}
                                                    class="w-[36px]" />
                                                <span
                                                    class="font-normal text-[15px] leading-[30px] text-[#000000]">Husband</span>
                                            </div>
                                        </div>
                                        <span class="text-red-600">{{ $errors->first('owner.0.relationship') }}</span>
                                    </div>

                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Gender
                                        </div>
                                        <div class="flex 2xl:gap-3 gap-[10px]">
                                            <div class="flex items-center 2xl:gap-2 gap-[2px]">
                                                <input type="radio" name="owner[0][gender]" value="male"
                                                    {{ old('owner.0.gender') == 'male' ? 'checked' : '' }}
                                                    class="w-[36px]" />
                                                <span
                                                    class="font-normal text-[15px] leading-[30px] text-[#000000]">Male</span>
                                            </div>
                                            <div class="flex items-center 2xl:gap-2 gap-[2px]">
                                                <input type="radio" name="owner[0][gender]" value="female"
                                                    {{ old('owner.0.gender') == 'female' ? 'checked' : '' }}
                                                    class="w-[36px]" />
                                                <span
                                                    class="font-normal text-[15px] leading-[30px] text-[#000000]">Female</span>
                                            </div>
                                            <div class="flex items-center 2xl:gap-2 gap-[2px]">
                                                <input type="radio" name="owner[0][gender]" value="transgender"
                                                    {{ old('owner.0.gender') == 'transgender' ? 'checked' : '' }}
                                                    class="w-[36px]" />
                                                <span
                                                    class="font-normal text-[15px] leading-[30px] text-[#000000]">Transgender</span>
                                            </div>
                                        </div>
                                        <span class="text-red-600">{{ $errors->first('owner.0.gender') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Date
                                            Of Birth</div>
                                        <input type="date" name="owner[0][dob]" value="{{ old('owner.0.dob') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Select Date Of Birth" autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.dob') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email
                                        </div>
                                        <input type="email" name="owner[0][email]" value="{{ old('owner.0.email') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Enter Email" autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.email') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">PAN
                                            No.</div>
                                        <input type="text" name="owner[0][pan_no]"
                                            value="{{ old('owner.0.pan_no') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Enter PAN No." autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.pan_no') }}</span>
                                    </div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                            Correspondence Address</div>
                                        <input type="text" name="owner[0][address]"
                                            value="{{ old('owner.0.address') }}"
                                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                            placeholder="Enter Correspondence Address" autocomplete="off">
                                        <span class="text-red-600">{{ $errors->first('owner.0.address') }}</span>
                                    </div>
                                    {{-- <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                            Special Owner Category</div>
                                        <div class="select-box relative">
                                            <select name="owner[0][category]"
                                                class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                                <option value="" disabled
                                                    {{ old('owner.0.category') ? '' : 'selected' }}>Select Special Category
                                                </option>
                                                <option value="1"
                                                    {{ old('owner.0.category') == '1' ? 'selected' : '' }}>1</option>
                                                <option value="2"
                                                    {{ old('owner.0.category') == '2' ? 'selected' : '' }}>2</option>
                                            </select>
                                        </div>
                                        <span class="text-red-600">{{ $errors->first('owner.0.category') }}</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button type="button" onclick="prevPart('part1')"
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">Previous</button>
                        <button type="button" onclick="nextPart('part3')"
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Next</button>
                    </div>
                </div>

                <div id="part3" class="hidden">
                    <div class="border border-[#A0A0A0] rounded-[15px] p-5 mt-5">
                        <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Required Documents
                        </h3>
                        <p class="font-normal text-[15px] leading-[30px]">Only one file can be uploaded for one document.
                            If multiple files need to be uploaded, then please combine all files into a .pdf and then
                            upload.</p>

                        <h4 class="font-semibold text-[18px] leading-[30px] py-5">Document Info</h4>

                        <div
                            class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 mt-5 pb-[30px] flex flex-col gap-6">
                            <!-- Owners ID Proof -->
                            <div class="w-full space-y-8">
                                <!-- Owners ID Proof -->
                                <div class="w-full bg-white shadow-md rounded-lg p-6">
                                    <div class="font-semibold text-xl leading-6 text-gray-800 mb-2">Owners ID Proof</div>
                                    <p class="text-sm text-gray-600 mb-4">
                                        Allowed documents are Aadhar Card / Voter ID Card / Driving License. Only .jpg and
                                        .pdf files: 5 MB max file size.
                                    </p>
                                    <div class="relative mb-4">
                                        <select id="ownership_id_proof" name="ownership_id_proof"
                                            class="w-full border border-gray-300 rounded-full pl-4 h-12 appearance-none focus:outline-none focus:ring-2 focus:ring-[#F26F00] transition">
                                            <option value="" disabled selected>Select Document</option>
                                            <option value="electricity_bill"
                                                {{ old('ownership_id_proof') == 'electricity_bill' ? 'selected' : '' }}>
                                                Electricity Bill</option>
                                            <option value="water_bill"
                                                {{ old('ownership_id_proof') == 'water_bill' ? 'selected' : '' }}>Water
                                                Bill</option>
                                            <option value="gas_bill"
                                                {{ old('ownership_id_proof') == 'gas_bill' ? 'selected' : '' }}>Gas Bill
                                            </option>
                                            <option value="aadhar_card"
                                                {{ old('ownership_id_proof') == 'aadhar_card' ? 'selected' : '' }}>Aadhar
                                                Card</option>
                                            <option value="voter_id"
                                                {{ old('ownership_id_proof') == 'voter_id' ? 'selected' : '' }}>Voter ID
                                            </option>
                                            <option value="driving_license"
                                                {{ old('ownership_id_proof') == 'driving_license' ? 'selected' : '' }}>
                                                Driving License</option>
                                            <option value="passport"
                                                {{ old('ownership_id_proof') == 'passport' ? 'selected' : '' }}>Passport
                                            </option>
                                        </select>
                                        <img class="icon absolute right-3 top-1/2 transform -translate-y-1/2"
                                            src="{{ asset('admin-assets/images/arrowdown.png') }}" />
                                        <button type="button"
                                            class="absolute right-0 top-0 w-28 h-12 bg-[#F26F00] text-white font-semibold text-sm rounded-tr-full rounded-br-full flex items-center justify-center">
                                            <input type="file" name="ownership_id_proof_img"
                                                class="absolute inset-0 opacity-0 cursor-pointer" autocomplete="off">
                                            Choose File
                                        </button>
                                    </div>
                                    <span class="text-red-500 text-sm">{{ $errors->first('ownership_id_proof') }}</span>
                                    <span
                                        class="text-red-500 text-sm">{{ $errors->first('ownership_id_proof_img') }}</span>
                                </div>

                                <!-- Ownership Proof -->
                                <div class="w-full bg-white shadow-md rounded-lg p-6">
                                    <div class="font-semibold text-xl leading-6 text-gray-800 mb-2">Ownership Proof</div>
                                    <p class="text-sm text-gray-600 mb-4">
                                        Allowed documents are Rent Deed / Lease Doc / Property Registry / General or Special
                                        Power of Attorney. Only .jpg and .pdf files: 5 MB max file size.
                                    </p>
                                    <div class="relative mb-4">
                                        <select id="ownership_proof" name="ownership_proof"
                                            class="w-full border border-gray-300 rounded-full pl-4 h-12 appearance-none focus:outline-none focus:ring-2 focus:ring-[#F26F00] transition">
                                            <option value="" disabled selected>Select Document</option>
                                            <option value="electricity_bill"
                                                {{ old('ownership_proof') == 'electricity_bill' ? 'selected' : '' }}>
                                                Electricity Bill</option>
                                            <option value="water_bill"
                                                {{ old('ownership_proof') == 'water_bill' ? 'selected' : '' }}>Water Bill
                                            </option>
                                            <option value="gas_bill"
                                                {{ old('ownership_proof') == 'gas_bill' ? 'selected' : '' }}>Gas Bill
                                            </option>
                                            <option value="aadhar_card"
                                                {{ old('ownership_proof') == 'aadhar_card' ? 'selected' : '' }}>Aadhar Card
                                            </option>
                                            <option value="voter_id"
                                                {{ old('ownership_proof') == 'voter_id' ? 'selected' : '' }}>Voter ID
                                            </option>
                                            <option value="driving_license"
                                                {{ old('ownership_proof') == 'driving_license' ? 'selected' : '' }}>Driving
                                                License</option>
                                            <option value="passport"
                                                {{ old('ownership_proof') == 'passport' ? 'selected' : '' }}>Passport
                                            </option>
                                        </select>
                                        <img class="icon absolute right-3 top-1/2 transform -translate-y-1/2"
                                            src="{{ asset('admin-assets/images/arrowdown.png') }}" />
                                        <button type="button"
                                            class="absolute right-0 top-0 w-28 h-12 bg-[#F26F00] text-white font-semibold text-sm rounded-tr-full rounded-br-full flex items-center justify-center">
                                            <input type="file" name="ownership_proof_img"
                                                class="absolute inset-0 opacity-0 cursor-pointer" autocomplete="off">
                                            Choose File
                                        </button>
                                    </div>
                                    <span class="text-red-500 text-sm">{{ $errors->first('ownership_proof') }}</span>
                                    <span class="text-red-500 text-sm">{{ $errors->first('ownership_proof_img') }}</span>
                                </div>

                                <!-- Owners Photo -->
                                <div class="w-full bg-white shadow-md rounded-lg p-6">
                                    <div class="font-semibold text-xl leading-6 text-gray-800 mb-2">Owners Photo</div>
                                    <p class="text-sm text-gray-600 mb-4">
                                        Allowed documents are Owner photo. Only .jpg and .pdf files: 3 MB max file size.
                                    </p>
                                    <div class="relative mb-4">
                                        <select id="ownership_photo" name="ownership_photo"
                                            class="w-full border border-gray-300 rounded-full pl-4 h-12 appearance-none focus:outline-none focus:ring-2 focus:ring-[#F26F00] transition">
                                            <option value="" disabled selected>Select Document</option>
                                            <option value="electricity_bill"
                                                {{ old('ownership_photo') == 'electricity_bill' ? 'selected' : '' }}>
                                                Electricity Bill</option>
                                            <option value="water_bill"
                                                {{ old('ownership_photo') == 'water_bill' ? 'selected' : '' }}>Water Bill
                                            </option>
                                            <option value="gas_bill"
                                                {{ old('ownership_photo') == 'gas_bill' ? 'selected' : '' }}>Gas Bill
                                            </option>
                                            <option value="aadhar_card"
                                                {{ old('ownership_photo') == 'aadhar_card' ? 'selected' : '' }}>Aadhar
                                                Card</option>
                                            <option value="voter_id"
                                                {{ old('ownership_photo') == 'voter_id' ? 'selected' : '' }}>Voter ID
                                            </option>
                                            <option value="driving_license"
                                                {{ old('ownership_photo') == 'driving_license' ? 'selected' : '' }}>
                                                Driving License</option>
                                            <option value="passport"
                                                {{ old('ownership_photo') == 'passport' ? 'selected' : '' }}>Passport
                                            </option>
                                        </select>
                                        <img class="icon absolute right-3 top-1/2 transform -translate-y-1/2"
                                            src="{{ asset('admin-assets/images/arrowdown.png') }}" />
                                        <button type="button"
                                            class="absolute right-0 top-0 w-28 h-12 bg-[#F26F00] text-white font-semibold text-sm rounded-tr-full rounded-br-full flex items-center justify-center">
                                            <input type="file" name="ownership_photo_img"
                                                class="absolute inset-0 opacity-0 cursor-pointer" autocomplete="off">
                                            Choose File
                                        </button>
                                    </div>
                                    <span class="text-red-500 text-sm">{{ $errors->first('ownership_photo') }}</span>
                                    <span class="text-red-500 text-sm">{{ $errors->first('ownership_photo_img') }}</span>
                                </div>
                            </div>

                        </div>

                        <div class="flex justify-center my-10">
                            <div
                                class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                                <button type="button" onclick="prevPart('part2')"
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

    <script>
        // Object to hold form data across parts
        let formData = {};

        function nextPart(nextPartId) {
            saveFormData();
            hideAllParts();
            document.getElementById(nextPartId).classList.remove('hidden');
            updateProgressBar(nextPartId);
            restoreFormData();
        }

        function prevPart(prevPartId) {
            saveFormData();
            hideAllParts();
            document.getElementById(prevPartId).classList.remove('hidden');
            updateProgressBar(prevPartId);
            restoreFormData();
        }

        function hideAllParts() {
            document.querySelectorAll('.form-part').forEach(part => part.classList.add('hidden'));
        }

        function saveFormData() {
            document.querySelectorAll('input, select').forEach(input => {
                if (input.type !== 'file') {
                    formData[input.name] = input.value;
                }
            });
        }

        function restoreFormData() {
            document.querySelectorAll('input, select').forEach(input => {
                if (formData[input.name] !== undefined && input.type !== 'file') {
                    input.value = formData[input.name];
                }
            });
        }

        function updateProgressBar(partId) {
            let progressBar = document.getElementById('progressBar');
            let stepElements = document.querySelectorAll('.step');
            stepElements.forEach(step => step.classList.remove('bg-orange-500', 'border-orange-500'));

            if (partId === 'part1') {
                progressBar.style.width = '20%';
                document.getElementById('step1').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part2') {
                progressBar.style.width = '80%';
                document.getElementById('step2').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part3') {
                progressBar.style.width = '100%';
                document.getElementById('step3').classList.add('bg-orange-500', 'border-orange-500');
            }
        }

        document.getElementById('resetButton').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('myForm').reset();
            formData = {};
            window.location.reload();
        });
    </script>
    {{-- <script>
        function resetForm() {
            document.getElementById("myForm").reset();
        }
    </script> --}}
    <script>
        let tradeUnitCount = 1;

        function addTradeUnitForm(event) {
            event.preventDefault();
            let container = document.getElementById('trade-units-container');
            let newForm = container.children[0].cloneNode(true);

            newForm.querySelectorAll('select, input').forEach(input => {
                input.name = input.name.replace(/\d+/, tradeUnitCount);
                input.id = input.id.replace(/\d+/, tradeUnitCount);
                input.value = "";
            });

            newForm.querySelectorAll('span.text-red-600').forEach(span => span.textContent = "");

            container.appendChild(newForm);

            newForm.querySelector('.trade_type').addEventListener('change', function() {
                const parentForm = this.closest('.trade-unit-form');
                filterSubTypes(this, parentForm.querySelector('.trade_subType'));
            });

            tradeUnitCount++;
        }

        function removeTradeUnitForm(button) {
            let container = document.getElementById('trade-units-container');

            if (container.children.length > 1) {
                let form = button.closest('.trade-unit-form');
                form.remove();
            } else {
                alert("At least one trade unit must remain.");
            }
        }

        const tradeSubCategories = @json($TradeSubCategory);

        function filterSubTypes(tradeTypeSelect, tradeSubTypeSelect) {
            const selectedTradeTypeName = tradeTypeSelect.value;

            tradeSubTypeSelect.innerHTML = '<option value="" disabled selected>Select Trade Sub-Type</option>';

            tradeSubCategories.forEach(subCategory => {
                if (subCategory.category_name === selectedTradeTypeName) {
                    let option = document.createElement('option');
                    option.value = subCategory.sub_category;
                    option.text = subCategory.sub_category;
                    tradeSubTypeSelect.appendChild(option);
                }
            });
        }

        document.querySelectorAll('.trade_type').forEach(select => {
            select.addEventListener('change', function() {
                const parentUnit = select.closest('.trade-unit-form');
                filterSubTypes(select, parentUnit.querySelector('.trade_subType'));
            });
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
        }

        function updateProgressBar(partId) {
            let progressBar = document.getElementById('progressBar');
            let stepElements = document.querySelectorAll('.step');
            stepElements.forEach(step => step.classList.remove('bg-orange-500', 'border-orange-500'));

            if (partId === 'part1') {
                progressBar.style.width = '20%';
                document.getElementById('step1').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part2') {
                progressBar.style.width = '80%';
                document.getElementById('step2').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part3') {
                progressBar.style.width = '100%';
                document.getElementById('step3').classList.add('bg-orange-500', 'border-orange-500');
            }
        }
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const resetButton = document.getElementById('resetButton');
            const form = document.getElementById('myForm');

            resetButton.addEventListener('click', (event) => {
                console.log("hello");
                event.preventDefault();
                window.location.reload();
            });
        });
    </script> --}}
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
    <script>
        let formIndex = 1;

        function removeTradeUnitForm(button) {
            const form = button.closest('.trade-unit-form');
            if (document.querySelectorAll('.trade-unit-form').length > 1) {
                form.remove();
            } else {
                alert('At least one form is required.');
            }
        }

        function attachDropdownListeners(context) {
            const selectBoxes = context.querySelectorAll('.select-box');

            selectBoxes.forEach(function(selectBox) {
                const selectOption = selectBox.querySelector('.select-option');
                const soValue = selectBox.querySelector('.soValue');
                const optionsLi = selectBox.querySelectorAll('.options li');
                const chooseFileButton = selectBox.querySelector('button');

                selectOption.addEventListener('click', function() {
                    selectBox.classList.toggle('active');
                    if (selectBox.classList.contains('active')) {
                        chooseFileButton.classList.add('rounded-tr-[19px]');
                        chooseFileButton.classList.add('rounded-br-[0px]');
                    } else {
                        chooseFileButton.classList.remove('rounded-tr-[19px]');
                    }
                });

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
        }

        document.addEventListener('DOMContentLoaded', function() {
            attachDropdownListeners(document);
        });

        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }

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
        let ownerFormIndex = 1;

        function addOwnerInfoForm(event) {
            event.preventDefault();
            const container = document.getElementById('owner-info-container');
            const formTemplate = document.querySelector('.owner-info-form');
            const newForm = formTemplate.cloneNode(true);

            newForm.querySelectorAll('input, select').forEach(input => {
                const name = input.getAttribute('name');
                if (name) {
                    input.setAttribute('name', name.replace(/\[\d+\]/, `[${ownerFormIndex}]`));
                    if (input.type !== 'radio' && input.type !== 'checkbox') {
                        input.value = '';
                    } else {
                        input.checked = false;
                    }
                }
            });

            const removeButton = document.createElement('button');
            removeButton.setAttribute('onclick', 'removeOwnerInfoForm(this)');
            removeButton.className =
                'w-[200px] mx-[20px] mt-3 mb-5 lg:mt-5 h-[60px] rounded-[100px] border border-[#F26F00] text-center font-semibold text-[16px] leading-[30px] text-[#F26F00]';
            removeButton.innerText = '-Remove Owner Info';
            newForm.appendChild(removeButton);

            ownerFormIndex++;
            container.appendChild(newForm);
        }

        function removeOwnerInfoForm(button) {
            const form = button.closest('.owner-info-form');
            if (document.querySelectorAll('.owner-info-form').length > 1) {
                form.remove();
            } else {
                alert('At least one form is required.');
            }
        }
    </script>
    {{-- <script>
        function initializeDropdowns() {
            const selectBoxes = document.querySelectorAll('.select-box');
            selectBoxes.forEach(function(selectBox) {
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
        }

        document.addEventListener('DOMContentLoaded', initializeDropdowns);
    </script> --}}
@endsection


{{-- <div id="part2" class="hidden">
                    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px]  ">
                        <h3 class=" font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Owner
                            Details</h3>
                        <div
                            class="lg:grid lg:grid-cols-3  md:grid md:grid-cols-2  lg:gap-10  mt-3  flex flex-col gap-5   pb-[30px]">

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                    Type of Ownership
                                    <span class="text-red-600">*</span>
                                </div>
                                <div class="select-box relative">
                                    <select name="type_of_ownership" id="type_of_ownership"
                                        class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                        <option value="" disabled selected>Select Type of Ownership</option>
                                        <option value="Individual">Individual</option>
                                        <option value="Institutional - Government">Institutional - Government</option>
                                        <option value="Institutional - Private">Institutional - Private</option>
                                    </select>
                                </div>
                                <span class="" style="color:red">{{ $errors->first('date_of_death') }}</span>
                            </div>

                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Type of Sub -
                                    Ownership</div>
                                <div class="select-box relative">
                                    <select name="type_of_sub_ownership" id="type_of_sub_ownership"
                                        class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                        <option value="" disabled selected>Select Type of Sub - Ownership</option>
                                        <option value="Multiple Owners">Multiple Owners</option>
                                        <option value="Single Owner">Single Owner</option>
                                    </select>
                                </div>
                                <span class="" style="color:red">{{ $errors->first('date_of_death') }}</span>
                            </div>
                        </div>

                    </div>
                    <div class="lg:flex justify-between items-center">
                        <button onclick="addOwnerInfoForm(event)"
                            class="mt-4 mx-[20px] w-[200px] h-[60px] rounded-[100px] border border-[#F26F00] text-center font-semibold text-[16px] leading-[30px] text-[#F26F00]">+Add
                            Owner</button>
                    </div>
                    <div id="owner-info-container">
                        <div class="border border-[#B1B6C6] rounded-[20px] mt-10 lg:px-[20px] px-[10px]  owner-info-form">
                            <div class="lg:flex justify-between items-center">
                                <h3 class="font-semibold text-[18px] leading-[30px] py-[20px] text-[#000000]">Owner
                                    Information
                                </h3>
                            </div>

                            <div>
                                <div class="">
                                    <div
                                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 mt-5 flex flex-col gap-5 pb-[30px]">
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Mobile
                                                Number</div>
                                            <input type="number" name="owner[0][mobile_no]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Enter Mobile Number" autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Name</div>
                                            <input type="text" name="owner[0][name]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Enter Name" autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Father/Husband’s Name</div>
                                            <input type="text" name="owner[0][father_name]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Enter Father or Husband’s Name" autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Relationship
                                            </div>
                                            <div class="flex 2xl:gap-3 gap-[10px]">
                                                <div class="flex items-center gap-[2px] 2xl:gap-2">
                                                    <input type="radio" name="owner[0][relationship]" value="father"
                                                        class="w-[36px]" />
                                                    <span
                                                        class="font-normal text-[15px] leading-[30px] text-[#000000]">Father</span>
                                                </div>
                                                <div class="flex items-center gap-[2px] 2xl:gap-2">
                                                    <input type="radio" name="owner[0][relationship]" value="husband"
                                                        class="w-[36px]" />
                                                    <span
                                                        class="font-normal text-[15px] leading-[30px] text-[#000000]">Husband</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Gender
                                            </div>
                                            <div class="flex 2xl:gap-3 gap-[10px]">
                                                <div class="flex items-center 2xl:gap-2 gap-[2px]">
                                                    <input type="radio" name="owner[0][gender]" value="male"
                                                        class="w-[36px]" />
                                                    <span
                                                        class="font-normal text-[15px] leading-[30px] text-[#000000]">Male</span>
                                                </div>
                                                <div class="flex items-center 2xl:gap-2 gap-[2px]">
                                                    <input type="radio" name="owner[0][gender]" value="female"
                                                        class="w-[36px]" />
                                                    <span
                                                        class="font-normal text-[15px] leading-[30px] text-[#000000]">Female</span>
                                                </div>
                                                <div class="flex items-center 2xl:gap-2 gap-[2px]">
                                                    <input type="radio" name="owner[0][gender]" value="transgender"
                                                        class="w-[36px]" />
                                                    <span
                                                        class="font-normal text-[15px] leading-[30px] text-[#000000]">Transgender</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Date Of
                                                Birth</div>
                                            <input type="date" name="owner[0][dob]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Select Date Of Birth" autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Email
                                            </div>
                                            <input type="email" name="owner[0][email]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Enter Email" autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                PAN No.
                                            </div>
                                            <input type="text" name="owner[0][pan_no]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Enter PAN No." autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Correspondence Address </div>
                                            <input type="text" name="owner[0][address]"
                                                value="{{ old('date_of_death') }}"
                                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                                placeholder="Enter Correspondence Address" autocomplete="off">
                                            <span class=""
                                                style="color:red">{{ $errors->first('date_of_death') }}</span>
                                        </div>
                                        <div>
                                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                                Special Owner Category
                                            </div>
                                            <div class="select-box relative">
                                                <select name="owner[0][category]"
                                                    class="outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]">
                                                    <option value="" disabled selected>Select Special Category
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('owner.0.category'))
                                                <span class="" style="color:red">
                                                    {{ $errors->first('owner.0.category') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button id="resetButton"
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                            Reset
                        </button>
                        <button type="button" onclick="nextPart('part3')"
                            class=" w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Next→</button>
                    </div>
                </div> --}}
