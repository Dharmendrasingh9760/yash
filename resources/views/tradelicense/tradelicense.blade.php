@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <div class="flex items-center gap-4">
            <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Trade License</h2>
            <img src="{{asset('admin-assets//images/propertyImg.png')}}" />
        </div>
        <div class=" lg:flex gap-6">
            <div id="tradeLicense" onclick="openModal()" class="cursor-pointer ">

            <div class="lg:w-[262px]  w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                <div class="flex items-center gap-5">
                    <img src="{{asset('admin-assets/images/icon2.png')}}">
                    <span class="font-bold text-[20px] leading-[27px]">{{$totalCetificateCouont}}</span>
                </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">Apply For Trade <br>
                        License → </p>

                    </div>
                </div>
            {{-- <div class="lg:w-[262px] w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                <div>
                    <img src="{{asset('admin-assets/images/icon1.png')}}">
                </div>
                <a href="/Pages/Properties.html" class="mt-5  cursor-pointer">
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Temporary Trade <br>
                        License →</p>
                </a>

            </div> --}}
            <a href="{{route('trade.license.list')}}" class="cursor-pointer">

            <div class="lg:w-[262px] w-full  mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                <div>
                    <img src="{{asset('admin-assets/images/icon1.png')}}">
                </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">My <br>
                        Applications ({{$totalCetificateCouont}})→</p>

                    </div>
            </a>

        </div>
        <div class="mt-10">
            <div class="faq-item bg-[#FFF5EC] rounded-[15px] py-[20px] px-[30px]">
                <button
                    class="faq-question flex justify-between items-center w-full text-left text-xl font-semibold focus:outline-none">
                    <span class=" font-semibold text-[18px] leading-[32px] text-[#000000]">How it Works?</span>
                    <span class="faq-arrow transform transition-transform duration-300">
                        <img src="{{asset('admin-assets/images/arrow-right.png')}}" />
                    </span>
                </button>
                <div class="faq-answer mt-2 hidden">
                    <p class=" font-medium text-[16px] leading-[28px] text-[#000000]">To apply for a trade license, begin by accessing the trade license application section on our website. First, you will be shown a list of required documents. After reviewing the requirements, click the "Apply" button located below the list. Fill in all the necessary details in the application form and submit it. Once your form is submitted, the status of your request will be marked as pending. An administrator will review your application and either approve or reject it. If your application is rejected, you will be provided with the reasons for the rejection. If it is approved, you will be notified to proceed with the payment. After completing the payment, you can download your trade license certificate from the website. This process ensures that all applications are thoroughly reviewed and processed efficiently. </p>
                </div>
            </div>

        </div>
    </div>
    <div id="licsence"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden px-[10px] ">
        <div class=" bg-[#FFFFFF]  shadow-lg rounded-[20px] relative max-h-[700px] overflow-scroll ">
            <div class="w-full   relative">
                <div
                    class="flex justify-between items-center border-b-2 border-[#999999] px-[20px] lg:px-[30px] py-[20px]">
                    <div>
                        <h2 class="font-medium text-[20px] leading-[25px] lg:text-[28px] lg:leading-[35px] ">
                            Required Documents - Trade License</h2>
                    </div>
                    <div onclick="closeModal()">
                        <i class="fa-regular fa-circle-xmark  text-[20px] lg:text-[38px]" id="closeModalButton"></i>
                    </div>
                </div>

                <div
                    class="lg:grid grid-cols-2 md:grid flex flex-col gap-5 lg:gap-20 px-[10px] lg:px-[40px] pt-[20px] pb-[200px] overflow-scroll  h-[800px] ">
                    <div>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class=" font-semibold text-[20px] leading-[25px]">Owner Proof</h4>
                            </div>
                        </div>

                        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full ">
                            <div class="grid grid-cols-2 px-[30px]">
                                <div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000]">1. Owner ID
                                        Card </div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">2.
                                        Ownership Documents</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">3.
                                        Owner Photo</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">4. Old
                                        License</div>
                                </div>
                                <!-- <div>

                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] ">5. Voter ID</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">6. Driving License</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">7. Passport</div>

                </div> -->
                            </div>
                            <p class="px-[30px] font-normal pt-5 text-[13px] leading-[18px] text-[#000000]">* These
                                are mandatory documents required to apply Trade License.</p>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class=" font-semibold text-[20px] leading-[25px]">Owner Proof</h4>
                            </div>
                        </div>

                        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full ">
                            <div class="grid grid-cols-2 px-[30px]">
                                <div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000]">1. Owner ID
                                        Card </div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">2.
                                        Ownership Documents</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">3.
                                        Owner Photo</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">4. Old
                                        License</div>
                                </div>
                                <!-- <div>

                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] ">5. Voter ID</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">6. Driving License</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">7. Passport</div>

                </div> -->
                            </div>
                            <p class="px-[30px] font-normal pt-5 text-[13px] leading-[18px] text-[#000000]">* These
                                are mandatory documents required to apply Trade License.</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class=" font-semibold text-[20px] leading-[25px]">Owner Proof</h4>
                            </div>
                        </div>

                        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full ">
                            <div class="grid grid-cols-2 px-[30px]">
                                <div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000]">1. Owner ID
                                        Card </div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">2.
                                        Ownership Documents</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">3.
                                        Owner Photo</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">4. Old
                                        License</div>
                                </div>
                                <!-- <div>

                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] ">5. Voter ID</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">6. Driving License</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">7. Passport</div>

                </div> -->
                            </div>
                            <p class="px-[30px] font-normal pt-5 text-[13px] leading-[18px] text-[#000000]">* These
                                are mandatory documents required to apply Trade License.</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class=" font-semibold text-[20px] leading-[25px]">Owner Proof</h4>
                            </div>
                        </div>

                        <div class="border border-[#F26F00] bg-[#FFF5EC] rounded-[15px] py-[40px] mt-7 w-full ">
                            <div class="grid grid-cols-2 px-[30px]">
                                <div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000]">1. Owner ID
                                        Card </div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">2.
                                        Ownership Documents</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">3.
                                        Owner Photo</div>
                                    <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">4. Old
                                        License</div>
                                </div>
                                <!-- <div>

                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] ">5. Voter ID</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">6. Driving License</div>
                       <div class=" font-medium text-[16px] leading-[20px] text-[#000000] pt-10">7. Passport</div>

                </div> -->
                            </div>
                            <p class="px-[30px] font-normal pt-5 text-[13px] leading-[18px] text-[#000000]">* These
                                are mandatory documents required to apply Trade License.</p>
                        </div>
                    </div>
                </div>
                <div class="absolute bg-white bottom-[0px] w-full">
                    <div
                        class="lg:flex lg:flex-row justify-center my-[20px]  gap-5 flex flex-col items-center  md:flex md:flex-row">
                        <a href="{{route('trade.license')}}">
                            <button
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                                Cancel
                            </button>
                        </a>
                        <a href="{{route('trade.license.add')}}">
                            <button
                                class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                                Apply
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="successModal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50  px-[10px] hidden  overflow-scroll">
    <div class=" lg:w-[770px] popup w-full bg-[#FFFFFF] rounded-[20px] px-[10px] lg:px-[40px] pb-[40px] mt-[30px]">
        <div class="flex justify-center my-6">
            <img src="{{ asset('admin-assets/images/success.png') }}" />
        </div>
        <h5 class=" font-semibold text-[22px] lg:text-[28px] text-center  leading-[40px]  lg:pt-10">Trade License
            Application Submitted Successfully</h5>
        {{-- <p
            class=" font-normal text-[16px] lg:text-[20px] leading-[28px] text-center mt-2    lg:px-[20px] px-[10px]   text-[#B9B9B9]">
            Lorem ipsum dolor sit amet consectetur. Tellus dui quam nunc id ipsum consectetur dictum pulvinar id.
        </p> --}}

        <div class="flex justify-center flex-col items-center">

        </div>
    </div>
</div>
<script>
    function openModalsuccess() {
        document.getElementById('successModal').classList.remove('hidden');
    }

    var modal = document.getElementById('successModal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            document.getElementById('successModal').classList.add('hidden');
        }
    }
</script>
 @if (session('success'))
 <script>
     openModalsuccess()
 </script>
@endif

@if (session('error'))
 <script>
     Swal.fire({
         title: 'Error!',
         text: '{{ session('error') }}',
         icon: 'error',
         confirmButtonText: 'OK'
     });
 </script>
@endif

@endsection
<script>
    function openModal() {
        document.getElementById('licsence').classList.remove('hidden');
    }

    function closeModal(event) {
        document.getElementById('licsence').classList.add('hidden');
    }

</script>
