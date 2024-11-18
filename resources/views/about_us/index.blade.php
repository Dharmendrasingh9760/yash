@extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }} );">
        <div class="xl:px-[18%] px-[7%]">
            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold ">{{ __('auth.about_us') }}</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> {{ __('auth.home') }} /</a></li>
                        <li class="active text-[#f0ca00] pl-[10px]">{{ __('auth.about_us') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-[1170px] m-auto mt-10">
        <p class="text-[30px] font-bold ">{{ __('auth.content_soon') }}</p>
    </div>
@endsection