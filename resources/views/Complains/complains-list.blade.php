@extends('include.main')
@section('content')
<div class="xl:px-[4rem] px-[10px] py-[1rem]">
    <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Complains</h2>
    <div class="border border-[#A0A0A0] rounded-[15px]  py-[20px] mt-6">
        @if(!$complains->isEmpty())
        @foreach($complains as $complains_list)
        <div class=" flex flex-col gap-4 lg:flex lg:flex-row  md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
        <div>
            <div class=" font-semibold lg:text-[18px]  text-[16px]  leading-[22px] text-[#000000]">{{-- {{$complains_list->id}} | --}}Mobile No :- {{$complains_list->mobile_number ?? 'N/A' }} | Complain Query :- {{$complains_list->select_query ?? 'N/A'}}</div>
            <div class="flex items-center gap-5 pt-6">
        </div>
        </div>
        <a href="{{route('complains.chat',$complains_list->id)}}" class=" font-medium lg:text-[20px]  text-[18px] leading-[25px] text-[#202224] cursor-pointer">
            View Chat→
        </a>
        </div>
        @endforeach
        @else
        <div class="text-center py-4">
        <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found</p>
        </div>
        @endif

    </div>
</div>
@endsection
