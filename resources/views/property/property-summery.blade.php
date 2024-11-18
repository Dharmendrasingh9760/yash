@extends('include.main')
@section('content')
<div id="part5" class="hidden border-b border-[#B1B6C6]" {{--  style="{{ Request::query('form') == 'formfour' ? '' : 'display:none;' }} --}}">
    <div class="border border-[#B1B6C6] rounded-[20px] mt-10 ">
        <h3
            class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:   lg:px-[20px]   py-[20px] text-[#000000]">
            Application Summary</h3>
        <div class="lg:grid  grid-cols-2  lg:gap-6 px-[10px] lg:px-[40px] py-[20px] flex flex-col gap-6">
            <div>
                <div class="lg:flex md:flex justify-between items-center">
                    <div>
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Property Address</h4>
                        <p class=" font-medium text-[18px] leading-[22px] pt-3">One of these documents is
                            required</p>
                    </div>
                    {{-- <div
                        class="lg:mt-0 md:mt-0 mt-5 w-[85px]  h-[46px] rounded-[100px] bg-[#000000] text-[#FFFFFF] flex items-center justify-center ">
                        <img src="{{asset('admin-assets/images/edit.png')}}" class="" />
                        Edit
                    </div> --}}

                </div>

                <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full h-full">
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px] ">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">City<span
                                    class="text-red-600">*</span></div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['city'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    House/Shop Number</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['house_number']?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                Building/Colony
                                Name</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['colony_name']?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Street
                                    Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['street_name']?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                Village<span class="text-red-600">*</span></div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['village'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pincode
                                </div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['pin_code'] ?? "NA"}}</p>
                            </div>
                        </div>


                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                Village<span class="text-red-600">*</span></div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['village'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    Existing Property ID</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['existing_property_id'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="lg:flex md:flex justify-between items-center">
                    <div>
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Property Details</h4>
                        <p class=" font-medium text-[18px] leading-[22px] pt-3">One of these documents is
                            required</p>
                    </div>
                    {{-- <div
                        class=" lg:mt-0 md:mt-0 mt-5 w-[85px]  h-[46px] rounded-[100px] bg-[#000000] text-[#FFFFFF] flex items-center justify-center ">
                        <img src="{{asset('admin-assets/images/edit.png')}}" class="" />
                        Edit
                    </div> --}}
                </div>

                <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full  h-full">
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2   md:grid flex flex-col gap-5 lg:px-[30px] px-[20px] ">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Property
                                Usage Type<span class="text-red-600">*</span></div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['property_usage_type'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    Property Type<span class="text-red-600">*</span></div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['property_type'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2   md:grid flex flex-col gap-5 lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Plot Size
                                (sq ft)<span class="text-red-600">*</span></div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['plot_size'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">No. Of
                                    Floors</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['no_of_floors'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:my-20">
                <div class="lg:flex md:flex justify-between items-center">
                    <div>
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Owner Details</h4>
                        <p class=" font-medium text-[18px] leading-[22px] pt-3">One of these documents is
                            required</p>
                    </div>
                    {{-- <div
                        class="lg:mt-0 md:mt-0 mt-5 w-[85px]  h-[46px] rounded-[100px] bg-[#000000] text-[#FFFFFF] flex items-center justify-center ">
                        <img src="{{asset('admin-assets/images/edit.png')}}" class="" />
                        Edit
                    </div> --}}
                </div>

                <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full h-full">
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px] ">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['name'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    Guardian’s Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['guardian_name'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Gender
                                Name</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['gender'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Type of
                                    Ownership</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['ownership_type'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mobile No.
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['mobile'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">E-mail
                                    ID</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['email'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Select
                                Category</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{$property['category'] ?? "NA"}}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    Correspondence Address</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{$property['address'] ?? "NA"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:my-20">
                <div class="lg:flex md:flex  justify-between items-center">
                    <div>
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Document Info</h4>
                        <p class=" font-medium text-[18px] leading-[22px] pt-3">One of these documents is
                            required</p>
                    </div>
                    {{-- <div
                        class=" lg:mt-0 md:mt-0 mt-5 w-[85px]  h-[46px] rounded-[100px] bg-[#000000] text-[#FFFFFF] flex items-center justify-center ">
                        <img src="{{asset('admin-assets/images/edit.png')}}" class="" />
                        Edit
                    </div> --}}
                </div>

                <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full h-full">
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px] ">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                Registration Proof<span class="text-red-600">*</span></div>
                            <div class="flex gap-4 items-center pt-3">
                                <img src="{{asset('admin-assets/images/pdf.png')}}" />
                                <div>
                                    <h6 class=" font-bold text-[15px] leading-[28px] text-[#000000]">View
                                        PDF →</h6>
                                    <p class=" font-medium  text-[14px] text-[#CFC7C0] leading-[22px]">
                                        {{$property['registration_proof'] ?? "NA"}}{{-- Adhaarcard.pd --}}f</p>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    Identify Proof<span class="text-red-600">*</span></div>
                                <div class="flex gap-4 items-center pt-3">
                                    <img src="{{asset('admin-assets/images/pdf.png')}}" />
                                    <div>
                                        <h6 class=" font-bold text-[15px] leading-[28px] text-[#000000]">
                                            View PDF →</h6>
                                        <p class=" font-medium  text-[14px] text-[#CFC7C0] leading-[22px]">
                                            {{$property['identify_proof'] ?? "NA"}}{{-- Adhaarcard.pdf --}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address
                                Proof<span class="text-red-600">*</span></div>
                            <div class="flex gap-4 items-center pt-3">
                                <img src="{{asset('admin-assets/images/pdf.png')}}" />
                                <div>
                                    <h6 class=" font-bold text-[15px] leading-[28px] text-[#000000]">View
                                        PDF →</h6>
                                    <p class=" font-medium  text-[14px] text-[#CFC7C0] leading-[22px]">
                                        {{$property['address_proof'] ?? "NA"}}{{--  Adhaarcard.pdf --}}</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Usage
                                    Proof</div>
                                <div class="flex gap-4 items-center pt-3">
                                    <img src="{{asset('admin-assets/images/pdf.png')}}" />
                                    <div>
                                        <h6 class=" font-bold text-[15px] leading-[28px] text-[#000000]">
                                            View PDF →</h6>
                                        <p class=" font-medium  text-[14px] text-[#CFC7C0] leading-[22px]">
                                            {{$property['usage_proof'] ?? "NA"}} {{-- Adhaarcard.pdf --}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid md:grid grid-cols-2 flex flex-col gap-6  lg:px-[30px] px-[20px]  mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Occupancy
                                Proof</div>
                            <div class="flex gap-4 items-center pt-3">
                                <img src="{{asset('admin-assets/images/pdf.png')}}" />
                                <div>
                                    <h6 class=" font-bold text-[15px] leading-[28px] text-[#000000]">View
                                        PDF →</h6>
                                    <p class=" font-medium  text-[14px] text-[#CFC7C0] leading-[22px]">
                                        {{$property['occupancy_proof'] ?? "NA"}} {{-- Adhaarcard.pdf --}}</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">
                                    Construction Proof</div>
                                <div class="flex gap-4 items-center pt-3">
                                    <img src="{{asset('admin-assets/images/pdf.png')}}" />
                                    <div>
                                        <h6 class=" font-bold text-[15px] leading-[28px] text-[#000000]">
                                            View PDF →</h6>
                                        <p class=" font-medium  text-[14px] text-[#CFC7C0] leading-[22px]">
                                            {{$property['construction_proof'] ?? "NA"}} {{-- Adhaarcard.pdf --}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <form action="{{route('add-property.declaration.save',['id'=> @$property['id'] ])}}" method="post">
        <div class="px-[10px] lg:px-[40px] py-[20px]">
            <h5 class=" font-semibold text-[20px] leading-[22px] text-[#000000] mt-8">Declaration</h5>
            <div class="flex mt-5 gap-4">
                <input type="checkbox" class="mt-[5px]">
                <p class=" font-normal text-[18px] leading-[32px] text-[#848484]">Lorem ipsum dolor sit
                    amet consectetur. Nunc sollicitudin est vitae molestie suspendisse varius. Enim ipsum
                    sed rhoncus porttitor sapien risus tortor donec. Rutrum consectetur nisi tincidunt amet
                    at sed dignissim augue. Auctor nunc scelerisque in urna.</p>
            </div>
            <div>
                <a href="" class=" font-medium text-[15px] leading-[20px] mt-5 text-[#F26F00]">Check
                    Declaration
                    Box</a>
            </div>

            <div class="flex justify-center my-10">
                <div
                    class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5 pb-[20px]">
                    <button id="prevBtn"
                        class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                        Reset
                    </button>
                    <button type="submit" onclick="openModal()"
                        class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Add
                        Property→</button>
                </div>
            </div>
        </div>
    </form>

    </div>

</div>


@endsection
<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');

        menu.classList.toggle('hidden');

    }
</script>
