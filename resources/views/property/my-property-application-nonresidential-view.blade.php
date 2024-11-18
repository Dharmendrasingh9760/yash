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
         <!-- Header Section -->
         <div class="flex justify-between items-center mb-8">
             <h2 class="text-3xl font-bold text-black">Property Tax Details</h2>
             @
             @if ($property->payment_status == 1)
                 @if ($property->remaining == '0')
                     <div class="flex space-x-4">
                         <a href="#" onclick="printPDF()"
                             class="flex items-center space-x-2 px-6 py-3 bg-white border border-black rounded-full hover:bg-gray-100">
                             <img src="{{ asset('admin-assets/images/print.png') }}" alt="Print" />
                             <span class="font-semibold text-black">Print</span>
                         </a>

                         <a href="{{ route('property.nonresidential.pdf', ['id' => $property->id]) }}"
                             class="flex items-center space-x-2 px-6 py-3 bg-black text-white rounded-full hover:bg-gray-900">
                             <img src="{{ asset('admin-assets/images/download.png') }}" alt="Download" />
                             <span class="font-semibold">Download</span>
                         </a>
                     </div>
                 @endif
             @endif
         </div>
         <!-- Property Details Section -->
         <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
             <h3 class="text-xl font-semibold mb-4">Property Details</h3>

             <!-- Owner Details -->
             <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                  <div>
                    <p class="text-gray-600">PROPERTY ID</p>
                    <p class="text-lg font-medium">{{ $property->property_id ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">WARD NO.</p>
                    <p class="text-lg font-medium">{{ $property->ward_no ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">COLONY NAME</p>
                    <p class="text-lg font-medium">{{ $property->colony_name ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">BUILDING TYPE</p>
                    <p class="text-lg font-medium">{{ $property->building_type ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">HOUSE NO.</p>
                    <p class="text-lg font-medium">{{ $property->house_no ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">PROPERTY OWNER NAME</p>
                    <p class="text-lg font-medium">{{ $property->property_owner_name ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">FATHER OR HUSBAND NAME</p>
                    <p class="text-lg font-medium">{{ $property->father_or_husband_name ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">MOBILE NUMBER</p>
                    <p class="text-lg font-medium">{{ $property->mobile_number ?? 'NA' }}</p>
                </div>
                
                <div>
                    <p class="text-gray-600">TOTAL ARV</p>
                    <p class="text-lg font-medium">{{ $property->total_arv ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">HOUSE TAX CURRENT</p>
                    <p class="text-lg font-medium">{{ $property->house_tax_current ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">HOUSE TAX ARREAR</p>
                    <p class="text-lg font-medium">{{ $property->house_tax_arrear ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">SURCHARGE</p>
                    <p class="text-lg font-medium">{{ $property->surcharge ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">TOTAL TAX HOUSE</p>
                    <p class="text-lg font-medium">{{ $property->total_tax_house ?? 'NA' }}</p>
                </div>
               <!--  <div>
                    <p class="text-gray-600">WATER TAX CURRENT</p>
                    <p class="text-lg font-medium">{{ $property->water_tax_current ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">WATER TAX ARREAR</p>
                    <p class="text-lg font-medium">{{ $property->water_tax_arrear ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">WATER TAX SURCHARGE</p>
                    <p class="text-lg font-medium">{{ $property->water_tax_surcharge ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">TOTAL WATER TAX</p>
                    <p class="text-lg font-medium">{{ $property->total_water_tax ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">WATER CHARGE CURRENT</p>
                    <p class="text-lg font-medium">{{ $property->water_charge_current ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">WATER CHARGE ARREAR</p>
                    <p class="text-lg font-medium">{{ $property->water_charge_arrear ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">WATER CHARGE SURCHARGE</p>
                    <p class="text-lg font-medium">{{ $property->water_charge_surcharge ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">TOTAL WATER CHARGE</p>
                    <p class="text-lg font-medium">{{ $property->total_water_charge ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">TOTAL PROPERTY TAX</p>
                    <p class="text-lg font-medium">{{ $property->total_property_tax ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">DEPOSIT HOUSE TAX</p>
                    <p class="text-lg font-medium">{{ $property->deposite_house_tax ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">DEPOSIT WATER TAX</p>
                    <p class="text-lg font-medium">{{ $property->deposite_water_tax ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">DEPOSIT WATER CHARGES</p>
                    <p class="text-lg font-medium">{{ $property->deposite_water_charges ?? 'NA' }}</p>
                </div> -->
                <div>
                    <p class="text-gray-600">TOTAL PROPERTY TAX CHARGE</p>
                    <p class="text-lg font-medium">{{ $property->total_property_tax_charge ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">REMARKS</p>
                    <p class="text-lg font-medium">{{ $property->remarks ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">TOTAL TAX NUMBER</p>
                    <p class="text-lg font-medium">{{ $property->total_tax_number ?? 'NA' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">HOUSE SURCHARGE</p>
                    <p class="text-lg font-medium">{{ $property->house_surcharge ?? 'NA' }}</p>
                </div>
               
                <div>
                    <p class="text-gray-600">AMOUNT</p>
                    <p class="text-lg font-medium">{{ $property->amount ?? 'NA' }}</p>
                </div>
               
                <div>
                    <p class="text-gray-600">CREATED AT</p>
                    <p class="text-lg font-medium">{{ $property->created_at ? $property->created_at->format('d-m-Y') : 'NA' }}</p>

                </div>
         </div>

         @if ($property->status == 2)
             <div class="bg-yellow-50 border border-yellow-400 rounded-lg shadow-sm p-6 mt-10">
                 <h3 class="text-xl font-semibold mb-4">Reason for Rejection</h3>
                 <p class="text-lg font-medium">{{ $property->remark ?? 'NA' }}</p>
             </div>
         @endif
         @if ($property->status == 1)
             <div
                 class="bg-blue-50 border border-blue-400 rounded-lg shadow-lg p-6 mt-6 flex flex-col md:flex-row justify-between items-center">
                 <div class="flex-1">
                     <h3 class="text-2xl font-semibold mb-2 text-blue-600">Payment</h3>
                     <p class="text-xl font-medium text-gray-700">
                         {{ '₹' . ' ' . ($property->amount) }}
                     </p>
                 </div>

                 @if ($property->amount != '0')
                     <div class="relative mt-4 md:mt-0">
                         <div class="flex items-center space-x-2">
                             <button id="payButton"
                                 class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
                                 Pay
                             </button>
                         </div>
                         <p id="validationMessage" class="text-red-500 mt-2 absolute hidden"></p>
                     </div>
                 @elseif ($property->payment_status == '1' && $property->amount == '0')
                     <button
                         class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition duration-200">
                         Payment Successful
                     </button>
                 @endif
             </div>
         @endif
     </div>

     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
     <script>
         document.getElementById('payButton').onclick = function(e) {
             e.preventDefault();

             var id = "{{ $property->id ?? '' }}";
             var amount = "{{ $property->amount ?? '' }}";
             // var amount = document.getElementById('amountInput').value;
             fetch('{{route('create_order')}}', {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/json',
                         'X-CSRF-TOKEN': '{{ csrf_token() }}'
                     },
                     body: JSON.stringify({
                         id: id,
                         amount: amount,
                         type: 'PROPERTY'
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
                             fetch('{{route('verifyPayment')}}', {
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
             iframe.src = '{{ route('property.nonresidential.print.pdf', ['id' => $property['id']]) }}';
             iframe.onload = function() {
                 iframe.contentWindow.print();
             };
         }
     </script>
     <script>
         function toggleMenu() {
             var menu = document.getElementById('menu');

             menu.classList.toggle('hidden');
         }
     </script>
 @endsection
