@extends('nagarpalika-home.include-home.main')

@section('content')
    <div class="flex items-center min-h-[400px] bg-cover bg-center"
        style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">
            <div class="text-center">
                <h1 class="xl:text-[60px] text-[26px] leading-[37px] xl:leading-[60px] text-white font-bold">
                    संपर्क करें<br>
                    <span class="text-[#50921A]">नगर पालिका परिषद् सीतापुर</span>
                </h1>
                <img src="{{ asset('images/linew.png') }}" class="mt-4 mx-auto" alt="">
                <ol class="flex justify-center mt-10">
                    <li><a class="text-white" href="{{ route('user.dashboard') }}">
                            <i class="fa fa-home text-white" aria-hidden="true"></i> होम /
                        </a></li>
                    <li class="active text-[#f0ca00] pl-[10px]">संपर्क करें</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-section about-page-section px-[20px]">
        <div class="max-w-[1170px] m-auto mt-10 px-[20px]">
            <h2 class="text-center text-uppercase text-[30px] font-bold">
                हमसे <span class="orange-txt">संपर्क करें</span>
            </h2>
            <div class="border-creative text-center flex justify-center pt-2">
                <img src="{{ asset('images/border.png') }}" alt="">
            </div>
            <div class="top-contact">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-10">
                    <div class="flex items-center gap-4 p-4 border rounded-lg bg-white shadow">
                        <div class="icon-contact text-[#50921A] text-[24px]">
                            {{-- <i class="fa fa-map-marker"></i> --}}
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">Nagar Panchayat Sitapur, Uttar Pradesh</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 border rounded-lg bg-white shadow">
                        <div class="icon-contact text-[#50921A] text-[24px]">
                            {{-- <i class="fa fa-mobile"></i> --}}
                        </div>
                        <div class="flex-1">
                            <p class="phone-mail font-semibold">+91 7991357170 (10 AM - 06 PM)</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 border rounded-lg bg-white shadow">
                        <div class="icon-contact text-[#50921A] text-[24px]">
                            {{-- <i class="fa fa-envelope-o"></i> --}}
                        </div>
                        <div class="flex-1">
                            <p class="phone-mail font-semibold">
                                <a href="mailto:nppsitapur@gmail.com"
                                    class="text-[#50921A] hover:underline">nppsitapur@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
