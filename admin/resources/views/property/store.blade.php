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
                                 <option value="{{ $ward->id }}" {{ old('ward_no') == $ward->id ? 'selected' : '' }}> 
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
                            <option value="RESIDENTIAL" {{ old('building_type') == 'RESIDENTIAL' ? 'selected' : '' }} selected>RESIDENTIAL</option>
                            <option value="COMERCIAL" {{ old('building_type') == 'COMERCIAL' ? 'selected' : '' }}>COMERCIAL </option>
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
                        <input type="text" name="property_owner_name" value="{{ old('property_owner_name') }}"
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
                        <input type="text" name="father_husband_name" value="{{ old('property_owner_name') }}"
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
                            <input type="number" name="mobile_number" value="{{ old('mobile_number') }}"
                                class="mobile_number w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                placeholder="MOBILE NO. दूरभाष संख्या " autocomplete="off" pattern="^[0-9]{10}$" required>
                        </div>
                        @error('mobile_number')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                             TOATAL ARV प्रस्तावित वार्षिक मूल्यांकन <span class="text-red-600">*</span>
                        </div>
                        <input type="number" name="total_arv" value="{{ old('total_arv') }}"
                            class="total_arv w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                            placeholder="Enter TOATAL ARV प्रस्तावित वार्षिक मूल्यांकन" value="{{ old('total_arv') }}" autocomplete="off" readonly >
                        @error('total_arv')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                            Tax Include <span class="text-red-600">*</span>
                        </div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" id="house_tax" name="type_tax[]" data="" value="house" checked
                                class="typeTaxData w-[20px] h-[20px] border border-[#B1B6C6] rounded-[4px] mx-2" > House Tax
                        </label>
                        <label class="inline-flex items-center ml-[20px]">
                            <input type="checkbox" id="water_tax" name="type_tax[]" data="" value="water" checked
                                class="typeTaxData w-[20px] h-[20px] border border-[#B1B6C6] rounded-[4px] mx-2" > Water Tax
                        </label>
                        @error('type_tax')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    </div>


        <div class="houseTaxData lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 ] px-[10px] lg:px-[20px] pb-[40px] flex flex-col gap-5 mt-3">

            <div>
                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                    HOUSE TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)  <span class="text-red-600">*</span>
                </div>
                <input type="number" name="house_tax_current" value="{{ old('house_tax_current') }}"
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
                <input type="number" name="house_tax_arrear" value="{{ old('house_tax_arrear') }}"
                    class="house_tax_arrear w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                    placeholder="Enter HOUSE TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)" value="{{ old('house_tax_arrear') }}" autocomplete="off" readonly>
                @error('house_tax_arrear')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>
                @enderror
            </div>


            <div>
                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                   HOUSE SURCHARGE सरचार्ज  <span class="text-red-600">*</span>
                </div>
                <input type="number" name="house_surcharge" value="{{ old('house_surcharge') }}"
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
                <input type="number" name="total_tax_number" value="{{ old('total_tax_number') }}"
                    class="total_tax_number w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                    placeholder="Enter TOTAL TAX HOUSE गृहकर कुल मांग" value="{{ old('total_tax_number') }}" autocomplete="off" readonly>
                @error('total_tax_number')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="waterTaxData lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 ] px-[10px] lg:px-[20px] pb-[40px] flex flex-col gap-5 mt-3">

            <div>
                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                    WATER TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)  <span class="text-red-600">*</span>
                </div>
                <input type="number" name="water_tax_current" value="{{ old('water_tax_current') }}"
                    class="water_tax_current w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                    placeholder="Enter WATER TAX CURRENT(FY 2024-25) गृहकर (वर्तमान मांग)" value="{{ old('water_tax_current') }}" autocomplete="off" readonly>
                @error('water_tax_current')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                    WATER TAX ARREARगृहकर (बकाया मांग) <span class="text-red-600">*</span>
                </div>
                <input type="number" name="water_tax_arrear" value="{{ old('water_tax_arrear') }}"
                    class="water_tax_arrear w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                    placeholder="Enter HOUSE TAX CURRENT(FY 2024-25) गृहकर   (वर्तमान मांग)" value="{{ old('water_tax_arrear') }}" autocomplete="off" readonly>
                @error('water_tax_arrear')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>
                @enderror
            </div>


            <div>
                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                   WATER SURCHARGE सरचार्ज  <span class="text-red-600">*</span>
                </div>
                <input type="number" name="water_surcharge" value="{{ old('water_surcharge') }}"
                    class="water_surcharge w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                    placeholder="Enter WATER SURCHARGE सरचार्ज" value="{{ old('water_surcharge') }}" autocomplete="off" readonly>
                @error('water_surcharge')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>
                @enderror
            </div>


            <div>
                <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                    TOTAL TAX WATER गृहकर कुल मांग <span class="text-red-600">*</span>
                </div>
                <input type="number" name="total_water_tax" value="{{ old('total_water_tax') }}"
                    class="total_water_tax w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                    placeholder="Enter TOTAL TAX WATER गृहकर कुल मांग" value="{{ old('total_water_tax') }}" autocomplete="off" readonly>
                @error('total_water_tax')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div class="m-5 totalPayAmount">
            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                TOTAL TAX HOUSE / WATER गृहकर कुल मांग <span class="text-red-600">*</span>
            </div>
            <input type="number" name="total_tax" value="0"
                class="total_tax w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                placeholder="Enter TOTAL TAX HOUSE / WATER गृहकर कुल मांग" value="0" autocomplete="off" readonly>
            @error('total_tax')
                <p class="text-red-600 text-sm mt-1">{{ $message }}
                </p>
            @enderror
        </div>

            <input type="hidden" name="property_id" class="property_id" value="{{ old('property_id') }}">

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                    <button type="button" id="PaidButton" style="display:none;"class="w-[550px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]"> Already Paid→
                        </button>
                    <button type="button" style="display:none;"
                        class="submitButtonCash w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Collect in Cash
                    </button>

                    <button type="submit" style="display:none;" 
                        class="submitButton w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Collect Online
                    </button>
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
        <div class="flex justify-center gap-3 m-3">
         <button type="button" class="text-white bg-gradient-to-r from-blue-500 to-indigo-500 px-6 py-1 rounded-full shadow-lg hover:shadow-xl flex items-center space-x-2">
            <span>Property Payment Detail</span>
          </button>

          <a href="" class="downloadPdf btn-download text-white bg-gradient-to-r from-green-500 to-teal-500 px-6 py-1 rounded-full shadow-lg hover:shadow-xl flex items-center space-x-2">
            <i class="fas fa-download"></i>
            <span>Download</span>
          </a>
          
          <button type="button" class="btn-print text-white bg-gradient-to-r from-blue-500 to-indigo-500 px-6 py-1 rounded-full shadow-lg hover:shadow-xl flex items-center space-x-2" onclick="printModalBody();">
            <i class="fas fa-print"></i>
            <span>Print</span>
          </button>
        </div>


        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body" id="printContent">
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
            <strong>Pay Amount:</strong>
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



