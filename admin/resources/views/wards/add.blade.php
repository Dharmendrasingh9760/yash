@extends('include.main')
@section('content')

    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <div class="breadcrumb">
            <button class="font-bold text-[14px] leading-[20px] lg:text-[22px] lg:leading-[30px] text-[#595959] mx-2">Add</button>

            <a href="{{ route('admin.dashboard') }}" class="font-bold text-[14px] leading-[20px] lg:text-[22px] lg:leading-[30px] text-[#808080] mx-2">Dashboard</a>  
            
            <a href="{{ route($modelName . '.index') }}" class="font-bold text-[14px] leading-[20px] lg:text-[18px] lg:leading-[30px] text-[#80aaff]"> {{ $sectionName }}</a> 
        </div>

        <div>
            <form action="{{ route($modelName . '.store') }}" method="post" id="myForm" enctype="multipart/form-data" autocomplete="off">
                @csrf

                <div class="border border-[#B1B6C6] rounded-[20px] mt-10 pb-[20px]">
                    <div class="lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 lg:gap-10 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[20px] pb-[80px] flex flex-col gap-5">

                        <div>
                            <label for="name" class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                Name<span class="text-red-600">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name')}}" 
                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" 
                                placeholder="Enter" required>
                            <span class="text-red-600">{{ $errors->first('name') }}</span>
                        </div>

                        <div>
                            <label for="word_number" class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                Word Number<span class="text-red-600">*</span>
                            </label>
                            <input type="number" id="word_number" name="word_number" value="{{ old('word_number')}}" 
                                class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]" 
                                placeholder="Enter" required>
                            <span class="text-red-600">{{ $errors->first('word_number') }}</span>
                        </div>

                        <div>
                            <label for="on_road_feet" class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                On Road Feet<span class="text-red-600">*</span>
                            </label>
                            <select name="house_type" class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]">
                                <option>Select On Road Feet</option>
                                <option value="on_road_more_than_30_feet">On road more than 30 feet</option>
                                <option value="15_to_30_feet_by_road">15 to 30 feet by road</option>
                                <option value="on_road_less_then_15_feet">On road less than 15 feet</option>
                            </select>
                            <span class="text-red-600">{{ $errors->first('word_number') }}</span>
                        </div>

                        <div>
                            <label for="house_type" class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                House Type<span class="text-red-600">*</span>
                            </label>
                            <select name="house_type" class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]">
                                <option>Select House Type</option>
                                <option value="rcc_roof_house">RCC Roof House</option>
                                <option value="raw_house">Raw House</option>
                                <option value="permanent_house">Permanent House</option>
                            </select>
                            <span class="text-red-600">{{ $errors->first('word_number') }}</span>
                        </div>

                        <div>
                            <label for="condition_regarding_land" class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">
                                Condition Regarding Land<span class="text-red-600">*</span>
                            </label>
                            <select name="condition_regarding_land" class="w-full border border-[#B1B6C6] pl-[19px] rounded-[100px] h-[60px]">
                                <option>Select Condition Regarding Land</option>
                                <option value="on_road_more_than_30_feet">On road more than 30 feet</option>
                                <option value="15_to_30_feet_by_road">15 to 30 feet by road</option>
                                <option value="on_road_less_then_15_feet">On road less than 15 feet</option>
                            </select>
                            <span class="text-red-600">{{ $errors->first('condition_regarding_land') }}</span>
                        </div>

                    </div>
                </div>

                <div class="lg:flex lg:flex-row md:flex md:flex-row flex flex-col items-center justify-center mt-5 gap-5">
                    <button type="submit" class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
