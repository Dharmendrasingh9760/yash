{{-- @extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">

            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold ">प्रचार प्रशार</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> होम /</a></li>
                        <li class="active text-[#f0ca00] pl-[10px]"> अपील
                            सफाई अभियान</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px] m-auto mt-10">

        <p class="text-[30px] font-bold "> इस पेज की सामग्री जल्द ही उपलब्ध होगी।...... </p>

    </div>
@endsection --}}

@extends('nagarpalika-home.include-home.main')

@section('content')
    <style>
        .hero-section {
            display: flex;
            align-items: center;
            min-height: 350px;
            background-image: url({{ asset('images/AboutImg.jpg') }});
            background-size: cover;
            background-position: center;
        }

        .page-title {
            max-width: 90%;
            margin: 0 auto;
        }

        .home-builder-page-title h1 {
            font-size: 50px;
            line-height: 50px;
            color: white;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
        }

        .breadcrumb {
            display: flex;
            margin-top: 10px;
        }

        .breadcrumb li {
            color: white;
            margin-right: 5px;
        }

        .breadcrumb li.active {
            color: #f0ca00;
            font-weight: bold;
        }

        .content-section {
            max-width: 1170px;
            margin: 20px auto;
            text-align: center;
        }

        .content-section p {
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }
    </style>

    <div class="hero-section">
        <div class="xl:px-[18%] px-[7%] page-title">
            <div class="home-builder-page-title">
                <h1>प्रचार प्रशार</h1>
                {{-- <img src="{{ asset('assets/imgs/linew.png') }}" alt="Line Separator" class="mt-4"> --}}
                <ol class="breadcrumb">
                    <li><a href="{{ route('user.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> होम /</a></li>
                    <li class="active pl-[10px]">अपील सफाई अभियान</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-section">
        <p>इस पेज की सामग्री जल्द ही उपलब्ध होगी।......</p>
    </div>
@endsection

