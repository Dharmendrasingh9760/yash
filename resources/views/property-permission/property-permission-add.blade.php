@extends('include.main')
@section('content')
    <style>
        /* Add your CSS styles here */
        .hidden-Residential {
            display: none;
        }

        /* Add this to your custom CSS file */
        .active-button {
            background-color: #F26F00;
            color: #FFFFFF;

        }

        .inactive-button {
            background-color: #FFE4CD;
            color: #000000;

        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">New Property</h2>
        <div class="flex lg:gap-5 my-10 gap-2 items-center">
            <button id="nonResidentialBtn"
                class="lg:w-[182px] md:w-[182px] h-[70px] rounded-[100px] bg-[#F26F00] text-[#FFFFFF] w-full font-semibold text-[16px] lg:text-[18px] leading-[30px]">
                Non-Residential
            </button>
            <button id="residentialBtn"
                class="lg:w-[205px] md:w-[205px] h-[70px] rounded-[100px] bg-[#FFE4CD] text-black w-full font-semibold text-[16px] lg:text-[18px] leading-[30px]">
                Residential
            </button>
        </div>
        <form action="{{ route('property.permission.save') }}" method="post" id="myForm">
            @csrf
            <div id="nonResidentialContent" class=" border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                <h3 class=" font-semibold text-[18px] leading-[30px]   lg:px-[20px] px-[10px]   py-[20px] text-[#000000]">
                    Tax self-assessment form on annual value of non-residential building or land or both.</h3>
                <h2 class="   lg:px-[20px] px-[10px]">Details of owner or director</h2>

                <div
                    class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 ] border-b border-[#B1B6C6]   px-[10px] lg:px-[20px]  pb-[80px]  flex flex-col gap-5">

                    <input type="hidden" id="Non_Residential" name="Non_Residential" value="Non Residential"
                        class="w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]" placeholder="Enter">
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of Chairman or
                            Owner<span class="text-red-600">*</span></div>
                        <input type="text" name="name_chairman_owner" value="{{ old('name_chairman_owner') }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Name of Chairman or Owner" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of father/husband
                            of
                            Chairman/Owner</div>
                        <input type="text" name="name_fh_chairman_owner"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Name of father/husband" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Building/house/root
                            number and location address</div>
                        <input type="text" name="bhr_number_local_address"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter number and location address" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Building/house plot
                            owner /
                            Residential address of the Principal</div>
                        <input type="text" name="bhp_owner_res_address"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Building/house/ Residential address" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Any other details</div>
                        <input type="text" name="any_other_details"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Any other details" autocomplete="off">


                    </div>

                    <div>
                        <h2>Description of building or land:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Covered area of
                            buildings (in square feet)</div>
                        <input type="text" name="buildings_area_covered"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Covered area of building" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Area of open land or
                            plot (in
                            square feet)</div>
                        <input type="text" name="land_plot_area"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Area of open land or plot" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Other details if any
                        </div>
                        <input type="text" name="other_details"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Other details" autocomplete="off">


                    </div>

                    <div>
                        <h2>Location details :-</h2>
                        <h2>A-The building or land is situated:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]"> On road width more
                            than 24 metres</div>
                        <input type="text" name="more_24_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 24 metres" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On road width more than
                            12 meters or less than 24 meter</div>
                        <input type="text" name="more_12_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 12 meters" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On road width more than
                            9 meters less than 12 meters</div>
                        <input type="text" name="more_9_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 9 meters" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On roads up to 9 meters
                            wide</div>
                        <input type="text" name="wide_9_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter up to 9 meters wide" autocomplete="off">


                    </div>
                    <div>
                        <h2>B-Nature of building construction:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Concrete house more
                            than 24 meters wide</div>
                        <input type="text" name="corporate_house_24_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Concrete house" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Other Permanent
                            buildings, atavest/fibre or tin sheds</div>
                        <input type="text" name="other_premanent_buildings"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Other buildings" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Kachha building means
                            all other buildings which are not covered by (one) and two</div>
                        <input type="text" name="broken_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Kachha building" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Year of
                            construction</div>
                        <input type="text" name="construction_year" value="{{ old('construction_year') }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter construction year" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Predetermined Annual
                            Value and Assessment Year</div>
                        <input type="text" name="predetermind_value_year"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Annual Value and Assessment Year" autocomplete="off">
                    </div>
                    <div>
                        <h2>Calculating Annual Value:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">A. Annual value of the
                            building:-</div>
                        <input type="text" name="calc_annual_value_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Annual value of the building" autocomplete="off">
                    </div>
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Monthly rental rate
                            for residential building determined by the Executive Officer</div>
                        <input type="text" name="rental_rate_residential_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter rental rate for residential building" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Coefficient related to
                            residential building rate</div>
                        <input type="text" name="coefficient_res_building_rate"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Coefficient to residential building rate" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Monthly rental rate
                            received for the building (one)</div>
                        <input type="text" name="received_rental_rate_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter rental rate received for the building" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Covered area of
                            building</div>
                        <input type="text" name="covered_area_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Covered area of building" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Annual value of the
                            building
                            Monthly rental rate x Covered area X 12 (three X four x 12)</div>
                        <input type="text" name="annual_value_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Annual value of the building" autocomplete="off">


                    </div>

                    <div>
                        <h2>B. Annual value of land:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Monthly rental rate
                            for residential land determined by the Executive Officer </div>
                        <input type="text" name="residential_rate_land"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter rental rate for residential land" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">The coefficient
                            relating to the rate of the tax on residential land as prescribed by the rules:-</div>
                        <input type="text" name="coefficient_land"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter rate of the tax on residential land" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Monthly rent received
                            for the land (one) x (two):-</div>
                        <input type="text" name="rent_received_land"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Monthly rent received for the land" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Area of land:-</div>
                        <input type="text" name="area_of_land"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Area of land" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Annual value of the
                            building
                            Monthly rental rate x Covered area X 12 (three X four x 12):-</div>
                        <input type="text" name="calc_month_annual_value_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter building Monthly rental rate" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">C. Total Annual Value
                            (a) (five) (b) (five)</div>

                        <input type="number" name="total_annual_value"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Total Annual Value" autocomplete="off">

                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            Action Type :-</div>
                        <div class="select-box relative">
                            <div class="select-option relative">
                                <input type="text" id="action_type" name="action_type"
                                    class="soValue     outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]"
                                    placeholder="Select Nature of building construction" readonly autocomplete="off">
                            </div>
                            <div
                                class="content bg-[#ffffff] absolute text-black     w-full z-50 border  mt-[-7px]  rounded-bl-[24px] rounded-br-[24px]  border-[#B1B6C6]">
                                <ul class="options mt-[10px]    pb-[20px] cursor-pointer ">
                                    <li class=" font-normal text-[15px] leading-[30px]">Transfer</li>
                                    <li class=" font-normal text-[15px] leading-[30px]">Reconstruction</li>
                                    <li class=" font-normal text-[15px] leading-[30px]">Construction charges on upper floor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div
               class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 ]    px-[10px] lg:px-[20px]    flex flex-col gap-5">
                </div> --}}

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                    <button id="resetButton"
                        class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                        Reset
                    </button>
                    <button type="submit"
                        class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Submit→</button>
                </div>
            </div>

            <div id="residentialContent"
                class="hidden-Residential border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                <h3 class=" font-semibold text-[18px] leading-[30px]   lg:px-[20px] px-[10px]   py-[20px] text-[#000000]">
                    Tax self-assessment form on annual value of non-residential building or land or both.</h3>
                <h2 class="   lg:px-[20px] px-[10px]">Details of owner or director</h2>
                <div
                    class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 border-b border-[#B1B6C6]   px-[10px] lg:px-[20px]   pb-[80px] flex flex-col gap-5">
                    <input type="hidden" id="Residential" name="Residential" value=""
                        class="w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]" placeholder="Enter">

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of Chairman or
                            Owner</div>
                        <input type="text" name="res_name_chairman_owner" value="{{ old('res_name_chairman_owner') }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Name of Chairman or Owner" autocomplete="off">
                        <span class="" style="color:red">{{ $errors->first('res_name_chairman_owner') }}</span>

                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of father/husband
                            of
                            Chairman/Owner</div>
                        <input type="text" name="res_name_fh_chairman_owner"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Name of father/husband" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Building/house/root
                            number and location address</div>
                        <input type="text" name="res_bhr_number_local_address"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter number and location address" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Building/house plot
                            owner /
                            Residential address of the Principal</div>
                        <input type="text" name="res_bhp_owner_res_address"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Residential address of the Principal" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Any other details
                        </div>
                        <input type="text" name="res_any_other_details"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Any other details" autocomplete="off">


                    </div>

                    <div>
                        <h2>A Description of building or land:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Covered area of
                            buildings (in square
                            feet)</div>
                        <input type="text" name="res_buildings_area_covered"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Covered area of buildings" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Area of open land or
                            plot (in
                            square feet)</div>
                        <input type="text" name="res_land_plot_area"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Area of open land or plot" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Other details if any
                        </div>
                        <input type="text" name="res_other_details"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Other details" autocomplete="off">


                    </div>


                    <div>
                        <h2>B Description of building or land:-</h2>
                        <h2>Note – The area covered by bathrooms, toilets, portica and stairs (Jina) will not be part of the
                            floor area.</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Internal dimensions
                            (in square feet) of all rooms and all covered verandahs</div>
                        <input type="text" name="res_internal_dimenssion_room"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter rooms and all covered verandahs" autocomplete="off">

                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Internal dimensions
                            (in square feet) of all balconies, corridors, kitchens and store rooms.</div>
                        <input type="text" name="res_internal_dimenssion_balconies"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Internal dimensions" autocomplete="off">

                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Internal dimensions of
                            all garages (in square feet).</div>
                        <input type="text" name="res_internal_dimenssion_garages"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Internal dimensions of all garages" autocomplete="off">
                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">C depth Floor Area of
                            ​​Building: B (One)+ 1/2B (Two)+1/4 B (Three)</div>
                        <input type="text" name="res_floor_area_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter depth Floor Area of ​​Building" autocomplete="off">

                        <H1>OR</H1>
                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">80% of the area
                            covered {a (a) X 80% }</div>
                        <input type="text" name="res_area_covered"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter 80% of the area covered" autocomplete="off">


                    </div>

                    <div>
                        <h2>Location details :-</h2>
                        <h2>A-The building or land is situated:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]"> On road width more
                            than 24 metres</div>
                        <input type="text" name="res_more_24_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 24 metres" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On road width more
                            than 12 meters or less than 24 meter</div>
                        <input type="text" name="res_more_12_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 12 meters" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On road width more
                            than 9 meters less than 12 meters</div>
                        <input type="text" name="res_more_9_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 9 meters" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On roads up to 9
                            meters wide</div>
                        <input type="text" name="res_wide_9_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter up to 9 meters wide" autocomplete="off">


                    </div>

                    <div>
                        <h2>B-Nature of building construction:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]"> R. C. C. Roof or R.
                            B. concrete building with roof</div>
                        <input type="text" name="res_building_roof"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter concrete building with roof" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Other concrete
                            buildings</div>
                        <input type="text" name="res_concrete_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Other concrete buildings" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Raw building means all
                            other buildings which are not covered by (one) and two</div>
                        <input type="text" name="res_broken_building"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Raw building" autocomplete="off">


                    </div>

                    <div>
                        <h2>Location details :-</h2>
                        <h2>C-The land (if no building is constructed on it) is located:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]"> On road width more
                            than 24 metres</div>
                        <input type="text" name="res_land_located_24_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter The land is located" autocomplete="off">

                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On road width more
                            than 12 meters or less than 24 meter</div>
                        <input type="text" name="res_land_more_12_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 12 meters" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On road width more
                            than 9 meters less than 12 meters</div>
                        <input type="text" name="res_land_more_9_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter width more than 9 meters" autocomplete="off">


                    </div>

                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">On roads up to 9
                            meters wide</div>
                        <input type="text" name="res_land_wide_9_meter"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter up to 9 meters wide" autocomplete="off">


                    </div>



                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Whether the building
                            is owner-occupied or on rent.</div>
                        <input type="text" name="res_building_owner_rent"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter Whether the building is owner-occupied or on rent" autocomplete="off">

                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">year of
                            construction</div>
                        <input type="text" name="res_construction_year" value="{{ old('res_construction_year') }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter construction year" autocomplete="off">
                        <span class="" style="color:red">{{ $errors->first('res_construction_year') }}</span>

                    </div>
                    <div>
                        <h2>Calculation of annual value:-</h2>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">The minimum monthly
                            rental rate (per square foot) fixed for the building by the Executive Officer.</div>
                        <input type="number" name="res_rate_square" value="{{ old('res_rate_square') }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter minimum monthly rental rate" autocomplete="off">


                    </div>
                    <div>

                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">The minimum monthly
                            rental rate fixed for the building by the Executive Officer</div>
                        <input type="number" name="res_monthly_rate" value="{{ old('res_monthly_rate') }}"
                            class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter rate fixed for the building" autocomplete="off">


                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            Action Type :-</div>
                        <div class="select-box relative">
                            <div class="select-option relative">
                                <input type="text" id="res_action_type" name="res_action_type"
                                    class="soValue     outline-none cursor-pointer w-full border border-[#B1B6C6] rounded-[100px] pl-[19px] h-[60px]"
                                    placeholder="Select Nature of building construction" readonly autocomplete="off">
                            </div>
                            <div
                                class="content bg-[#ffffff] absolute text-black     w-full z-50 border  mt-[-7px]  rounded-bl-[24px] rounded-br-[24px]  border-[#B1B6C6] hidden">
                                <ul class="options mt-[10px]    pb-[20px] cursor-pointer ">
                                    <li class=" font-normal text-[15px] leading-[30px]">Transfer</li>
                                    <li class=" font-normal text-[15px] leading-[30px]">Reconstruction</li>
                                    <li class=" font-normal text-[15px] leading-[30px]">Construction charges on upper floor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const nonResidentialBtn = document.getElementById('nonResidentialBtn');
            const residentialBtn = document.getElementById('residentialBtn');

            function handleButtonClick(activeButton, inactiveButton) {
                activeButton.classList.add('active-button');
                activeButton.classList.remove('inactive-button');
                inactiveButton.classList.add('inactive-button');
                inactiveButton.classList.remove('active-button');
            }

            nonResidentialBtn.addEventListener('click', () => {
                handleButtonClick(nonResidentialBtn, residentialBtn);
            });

            residentialBtn.addEventListener('click', () => {
                handleButtonClick(residentialBtn, nonResidentialBtn);
            });
        });
    </script>
@endsection
