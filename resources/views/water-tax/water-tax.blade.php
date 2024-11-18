@extends('include.main')
@section('content')
    <style>
        input.uppercase {
            text-transform: uppercase;
        }
    </style>
    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <h2 class=" font-bold text-[24px] leading-[30px] lg:text-[32px] lg:leading-[40px] text-[#000000]">Water Tax
        </h2>
        <div>
            <form action="{{ route('waterStore') }}" method="post" id="myForm">
                @csrf
                <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px]">
                    <h3 class="font-semibold text-[18px] leading-[30px] lg:px-[20px] px-[10px] py-[20px] text-[#000000]">
                        Water Tax Details
                    </h3>
                    <div
                        class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[20px] pb-[80px] flex flex-col gap-5">
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">12 Digit Emitra CIN
                                Code</div>
                            <input type="number" name="emitra_12_code" value="{{ old('emitra_12_code') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('emitra_12_code') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Mobile Number</div>
                            <input type="number" name="mobile" value="{{ old('mobile') }}"
                                class="uppercase w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('mobile') }}</span>
                        </div>
                        <div>
                            <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Email</div>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]"
                                autocomplete="off">
                            <span class="" style="color:red">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div
                        class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                        <!-- Attach reset function on click event -->
                        <button id="resetButton" type="button"
                            class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]"
                            onclick="resetForm()">Reset</button>
                        <button type="submit"
                            class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">Submit→</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function resetForm() {
            document.getElementById("myForm").reset(); 
        }
    </script>
@endsection
