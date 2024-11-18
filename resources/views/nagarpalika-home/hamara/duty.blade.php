@extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">

            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold ">हमारे बारे में</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> होम /</a></li>
                        <li class="active text-[#f0ca00] pl-[10px]"> कर्तव्य और कार्य</li>


                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px]  ml-auto mt-20">

        <div class="abt-us-2 px-[20px] py-[30px]"> <span>हमारे बारे में</span>
            <h2 class="lg:text-[35px] text-[27px] mt-3 text-[#000000] mb-[15px] font-bold">कर्तव्य और कार्य</h2>
            <p></p>
            <p class=" text-[16px] leading-[35px] text-[#000000] mt-5">

                <strong>नगर पंचायत के मुख्य भूमिका और कार्य इस प्रकार हैं:</strong><br><br>➧ जलापूर्ति, मलजल पद्धति
                इत्यादि जैसी नागरिक सेवाओं और सुविधाओं के संचालन एवं रखरखाव को सुनिश्चित करना<br>➧ दुकानों, व्यापारिक
                प्रतिष्ठानों के लिए लाइसेंस / परमिट जारी करना<br>➧ दुकानो एवं बाज़ारों के खुलने/बंद करने की प्रक्रिया का
                नियंत्रण करना<br>➧ सार्वजनिक स्वास्थ्य सेवाओं का संचालन करना<br>➧ इसके द्वारा स्वामित्व वाली भूमि एवं
                संपत्तियों के अभिलेख को संभालना

                <br>
            </p>
            <p></p>
        </div>
    </div>
@endsection
