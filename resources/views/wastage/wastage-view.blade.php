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
    <div class="container mx-auto py-10 px-6">
        <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-black">Application Summary</h2>
                @if ($wastage->payment_status == 1)
                    @if ($wastage->remaining === '0')
                        <div class="flex gap-3 items-center ">
                            <button onclick="printPDF({{ $wastage->id }})"
                                class="w-[152px] h-[55px] lg:h-[70px] rounded-[100px] cursor-pointer text-[#000000] border border-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                                <img src="{{ asset('admin-assets/images/print.png') }}" />
                                Print
                            </button>
                            <a href="{{ route('wastage.wastagePdf', ['id' => $wastage->id]) }}"
                                class="w-[184px] h-[55px] lg:h-[70px] cursor-pointer rounded-[100px] text-white bg-black font-semibold text-[18px] leading-[30px] flex justify-center items-center">
                                <img src="{{ asset('admin-assets/images/download.png') }}" />
                                Download
                            </a>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Birth Certificate Details Section -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
                <h3 class="text-xl font-semibold mb-4">Wastage Collection Details</h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Emitra Code</p>
                        <p class="text-lg font-medium">{{ $wastage->code_12 ?? 'NA' }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Mobile Number</p>
                        <p class="text-lg font-medium">{{ $wastage->mobile ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <p class="text-gray-600">Email</p>
                        <p class="text-lg font-medium">{{ $wastage->email ?? 'NA' }}</p>
                    </div>
                </div>
            </div>

            <!-- Rejection Reason Section -->
            @if ($wastage->status == 2)
                <div class="bg-yellow-50 border border-yellow-400 rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="text-xl font-semibold mb-4">Reason of Reject</h3>
                    <p class="text-lg font-medium">{{ $wastage->remark ?? 'NA' }}</p>
                </div>
            @endif
            @if ($wastage->status == 1)
                <div
                    class="bg-blue-50 border border-blue-400 rounded-lg shadow-lg p-6 mt-6 flex flex-col md:flex-row justify-between items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold mb-2 text-blue-600">Payment</h3>
                        <p class="text-xl font-medium text-gray-700">
                            {{ '₹' . ' ' . ($wastage->remaining != 0 ? $wastage->remaining : $wastage->amount) }}
                        </p>
                    </div>

                    @if ($wastage->remaining !== '0')
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
                    @elseif ($wastage->payment_status == 1 && $wastage->remaining === '0')
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
            const maxAmount = {{ $wastage->remaining }};

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

            var id = "{{ $wastage->id ?? '' }}";
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
                        type: 'WASTAGE'
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
        function printPDF(id) {
            var iframe = document.getElementById('pdf-iframe');
            // Set the src to the route for printing the PDF
            iframe.src = "{{ route('wastagePrintPdf.print.pdf', ':id') }}".replace(':id', id);

            iframe.onload = function() {
                iframe.contentWindow.print();
            };
        }
    </script>
@endsection
