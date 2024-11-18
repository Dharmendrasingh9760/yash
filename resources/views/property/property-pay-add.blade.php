@extends('include.main')
@section('content')
    <style>
        /* Add your CSS styles here */
        .hidden-Residential {
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

    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">New Property</h2>

        <div id="nonResidentialContent" class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
           <form id="myPropertyForm" name="myPropertyForm" action="#" autocomplete="off">
                @csrf
                <h3 class=" font-semibold text-[18px] leading-[30px]   lg:px-[20px] px-[10px]   py-[20px] text-[#000000]">
                    Tax self-assessment form on annual value of Property Type both.</h3>
                <div
                    class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 ] border-b border-[#B1B6C6] px-[10px] lg:px-[20px] pb-[80px] flex flex-col gap-5">

                   

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                           Ward No. वार्ड नंबर  <span class="text-red-600">*</span>
                        </div>
                        <select name="ward_no" id="wardByColony"
                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" required>
                            <option value="">Select Word No. </option>
                            @if(!empty($wards))
                                @foreach($wards as $ward)
                                 <option value="{{ $ward->id }}" {{ Auth::user()->ward_no == $ward->id ? 'selected' : '' }}> 
                                  {{ $ward->word_number }} </option>
                                @endforeach
                            @endif
                        </select>
                        @error('ward_no')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>

                   <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                           COLONY NAME मोहल्ले का नाम <span class="text-red-600">*</span>
                        </div>
                        <select name="colony_name" id="colonyByHouse"
                            class="colonyByHouse w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" required>
                            <option value="Auth::user()->colony_name" selected>{{ Auth::user()->colony_name }}</option>
                        </select>
                        @error('colony_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror                    
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                           HOUSE NO.भवन का विवरण <span class="text-red-600">*</span>
                        </div>
                        <select name="house_no" id="houseByData"
                            class="houseByData w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" required>
                            <option value="Auth::user()->house_no" selected>{{ Auth::user()->house_no }}</option>
                        </select>
                        @error('house_no')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror                    
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                           BUILDING TYPE  भवन का प्रकार <span class="text-red-600">*</span>
                        </div>
                        <select name="building_type"
                            class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" disabled required>
                            <option value="">Select BUILDING TYPE </option>
                            <option value="RESIDENTIAL" {{ Auth::user()->building_type == 'RESIDENTIAL' ? 'selected' : '' }} selected>RESIDENTIAL</option>
                            <option value="COMERCIAL" {{ Auth::user()->building_type == 'COMERCIAL' ? 'selected' : '' }}>COMERCIAL </option>
                        </select>
                        @error('building_type')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror                    
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            PROPERTY OWNER NAME  भवन स्वामी का नाम   <span class="text-red-600">*</span>
                        </div>
                        <input type="text" name="property_owner_name" value="{{ old('property_owner_name', Auth::user()->property_owner_name) }}"
                            class="property_owner_name w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter PROPERTY OWNER NAME  भवन स्वामी का नाम" autocomplete="off" readonly required>
                        @error('property_owner_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            FATHER/HUSBAND/SON NAME   पिता/पति /पुत्र का नाम    <span class="text-red-600">*</span>
                        </div>
                        <input type="text" name="father_husband_name" value="{{ old('property_owner_name', Auth::user()->father_or_husband_name) }}"
                            class="father_husband_name w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter PROPERTY OWNER NAME  भवन स्वामी का नाम" autocomplete="off" readonly required>
                        @error('father_husband_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            MOBILE NO. दूरभाष संख्या <span class="text-red-600">*</span>
                            </div>
                        @php $currentYear = date('Y'); @endphp

                        <div>
                            <input type="number" name="mobile_number" value="{{ old('mobile_number', Auth::user()->mobile_number) }}"
                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                placeholder="MOBILE NO. दूरभाष संख्या " autocomplete="off" pattern="^[0-9]{10}$" required>
                        </div>
                        @error('mobile_number')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    </div>


              <div class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 ] px-[10px] lg:px-[20px] pb-[40px] flex flex-col gap-5 mt-3">
                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            TOATAL ARV प्रस्तावित वार्षिक मूल्यांकन <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="total_arv" value="{{ old('total_arv', Auth::user()->total_arv) }}"
                            class="total_arv w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter TOATAL ARV प्रस्तावित वार्षिक मूल्यांकन" value="{{ old('total_arv') }}" autocomplete="off" readonly >
                        @error('total_arv')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            HOUSE TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)  <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="house_tax_current" value="{{ old('house_tax_current', Auth::user()->house_tax_current) }}"
                            class="house_tax_current w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter HOUSE TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)" value="{{ old('house_tax_current') }}" autocomplete="off" readonly>
                        @error('house_tax_current')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            HOUSE TAX ARREARगृहकर (बकाया मांग) <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="house_tax_arrear" value="{{ old('house_tax_arrear', Auth::user()->house_tax_arrear) }}"
                            class="house_tax_arrear w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter HOUSE TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)" value="{{ old('house_tax_arrear') }}" autocomplete="off" readonly>
                        @error('house_tax_arrear')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            SURCHARGE सरचार्ज  <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="house_surcharge" value="{{ old('house_surcharge', Auth::user()->house_surcharge) }}"
                            class="house_surcharge w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter SURCHARGE सरचार्ज" value="{{ old('house_surcharge') }}" autocomplete="off" readonly>
                        @error('house_surcharge')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>


                     <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            TOTAL TAX HOUSE गृहकर कुल मांग <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="total_tax_number" value="{{ old('total_tax_number', Auth::user()->total_tax_number) }}"
                            class="total_tax_number w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter TOTAL TAX HOUSE गृहकर कुल मांग" value="{{ old('total_tax_number') }}" autocomplete="off" readonly>
                        @error('total_tax_number')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            TOTAL PAY AMUONT कुल मांग <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="amount" value="{{ old('amount', Auth::user()->amount) }}"
                            class="amount w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter TOTAL TAX HOUSE गृहकर कुल मांग" value="{{ old('total_tax_number') }}" autocomplete="off" readonly>
                        @error('amount')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <input type="hidden" name="property_id" class="property_id" value="{{ old('property_id', Auth::user()->property_id) }}">

                </div>

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                <button type="button" id="PaidButton" style="display:none;"class="w-[550px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]"> Already Paid→
                    </button>
                   <!--  <button id="resetButton" type="button"
                        class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]"
                        onclick="location.reload()">Reset</button> -->
                   <!--  <button type="submit"
                        class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Submit→</button> -->
                    <button type="submit" id="submitButton" style="display:none;" 
                        class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Pay Tax→</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-center"><strong>Property Payment</strong></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <!-- Property Owner Name -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>Property Owner Name:</strong>
          </div>
          <div class="col-6 text-muted property_owner_name"></div>
        </div>

        <!-- Amount -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>Amount:</strong>
          </div>
          <div class="col-6 text-muted amount"></div>
        </div>

        <!-- Building Type -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>Building Type:</strong>
          </div>
          <div class="col-6 text-muted building_type"></div>
        </div>

        <!-- Ward Number -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>Ward Number:</strong>
          </div>
          <div class="col-6 text-muted ward_number"></div>
        </div>

        <!-- Colony Name -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>Colony Name:</strong>
          </div>
          <div class="col-6 text-muted colony_name"></div>
        </div>

        <!-- House No -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>House No:</strong>
          </div>
          <div class="col-6 text-muted house_no"></div>
        </div>

        <!-- Payment Status -->
        <div class="row mb-3">
          <div class="col-6">
            <strong>Payment Status:</strong>
          </div>
          <div class="col-6 text-muted payment_status"></div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<script src="{{asset('frontend/jquery.min.js')}}"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $(document).ready(function() {
        @if(Auth::check())
            @if(Auth::user()->payment_status == 1 || Auth::user()->remaining == 0)
                $('#submitButton').css('display', 'none');
                $('#PaidButton').css('display', 'block');
            @else
                $('#submitButton').css('display', 'block');
                $('#PaidButton').css('display', 'none');
            @endif
        @endif
    });
</script>
<script type="text/javascript">

        $('#myPropertyForm').on('submit', function(event) {
        event.preventDefault(); 
        var formData = $(this).serialize();
        console.log(222222, formData); 

        // var id = document.getElementsByClassName('property_id')[0].value;
        // var amount = document.getElementsByClassName('total_tax_number')[0].value;
        var id = {{ Auth::user()->property_id}},
        var amount = {{ Auth::user()->amount}},

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
                    // Verify payment after success
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
                        console.log(data.result);
                        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                        myModal.show();
                        $('.property_owner_name').empty().text(data.result.property_owner_name);
                        $('.amount').empty().text(data.result.amount);
                        $('.building_type').empty().text(data.result.building_type);
                        $('.colony_name').empty().text(data.result.colony_name);
                        $('.house_no').empty().text(data.result.house_no);
                        $('.ward_number').empty().text(data.result.house_no);
                        if(data.result.payment_status == 1){
                            $('.payment_status').empty().text('Paid');
                        }else{
                         $('.payment_status').empty().text('Failed');
                        }
                    });
                },
                "theme": {
                    "color": "#F37254"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open(); // Open Razorpay checkout
        })
        .catch(error => console.error('Error:', error)); // Log any errors
    });
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script> -->

