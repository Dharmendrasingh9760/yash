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
                        <li class="active text-[#f0ca00] pl-[10px]"> वित्तीय स्रोत</li>


                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px]  ml-auto mt-20">

        <div class="abt-us-2 px-[20px] py-[30px]"> <span>हमारे बारे में</span>
            <h2 class="lg:text-[35px] text-[27px] mt-3 text-[#000000] mb-[15px] font-bold">वित्तीय स्रोत</h2>
            <p></p>
            <p>

                <strong>धन के स्रोत</strong><br>नगर पंचायत के मुख्य आय के स्रोत इस प्रकार हैं :<br>
            </p>
            <p class=" text-[16px] leading-[35px] text-[#000000] mt-5"><strong>कर राजस्व</strong><br>➧ संपत्ति कर<br>➧
                सीवरेज टैक्स<br>➧ संरक्षण कर<br>➧ जल कर और जल
                प्रभार<br><br><strong>करेतर राजस्व</strong><br>➧ व्यापार लाइसेंस (मनोरंजन और वाहनों सहित)<br>➧
                जन्म-मृत्यु पंजीकरण और प्रमाण पत्र जारी करके<br>➧ नगर पालिका की सम्पत्तियों की समुदाय बुकिंग करके<br>➧
                नगर पालिका की सम्पत्तियों पट्टे या किराए पर देकर<br>➧ पार्किंग शुल्क, पालतू जानवर (कुत्तों आदि) का
                लाइसेंस जारी करके<br>➧ सार्वजनिक स्थानों में विज्ञापन / प्रचार सेवाओं (कियोस्क, होर्डिंग, विज्ञापन
                स्क्रीन, चमक के संकेत, पोस्टर और बैनर आदि) पर लाइसेंस फीस जारी करके<br>➧ किराये की संपत्तियों से किराया
                लेकर<br>➧ स्टांप शुल्क संग्रह करके<br>➧ राज्य सरकार की ओर से अनुदान द्वारा

                <br>
            </p>
            <p></p>
        </div>
    </div>
@endsection