<script src="{{asset('admin/jquery.min.js')}}"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('myModal').addEventListener('hidden.bs.modal', function () {
          window.location.href = "{{route('my.property.list')}}"
       });

    function printModalBody() {
        var printContent = $("#printContent").html();
        var printWindow = window.open('', '', 'height=600,width=800');
        
        // Include CSS styles
        var styles = `<style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                line-height: 1.5;
            }
            .row {
                display: flex;
                justify-content: space-between;
                margin-bottom: 10px;
            }
            .col-6 {
                width: 48%;
            }
            .strong {
                font-weight: bold;
            }
            .text-muted {
                color: #6c757d;
            }
            /* Add other styles you want to include for printing */
        </style>`;

        printWindow.document.write('<html><head><title>Print Modal</title>' + styles + '</head><body>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
         var type_tax = [];
        $('input:checked[name="type_tax[]"]').each(function () {
            type_tax.push($(this).val()); 
        });

        $('.totalPayAmount').show(); 
        $('.houseTaxData').show(); 
        $('.waterTaxData').show();

        $('.typeTaxData').on('click', function() {
         var total_tax = 0;
        $('input:checked[name="type_tax[]"]').each(function () {
            total_tax += parseFloat($(this).attr('data')) || 0;
        });
        $('.total_tax').empty().val(total_tax);

            var taxValue = $(this).val(); 
            if ($(this).prop('checked')) {
                if (taxValue === 'house') {
                    $('.houseTaxData').show(); 
                } else if (taxValue === 'water') {
                    $('.waterTaxData').show(); 
                }
            } else {
                if (taxValue === 'house') {
                    $('.houseTaxData').hide();
                } else if (taxValue === 'water') {
                    $('.waterTaxData').hide();
                }
            }
        });
    });
</script>


