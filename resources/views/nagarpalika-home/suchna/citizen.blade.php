@extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">

            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold ">
                        सूचना का अधिकार</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> होम /</a></li>
                        <li class="active text-[#f0ca00] pl-[10px] text-[15px]"> सिटीजन चार्टर</li>


                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px] ml-auto mt-5">
        <div class="max-w-[650px] m-auto px-[20px]  mt-10">

            <div class="abt-us-2 px-[20px] py-[30px]"> <span>सूचना का अधिकार</span>
                <h2 class="lg:text-[35px] text-[27px] mt-3 text-[#000000] mb-[15px] font-bold">सिटीजन चार्टर</h2>
                <p></p>
                <p>

                </p>
                <p class=" text-[16px] leading-[35px] text-[#000000] mt-5">सभी नगर पालिका को कतिपय सार्वजनिक सेवाएँ प्रदान
                    करने का उत्तरदायित्व सौंपा गया है। 74 वें संशोधन के
                    अनुसार स्थानीय निकायों के उत्तरदायित्वों में काफी वृद्धि हुई है। इस प्रकार सिटीज़न चार्टर में इन
                    निकायों की मुख्य जिम्मेदारियों में समयबद्ध कार्यक्रम शामिल हैं जिनके द्वारा नागरिकों को मूलभूत
                    सार्वजनिक सेवाएं प्रदान की जा सकें।</p>
                <p class=" text-[16px] leading-[35px] text-[#000000] mt-5">सिटीज़न चार्टर नगर पालिका द्वारा प्रस्तुत किया जा
                    रहा है जिसके अंतर्गत सड़क प्रकाश व्यवस्था, परिवहन,
                    स्वच्छता, सड़कों का रखरखाव, जल निकासी, करों और शुल्कों की वसूली, पशु चिकित्सा सेवाएं, मृत पशुओं के
                    शवों का निपटान आदि अन्य समयबद्ध कार्यवाहियों की सूचना नागरिकों तक पहुंचाए जाने का प्रावधान है।</p>
                <p>यह सिटिज़न चार्टर निम्न लक्ष्य एवं उद्देश्यों को ध्यान में रखते हुए प्रस्तुत किया जा रहा है:-</p>
                <p></p>
                <p></p>
                <p></p>
                <ul style="list-style-type: disc;" class="mt-5 pl-[30px]">
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">नगर पालिका द्वारा विभिन्न बड़े पैमाने पर किए
                        गए कार्यों को प्रचारित करना।</li>
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">उपलब्ध कराई गई सेवाओं की गुणवत्ता सुनिश्चित
                        करना।</li>
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">जनता की शिकायतों का प्रभावशाली समाधान।</li>
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">सार्वजनिक सेवाओं के संबंध में मानकों के
                        अनुसार उत्तर और कार्रवाई सुनिश्चित करना।</li>
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">हर स्तर पर पारदर्शिता बनाए रखना।</li>
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">सार्वजनिक सेवाओं को नियमित रखना।</li>
                    <li class=" text-[16px] leading-[35px] text-[#000000] mt-1">सार्वजनिक सेवाओं हेतु सार्वजनिक भागीदारी के
                        लिए जागरूकता उत्पन्न करना।</li>
                </ul>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
@endsection
