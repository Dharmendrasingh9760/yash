@extends('include.main')
@section('content')
    <!-- Hidden iframe for printing -->
    <iframe id="pdf-iframe" style="display: none;"></iframe>
    <div class="container mx-auto py-10 px-6">
        <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
            <div class="lg:flex lg:flex-row lg:items-center justify-between gap-4 flex flex-col md:flex md:flex-row">
                <h2 class=" font-bold text-[29px] lg:text-[32px] leading-[40px] text-left text-[#000000]">Application Summery
                </h2>
                @if ($marriage->payment_status == 1)
                    @if ($marriage->remaining == '0')
                        <div class="flex gap-3 items-center ">
                            <a href="#" onclick="printPDF()"
                                class="w-[152px] h-[55px] lg:h-[70px] rounded-[100px] cursor-pointer text-[#000000] border border-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                                <img src="{{ asset('admin-assets/images/print.png') }}" />
                                Print
                            </a>
                            <a href="{{ route('marriage.certificate.gernatepdf', ['id' => $marriage['id']]) }}"
                                class="w-[184px] h-[55px] lg:h-[70px] cursor-pointer rounded-[100px] text-white bg-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                                <img src="{{ asset('admin-assets/images/download.png') }}" />
                                Download
                            </a>
                        </div>
                    @endif
                @endif
            </div>

            <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                    <h4 class=" font-semibold text-[20px] leading-[25px]">Marriage Details</h4>
                </div>
                <div class="mt-5">
                    <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">City</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->city ?? 'NA' }}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Village</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->village ?? 'NA' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Marriage Date</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->marriage_date ?? 'NA' }}</p>
                        </div>
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Marriage Place</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->marriage_place ?? 'NA' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                        <div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pincode</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->pin_code ?? 'NA' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:grid grid-cols-2 gap-10 py-[20px]">
                <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                    <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Bride Details</h4>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_name ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Date Of Birth<span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_date_of_birth ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_contact ?? 'NA' }}
                                </p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_email ?? 'NA' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_father_name ?? 'NA' }}
                                </p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mother Name</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_mother_name ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_address ?? 'NA' }}
                                </p>
                            </div>

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_district ?? 'NA' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">state</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_state ?? 'NA' }}
                                </p>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">PinCode</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->pin_code ?? 'NA' }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Is Divyang
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_is_divyang ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                    <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Groom Details</h4>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_name ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Date Of Birth<span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_date_of_birth ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_contact ?? 'NA' }}
                                </p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_email ?? 'NA' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_father_name ?? 'NA' }}
                                </p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mother Name</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_mother_name ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_address ?? 'NA' }}
                                </p>
                            </div>

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_district ?? 'NA' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">state</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_state ?? 'NA' }}
                                </p>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">PinCode</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_pincode ?? 'NA' }}
                                </p>
                            </div>

                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Is Divyang
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_is_divyang ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                    <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Bride Guardian Details</h4>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Relation With Bride
                                </div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_guardian_relation_with_bride ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name<span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_guardian_name ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address</div>

                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_guardian_address ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_guardian_district ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">State</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_guardian_state ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">PinCode</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_guardian_pincode ?? 'NA' }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_guardian_contact ?? 'NA' }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_guardian_email ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                    <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Groom Guardian Details</h4>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Relation With Bride
                                </div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_guardian_relation_with_bride ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name<span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_guardian_name ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address</div>

                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_guardian_address ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_guardian_district ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">State</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_guardian_state ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">PinCode</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_guardian_pincode ?? 'NA' }}</p>
                            </div>


                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact
                                    </div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_guardian_contact ?? 'NA' }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_guardian_email ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                    <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Bride Witness Details
                        </h4>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_witness_name ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address<span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_witness_address ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District
                                    Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_witness_district ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">State</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_witness_state ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pincode</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->bride_witness_pincode ?? 'NA' }}</p>
                                </div>

                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->bride_witness_name ?? 'NA' }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-[15px] mt-7 w-full pb-[40px] ">
                    <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                        <h4 class=" font-semibold text-[20px] leading-[25px]">Groom Witness Details
                        </h4>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_witness_name ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address<span
                                            class="text-red-600">*</span></div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_witness_address ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District
                                    Name</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_witness_district ?? 'NA' }}</p>
                            </div>
                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">State</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_witness_state ?? 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                            <div>
                                <div>
                                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pincode</div>
                                    <p class=" font-medium  text-[18px] leading-[22px]">
                                        {{ $marriage->groom_witness_pincode ?? 'NA' }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact</div>
                                <p class=" font-medium  text-[18px] leading-[22px]">
                                    {{ $marriage->groom_witness_name ?? 'NA' }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                        </div>
                    </div>
                </div>
            </div>
            @if ($marriage->status == 2)
                <div class="bg-yellow-50 border border-yellow-400 rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="text-xl font-semibold mb-4">Reason for Rejection</h3>
                    <p class="text-lg font-medium">{{ $marriage->remark ?? 'NA' }}</p>
                </div>
            @endif
            @if ($marriage->status == 1)
                <div
                    class="bg-blue-50 border border-blue-400 rounded-lg shadow-lg p-6 mt-6 flex flex-col md:flex-row justify-between items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold mb-2 text-blue-600">Payment</h3>
                        <p class="text-xl font-medium text-gray-700">
                            {{ '₹' . ' ' . ($marriage->remaining != 0 ? $marriage->remaining : $marriage->amount) }}
                        </p>
                    </div>

                    @if ($marriage->remaining !== '0')
                        <div class="relative mt-4 md:mt-0">
                            <div class="flex items-center space-x-2">
                                <input type="number" id="amountInput"
                                    class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 placeholder-gray-400" />
                                <button id="payButton"
                                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200"
                                    disabled>
                                    Pay
                                </button>
                            </div>

                            <p id="validationMessage" class="text-red-500 mt-2 absolute hidden"></p>
                        </div>
                    @elseif ($marriage->payment_status == 1 && $marriage->remaining === '0')
                        <button
                            class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition duration-200">
                            Payment Successful
                        </button>
                    @endif
                </div>
            @endif
        </div>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const amountInput = document.getElementById('amountInput');
            const payButton = document.getElementById('payButton');
            const validationMessage = document.getElementById('validationMessage');
            const maxAmount = {{ $marriage->remaining }};

            const validateInput = () => {
                const inputValue = parseFloat(amountInput.value);

                if (!amountInput.value) {
                    validationMessage.textContent = "Amount is required.";
                    validationMessage.classList.remove('hidden');
                    payButton.disabled = true;
                } else if (inputValue < 1) {
                    validationMessage.textContent = "Amount must be at least ₹1.";
                    validationMessage.classList.remove('hidden');
                    payButton.disabled = true;
                } else if (inputValue < 0) {
                    validationMessage.textContent = "Amount cannot be negative.";
                    validationMessage.classList.remove('hidden');
                    payButton.disabled = true;
                } else if (inputValue > maxAmount) {
                    validationMessage.textContent = `Amount cannot exceed ₹${maxAmount}.`;
                    validationMessage.classList.remove('hidden');
                    payButton.disabled = true;
                } else {
                    validationMessage.textContent = "";
                    validationMessage.classList.add('hidden');
                    payButton.disabled = false;
                }
            };

            amountInput.addEventListener('input', validateInput);
        });
    </script>
    <script>
        document.getElementById('payButton').onclick = function(e) {
            e.preventDefault();

            var id = "{{ $marriage->id ?? '' }}";
            var amount = document.getElementById('amountInput').value;
            fetch('/create-order', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: id,
                        amount: amount,
                        type: 'MARRIAGE'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    var options = {
                        "key": "{{ env('RAZORPAY_KEY_ID') }}",
                        "amount": data.amount,
                        "currency": "INR",
                        "name": "Appentus",
                        "description": "Test Transaction",
                        "order_id": data.order_id,
                        "handler": function(response) {
                            fetch('/verify-payment', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: JSON.stringify({
                                        razorpay_order_id: response.razorpay_order_id,
                                        razorpay_payment_id: response.razorpay_payment_id,
                                        razorpay_signature: response.razorpay_signature,
                                        data: data
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    alert(data.message);
                                    location.reload();
                                });
                        },
                        "theme": {
                            "color": "#F37254"
                        }
                    };

                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                })
                .catch(error => console.error('Error:', error));
        };
    </script>
    <script>
        function printPDF() {
            var iframe = document.getElementById('pdf-iframe');
            iframe.src = '{{ route('marriage.certificate.printpdf', ['id' => $marriage->id]) }}';
            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
@endsection
