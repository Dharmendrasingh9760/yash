@extends('nagarpalika-home.include-home.main')
@section('content')
<div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
    <div class="xl:px-[18%] px-[7%]">

        <div class="">
            <div class="home-builder-page-title">
                <h1 class=" text-[50px] leading-[50px] text-white font-bold ">
                    सेवाएं</h1>
                <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                <ol class="flex mt-10">
                    <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                aria-hidden="true"></i> होम /</a></li>
                    <li class="active text-[#f0ca00] pl-[10px]"> अलाव</li>


                </ol>
            </div>

        </div>
    </div>
</div>

<div class="max-w-[1170px]  ml-auto mt-20">
    <div class="abt-us-2 px-[20px] py-[30px]"> <span>सेवाएं</span>
        <h2 class="lg:text-[35px] leading-[33px] text-[27px] mt-3 text-[#000000] mb-[15px] font-bold">नगर पालिका परिषद् सीतापुर में चिन्हित अलाव स्थान</h2>
        <p></p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-5">नगर पालिका परिषद् सीतापुर में अलाव प्रतिदिन जलाये जा रहे है जिससे की आम नागरिको को ठण्ड से राहत मिल सके |
        </p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-5">अलाव जलाये जाने वाले चिन्हित स्थानों के नाम</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3">1 माँ बनैलिया चौराहा&nbsp;</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3">2 खनुआ तिराहे पर&nbsp;</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3">3 गाँधी चौक&nbsp;</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3">4 अस्पताल चौक&nbsp;</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3">5 जनता चौक&nbsp;</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3">6 रेलवे स्टेशन चौक&nbsp;</p>
        <p  class=" text-[16px] leading-[35px] text-[#000000] mt-3"> 7 रैन बसेरा जलकल परिसर&nbsp;</p>
        <p></p>
    </div>
</div>

@endsection
