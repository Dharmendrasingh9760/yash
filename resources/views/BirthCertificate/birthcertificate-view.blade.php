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

    <iframe id="pdf-iframe" style="display: none;"></iframe>
    {{-- <div class="xl:px-[4rem] md:px-[20px] px-[10px] py-[2rem]">
        <div class="lg:flex lg:flex-row lg:items-center justify-between gap-4 flex flex-col md:flex md:flex-row">
            <h2 class=" font-bold text-[29px] lg:text-[32px] leading-[40px] text-left text-[#000000]">Application Summery
            </h2>
            @if ($birthcertificate->payment_status == 1)
                <div class="flex gap-3 items-center ">
                    <a href="#" onclick="printPDF()"
                        class="w-[152px] h-[55px] lg:h-[70px] rounded-[100px] cursor-pointer text-[#000000] border border-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                        <img src="{{ asset('admin-assets/images/print.png') }}" />
                        Print
                    </a>
                    <a href="{{ route('birth.certificate.pdf', ['id' => $birthcertificate['id']]) }}"
                        class="w-[184px] h-[55px] lg:h-[70px] cursor-pointer rounded-[100px] text-white bg-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                        <img src="{{ asset('admin-assets/images/download.png') }}" />
                        Download
                    </a>
                </div>
            @endif

        </div>
        <!-- <div class=" border border-[#A0A0A0] rounded-[15px] mt-6 ">
                    <div class="lg:flex justify-between">
                        <div class="lg:w-[600px] w-full">
                            <div class=" border-b border-[#B1B6C6] pb-[30px]">
                                <div class="flex justify-between px-[15px] pt-[40px]">
                                    <div class=" font-normal text-[16px] lg:text-[18px] leading-[30px]">Challan Fee</div>
                                    <div class=" font-normal text-[16px] lg:text-[18px] leading-[30px]">Lorem ipsum dolor</div>
                                </div>
                                <div class="flex justify-between px-[15px] pt-[20px]">
                                    <div class=" font-normal text-[16px] lg:text-[18px] leading-[30px]">Registration Fee</div>
                                    <div class=" font-normaltext-[16px] lg:text-[18px] leading-[30px]">Lorem ipsum dolor</div>
                                </div>
                            </div>
                            <div class="flex justify-between px-[15px] py-[20px]">
                                <div class=" font-normal text-[16px] lg:text-[18px] leading-[30px]">Total Amount</div>
                                <div class=" font-normal text-[16px] lg:text-[18px] leading-[30px]">Lorem ipsum dolor</div>
                            </div>
                        </div>

                        <div class="pb-[40px]">
                            <div class=" font-bold text-[22px] leading-[27px] text-[#000000]   px-[18px] text-right  pt-[40px]">Fee
                                Estimated</div>
                            <div class=" font-semibold text-[22px] leading-[27px] text-right  px-[18px] pt-[10px]">$12,750</div>
                            <div class=" font-semibold text-[22px] leading-[27px] text-right  px-[18px] pt-[10px] text-[#579558]">
                                Paid Successfully</div>
                        </div>
                    </div>
                </div> -->

        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
            <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                <h4 class=" font-semibold text-[20px] leading-[25px]">Birth Certificate Details</h4>
            </div>
            <div class="mt-5">
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px]">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Born Date</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->date_of_birth ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Gender
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->gender ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of new born baby, if any
                        </div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->name ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father's name</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->name_of_father ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mother's name</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->name_of_mother ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Time of birth of child
                                Address of parents</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->address_parent_child ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Permanent residential address of
                            parents</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->permanent_address ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Place of Birth</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->place_of_birth ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of Informant</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->name_of_informant ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Address</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->address ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mobile Number</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->mobile_number ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Email id</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">{{ $birthcertificate->email_id ?? 'NA' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Name of the village or town
                            where the mother resides</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->mother_resides_place ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Family Tradition</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->family_tradition ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father's educational level</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->father_educational_level ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mother's educational level
                            </div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->mother_educational_level ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Father's business</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->father_business ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Mother's age at
                                birthcertificate</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->mother_age_at_marriage ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">At the time of this child's
                            birth</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->time_of_child_birth ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Write the number of
                                uninhabited people this year of Mother</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->uninhabited_people_this_year_of_mother ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Under what auspices did the
                            delivery take place</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->Under_auspices_delivery_take_place ?? 'NA' }}</p>
                    </div>
                    <div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Time of Conception</div>
                            <p class=" font-medium  text-[18px] leading-[22px]">
                                {{ $birthcertificate->time_of_conception ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 lg:px-[30px] px-[10px] mt-4">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] ">Weight at Birth</div>
                        <p class=" font-medium  text-[18px] leading-[22px]">
                            {{ $birthcertificate->weight_at_birth ?? 'NA' }}</p>
                    </div>
                    <div>

                    </div>
                </div>


            </div>
        </div>
        @if ($birthcertificate->status == 2)
            <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] mt-7 w-full pb-[40px] ">
                <div class="border-b border-[#B1B6C6] py-[20px]  px-[30px]">
                    <h4 class=" font-semibold text-[20px] leading-[25px]">Reason of Reject</h4>
                </div>
                <div class="mt-5">
                    <p
                        class=" font-medium  text-[18px] leading-[22px]  font-medium  text-[18px] leading-[22px] lg:px-[30px] px-[10px]">
                        {{ $birthcertificate->remark ?? 'NA' }}</p>
                </div>
            </div>
        @endif
    </div> --}}
    <div class="container mx-auto py-10 px-6">
        <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-black">Application Summary</h2>

                @if ($birthcertificate->payment_status == 1)
                    @if ($birthcertificate->remaining === '0')
                        <div class="flex space-x-4">
                            <!-- Print Button -->
                            <a href="#" onclick="printPDF()"
                                class="flex items-center space-x-2 px-6 py-3 bg-white border border-black rounded-full hover:bg-gray-100">
                                <img src="{{ asset('admin-assets/images/print.png') }}" alt="Print" />
                                <span class="font-semibold text-black">Print</span>
                            </a>

                            <!-- Download Button -->
                            <a href="{{ route('birth.certificate.pdf', ['id' => $birthcertificate->id]) }}"
                                class="flex items-center space-x-2 px-6 py-3 bg-black text-white rounded-full hover:bg-gray-900">
                                <img src="{{ asset('admin-assets/images/download.png') }}" alt="Download" />
                                <span class="font-semibold">Download</span>
                            </a>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Birth Certificate Details Section -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
                <h3 class="text-xl font-semibold mb-4">Birth Certificate Details</h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Born Date</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->date_of_birth ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Gender</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->gender ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Name of new born baby, if any</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->name ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Father's name</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->name_of_father ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Mother's name</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->name_of_mother ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Time of birth of child / Address of parents</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->address_parent_child ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Permanent residential address of parents</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->permanent_address ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Place of Birth</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->place_of_birth ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Name of Informant</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->name_of_informant ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Address</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->address ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Mobile Number</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->mobile_number ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Email id</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->email_id ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Name of the village or town where the mother resides</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->mother_resides_place ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Family Tradition</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->family_tradition ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Father's educational level</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->father_educational_level ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Mother's educational level</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->mother_educational_level ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Father's business</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->father_business ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Mother's age at birth</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->mother_age_at_marriage ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">At the time of this child's birth</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->time_of_child_birth ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Write the number of uninhabited people this year of Mother</p>
                        <p class="text-lg font-medium">
                            {{ $birthcertificate->uninhabited_people_this_year_of_mother ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Under what auspices did the delivery take place</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->Under_auspices_delivery_take_place ?? 'NA' }}
                        </p>
                    </div>
                    <div>
                        <p class="text-gray-600">Time of Conception</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->time_of_conception ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Weight at Birth</p>
                        <p class="text-lg font-medium">{{ $birthcertificate->weight_at_birth ?? 'NA' }}</p>
                    </div>
                </div>
            </div>

            <!-- Rejection Reason Section -->
            @if ($birthcertificate->status == 2)
                <div class="bg-yellow-50 border border-yellow-400 rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="text-xl font-semibold mb-4">Reason of Reject</h3>
                    <p class="text-lg font-medium">{{ $birthcertificate->remark ?? 'NA' }}</p>
                </div>
            @endif
            @if ($birthcertificate->status == 1)
                <div
                    class="bg-blue-50 border border-blue-400 rounded-lg shadow-lg p-6 mt-6 flex flex-col md:flex-row justify-between items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold mb-2 text-blue-600">Payment</h3>
                        <p class="text-xl font-medium text-gray-700">
                            {{ '₹' . ' ' . ($birthcertificate->remaining != 0 ? $birthcertificate->remaining : $birthcertificate->amount) }}
                        </p>
                    </div>

                    @if ($birthcertificate->remaining !== '0')
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
                    @elseif ($birthcertificate->payment_status == 1 && $birthcertificate->remaining === '0')
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
            const maxAmount = {{ $birthcertificate->remaining }};

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

            var id = "{{ $birthcertificate->id ?? '' }}";
            var amount = document.getElementById('amountInput').value;
            // alert(amount);
            fetch('/create-order', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        id: id,
                        amount: amount,
                        type: 'BIRTH'
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
            iframe.src = '{{ route('birth.certificate.print.pdf', ['id' => $birthcertificate->id]) }}';
            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
@endsection