<!--  <script>
     function encryptFunction(data) {
            const key = CryptoJS.enc.Utf8.parse('1234567890123456'); // 16-byte key
            const iv = CryptoJS.enc.Utf8.parse('1234567890123456'); // 16-byte IV
            const encrypted = CryptoJS.AES.encrypt(data, key, { iv: iv }).toString();
            const encryptedData = { data: encrypted, iv: iv.toString(CryptoJS.enc.Hex) };
            return encryptedData;
        }
    function encryptData(inputElement, encryptedInputSelector, ivInputSelector) {
        var inputValue = $(inputElement).val();
        var encryptedResult = encryptFunction(inputValue);
        $(encryptedInputSelector).val(encryptedResult.data);
        $(ivInputSelector).val(encryptedResult.iv);
    }

    $('.name_chairman_owner').on('change', function() {
            encryptData(this, '.encrypt_name_chairman_owner', '.encrypt_data_iv');
        });


    $('.name_fh_chairman_owner').on('change', function() {
            encryptData(this, '.encrypt_name_fh_chairman_owner', '.encrypt_data_iv');
        });

     $('.bhr_number_local_address').on('change', function() {
            encryptData(this, '.encrypt_bhr_number_local_address', '.encrypt_data_iv');
        });

      $('.bhp_owner_res_address').on('change', function() {
            encryptData(this, '.encrypt_bhp_owner_res_address', '.encrypt_data_iv');
        });
       $('.any_other_details').on('change', function() {
            encryptData(this, '.encrypt_any_other_details', '.encrypt_data_iv');
        });

        $('.area_of_land').on('change', function() {
            encryptData(this, '.encrypt_area_of_land', '.encrypt_data_iv');
        });

         $('.total_annual_value').on('change', function() {
            encryptData(this, '.encrypt_total_annual_value', '.encrypt_data_iv');
        });

