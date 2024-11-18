@extends('include.main')
@section('content')
    <style>
        /* Add your CSS styles here */
        .hidden-Residential {
            display: none;
        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Banner Details
        </h2>

        <div>
            <form action="{{ route('profile.update') }}" method="post" id="myForm" enctype="multipart/form-data">
                @csrf
                <div id="nonResidentialContent" class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px] ">
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2  lg:gap-10 border-b border-[#B1B6C6] mt-5   px-[10px] lg:px-[20px]   pb-[80px] flex flex-col gap-5">

                        <div>

                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">{{__('auth.name')}}<span
                                    class="text-red-600">*</span></div>
                            <input type="text" name="name" value=""
                                class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter">
                            <span class="" style="color:red">{{ $errors->first('name') }}</span>

                        </div>
                        <div>

                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">{{__('auth.email')}}<span
                                    class="text-red-600">*</span></div>
                            <input type="email" name="email" value=""
                                class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                                placeholder="Enter">
                            <span class="" style="color:red">{{ $errors->first('email') }}</span>

                        </div>

                        <div class="w-full flex flex-col items-center">
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">{{__('auth.profile_image')}}</div>
                            <div class="relative">
                                <label for="profileImageInput" class="cursor-pointer">
                                    <div class="w-[200px] h-[200px] border-2 border-[#B1B6C6] rounded-[12px] flex items-center justify-center overflow-hidden transition-all duration-300 {{ Auth::user()->profile_image ? 'bg-cover bg-center' : 'bg-[#F26F00] text-white' }}">
                                        
                                    </div>
                                    <input type="file" id="profileImageInput" name="profile_image" class="absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                                </label>
                            </div>
                            <span class="text-red-600 mt-2"></span>
                        </div>


                    </div>


                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <button id="resetButton"
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                            {{__('auth.reset')}}
                        </button>
                        <button type="submit"
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">{{__('auth.update')}}</button>
                    </div>
                </div>
        </div>

        </form>
    </div>
    </div>
    <div id="successModal"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50  px-[10px] hidden  overflow-scroll">
        <div class=" lg:w-[770px] popup w-full bg-[#FFFFFF] rounded-[20px] px-[10px] lg:px-[40px] pb-[40px] mt-[30px]">
            <div class="flex justify-center my-6">
                <img src="{{ asset('admin-assets/images/success.png') }}" />
            </div>
            <h5 class=" font-semibold text-[22px] lg:text-[28px] text-center  leading-[40px]  lg:pt-10">
                Profile Update Successfully</h5>



        </div>
    </div>
   
@endsection
