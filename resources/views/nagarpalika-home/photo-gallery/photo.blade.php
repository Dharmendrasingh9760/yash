{{-- @extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="max-w-[1170px] m-auto mt-10 px-[20px]">
        <div class="mt-10">
            <h2 class=" text-[40px] leading-[40px] font-bold">फोटो गैलरी</h2>
            <p class=" text-[20px] leading-[16px] pt-5 font-semibold">नगर पालिका परिषद् सीतापुर</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
            <div class="overlay-container ">
                <img src="{{ asset('images/GalleryImg_1.jpg') }}" class="image w-full min-h-[400px]">
                <div class="overlay overlay-cross">
                    <div class="text flex justify-center items-center">
                        <div class="search-icon-box  w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>

                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container ">
                <img src="{{ asset('images/GalleryImg_2.jpg') }}" class="image w-full min-h-[400px]">
                <div class="overlay overlay-cross">
                    <div class="text flex justify-center items-center">
                        <div class="search-icon-box w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>

                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container ">
                <img src="{{ asset('images/GalleryImg_3.jpg') }}" class="image w-full min-h-[400px]">
                <div class="overlay overlay-cross">
                    <div class="text flex justify-center items-center">
                        <div class="search-icon-boxw-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>

                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container ">
                <img src="{{ asset('images/GalleryImg_4.jpg') }}" class="image w-full min-h-[400px]">
                <div class="overlay overlay-cross">
                    <div class="text flex justify-center items-center">
                        <div class="search-icon-box w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>

                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container ">
                <img src="{{ asset('images/GalleryImg_5.jpg') }}" class="image w-full min-h-[400px]">
                <div class="overlay overlay-cross">
                    <div class="text flex justify-center items-center">
                        <div class="search-icon-box w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>

                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-container ">
                <img src="{{ asset('images/GalleryImg_6.jpg') }}" class="image w-full min-h-[400px]">
                <div class="overlay overlay-cross">
                    <div class="text flex justify-center items-center">
                        <div class="search-icon-box  w-[60px] h-[60px] bg-[#3d3c3c]  flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('nagarpalika-home.include-home.main')

@section('content')
    <div class="max-w-[1170px] m-auto mt-10 px-[20px]">
        <div class="mt-10 text-center">
            <h2 class="text-[40px] leading-[40px] font-bold">फोटो गैलरी</h2>
            <p class="text-[20px] leading-[16px] pt-5 font-semibold">नगर पालिका परिषद् सीतापुर</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
            @foreach (['GalleryImg_1.jpg', 'GalleryImg_2.jpg', 'GalleryImg_3.jpg', 'GalleryImg_4.jpg', 'GalleryImg_5.jpg', 'GalleryImg_6.jpg'] as $image)
                <div class="overlay-container relative">
                    <img src="{{ asset('images/' . $image) }}"
                        class="image w-full min-h-[400px] object-cover rounded-lg shadow-lg">
                    <div
                        class="overlay absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <div
                            class="search-icon-box w-[60px] h-[60px] bg-[#3d3c3c] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