</script>



    <script>
        function deselectOther(selectedId, otherId) {
            var selected = document.getElementById(selectedId);
            var other = document.getElementById(otherId);

            if (selected.value !== "") {
                other.selectedIndex = 0; // Deselect the other dropdown
            }
        }
    </script>
    <script>
        document.getElementById('nonResidentialBtn').addEventListener('click', function() {
            document.getElementById('nonResidentialContent').classList.remove('hidden-Residential');
            document.getElementById('residentialContent').classList.add('hidden-Residential');
            document.getElementById('Non_Residential').value = "Non Residential";
            document.getElementById('Residential').value = "";
        });

        document.getElementById('residentialBtn').addEventListener('click', function() {
            document.getElementById('residentialContent').classList.remove('hidden-Residential');
            document.getElementById('nonResidentialContent').classList.add('hidden-Residential');
            document.getElementById('Non_Residential').value = "";
            document.getElementById('Residential').value = "Residential";
        });
    </script>

    <script>
        function nextPart(nextPartId) {
            hideAllParts();
            document.getElementById(nextPartId).classList.remove('hidden');

            updateProgressBar(nextPartId);
        }

        function prevPart(prevPartId) {
            hideAllParts();
            document.getElementById(prevPartId).classList.remove('hidden');

            updateProgressBar(prevPartId);
        }

        function hideAllParts() {
            document.getElementById('part1').classList.add('hidden');
            document.getElementById('part2').classList.add('hidden');
            document.getElementById('part3').classList.add('hidden');
            document.getElementById('part4').classList.add('hidden');
            document.getElementById('part5').classList.add('hidden');
        }

        function updateProgressBar(partId) {
            let progressBar = document.getElementById('progressBar');
            let stepElements = document.querySelectorAll('.step');
            stepElements.forEach(step => step.classList.remove('bg-orange-500', 'border-orange-500'));

            if (partId === 'part1') {
                progressBar.style.width = '20%';
                document.getElementById('step1').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part2') {
                progressBar.style.width = '40%';
                document.getElementById('step2').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part3') {
                progressBar.style.width = '60%';
                document.getElementById('step3').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part4') {
                progressBar.style.width = '80%';
                document.getElementById('step4').classList.add('bg-orange-500', 'border-orange-500');
            } else if (partId === 'part5') {
                progressBar.style.width = '100%';
                document.getElementById('step5').classList.add('bg-orange-500', 'border-orange-500');
            }
        }
    </script>



    <script>
        function toggleOptionContent() {
            console.log("hello")
            var optionContent = document.getElementById('optionContent');

            optionContent.classList.toggle('hidden');

        }

        function toggleOptionContent2() {
            var optionContent2 = document.getElementById('optionContent2');
            optionContent2.classList.toggle('hidden');
        }

        function toggleOptionContent3() {
            var optionContent3 = document.getElementById('optionContent3');
            optionContent3.classList.toggle('hidden');
        }
    </script>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');

            menu.classList.toggle('hidden');

        }
    </script>

    <script>
        function toggleDropdown(id) {
            var dropdownContent = document.getElementById('dropdown-content-' + id);
            var toggleButton = document.getElementById('toggle-button-' + id);

            dropdownContent.classList.toggle('hidden');

            if (!dropdownContent.classList.contains('hidden')) {
                toggleButton.classList.remove('rounded-full');
                toggleButton.classList.add('rounded-tr-[35px]', 'rounded-tl-[35px]');
            } else {
                toggleButton.classList.remove('rounded-tr-[35px]', 'rounded-tl-[35px]');
                toggleButton.classList.add('rounded-full');
            }
        }
    </script>
    <script>
        // Select all select-box elements
        const selectBoxes = document.querySelectorAll('.select-box');

        // Loop through each select box
        selectBoxes.forEach(function(selectBox, index) {
            const selectOption = selectBox.querySelector('.select-option');
            const soValue = selectBox.querySelector('.soValue');
            const optionsLi = selectBox.querySelectorAll('.options li');
            const chooseFileButton = selectBox.querySelector('button');

            // Toggle active class on click of select-option
            selectOption.addEventListener('click', function() {
                selectBox.classList.toggle('active');
                if (selectBox.classList.contains('active')) {
                    chooseFileButton.classList.add('rounded-tr-[19px]');
                    chooseFileButton.classList.add('rounded-br-[0px]');
                } else {
                    chooseFileButton.classList.remove('rounded-tr-[19px]');
                }
            });
            // Set value on click of options
            optionsLi.forEach(function(option) {
                option.addEventListener('click', function() {
                    const text = this.textContent;
                    soValue.value = text;
                    selectBox.classList.remove('active');
                    chooseFileButton.classList.remove('rounded-tr-[19px]');
                    chooseFileButton.classList.remove('rounded-br-[0px]');
                });
            });
        });
    </script>
    <script>
        function resetForm() {
            document.getElementById("myForm").reset(); // This will reset all fields
        }
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
    </script> -->

