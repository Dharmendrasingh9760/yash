@extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">

            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold "> सूचना का अधिकार</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> होम </a></li>
                        <li class="active text-[#f0ca00] pl-[10px]">सूचना का अधिकार - एक्ट</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="max-w-[1170px] m-auto mt-5">

        <div class="overflow-x-auto mt-10  ">
            <table id="table-body" class=" min-w-full  ">
                <thead class=" border-b-2 border-[#000000] ">
                    <tr>
                        <th class="px-4 py-4 whitespace-nowrap font-semibold text-[15px] leading-[22px]">
                            क्र. सं.</th>
                        <th class="px-4 py-4 whitespace-nowrap font-semibold  text-[15px] leading-[22px] text-left">विषय
                        </th>
                        <th class="px-4 py-4 whitespace-nowrap font-semibold  text-[15px] leading-[22px] text-left">अपलोड की
                            तिथि</th>
                        <th class="px-4 py-4  font-semibold whitespace-nowrap  text-[15px] leading-[22px]">देखें/डाउनलोड
                        </th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="border-b border-[#212529]">
                        <td class="px-4 py-4 text-center whitespace-nowrap font-medium text-[15px] leading-[22px]">1</td>
                        <td class="px-4 py-4 whitespace-nowrap font-medium text-[15px] leading-[22px] text-left">सूचना का
                            अधिकार अधिनियम 2005: अधिनियम</td>
                        <td class="px-4 py-4 whitespace-nowrap font-medium text-[15px] leading-[22px] text-left">2022-07-20
                            11:08:58</td>
                        <td class="px-4 py-4 text-center whitespace-nowrap  font-medium text-[15px] leading-[22px]">
                            Show/Download</td>

                    </tr>
                </tbody>
                <tbody class="">
                    <tr class="border-b border-[#212529]">
                        <td class="px-4 py-4 text-center whitespace-nowrap font-medium text-[15px] leading-[22px]">1</td>
                        <td class="px-4 py-4 whitespace-nowrap font-medium text-[15px] leading-[22px] text-left">आर टी आई
                            गाइड 2013: मार्गदर्शक</td>
                        <td class="px-4 py-4 whitespace-nowrap font-medium text-[15px] leading-[22px] text-left">2022-07-20
                            11:09:55</td>
                        <td class="px-4 py-4 text-center whitespace-nowrap  font-medium text-[15px] leading-[22px]">
                            Show/Download</td>

                    </tr>
                </tbody>
                <tbody class="">
                    <tr class="border-b border-[#212529]">
                        <td class="px-4 py-4 text-center whitespace-nowrap font-medium text-[15px] leading-[22px]">1</td>
                        <td class="px-4 py-4 whitespace-nowrap font-medium text-[15px] leading-[22px] text-left"> सूचना का
                            अधिकार नियम: नियम</td>
                        <td class="px-4 py-4 whitespace-nowrap font-medium text-[15px] leading-[22px] text-left">2022-07-20
                            11:11:03</td>
                        <td class="px-4 py-4 text-center whitespace-nowrap  font-medium text-[15px] leading-[22px]">
                            Show/Download</td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
