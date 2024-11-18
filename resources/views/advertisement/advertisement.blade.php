@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <div class="flex items-center gap-4">
            <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Advertisement</h2>
            <img src="{{ asset('admin-assets//images/propertyImg.png') }}" />
        </div>
        <div class=" lg:flex gap-6">
            <a href="{{ route('user.allAdvertisement') }}">
                <div class="lg:w-[262px]  w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                    <div class="flex items-center gap-5">
                        <img src="{{ asset('admin-assets/images/icon2.png') }}">
                        <span class="font-bold text-[20px] leading-[27px]"></span>
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">All <br>Advertisement →</p>
                </div>
            </a>
            <a href="{{ route('user.appliedAdvertisement') }}" class="cursor-pointer">

                <div class="lg:w-[262px] w-full  mt-10 px-[20px] py-[30px] box-shadow rounded-[20px]">
                    <div>
                        <img src="{{ asset('admin-assets/images/icon1.png') }}">
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">My <br>
                        Applications →</p>
                </div>
            </a>
        </div>
    </div>

    {{-- <script>
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
    <script>
        function openModal() {
            document.getElementById('licsence').classList.remove('hidden');
        }

        function closeModal(event) {
            document.getElementById('licsence').classList.add('hidden');
        }
    </script> --}}
@endsection
