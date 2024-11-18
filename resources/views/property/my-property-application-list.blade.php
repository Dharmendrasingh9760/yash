@extends('include.main')
@section('content')
    <style>
        .hidden-list {
            display: none;
        }

        .active-button {
            background-color: #F26F00;
            color: #FFFFFF;

        }

        .inactive-button {
            background-color: #FFE4CD;
            color: #000000;

        }
    </style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class="font-bold text-[32px] leading-[40px] text-[#000000]">Property Tax</h2>
        <div class="flex lg:gap-5 my-10 gap-2 items-center">
             <!-- Nav pills -->
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active lg:w-[182px] md:w-[182px] h-[70px] rounded-[100px] bg-[#F26F00] text-[#FFFFFF] w-full font-semibold text-[16px] lg:text-[18px] leading-[30px]" data-toggle="pill" href="#all">All</a>
            </li>
           <li class="nav-item">
              <a class="nav-link lg:w-[182px] md:w-[182px] h-[70px] rounded-[100px] bg-[#F26F00] text-[#FFFFFF] w-full font-semibold text-[16px] lg:text-[18px] leading-[30px] mx-2" data-toggle="pill" href="#residential">Residential</a>
            </li>
            <li class="nav-item">
              <a class="nav-link lg:w-[182px] md:w-[182px] h-[70px] rounded-[100px] bg-[#F26F00] text-[#FFFFFF] w-full font-semibold text-[16px] lg:text-[18px] leading-[30px]" data-toggle="pill" href="#non_residential">Non-Residential</a>
            </li>
          </ul>
        </div>

<!-- Tab panes -->
  <div class="tab-content">
    <div id="all" class="tab-pane active border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6"><br>
       @if ($allproperty->isEmpty())
                <div class="text-center py-4">
                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found!</p>
                </div>
        @else
            @foreach ($allproperty as $propertyData)
                <div class="flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between items-center border-b     border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                    <div>
                        <div class="font-semibold lg:text-[18px] text-[16px] leading-[22px] text-[#000000]">
                       <span class="text-danger">House Id :- </span>  {{ $propertyData['property_id'] ?? 'NA' }} |
                       <span class="text-danger"> Owner Name :- </span> {{ $propertyData['property_owner_name'] ?? 'NA' }}
                        <span class="text-danger">Ward No :-</span> {{ $propertyData['ward_no'] ?? 'NA' }} | 
                        <span class="text-danger">House No. :-</span> {{ $propertyData['house_no'] ?? 'NA' }}
                        <span class="text-danger">Pay Amount. :-</span> {{ $propertyData['amount'] ?? 'NA' }}
                        </div>

                        <div class="flex items-center gap-5 pt-6">
                            @if ($propertyData->status == 0)
                                <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                    style="color:orange;">Waiting</p>
                            @elseif($propertyData->status == 1)
                                <!-- <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                    style="color:green;">Approved </p> -->
                                    <p class="font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                        @if ($propertyData->payment_status == 0)
                                            <p
                                                class="text-red-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Pending - {{ '₹' . ' ' . $propertyData->amount }}
                                            </p>
                                            <button onclick="PaymentFunction({{$propertyData->id}}, {{$propertyData->amount}})" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200"> Pay </button>
                                        @elseif ($propertyData->payment_status == 1 && $propertyData->amount == 0)
                                            <p class="text-green-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Paid Offline -
                                                {{ '₹' . ' ' . $propertyData->total_tax_number }}
                                            </p>
                                        @endif
                                    </p>
                                    {{ $propertyData->chalan_number }}
                            @else
                                <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                    style="color:red;">Rejected</p>
                            @endif
                        </div>
                    </div>
                    @if ($propertyData->payment_status == 1)
                    <a href="{{ route('downloadPdf', ['id' => $propertyData['id']]) }}"
                        class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                        Downlaod→
                    </a>
                    @endif
                    
                    @if ($propertyData->building_type == 'COMERCIAL')
                    <a href="{{ route('my.property.application.nonresidential.view', ['id' => $propertyData['id']]) }}"
                        class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                        View Details→
                    </a>
                    @else
                     <a href="{{ route('my.property.application.residential.view', ['id' => $propertyData['id']]) }}"
                        class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                        View Details→
                    </a>
                    @endif
                </div>
            @endforeach
        @endif
    </div>

     <div id="residential" class="tab-pane fade border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6"><br>
       @if ($property->isEmpty())
                <div class="text-center py-4">
                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found!</p>
                </div>
        @else
            @foreach ($property as $propertyData)
                <div class="flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                    <div>
                        <div class="font-semibold lg:text-[18px] text-[16px] leading-[22px] text-[#000000]">
                            Application No :- {{ $propertyData['id'] ?? 'NA' }} |Applicant Name :-
                            {{ $propertyData['name_chairman_owner'] ?? 'NA' }}
                        </div>

                        <div class="flex items-center gap-5 pt-6">
                            @if ($propertyData->status == 0)
                                <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                    style="color:orange;">Waiting</p>
                            @elseif($propertyData->status == 1)
                                <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                    style="color:green;">Approved</p>
                                @if ($propertyData->amount)
                                    <p class="font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                        @if ($propertyData->payment_status == 0)
                                            <p
                                                class="text-red-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Pending - {{ '₹' . ' ' . $propertyData->amount }}
                                            </p>
                                        @elseif ($propertyData->payment_status == 1 && $propertyData->remaining > 0)
                                            <p
                                                class="text-yellow-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Pending - Remaining Amount:
                                                {{ '₹' . ' ' . $propertyData->remaining }}
                                            </p>
                                        @elseif ($propertyData->payment_status == 1 && $propertyData->remaining == 0)
                                            <p
                                                class="text-green-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Successful -
                                                {{ '₹' . ' ' . $propertyData->amount }}
                                            </p>
                                        @endif
                                    </p>
                                    {{ $propertyData->chalan_number }}
                                @endif
                            @else
                                <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                    style="color:red;">Rejected</p>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('my.property.application.residential.view', ['id' => $propertyData['id']]) }}"
                        class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                        View Details→
                    </a>
                </div>
            @endforeach
        @endif
    </div>

      <div id="non_residential" class="tab-pane fade border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6"><br>
       @if ($nonproperty->isEmpty())
                <div class="text-center py-4">
                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found!</p>
                </div>
        @else
            @foreach ($nonproperty as $propertyData)
                <div class="flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                    <div>
                        <div class="font-semibold lg:text-[18px] text-[16px] leading-[22px] text-[#000000]">
                            Application No :- {{ $propertyData['id'] ?? 'NA' }} |Applicant Name :-
                            {{ $propertyData['name_chairman_owner'] ?? 'NA' }}
                        </div>

                        <div class="flex items-center gap-5 pt-6">
                            @if ($propertyData->status == 0)
                                <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                    style="color:orange;">Waiting</p>
                            @elseif($propertyData->status == 1)
                                <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                    style="color:green;">Approved</p>
                                @if ($propertyData->amount)
                                    <p class="font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                        @if ($propertyData->payment_status == 0)
                                            <p
                                                class="text-red-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Pending - {{ '₹' . ' ' . $propertyData->amount }}
                                            </p>
                                        @elseif ($propertyData->payment_status == 1 && $propertyData->remaining > 0)
                                            <p
                                                class="text-yellow-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Pending - Remaining Amount:
                                                {{ '₹' . ' ' . $propertyData->remaining }}
                                            </p>
                                        @elseif ($propertyData->payment_status == 1 && $propertyData->remaining == 0)
                                            <p
                                                class="text-green-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                Payment Successful -
                                                {{ '₹' . ' ' . $propertyData->amount }}
                                            </p>
                                        @endif
                                    </p>
                                    {{ $propertyData->chalan_number }}
                                @endif
                            @else
                                <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                    style="color:red;">Rejected</p>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('my.property.application.nonresidential.view', ['id' => $propertyData['id']]) }}"
                        class="font-medium lg:text-[20px] text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                        View Details→
                    </a>
                </div>
            @endforeach
        @endif
    </div>

 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
      function PaymentFunction(id, amount) {
        console.log('Payment details:', 'ID:', id, 'Amount:', amount);
            var id = id;
            var amount = amount;
            // var amount = document.getElementById('amountInput').value;
            fetch('/create-order', {
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
@endsection
