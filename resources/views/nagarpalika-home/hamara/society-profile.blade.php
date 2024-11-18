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

                        <img src="assets/imgs/linew.png" alt="">
                        <li class="active text-[#f0ca00]">समाज कल्याण प्रोफ़ाइल</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px] ml-auto mt-5">
        <div class="max-w-[650px] m-auto px-[20px]  mt-10">
            <div class="abt-us-2 px-[20px] py-[30px]"> <span>हमारे बारे में</span>
                <h2 class="lg:text-[35px] text-[27px] mt-3 text-[#000000] mb-[15px] font-bold">समाज कल्याण प्रोफ़ाइल
                </h2>

                <p class=" text-[16px] leading-[35px] text-[#000000] mt-5">

                    नगर

                    पंचायत

                    एक शहरी स्थानीय निकाय है जो 1,00,000 या उससे अधिक जनसंख्या वाले शहरों में प्रशासन करती है । शहरी
                    स्थानीय स्वशासन प्रणाली के अंतर्गत नगर पंचायत उस जिले का प्रशासकीय हिस्सा होती है जिसमें वह स्थित
                    है। नगर पंचायत संवैधानिक (74 वें संशोधन) अधिनियम, 1992 में निहित कुछ कर्तव्यों और जिम्मेदारियों के
                    लिए उत्तरदायी है। यह राज्य सरकार के साथ सीधे संपर्क रखती है।<br><br>नगर पालिका के सदस्य पांच साल की
                    अवधि के लिए निर्वाचित प्रतिनिधि होते हैं। शहर अपनी जनसंख्या के अनुसार विभिन्न वार्डों में विभाजित
                    किया गया है और प्रत्येक वार्ड के लिए प्रतिनिधि चुने जातें हैं। समस्त सदस्य आपसी सहमति से अध्यक्षता
                    करने और बैठकों का संचालन करने के लिए एक अध्यक्ष का चुनाव करते हैं।<br><br><strong>समाज
                        कल्याण</strong><br>➧ पानी की आपूर्ति को बनाए रखने<br>➧ राशन कार्ड का सृजन<br>➧ जन्म / मृत्यु
                    प्रमाण पत्र एवं अभिलेख का सृजन<br>➧ बाज़ारों का नियंत्रण

                    <br>
                </p>
                <p></p>
            </div>
        </div>
    </div>
@endsection
