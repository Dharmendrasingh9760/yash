 <!-- Hidden iframe for printing -->
 <iframe id="pdf-iframe" style="display: none;"></iframe>
@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] md:px-[20px] px-[10px] py-[2rem]">
        <div class="lg:flex  \ lg:flex-row lg:items-center justify-between gap-4 flex flex-col md:flex md:flex-row">
            <h2 class=" font-bold text-[31px] lg:text-[32px] leading-[40px] text-left text-[#000000]">Property Permission
            </h2>
            @if($property->payment_status == 1)
            <div class="flex gap-3 items-center ">
                <a href="#" onclick="printPDF()"
                    class="w-[152px] lg:h-[60px] md:h-[50px] h-[44px] xl:h-[70px] rounded-[100px] cursor-pointer text-[#000000] border border-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                    <img src="{{ asset('admin-assets/images/print.png') }}" />
                    Print
                </a>
                <a href="{{route('property.residential.permission.pdf',['id' => $property['id']])}}"
                    class="w-[184px] lg:h-[60px] md:h-[50px] h-[44px] xl:h-[70px] cursor-pointer rounded-[100px] text-white bg-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                    <img src="{{ asset('admin-assets/images/download.png') }}" />
                    Download
                </a>
            </div>
            @endif
        </div>


        <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
            <div class=" border-b border-[#B1B6C6] pb-[100px]">
                <div class="lg:grid grid-cols-1 gap-10 px-[10px] lg:px-[40px] py-[20px]">
                    <div>
                        <div class="lg:flex md:flex justify-between items-center">
                            <div>
                                <h4 class=" font-semibold text-[20px] leading-[25px]">Property Details</h4>
                                <p class=" font-medium text-[18px] leading-[22px] pt-3"></p>
                            </div>
                            {{-- <div
                                class="w-[110px] h-[46px] lg:mt-0 md:mt-0 mt-4  rounded-[100px] bg-[#000000] text-[#FFFFFF] flex items-center justify-center ">
                                <img src="../images/edit.png" class="" />
                                Edit
                            </div> --}}

                        </div>
                        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full h-full">
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Details of owner or director
                                        Name of Chairman or Owner</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['name_chairman_owner'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Name of father/husband of Chairman/Owner</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['name_fh_chairman_owner'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Building/house/root number and location address                                        <span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['bhr_number_local_address'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Building/house plot owner / Residential address of the Principal</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['bhp_owner_res_address'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Any other details                                        <span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['any_other_details'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            A Description of building or land:-
                                            Covered area of buildings (in square feet)</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['buildings_area_covered'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Area of open land or plot (in square feet)</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['land_plot_area'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Other details if any</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['other_details'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Location details :-
                                        A-The building or land is situated:-
                                        On road width more than 24 metres</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['more_24_meter'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            On road width more than 12 meters or less than 24 meter</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['more_12_meter'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">On road width more than 9 meters less than 12 meters                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['more_9_meter'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">On roads up to 9 meters wide                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['wide_9_meter'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">B-Nature of building construction:-
                                        Concrete house more than 24 meters wide</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['corporate_house_24_meter'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Other Permanent buildings, atavest/fibre or tin sheds</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['other_premanent_buildings'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Kachha building means all other buildings which are not covered by (one) and two                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['broken_building'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Year of construction</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['construction_year'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Predetermined Annual Value and Assessment Year                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['predetermind_value_year'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Calculating Annual Value:-
                                            A. Annual value of the building:-</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['calc_annual_value_building'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px]">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Monthly rental rate for residential building determined by the Executive Officer                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['rental_rate_residential_building'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                            Coefficient related to residential building rate                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['coefficient_res_building_rate'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px] mt-4">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                        Monthly rental rate received for the building (one)
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['received_rental_rate_building'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Covered area of building                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['covered_area_building'] ?? "NA"}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px] mt-4">
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Annual value of the building Monthly rental rate x Covered area X 12 (three X four x 12)</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">{{$property['annual_value_building'] ?? "NA"}}</p>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">B. Annual value of land:-
                                            Monthly rental rate for residential land determined by the Executive Officer
                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['residential_rate_land'] ?? "NA"}}</p>
                                    </div>
                                </div>


                            </div>
                            <div class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:px-[30px] px-[10px] mt-4">
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">The coefficient relating to the rate of the tax on residential land as prescribed by the rules:-*
                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['coefficient_land'] ?? "NA"}}</p>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Monthly rent received for the land (one) x (two):-                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['rent_received_land'] ?? "NA"}}</p>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Area of land:-</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['area_of_land'] ?? "NA"}}</p>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Annual value of the building Monthly rental rate x Covered area X 12 (three X four x 12):-                                        </div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['calc_month_annual_value_building'] ?? "NA"}}</p>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">C. Total Annual Value (a) (five) (b) (five)</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['total_annual_value'] ?? "NA"}}</p>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Action Type</div>
                                        <p class=" font-medium  text-[18px] leading-[22px]">{{$property['action_type'] ?? "NA"}}</p>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>
                </div>
            </div>
                    @if($property['status'] == 2)
                    <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
                        <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                            <h4 class=" font-semibold text-[20px] leading-[25px]">Reason of Reject</h4>
                        </div>
                        <div class="mt-5">
                        <p class=" font-medium  text-[18px] leading-[22px] lg:px-[30px] px-[10px]">{{ $property['remark'] ?? "NA"}}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
@endsection
<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');

        menu.classList.toggle('hidden');

    }
</script>
<script>
        function printPDF() {
            var iframe = document.getElementById('pdf-iframe');
            iframe.src = '{{ route('property.permission.nonresidential.print.pdf',['id' => $property['id']]) }}';
            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
