@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <div class="flex items-center gap-4">
            <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Property Permission</h2>
            <img src="{{ asset('admin-assets/images/propertyImg.png') }}" />
        </div>
        <div class=" lg:flex gap-6">
            <a href="{{ route('property.permission.search') }}" class="cursor-pointer">
            <div class="lg:w-[262px]  w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                <div class="flex items-center gap-5">
                    <img src="{{ asset('admin-assets/images/icon2.png') }}">
                    <span class="font-bold text-[20px] leading-[27px]">{{$totalCetificateCouont}}</span>
                </div>

                        <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">Property <br>
                            Permission→</p>


            </div>
            </a>
            <a href="{{route('property.permission.application.list')}}" class="cursor-pointer">
            <div class="lg:w-[262px] w-full  mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                <div>
                    <img src="{{ asset('admin-assets/images/icon-3.png') }}">
                </div>

                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">My <br>
                        Applications ({{$totalCetificateCouont}})→</p>

                    </div>

            </div>
            </a>
        <div class="mt-10">
            <div class="faq-item bg-[#FFF5EC] rounded-[15px] py-[20px] px-[30px]">
                <button
                    class="faq-question flex justify-between items-center w-full text-left text-xl font-semibold focus:outline-none">
                    <span class=" font-semibold text-[18px] leading-[32px] text-[#000000]">How it Works?</span>
                    <span class="faq-arrow transform transition-transform duration-300">
                        <img src="{{ asset('admin-assets/images/arrow-right.png') }}" />
                    </span>
                </button>
                <div class="faq-answer mt-2 hidden">
                    <p class=" font-medium text-[16px] leading-[28px] text-[#000000]">To manage your property tax, start by using the search option to check if your property has already been submitted. If it has, simply search for it using the provided tool. If you have a new property to register, fill out and submit the required form. Once you submit the form for a new property, its status will be marked as pending. An administrator will then review your submission. The administrator may either approve or reject your submission. If it is rejected, you will be provided with reasons for the rejection. If it is approved, you will be notified to proceed with the payment. After completing the payment, you will be able to download your property tax certificate from the website. This process ensures that all property tax submissions are reviewed thoroughly and processed efficiently. </p>
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
            <h5 class=" font-semibold text-[22px] lg:text-[28px] text-center  leading-[40px]  lg:pt-10">New Property
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
        function openModal() {
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
         openModal()
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
