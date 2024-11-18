@extends('nagarpalika-home.include-home.main')
@section('content')
    <div class="flex items-center  min-h-[350px]" style="background-image: url({{ asset('images/AboutImg.jpg') }});">
        <div class="xl:px-[18%] px-[7%]">

            <div class="">
                <div class="home-builder-page-title">
                    <h1 class=" text-[50px] leading-[50px] text-white font-bold ">

                        निविदाएं</h1>
                    <img src="{{ asset('assets/imgs/linew.png') }}" alt="">
                    <ol class="flex mt-10">
                        <li><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa fa-home text-white"
                                    aria-hidden="true"></i> होम </a></li>
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
                        <th class="px-4 py-4 whitespace-nowrap font-semibold  text-[15px] leading-[22px]">विषय</th>
                        <th class="px-4 py-4 whitespace-nowrap font-semibold  text-[15px] leading-[22px]">अपलोड की तिथि
                        </th>
                        <th class="px-4 py-4  font-semibold whitespace-nowrap  text-[15px] leading-[22px]">देखें/डाउनलोड
                        </th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="border-b border-[#212529]">
                        <td class="px-4 py-4 text-center whitespace-nowrap font-medium text-[15px] leading-[22px]">1
                        </td>
                        <td class="px-4 py-4 text-center whitespace-nowrap font-medium text-[15px] leading-[22px]">this
                            is sanndesh for everyone</td>
                        <td class="px-4 py-4 text-center whitespace-nowrap font-medium text-[15px] leading-[22px]">
                            2022-07-14 06:26:39</td>
                        <td class="px-4 py-4 text-center whitespace-nowrap  font-medium text-[15px] leading-[22px]">
                            Show/Download</td>

                    </tr>
                </tbody>

            </table>
        </div>

    </div>
@endsection
