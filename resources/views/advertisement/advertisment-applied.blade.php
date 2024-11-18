@extends('include.main')

@section('content')
    <div class="xl:px-[4rem] px-[10px] py-[2rem] bg-gray-50">
        <h2 class="font-bold text-[32px] leading-[40px] text-[#000000] mb-6">Advertisment Applied List</h2>

        <div class="border border-[#A0A0A0] bg-white rounded-[15px] shadow-md py-[20px] mt-6">
            @if (!$advertisements->isEmpty())
                @foreach ($advertisements as $advertisement)
                    <div
                        class="flex flex-col gap-4 lg:flex-row md:flex-row justify-between items-center border-b border-[#E0E0E0] py-[20px] px-[25px] last:border-b-0">
                        <div class="flex-1">
                            <!-- Advertisement Information -->
                            <div class="font-semibold text-[18px] leading-[22px] text-[#333333]">
                                Advertisement Number: {{ $advertisement->id ?? 'NA' }} | Address:
                                {{ $advertisement->adderss ?? 'NA' }}
                            </div>

                            <!-- Application Status -->
                            <div class="flex flex-col lg:flex-row md:flex-row items-start lg:items-center gap-4 pt-6">
                                @foreach ($advertisement->applications as $application)
                                    @if ($application->status == 0)
                                        <p class="font-medium text-[18px] leading-[22px] text-orange-500">
                                            Waiting
                                        </p>
                                    @elseif ($application->status == 1)
                                        <p class="font-medium text-[18px] leading-[22px] text-green-600">
                                            Approved
                                        </p>
                                        @if ($advertisement->amount)
                                            <div class="mt-2">
                                                @if ($advertisement->payment_status == 0)
                                                    <p class="text-red-500 font-medium text-[18px]">
                                                        Payment Pending - ₹{{ $advertisement->amount }}
                                                    </p>
                                                @elseif ($advertisement->payment_status == 1)
                                                    <p class="text-green-500 font-medium text-[18px]">
                                                        Payment Successful - ₹{{ $advertisement->amount }}
                                                    </p>
                                                @endif
                                            </div>

                                            @if ($advertisement->applications->isNotEmpty())
                                                <span class="block mt-1 text-sm text-gray-500">
                                                    Chalan Number:
                                                    {{ $advertisement->applications->first()->chalan_number ?? 'N/A' }}
                                                </span>
                                            @endif
                                        @endif
                                    @else
                                        <p class="font-medium text-[18px] leading-[22px] text-red-500">
                                            Rejected
                                        </p>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- View Details Button -->
                        <div class="flex-shrink-0 mt-4 lg:mt-0">
                            <a href="{{ route('user.appliedAdvertisementView', ['id' => $advertisement->id]) }}"
                                class="inline-block bg-[#202224] hover:bg-[#2E2E2E] text-white font-medium text-[18px] leading-[25px] py-2 px-6 rounded-lg transition-all">
                                View Details →
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-6">
                    <p class="font-medium text-[18px] leading-[22px] text-[#000000]">No data found</p>
                </div>
            @endif
        </div>
    </div>

    <!-- DataTable Initialization -->
    {{-- <script>
        $(document).ready(function() {
            $('#trades-table').DataTable();
        });
    </script> --}}

@endsection
