@extends('include.main')
@section('content')
    <div class=" xl:pl-[4rem] px-[20px] py-[1rem]">
        <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Dashboard</h2>
        <div class=" xl:grid lg:grid lg:grid-cols-3 xl:grid-cols-5 md:grid md:grid-cols-2 gap-5">
            <a href="{{ route('complains') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <div class="mt-5 ">
                        <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Citizen <br>
                            Complaints→</p>
                    </div>

                </div>
            </a>
            <a href="{{ route('property.text') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] pt-5">Property <br>
                        Tax Asset→</p>

                </div>
            </a>
            {{-- <a href="{{route('property.permission')}}">
            <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                <div>
                    <img src="{{ asset('admin-assets//images/contact.png') }}">
                </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] pt-5">Property <br>
                        Permission→</p>


            </div>
            </a> --}}
            <a href="{{ route('birth.certificate') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <div class="mt-5 ">
                        <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Birth<br>
                            certificate→</p>
                    </div>

                </div>
            </a>
            <a href="{{ route('death.certificate') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <div class="mt-5 ">
                        <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Death<br>
                            certificate→</p>
                    </div>

                </div>
            </a>
            <a href="{{ route('marriage.certificate') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <div class="mt-5 ">
                        <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Marriage<br>
                            certificate→</p>
                    </div>

                </div>
            </a>
            <a href="{{ route('trade.license') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">Trade License <br>
                        Management →</p>
                </div>
            </a>
            <a href="{{ route('firstWastage') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">Wastage<br>
                        Collection →</p>
                </div>
            </a>
            <a href="{{ route('firstWater') }}">
                <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                    <div>
                        <img src="{{ asset('admin-assets//images/contact.png') }}">
                    </div>
                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224] mt-5">Water<br>
                        Tax →</p>
                </div>
            </a>
        </div>
        <div>

        </div>
    </div>
    <!-- <div class="xl:pl-[3rem] xl:px-[1rem] px-[20px] py-[3rem]">
                        <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Local Information</h2>
                        <div class=" xl:grid lg:grid lg:grid-cols-3 xl:grid-cols-5 gap-5 md:grid md:grid-cols-2">
                            <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                                <div>
                                    <img src="{{ asset('admin-assets//images/contact.png') }}">
                                </div>
                                <div class="mt-5 ">
                                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">Events →</p>
                                </div>

                            </div>
                            <div class="w-full mt-10 px-[20px] py-[30px] box-shadow rounded-[20px] cursor-pointer">
                                <div>
                                    <img src="{{ asset('admin-assets//images/contact.png') }}">
                                </div>
                                <div class="mt-5 ">
                                    <p class="font-semibold text-[22px] leading-[32px] text-[#202224]">My City→</p>
                                </div>

                            </div>
                        </div>
                        <div>

                        </div>
                    </div> -->
@endsection
