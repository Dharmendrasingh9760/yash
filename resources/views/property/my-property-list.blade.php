@extends('include.main')
@section('content')
    <style>
        /* Add your CSS styles here */
        .hidden-list {
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
    @php
        $nonResidentialProperties = $property->filter(function ($item) {
            return $item->property == 'Non Residential';
        });

        $residentialProperties = $property->filter(function ($item) {
            return $item->property == 'Residential';
        });
    @endphp
    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class="font-bold text-[32px] leading-[40px] text-[#000000]">Property Tax</h2>
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
        <div id="nonResidentialContent" class="border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6">
            @if ($nonResidentialProperties->isEmpty())
                <div class="text-center py-4">
                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found</p>
                </div>
            @else
                @foreach ($nonResidentialProperties as $propertyData)
                    @if ($propertyData->property == 'Non Residential')
                        <div
                            class="flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                            <div>
                                <div class="font-semibold lg:text-[18px] text-[16px] leading-[22px] text-[#000000]">
                                    {{ $propertyData['id'] ?? 'NA' }} | {{ $propertyData['name_chairman_owner'] ?? 'NA' }}
                                </div>
                                <div class="flex items-center gap-5 pt-6">
                                    @if ($propertyData->status == 0)
                                        <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                            style="color:orange;">Waiting</p>
                                    @elseif($propertyData->status == 1)
                                        <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                            style="color:green;">Approved</p>
                                        @if ($propertyData->amount)
                                            <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] ">
                                                {{ $propertyData->payment_status == 0 ? 'Payment Pending - ' . $propertyData->amount : 'Payment Successful - ' . $propertyData->amount }}
                                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                            </p>
                                            {{ $propertyData->chalan_number }}
                                        @endif
                                    @else
                                        <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                            style="color:red;">Rejected</p>
                                    @endif
                                </div>
                            </div>
                            <a href="{{ route('my.property.nonresidential.view', ['id' => $propertyData['id']]) }}"
                                class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                                View Details→
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        <div id="residentialContent" class="hidden-list border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6">
            @if ($residentialProperties->isEmpty())
                <div class="text-center py-4">
                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found</p>
                </div>
            @else
                @foreach ($residentialProperties as $propertyData)
                    @if ($propertyData->property == 'Residential')
                        <div
                            class="flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                            <div>
                                <div class="font-semibold lg:text-[18px] text-[16px] leading-[22px] text-[#000000]">
                                    {{ $propertyData['id'] ?? 'NA' }} | {{ $propertyData['name_chairman_owner'] ?? 'NA' }}
                                </div>
                                <div class="flex items-center gap-5 pt-6">
                                    @if ($propertyData->status == 0)
                                        <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                            style="color:orange;">Waiting</p>
                                    @elseif($propertyData->status == 1)
                                        <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                            style="color:green;">Approved</p>
                                        @if ($propertyData->amount)
                                            <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] ">
                                                {{ $propertyData->payment_status == 0 ? 'Payment Pending - ' . $propertyData->amount : 'Payment Successful - ' . $propertyData->amount }}
                                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                            </p>
                                            {{ $propertyData->chalan_number }}
                                        @endif
                                    @else
                                        <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                            style="color:red;">Rejected</p>
                                    @endif
                                </div>
                            </div>
                            <a href="{{ route('my.property.residential.view', ['id' => $propertyData['id']]) }}"
                                class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                                View Details→
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <script>
        document.getElementById('nonResidentialBtn').addEventListener('click', function() {
            document.getElementById('nonResidentialContent').classList.remove('hidden-list');
            document.getElementById('residentialContent').classList.add('hidden-list');
        });

        document.getElementById('residentialBtn').addEventListener('click', function() {
            document.getElementById('residentialContent').classList.remove('hidden-list');
            document.getElementById('nonResidentialContent').classList.add('hidden-list');
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
