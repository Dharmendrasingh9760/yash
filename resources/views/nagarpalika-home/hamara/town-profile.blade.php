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
                        <li class="active text-[#f0ca00] pl-[10px]"> प्रोफाइल</li>

                        <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                        <li class="active text-[#f0ca00]">नगर क्रियाएँ प्रोफ़ाइल</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px] ml-auto mt-5">
        <div class="max-w-[650px] m-auto px-[20px]  mt-10">
            <div class="abt-us-2 px-[20px] py-[30px]"> <span>हमारे बारे में</span>
                <h2 class="lg:text-[35px] text-[27px] mt-3 text-[#000000] mb-[15px] font-bold">नगर क्रियाएँ प्रोफ़ाइल</h2>
                <p></p>
                <p class=" text-[16px] leading-[35px] text-[#000000] mt-5">

                    <strong>नगर

                        पंचायत

                        की गतिविधियों की सूची इस प्रकार है :</strong><br><br>➧ सार्वजनिक सड़कों और नालियों की सफाई<br>➧
                    सार्वजनिक शौचालयों और मूत्रालयों की सफाई<br>➧ नालियों की मरम्मत एवं उनका रखरखाव<br>➧ जानवर (कुत्तों)
                    के शवों का निस्तारण गंदे / मिलावटी खाद्य सामग्री (फल, पेय आदि)की बिक्री की जाँच करके संक्रामक रोगों
                    के प्रसार को जांच करने के उपाए अपनाना<br>➧ ऐसे उद्यम / पेशेवरों को नियंत्रित करना जो सार्वजनिक
                    स्वास्थ्य के लिए हानिकारक हैं<br>➧ कूड़ों के ढेरों को हटाना<br>➧ मलबे को हटाना<br>➧ ठोस अपशिष्ट
                    प्रबंधन<br>➧ आवारा जानवरों (कुत्तों आदि) को पकड़ना<br>➧ पार्कों का रखरखाव<br>➧ सार्वजनिक स्थानों में
                    हरे पेड़ों का संरक्षण<br>➧ मृत्य एवं सूखे पेड़ों का निस्तारण

                    <br>
                </p>
                <p></p>
            </div>
        </div>
    </div>
@endsection
