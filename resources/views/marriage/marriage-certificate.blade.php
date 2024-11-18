<!DOCTYPE html>
<html>

<head>
    <title>Marriage Certificate</title>
</head>

<body>
    <div class="border border-gray-400 rounded-lg mt-6">
        <div class="lg:flex justify-between">
            <!-- Left Section -->
            <div class="lg:w-[600px] w-full">
                <div class="border-b border-gray-300 pb-8">
                    <div class="grid grid-cols-2 px-4 pt-10">
                        <span class="text-lg lg:text-xl font-normal">Challan Fee</span>
                        <span class="text-lg lg:text-xl font-normal text-right">Lorem ipsum dolor</span>
                    </div>
                    <div class="grid grid-cols-2 px-4 pt-5">
                        <span class="text-lg lg:text-xl font-normal">Registration Fee</span>
                        <span class="text-lg lg:text-xl font-normal text-right">Lorem ipsum dolor</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 px-4 py-5">
                    <span class="text-lg lg:text-xl font-normal">Total Amount</span>
                    <span class="text-lg lg:text-xl font-normal text-right">Lorem ipsum dolor</span>
                </div>
            </div>
            <!-- Right Section -->
            <div class="pb-10 text-right">
                <div class="font-bold text-xl lg:text-2xl text-black px-4 pt-10">Fee Estimated</div>
                <div class="font-semibold text-xl lg:text-2xl px-4 pt-2">$12,750</div>
                <div class="font-semibold text-xl lg:text-2xl px-4 pt-2 text-green-600">Paid Successfully</div>
            </div>
        </div>
    </div>

    <!-- Marriage Details Section -->
    <div class="border border-orange-600 bg-orange-100 rounded-lg mt-7 w-full pb-10">
        <div class="border-b border-gray-300 py-5 px-6">
            <h4 class="font-semibold text-xl">Marriage Details</h4>
        </div>
        <div class="mt-5">
            <!-- First Row -->
            <div class="grid grid-cols-2 gap-6 lg:px-6 px-3">
                <div>
                    <label class="text-sm font-normal text-black">City <span class="text-red-600">*</span></label>
                    <p class="font-medium text-lg">{{ $marriage->city ?? 'NA' }}</p>
                </div>
                <div>
                    <label class="text-sm font-normal text-black">Village <span class="text-red-600">*</span></label>
                    <p class="font-medium text-lg">{{ $marriage->village ?? 'NA' }}</p>
                </div>
            </div>
            <!-- Second Row -->
            <div class="grid grid-cols-2 gap-6 lg:px-6 px-3 mt-4">
                <div>
                    <label class="text-sm font-normal text-black">Marriage Place</label>
                    <p class="font-medium text-lg">{{ $marriage->marriage_place ?? 'NA' }}</p>
                </div>
                <div>
                    <label class="text-sm font-normal text-black">Marriage Date</label>
                    <p class="font-medium text-lg">{{ $marriage->marriage_date ?? 'NA' }}</p>
                </div>
            </div>
            <!-- Third Row -->
            <div class="grid grid-cols-2 gap-6 lg:px-6 px-3 mt-4">
                <div>
                    <label class="text-sm font-normal text-black">Pincode</label>
                    <p class="font-medium text-lg">{{ $marriage->pin_code ?? 'NA' }}</p>
                </div>
            </div>
        </div>
    </div>



    <div class="lg:grid grid-cols-2 gap-10  py-[20px]">
        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Bride Details</h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">name<span
                                class="text-red-600">*</span></div>
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
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_contact ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_email ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father Name</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_father_name ?? 'NA' }}
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
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_address ?? 'NA' }}</p>
                    </div>

                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_district ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">state<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->bride_state ?? 'NA' }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pin Code<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->pin_code ?? 'NA' }}</p>
                    </div>
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
        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Groom Details</h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">name<span
                                class="text-red-600">*</span></div>
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
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_contact ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_email ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father Name</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_father_name ?? 'NA' }}
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
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_address ?? 'NA' }}</p>
                    </div>

                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">District
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $marriage->groom_district ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">state<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_state ?? 'NA' }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pin Code<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $marriage->groom_pincode ?? 'NA' }}</p>
                    </div>
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

        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Bride Guardian Details</h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Relation With Bride<span
                                class="text-red-600">*</span></div>
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


                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pin Code<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $marriage->bride_guardian_pincode ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $marriage->bride_guardian_contact ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $marriage->bride_guardian_email ?? 'NA' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Groom Guardian Details</h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Relation With Bride<span
                                class="text-red-600">*</span></div>
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



                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Pin Code<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $marriage->groom_guardian_pincode ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $marriage->groom_guardian_contact ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $marriage->groom_guardian_email ?? 'NA' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Bride Witness Details
                </h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name<span
                                class="text-red-600">*</span></div>
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
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $marriage->bride_witness_name ?? 'NA' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Groom Witness Details
                </h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name<span
                                class="text-red-600">*</span></div>
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
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Contact<span
                                class="text-red-600">*</span></div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $marriage->groom_witness_name ?? 'NA' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add more details as needed -->
</body>

</html>
