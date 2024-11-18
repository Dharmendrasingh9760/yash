@extends('nagarpalika-home.include-home.main')

@section('content')
    <div class="flex items-center min-h-[400px] bg-cover bg-center" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">
            <div class="text-center">
                <h1 class="xl:text-[60px] text-[26px] leading-[37px] xl:leading-[60px] text-white font-bold">
                    मानचित्र<br>
                    <span class="text-[#50921A]">नगर पालिका परिषद् सीतापुर</span>
                </h1>
                <img src="{{ asset('images/linew.png') }}" class="mt-4 mx-auto" alt="">
                <ol class="flex justify-center mt-10">
                    <li>
                        <a class="text-white" href="{{ route('user.dashboard') }}">
                            <i class="fa fa-home text-white" aria-hidden="true"></i> होम /
                        </a>
                    </li>
                    <li class="active text-[#f0ca00] pl-[10px]">मानचित्र</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="feeds mt-10 px-[7%]">
        <h2 class="text-center text-[24px] font-bold mb-5">हमारा मानचित्र</h2>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.838390714093!2d80.67697267613761!3d27.567525631643335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399ed655b15d1f35%3A0x232a9cb8cc9cb4e2!2sNagar%20Palika%20Parishad%20Sitapur!5e0!3m2!1sen!2sin!4v1728456387424!5m2!1sen!2sin"
                width="100%" height="500" style="border:0;" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
