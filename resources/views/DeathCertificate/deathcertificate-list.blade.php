@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">Death Certificate</h2>
        <div class="border border-[#A0A0A0] rounded-[15px]  py-[20px] mt-6">
            @if (!empty($deathcertificate))
                @foreach ($deathcertificate as $deathcertificate_list)
                    <div
                        class=" flex flex-col gap-4 lg:flex lg:flex-row  md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                        <div>
                            <div class=" font-semibold lg:text-[18px]  text-[16px]  leading-[22px] text-[#000000]">
                                Mobile No :- {{ $deathcertificate_list->mobile_number }} |
                                Email :- {{ $deathcertificate_list->email_id }}</div>
                            <div class="flex items-center gap-5 pt-6">
                                @if ($deathcertificate_list->status == 0)
                                    <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                        style="color:orange;">Waiting</p>
                                @elseif($deathcertificate_list->status == 1)
                                    <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                        style="color:green;">Approved</p>
                                    @if ($deathcertificate_list->amount)
                                        <p class="font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                            @if ($deathcertificate_list->payment_status == 0)
                                                <p
                                                    class="text-red-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                    Payment Pending - {{ '₹' . ' ' . $deathcertificate_list->amount }}
                                                </p>
                                            @elseif ($deathcertificate_list->payment_status == 1 && $deathcertificate_list->remaining > 0)
                                                <p
                                                    class="text-yellow-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                    Payment Pending - Remaining Amount: {{ '₹' . ' ' . $deathcertificate_list->remaining }}
                                                </p>
                                            @elseif ($deathcertificate_list->payment_status == 1 && $deathcertificate_list->remaining == 0)
                                                <p
                                                    class="text-green-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                    Payment Successful - {{ '₹' . ' ' . $deathcertificate_list->amount }}
                                                </p>
                                            @endif
                                        </p>
                                        {{ $deathcertificate_list->chalan_number }}
                                    @endif
                                @else
                                    <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                        style="color:red;">Rejected</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('death.certificate.view', $deathcertificate_list->id) }}"
                            class=" font-medium lg:text-[20px]  text-[18px] leading-[25px] text-[#202224] cursor-pointer">
                            View Details→
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
