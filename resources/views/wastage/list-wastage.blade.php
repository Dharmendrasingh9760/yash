@extends('include.main')

@section('content')

    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class="font-bold text-[32px] leading-[40px] text-[#000000]">Wastage Collection List</h2>
        <div class="border border-[#A0A0A0] rounded-[15px]  py-[20px] mt-6">
            @if (!$data->isEmpty())
                @foreach ($data as $item)
                    <div
                        class=" flex flex-col gap-4 lg:flex lg:flex-row  md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
                        <div>
                            <div class=" font-semibold lg:text-[18px]  text-[16px]  leading-[22px] text-[#000000]">
                                Emitra Code :- {{ $item->code_12 ?? 'NA' }} |Email :-
                                {{ $item->email ?? 'NA' }}{{--  | {{ $item->license_type ?? 'NA' }} --}}
                            </div>
                            <div class="flex items-center gap-5 pt-6">
                                @if ($item->status == 0)
                                    <p class=" font-medium lg:text-[18px]  text-[16px]  leading-[22px] "
                                        style="color:orange;">Waiting</p>
                                @elseif($item->status == 1)
                                    <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                        style="color:green;">Approved</p>
                                    @if ($item->amount)
                                        <p class="font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                            @if ($item->payment_status == 0)
                                                <p
                                                    class="text-red-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                    Payment Pending - {{ '₹' . ' ' . $item->amount }}
                                                </p>
                                            @elseif ($item->payment_status == 1 && $item->remaining > 0)
                                                <p
                                                    class="text-yellow-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                    Payment Pending - Remaining Amount: {{ '₹' . ' ' . $item->remaining }}
                                                </p>
                                            @elseif ($item->payment_status == 1 && $item->remaining == 0)
                                                <p
                                                    class="text-green-500 font-medium lg:text-[18px] text-[16px] leading-[22px]">
                                                    Payment Successful - {{ '₹' . ' ' . $item->amount }}
                                                </p>
                                            @endif
                                        </p>
                                    @endif
                                @else
                                    <p class=" font-medium lg:text-[18px]  text-[16px] text-[#F26F00]  leading-[22px] "
                                        style="color:red;">Rejected</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('wastageView', $item->id) }}"
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
    <script>
        $(document).ready(function() {
            $('#trades-table').DataTable();
        });
    </script>
@endsection