<script type="text/javascript">
     $('.submitButtonCash').on('click', function(event) {
         event.preventDefault();
          var isValid = true;
        var requiredFields = ['.property_owner_name', '.mobile_number'];

        requiredFields.forEach(function(field) {
            if ($(field).val() === '') {
                isValid = false;
                $(field).addClass('is-invalid');
            } else {
                $(field).removeClass('is-invalid'); 
            }
        });

        if (!isValid) {
            alert('Please fill in all required fields.');
            return; // Exit the function if any required field is empty
        }

         var formData = $('#myPropertyForm').serialize();
        var formObject = Object.fromEntries(new URLSearchParams(formData));
        console.log('Form Data:', formObject);

        $('.submitButton').css('display', 'none');
        $('.submitButtonCash').css('display', 'none');
        $.ajax({
            url: '{{ route("propertycashsave") }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log('Success:', response);
                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();
                $('.ward_number').empty().text(response.result.ward_no);
                $('.colony_name').empty().text(response.result.colony_name);
                $('.house_no').empty().text(response.result.house_no);
                $('.property_owner_name').empty().text(response.result.property_owner_name);
                $('.building_type').empty().text(response.result.building_type);
                $('.amount').empty().text(response.result.total_tax_number);
                $('.downloadPdf').attr('href', '/property-downlaod/' + response.result.id);
                if(response.result.payment_status == 1){
                    $('.payment_status').empty().text('Paid');
                }else{
                 $('.payment_status').empty().text('Failed');
                }
            },
            error: function(xhr, status, error) {
                console.log('Error:', error);
            }
        });
    });
</script>

<script type="text/javascript">
        $('#myPropertyForm').on('submit', function(event) {
        event.preventDefault(); 
        var formData = $(this).serialize();
        var formObject = Object.fromEntries(new URLSearchParams(formData));

        var id = document.getElementsByClassName('property_id')[0].value;
       var type_tax = [];
       var total_tax = 0;
        $('input:checked[name="type_tax[]"]').each(function () {
            type_tax.push($(this).val()); 
            total_tax += $(this).val(); 
        });
        console.log('type_tax', type_tax);
        var amount = 0;
        // var amount = document.getElementsByClassName('pay_amount')[0].value;
                $('.submitButton').css('display', 'none');
                $('.submitButtonCash').css('display', 'none');
        fetch('{{route('create_order')}}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                id: id,
                amount: amount,
                type_tax: type_tax,
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
                    console.log('responseresponse', response)
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
                        $('.ward_number').empty().text(data.result.ward_no);
                        $('.colony_name').empty().text(data.result.colony_name);
                        $('.house_no').empty().text(data.result.house_no);
                        $('.property_owner_name').empty().text(data.result.property_owner_name);
                        $('.building_type').empty().text(data.result.building_type);
                        $('.amount').empty().text(data.result.pay_amount);
                        $('.downloadPdf').attr('href', '/property-downlaod/' + data.result.id);
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
            rzp1.open();
        })
        .catch(error => console.error('Error:', error)); // Log any errors
    });
</script>

<script>
    $(document).ready(function() {
        $('#wardByColony').on('change', function() {
            $('.submitButton').css('display', 'none');
            $('.submitButtonCash').css('display', 'none');
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
            $('.submitButton').css('display', 'none');
            $('.submitButtonCash').css('display', 'none');
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
                          $('.submitButton').css('display', 'none');
                          $('.submitButtonCash').css('display', 'none');
                          $('#PaidButton').css('display', 'block')
                        // }
                        // else if(data.status == 0){
                        //   $('#submitButton').css('display', 'none');
                        }else if(data.remaining == 0){
                          $('.submitButton').css('display', 'none');
                          $('.submitButtonCash').css('display', 'none');
                          $('#PaidButton').css('display', 'block')
                        }else{
                          $('.submitButton').css('display', 'block');
                          $('.submitButtonCash').css('display', 'block');
                          $('#PaidButton').css('display', 'none')
                        } 
                        console.log('fetching property', data)
                        var total_house = Number(data.total_tax_number);
                        var total_water = Number(data.total_water_tax);
                        var total_amount = total_house + total_water;
                        console.log(total_amount);


                        $('.property_id').empty().val(data.id);
                        $('.property_owner_name').empty().val(data.property_owner_name);
                        $('.father_husband_name').empty().val(data.father_or_husband_name);
                        $('.total_arv').empty().val(data.total_arv);

                        $('.house_tax_arrear').empty().val(data.house_tax_arrear);
                        $('.house_tax_current').empty().val(data.house_tax_current);
                         $('.house_surcharge').empty().val(data.house_surcharge);
                        $('.total_tax_number').empty().val(data.total_tax_number);

                         $('.water_tax_arrear').empty().val(data.water_tax_arrear);
                        $('.water_tax_current').empty().val(data.water_tax_current);
                         $('.water_surcharge').empty().val(data.water_surcharge);
                         $('.total_water_tax').empty().val(data.total_water_tax);
                         $('#house_tax').empty().attr('data', data.total_tax_number);
                         $('#water_tax').empty().attr('data', data.total_water_tax);

                         $('.total_tax').empty().val(total_amount);

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