<script>
    $(document).ready(function() {
        $('#wardByColony').on('change', function() {
            $('#submitButton').css('display', 'none');
            var wardId = $(this).val();
            if (wardId) {
                $.ajax({
                    url: "{{ route('getColonies') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: wardId
                    },
                    success: function(data) {
                        console.log('fetching colonies', data)
                        $('#colonyByHouse').empty().append('<option value="">Select Colony</option>');
                        $.each(data, function(key, value) {
                            $('#colonyByHouse').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function() {
                        console.log('Error fetching colonies');
                    }
                });
            } else {
                $('#colony').empty().append('<option value="">Select Colony</option>');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#colonyByHouse').on('change', function() {
            $('#submitButton').css('display', 'none');
            var colonyId = $(this).val();
            if (colonyId) {
                $.ajax({
                    url: "{{ route('getHouses') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: colonyId
                    },
                    success: function(data) {
                        console.log('fetching house', data)
                        $('.houseByData').empty().append('<option value="">Select House</option>');
                        $.each(data, function(key, value) {
                            $('.houseByData').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function() {
                        console.log('Error fetching house');
                    }
                });
            } else {
                $('#colony').empty().append('<option value="">Select House</option>');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#houseByData').on('change', function() {
            var wardId = $(this).val();
            if (wardId) {
                $.ajax({
                    url: "{{ route('getProperty') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: wardId
                    },
                    success: function(data) {
                        if(data.payment_status == 1){
                          $('#submitButton').css('display', 'none');
                          $('#PaidButton').css('display', 'block')
                        // }
                        // else if(data.status == 0){
                        //   $('#submitButton').css('display', 'none');
                        }else if(data.remaining == 0){
                          $('#submitButton').css('display', 'none');
                          $('#PaidButton').css('display', 'block')
                        }else{
                          $('#submitButton').css('display', 'block');
                          $('#PaidButton').css('display', 'none')
                        } 
                        console.log('fetching property', data, data.property_owner_name)
                        $('.property_owner_name').empty().val(data.property_owner_name);
                        $('.father_husband_name').empty().val(data.father_or_husband_name);
                        $('.total_arv').empty().val(data.total_arv);
                        $('.house_tax_arrear').empty().val(data.house_tax_arrear);
                        $('.house_tax_current').empty().val(data.house_tax_current);
                         $('.house_surcharge').empty().val(data.house_surcharge);
                        $('.total_tax_number').empty().val(data.total_tax_number);
                        $('.property_id').empty().val(data.id);
                        const updatedAt = new Date(data.updated_at);
                        const formattedDate = new Intl.DateTimeFormat('en-US', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        }).format(updatedAt);
                       $('#PaidButton').empty().text("A payment was already processed on " + formattedDate);
                    },
                    error: function() {
                        console.log('Error fetching property');
                    }
                });
            } else {
                $('#colony').empty().append('<option value="">Select House</option>');
            }
        });
    });
</script>



@endsection
