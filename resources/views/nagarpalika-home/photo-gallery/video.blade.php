{{-- @extends('nagarpalika-home.include-home.main')
@section('content')
    <style>
        .overlay-container:hover .overlay-cross {
            width: 100%;
            height: 200px !important;
        }

        .text {
            color: #fff;
            position: absolute;
            top: 20%;
            text-align: center;
            width: 100%;
            font-size: 20px;
            transition: translate(-50%, -50%);
        }
    </style>

    <div class="max-w-[1170px] m-auto mt-10 px-[20px]">
        <div class="mt-10">
            <h2 class=" text-[40px] leading-[40px] font-bold">वीडियो गैलरी</h2>
            <p class=" text-[20px] leading-[16px] pt-5 font-semibold">नगर पालिका परिषद् सीतापुर</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
            <div class="overlay-container" data-cat="logo">
                <div class="prtfl-bx text-center">
                    <iframe width="" height="" src="https://www.youtube.com/embed/rMoTYxVftU0?si=_ZyEbrgiCUlVWjPd"
                        title="" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen=""></iframe>
                    <div class="overlay overlay-cross">
                        <div class="text flex justify-center items-center">
                            <div class="search-icon-box  w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                                <i class="fa-solid fa-play text-white"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container" data-cat="logo">
                <div class="prtfl-bx text-center">
                    <iframe width="" height=""
                        src="https://www.youtube.com/embed/HCda5-211l8?si=l5t1ln7gN-ACNPi5" title="" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen=""></iframe>
                    <div class="overlay overlay-cross">
                        <div class="text flex justify-center items-center">
                            <div class="search-icon-box  w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                                <a href="https://www.youtube.com/embed/HCda5-211l8?si=l5t1ln7gN-ACNPi5"><i
                                        class="fa-solid fa-play text-white"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container" data-cat="logo">
                <div class="prtfl-bx text-center">
                    <iframe width="" height=""
                        src="https://www.youtube.com/embed/kOPUoxk_sjA?si=AZtqagzhfGVIlklm" title="" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen=""></iframe>
                    <div class="overlay overlay-cross">
                        <div class="text flex justify-center items-center">
                            <div class="search-icon-box  w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                                <a href="https://www.youtube.com/embed/kOPUoxk_sjA?si=AZtqagzhfGVIlklm"><i
                                        class="fa-solid fa-play text-white"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('nagarpalika-home.include-home.main')

@section('content')
    <style>
        .overlay-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            /* Rounded corners for the video box */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Subtle shadow effect */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            /* Dark overlay */
            opacity: 0;
            transition: opacity 0.3s ease;
            /* Smooth transition */
        }

        .overlay-container:hover .overlay {
            opacity: 1;
            /* Show overlay on hover */
        }

        .search-icon-box {
            width: 60px;
            height: 60px;
            background-color: #3d3c3c;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            /* Circle shape */
        }

        iframe {
            width: 100%;
            /* Full width for responsiveness */
            height: 250px;
            /* Fixed height for consistency */
            border: none;
            /* Remove border */
        }

        .header-title {
            text-align: center;
            /* Center align the title */
            margin-bottom: 20px;
            /* Margin below the title */
        }
    </style>

    <div class="max-w-[1170px] m-auto mt-10 px-[20px]">
        <div class="header-title">
            <h2 class="text-[40px] leading-[40px] font-bold">वीडियो गैलरी</h2>
            <p class="text-[20px] leading-[16px] pt-5 font-semibold">नगर पालिका परिषद् सीतापुर</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
            @foreach (['https://www.youtube.com/embed/rMoTYxVftU0?si=_ZyEbrgiCUlVWjPd', 'https://www.youtube.com/embed/HCda5-211l8?si=l5t1ln7gN-ACNPi5', 'https://www.youtube.com/embed/kOPUoxk_sjA?si=AZtqagzhfGVIlklm'] as $video)
                <div class="overlay-container">
                    <div class="prtfl-bx text-center">
                        <iframe src="{{ $video }}"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="overlay">
                            <div class="search-icon-box">
                                <i class="fa-solid fa-play text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
