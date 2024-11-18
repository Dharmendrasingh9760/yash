@extends('include.main')
@section('content')
    <!-- Hidden iframe for printing -->
    <iframe id="pdf-iframe" style="display: none;"></iframe>
    <div class="bg-gray-50 border border-gray-200 rounded-[20px] mt-10    lg:px-[4rem] px-[10px]  ">
        <div class=" border-b border-[#B1B6C6] pb-[100px]">

            <div class="lg:flex lg:flex-row lg:items-center justify-between gap-4 flex flex-col md:flex md:flex-row">
                <h2 class=" font-bold text-[29px] lg:text-[32px] leading-[40px] text-left text-[#000000]">Application Summery
                </h2>
                @if ($trades->payment_status == 1)
                    @if ($trades->remaining == '0')
                        <div class="flex gap-3 items-center ">
                            <button onclick="printPDF()"
                                class="w-[152px] h-[55px] lg:h-[70px] rounded-[100px] cursor-pointer text-[#000000] border border-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                                <img src="{{ asset('admin-assets/images/print.png') }}" />
                                Print
                            </button>
                            <a href="{{ route('trade.license.gernatepdf', ['id' => $trades['id']]) }}"
                                class="w-[184px] h-[55px] lg:h-[70px] cursor-pointer rounded-[100px] text-white bg-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                                <img src="{{ asset('admin-assets/images/download.png') }}" />
                                Download
                            </a>
                        </div>
                    @endif
                @endif
            </div>


            <div class="lg:grid grid-cols-2 gap-6 py-[20px]">
                <div>
                    <div class="lg:flex md:flex justify-between items-center">
                        <div>
                            <h4 class=" font-semibold text-[20px] leading-[25px]">Trade Details</h4>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg py-8 px-6 mt-6 w-full h-full shadow-lg">
                        <div class="lg:grid grid-cols-2 gap-6">
                            <!-- Name of Trade -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Name of Trade <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->name ?? 'NA' }}</p>
                            </div>
                            <!-- Trade Commencement Date -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Trade Commencement Date</div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->commencement_date ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 mt-6">
                            <!-- Trade Period -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Trade Period</div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->trade_period ?? 'NA' }}</p>
                            </div>
                            <!-- Trade GST No. -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Trade GST No.</div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->trade_gst_no ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 mt-6">
                            <!-- Trade Purpose -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Trade Purpose</div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->trade_purpose ?? 'NA' }}</p>
                            </div>
                            <!-- Trade License Type -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Trade License Type</div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->license_type ?? 'NA' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:mt-0 md:mt-10  mt-10 ">
                    <div class="lg:flex md:flex justify-between items-center">
                        <div>
                            <h4 class=" font-semibold text-[20px] leading-[25px]">Trade Location Details</h4>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg py-8 px-6 mt-8 w-full shadow-lg">
                        <div class="lg:grid grid-cols-2 gap-6">
                            <!-- City -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">City <span class="text-red-600">*</span>
                                </div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->city ?? 'NA' }}</p>
                            </div>
                            <!-- Door/House Number -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Door/House Number <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->door ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 mt-6">
                            <!-- Building/Colony Name -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Building / Colony Name <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->colony_name ?? 'NA' }}</p>
                            </div>
                            <!-- Street Name -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Street Name <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->state_name ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 mt-6">
                            <!-- Village -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Village <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->village ?? 'NA' }}</p>
                            </div>
                            <!-- Pin Code -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Pin code <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->pin_code ?? 'NA' }}</p>
                            </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 mt-6">
                            <!-- Electricity Connection Number -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Electricity Connection Number</div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->collection_name ?? 'NA' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-20">
                    <div class="lg:flex md:flex justify-between items-center">
                        <div>
                            <h4 class=" font-semibold text-[20px] leading-[25px]">Owner Details</h4>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg py-8 px-6 mt-8 w-full shadow-lg">
                        <div class="lg:grid grid-cols-2 gap-6">
                            <!-- Type of Ownership -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Type of Ownership <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->type_of_ownership ?? 'NA' }}</p>
                            </div>
                            <!-- Type of Subownership -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Type of Subownership <span
                                        class="text-red-600">*</span></div>
                                <p class="text-lg font-semibold text-gray-900">{{ $trades->type_of_sub_ownership ?? 'NA' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-20">
                    <div class="lg:flex md:flex justify-between items-center">
                        <div>
                            <h4 class=" font-semibold text-[20px] leading-[25px]">Required Document</h4>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg py-8 px-6 mt-8 w-full shadow-lg">
                        <div class="lg:grid grid-cols-2 gap-6">
                            <!-- Owner's ID Proof -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Owner's ID Proof <span
                                        class="text-red-600">*</span></div>
                                <div class="flex items-center gap-4 pt-3">
                                    <img src="{{ asset('admin-assets/images/pdf.png') }}" alt="PDF Icon" class="w-8 h-8">
                                    <div>
                                        @if (!empty($trades['ownership_id_proof_img']))
                                            <a href="{{ $trades['ownership_id_proof_img'] ?? 'NA' }}" target="_blank"
                                                class="font-bold text-md text-gray-900 hover:text-blue-600 transition">
                                                View PDF →
                                            </a>
                                        @else
                                            <a href="#"
                                                class="font-bold text-md text-gray-900 hover:text-blue-600 transition">
                                                View PDF →
                                            </a>
                                        @endif
                                        <p class="text-sm text-gray-400 mt-1">{{ $trades['ownership_id_proof'] ?? 'NA' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Ownership Proof -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Ownership Proof <span
                                        class="text-red-600">*</span></div>
                                <div class="flex items-center gap-4 pt-3">
                                    <img src="{{ asset('admin-assets/images/pdf.png') }}" alt="PDF Icon" class="w-8 h-8">
                                    <div>
                                        @if (!empty($trades['ownership_proof_img']))
                                            <a href="{{ $trades['ownership_proof_img'] ?? 'NA' }}" target="_blank"
                                                class="font-bold text-md text-gray-900 hover:text-blue-600 transition">
                                                View PDF →
                                            </a>
                                        @else
                                            <a href="#"
                                                class="font-bold text-md text-gray-900 hover:text-blue-600 transition">
                                                View PDF →
                                            </a>
                                        @endif
                                        <p class="text-sm text-gray-400 mt-1">{{ $trades['ownership_proof'] ?? 'NA' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:grid grid-cols-2 gap-6 mt-6">
                            <!-- Owner's Photo -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 mb-1">Owner's Photo <span
                                        class="text-red-600">*</span></div>
                                <div class="flex items-center gap-4 pt-3">
                                    <img src="{{ asset('admin-assets/images/pdf.png') }}" alt="PDF Icon"
                                        class="w-8 h-8">
                                    <div>
                                        @if (!empty($trades['ownership_photu']))
                                            <a href="{{ $trades['ownership_photu'] ?? 'NA' }}" target="_blank"
                                                class="font-bold text-md text-gray-900 hover:text-blue-600 transition">
                                                View PDF →
                                            </a>
                                        @else
                                            <a href="#"
                                                class="font-bold text-md text-gray-900 hover:text-blue-600 transition">
                                                View PDF →
                                            </a>
                                        @endif
                                        <p class="text-sm text-gray-400 mt-1">{{ $trades['ownership'] ?? 'NA' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg py-8 mt-8 w-full shadow-lg">
                <div class="px-10 py-6">
                    <h2 class="font-bold text-2xl text-gray-800 mb-6">Trade License Owner Details</h2>
                    <div class="overflow-x-auto">
                        <table id="trades-table" class="min-w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">S. NO
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Mobile
                                        No.</th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Name
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">
                                        Father/Husband's Name</th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">
                                        Relationship</th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Gender
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Date
                                        of Birth</th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Email
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Pan No
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">
                                        Address</th>
                                    {{-- <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">
                                        Category</th> --}}
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($tradeOwners as $key => $tradeOwner)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $key + 1 }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->mobile_no ?? 'NA' }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->name ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->father_name ?? 'NA' }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-700">
                                            {{ $tradeOwner->relationship ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->gender ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->dob ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->email ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->pan_no ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->address ?? 'NA' }}
                                        </td>
                                        {{-- <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeOwner->category ?? 'NA' }}
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg py-8 mt-8 w-full shadow-lg">
                <div class="px-10 py-6">
                    <h2 class="font-bold text-2xl text-gray-800 mb-6">Trade License Unit Details</h2>
                    <div class="overflow-x-auto">
                        <table id="trades-table" class="min-w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">SO. NO
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Trade
                                        Type</th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">Trade
                                        Sub Type</th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">UOM
                                    </th>
                                    <th class="px-6 py-3 text-sm font-medium text-gray-700 uppercase tracking-wider">UOM
                                        Value</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($tradeUnits as $key => $tradeUnit)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py- text-sm font-medium text-gray-900">{{ $key + 1 }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeUnit->trade_type ?? 'NA' }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-700">
                                            {{ $tradeUnit->trade_subType ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeUnit->uom ?? 'NA' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-700">{{ $tradeUnit->uom_value ?? 'NA' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if ($trades['check_status'] == 2)
                <div class="bg-yellow-50 border border-yellow-400 rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="text-xl font-semibold mb-4">Reason for Rejection</h3>
                    <p class="text-lg font-medium">{{ $trades['remark'] ?? 'NA' }}</p>
                </div>
            @endif
            @if ($trades->check_status == 1)
                <div
                    class="bg-blue-50 border border-blue-400 rounded-lg shadow-lg p-6 mt-6 flex flex-col md:flex-row justify-between items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold mb-2 text-blue-600">Payment</h3>
                        <p class="text-xl font-medium text-gray-700">
                            {{ '₹' . ' ' . ($trades->remaining != 0 ? $trades->remaining : $trades->amount) }}
                        </p>
                    </div>

                    @if ($trades->remaining !== '0')
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
                    @elseif ($trades->payment_status == 1 && $trades->remaining === '0')
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
            const maxAmount = {{ $trades->remaining }};

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

            var id = "{{ $trades->id ?? '' }}";
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
                        type: 'TRADE'
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
            iframe.src = '{{ route('trade.license.print.pdf', ['id' => $trades->id]) }}';
            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
@endsection
