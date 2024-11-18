@extends('include.main')
@section('content')
    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class="font-bold text-[22px] leading-[30px] text-[#000000]"> {{ $singularName }} List</h2>
        
        <div class="border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6">
            <div class="flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between items-center border-b border-[#B1B6C6] md:px-[25px] px-[10px] lg:px-[25px] pt-[10px] pb-[30px]">
            </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-[#F0F0F0]">
                                <th class="px-4 py-2 text-left">#</th>
                                <th class="px-4 py-2 text-left">Order Id</th>
                                <th class="px-4 py-2 text-left">Payment Id</th>
                                <th class="px-4 py-2 text-left">Type</th>
                                <th class="px-4 py-2 text-left">Amount</th>
                                <th class="px-4 py-2 text-left">Date</th>
                                <th class="px-4 py-2 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if($payments->isNotEmpty())
                            @foreach($payments as $index => $payment)
                                <tr class="border-t border-[#E0E0E0]">
                                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2">{{ $payment->razorpay_order_id ?? '' }}</td>
                                    <td class="px-4 py-2">{{ $payment->razorpay_payment_id ?? '' }}</td>
                                    <td class="px-4 py-2">{{ $payment->type }}</td>
                                    <td class="px-4 py-2">{{ $payment->amount }}</td>
                                    <td class="px-4 py-2">{{ $payment->created_at }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('payments.download', $payment->id) }}" class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-400 hover:from-green-500 hover:via-blue-600 hover:to-purple-500 text-white font-bold py-1 px-2 rounded-lg"><i class="fas fa-download mr-2"></i> Download</a>

                                    </td>
                                </tr>
                            @endforeach
				            @else
				                <div class="text-center py-4">
				                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found</p>
				                </div>
				            @endif
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection
