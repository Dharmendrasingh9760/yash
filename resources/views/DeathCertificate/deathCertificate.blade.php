@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <div class="flex items-center gap-4">
            <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Death certificate</h2>
            <img src="{{ asset('admin-assets/images/propertyImg.png') }}">
        </div>
        <div class=" lg:flex gap-6">
            <a href="{{ route('death.certificate.add') }}" id="tradeLicense" class="mt-5 cursor-pointer ">
                <div class="lg:w-[262px]  w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('admin-assets/images/icon2.png') }}">

                        <span class="font-bold text-[20px] leading-[27px]">{{ $totalCetificateCouont }}</span>
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Apply for Death<br>
                        Certificate→ </p>

                </div>
            </a>
            <a href="{{ route('death.certificate.list') }}" class="mt-5  cursor-pointer">
                <div class="lg:w-[262px] w-full  mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                    <div>
                        <img src="{{ asset('admin-assets/images/icon-3.png') }}">

                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">My <br>
                        Applications ({{ $totalCetificateCouont }})→</p>

                </div>
            </a>

        </div>
        <div class="mt-10">
            <div class="faq-item bg-[#FFF5EC] rounded-[15px] py-[20px] px-[30px]">
                <button
                    class="faq-question flex justify-between items-center w-full text-left text-xl font-semibold focus:outline-none">
                    <span class=" font-semibold text-[18px] leading-[32px] text-[#000000]">How it Works?</span>
                    <span class="faq-arrow transform transition-transform duration-300">
                        <img src="{{ asset('admin-assets/images/arrow-right.png') }}">

                    </span>
                </button>
                <div class="faq-answer mt-2 hidden">
                    <p class=" font-medium text-[16px] leading-[28px] text-[#000000]">To apply for a death certificate,
                        begin by accessing the necessary application form on our website. Fill in all the required
                        information accurately and submit the form. Once submitted, your request will be marked as pending.
                        An administrator will review your request, and you will be notified whether it is approved or
                        rejected, with reasons provided in the case of a rejection. If your request is approved, you will
                        need to proceed with the payment. After completing the payment, you can download the death
                        certificate from the website.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div id="successModal"
        class="fixed inset-0 z-50 top-[-32px] flex items-center justify-center bg-black bg-opacity-50  px-[10px] hidden">
        <div
            class=" lg:w-[770px] w-full bg-[#FFFFFF] rounded-[20px] px-[10px] lg:px-[40px] pb-[40px] mt-[30px] md:max-h-full lg:max-h-full max-h-[400px] overflow-scroll">
            <div class="flex justify-center my-6">
                <img src="{{ asset('admin-assets/images/success.png') }}">
            </div>
            <h5 class=" font-semibold text-[22px] lg:text-[28px] text-center  leading-[40px] pt-10">Death Certificate
                Application Submitted Successfully</h5>
            <p class=" font-normal text-[20px] leading-[28px] text-center mt-5 px-[20px] text-[#B9B9B9]">Admin will review
                your form, and if approved, then your payment will be required and Payment process mention below.</p>

            <div class="flex justify-center flex-col items-center">
                <div class="lg:flex md:flex items-center  gap-5 mt-10">
                    <div class="font-bold text-[20px] leading-[30px] text-center">Under 30 days -</div>
                    <p class=" font-semibold text-[20px] leading-[20px] text-[#B9B9B9]  text-center  lg:mt-0 md:mt-0 mt-5">2
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </p>
                </div>
                <div class="lg:flex md:flex items-center  gap-5 mt-10">
                    <div class="font-bold text-[20px] leading-[30px] text-center">30 days - 1 Year -</div>
                    <p class=" font-semibold text-[20px] leading-[20px] text-[#B9B9B9]  text-center  lg:mt-0 md:mt-0 mt-5">5
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </p>
                </div>
                <div class="lg:flex md:flex items-center  gap-5 mt-10">
                    <div class="font-bold text-[20px] leading-[30px] text-center">More than 1 Year -</div>
                    <p class=" font-semibold text-[20px] leading-[20px] text-[#B9B9B9]  text-center  lg:mt-0 md:mt-0 mt-5">
                        10 <i class="fa-solid fa-indian-rupee-sign"></i></p>
                </div>

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
