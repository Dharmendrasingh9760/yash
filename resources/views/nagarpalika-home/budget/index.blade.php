{{-- @extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">

            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold ">बजट</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> होम /</a></li>
                        <li class="active text-[#f0ca00] pl-[10px]"> बजट सम्बन्धी</li>


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
            /* Limiting the width for better readability */
            margin: 0 auto;
            /* Centering the title */
        }

        .home-builder-page-title h1 {
            font-size: 50px;
            /* Title size */
            line-height: 50px;
            /* Line height */
            color: white;
            /* Text color */
            font-weight: bold;
            /* Font weight */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
            /* Adding text shadow for better visibility */
        }

        .breadcrumb {
            display: flex;
            /* Flex layout for breadcrumb */
            margin-top: 10px;
            /* Margin above the breadcrumb */
        }

        .breadcrumb li {
            color: white;
            /* Breadcrumb text color */
            margin-right: 5px;
            /* Space between items */
        }

        .breadcrumb li.active {
            color: #f0ca00;
            /* Active item color */
            font-weight: bold;
            /* Active item font weight */
        }

        .content-section {
            max-width: 1170px;
            /* Maximum width of content */
            margin: 20px auto;
            /* Centering the content */
            text-align: center;
            /* Centering text */
        }

        .content-section p {
            font-size: 30px;
            /* Font size for paragraph */
            font-weight: bold;
            /* Bold text */
            color: #333;
            /* Text color */
        }
    </style>

    <div class="hero-section">
        <div class="xl:px-[18%] px-[7%] page-title">
            <div class="home-builder-page-title">
                <h1>बजट</h1>
                {{-- <img src="{{ asset('assets/imgs/linew.png') }}" alt="Line Separator" class="mt-4"> --}}
                <!-- Add margin for spacing -->
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('user.dashboard') }}">
                            <i class="fa fa-home" aria-hidden="true"></i> होम /
                        </a>
                    </li>
                    <li class="active pl-[10px]">बजट सम्बन्धी</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-section">
        <p>इस पेज की सामग्री जल्द ही उपलब्ध होगी।......</p>
    </div>
@endsection
