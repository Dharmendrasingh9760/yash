@extends('include.main')
@section('content')
    <style>
        #amountInput:focus {
            border-color: #3b82f6;
        }

        #validationMessage {
            margin-top: 0.25rem;
            font-size: 0.875rem;
            line-height: 1.25;
        }
    </style>

    {{-- <div class="xl:px-[4rem] md:px-[20px] px-[10px] py-[2rem]">
        <div class="lg:flex lg:flex-row lg:items-center justify-between gap-4 flex flex-col md:flex md:flex-row">
            <h2 class=" font-bold text-[29px] lg:text-[32px] leading-[40px] text-left text-[#000000]">Application Summery
            </h2>
            @if ($deathcertificate->payment_status == 1)
                <div class="flex gap-3 items-center ">
                    <a href="#" onclick="printPDF()"
                        class="w-[152px] h-[55px] lg:h-[70px] rounded-[100px] cursor-pointer text-[#000000] border border-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                        <img src="{{ asset('admin-assets/images/print.png') }}" />
                        Print
                    </a>
                    <a href="{{ route('death.certificate.pdf', ['id' => $deathcertificate['id']]) }}"
                        class="w-[184px] h-[55px] lg:h-[70px] cursor-pointer rounded-[100px] text-white bg-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                        <img src="{{ asset('admin-assets/images/download.png') }}" />
                        Download
                    </a>
                </div>
            @endif
        </div>
        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Death Certificate Details</h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Date Of Death</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->date_of_death ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of the Deceased
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->deceased_name ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">UID No. of the deceased</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->deceased__uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mother's name</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->mother_name ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">UID No. of the Mother </div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->mother_uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father's name </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->father_name ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">UID No of the Father</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->father_uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of Husband/Wife</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->spouse_names ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Spouse's UID No </div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->spouse_uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Age of the deceased</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->death_person_age ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address of the deceased at the
                            time of death </div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->time_of_death_address ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Permanent address of the
                                deceased </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->address_of_death_person ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">If you were addicted to alcohol
                            then for how many years </div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->alchol_addicted ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Hospital/Institution</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->hospital_institution ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Home Path</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->home_path ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Other Location</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->another_location ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of Informant</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->name_of_informant ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Path </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->path ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mobile Number</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->mobile_number ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email id</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->email_id ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">City/Village Name</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->city_or_village_name ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Is it a city or a village
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->city_or_village ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Occupation of the deceased</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->occupation ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Type of treatment received
                                before death </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->received_treatment_before_death ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Whether the cause of death was
                            medically certified</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->medical_certified ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of the disease or
                                actual cause of death </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->disease_name ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">In case of female death,
                            whether the death occurred during pregnancy, at the time of delivery or within 6 weeks after
                            termination of pregnancy</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->female_death ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">If you were addicted to
                                smoking, for how many </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->smoking_addicted ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">If you were addicted to chewing
                            tobacco in any form then for how many years</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->chewing_tobacco ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">If you were addicted to
                                chewing betel nut (including pan masala), then for how many years </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $deathcertificate->chewing_betel_nut ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">If you were addicted to alcohol
                            then for how many years </div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $deathcertificate->alchol_addicted ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Religion </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $deathcertificate->religion ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        @if ($deathcertificate->status == 2)
            <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
                <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                    <h4 class=" font-semibold text-[20px] leading-[25px]">Reason of Reject</h4>
                </div>
                <div class="mt-5">
                    <p class=" font-medium  text-[18px] leading-[22px] lg:px-[30px] px-[10px]">
                        {{ $deathcertificate->remark ?? 'NA' }}</p>
                </div>
            </div>
        @endif
    </div> --}}
    <iframe id="pdf-iframe" style="display: none;"></iframe>
    <div class="container mx-auto py-10 px-6">
        <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-black">Application Summary</h2>
                @if ($deathcertificate->payment_status == 1)
                    @if ($deathcertificate->remaining == '0')
                        <div class="flex space-x-4">
                            <!-- Print Button -->
                            <button onclick="printPDF()"
                                class="flex items-center space-x-2 px-6 py-3 bg-white border border-black rounded-full hover:bg-gray-100">
                                <img src="{{ asset('admin-assets/images/print.png') }}" alt="Print" />
                                <span class="font-semibold text-black">Print</span>
                            </button>

                            <!-- Download Button -->
                            <a href="{{ route('death.certificate.pdf', ['id' => $deathcertificate->id]) }}"
                                class="flex items-center space-x-2 px-6 py-3 bg-black text-white rounded-full hover:bg-gray-900">
                                <img src="{{ asset('admin-assets/images/download.png') }}" alt="Download" />
                                <span class="font-semibold">Download</span>
                            </a>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Death Certificate Details Section -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
                <h3 class="text-xl font-semibold mb-4">Death Certificate Details</h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Date Of Death</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->date_of_death ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Name of the Deceased</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->deceased_name ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">UID No. of the deceased</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->deceased__uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Mother's name</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->mother_name ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">UID No. of the Mother</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->mother_uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Father's name</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->father_name ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">UID No of the Father</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->father_uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Name of Husband/Wife</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->spouse_names ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Spouse's UID No</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->spouse_uid_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Age of the deceased</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->death_person_age ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Address of the deceased at the time of death</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->time_of_death_address ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Permanent address of the deceased</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->address_of_death_person ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">If you were addicted to alcohol then for how many years</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->alchol_addicted ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Hospital/Institution</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->hospital_institution ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Home Path</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->home_path ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Other Location</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->another_location ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Name of Informant</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->name_of_informant ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Path</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->path ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Mobile Number</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->mobile_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Email id</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->email_id ?? 'NA' }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">City/Village Name</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->city_or_village_name ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Is it a city or a village</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->city_or_village ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Occupation of the deceased</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->occupation ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Type of treatment received before death</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->received_treatment_before_death ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Whether the cause of death was medically certified</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->medical_certified ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Name of the disease or actual cause of death</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->disease_name ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">In case of female death, whether the death occurred during pregnancy, at
                            the time of delivery or within 6 weeks after termination of pregnancy</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->female_death ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">If you were addicted to smoking, for how many</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->smoking_addicted ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">If you were addicted to chewing tobacco in any form then for how many years
                        </p>
                        <p class="text-lg font-medium">{{ $deathcertificate->chewing_tobacco ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">If you were addicted to chewing betel nut (including pan masala), then for
                            how many years</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->chewing_betel_nut ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">If you were addicted to alcohol then for how many years</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->alchol_addicted ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Religion</p>
                        <p class="text-lg font-medium">{{ $deathcertificate->religion ?? 'NA' }}</p>
                    </div>
                </div>
            </div>

            <!-- Rejection Reason Section -->
            @if ($deathcertificate->status == 2)
                <div class="bg-yellow-50 border border-yellow-400 rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="text-xl font-semibold mb-4">Reason for Rejection</h3>
                    <p class="text-lg font-medium">{{ $deathcertificate->remark ?? 'NA' }}</p>
                </div>
            @endif
            @if ($deathcertificate->status == 1)
                <div
                    class="bg-blue-50 border border-blue-400 rounded-lg shadow-lg p-6 mt-6 flex flex-col md:flex-row justify-between items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold mb-2 text-blue-600">Payment</h3>
                        <p class="text-xl font-medium text-gray-700">
                            {{ '₹' . ' ' . ($deathcertificate->remaining != 0 ? $deathcertificate->remaining : $deathcertificate->amount) }}
                        </p>
                    </div>

                    @if ($deathcertificate->remaining !== '0')
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
                    @elseif ($deathcertificate->payment_status == 1 && $deathcertificate->remaining === '0')
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
            const maxAmount = {{ $deathcertificate->remaining ?? 0 }};

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
            var id = "{{ $deathcertificate->id ?? '' }}";
            var amount = document.getElementById('amountInput').value;
            console.log('data', id, amount)
            fetch('/create-order', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: id,
                        amount: amount,
                        type: 'DEATH'
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
                        // "prefill": {
                        //     "name": "Appentus",
                        //     "email": "appentus@gmail.com",
                        //     "contact": "8585857485"
                        // },
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
            iframe.src = '{{ route('death.certificate.print.pdf', ['id' => $deathcertificate->id]) }}';
            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
@endsection
