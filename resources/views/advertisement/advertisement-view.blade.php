@extends('include.main')
@section('content')
    <style>
        #amountInput:focus {
            border-color: #3b82f6;
        }

        #validationMessage {
            margin-top: 0.25rem;
            font-size: 0.875rem;
            line-height: 1.25;
        }
    </style>

    {{-- Check if advertisement exists --}}
    @if ($advertisements)
        <div class="container mx-auto py-10 px-6">
            <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-sm p-6 space-y-6">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-black">Advertisement Details</h2>
                </div>

                {{-- Advertisement Details --}}
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 space-y-6 mt-6">
                    <h2 class="text-2xl font-semibold mb-4">Advertisement Details</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Image</p>
                            <div class="w-40 h-28 overflow-hidden rounded-lg shadow-sm">
                                <img src="{{ $advertisements->image ?? asset('placeholder.png') }}"
                                    alt="Advertisement Image" class="object-cover w-full h-full" />
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Mobile Number</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $advertisements->mobile ?? 'NA' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Price</p>
                            <p class="text-lg font-semibold text-gray-800">{{ '₹ ' . ($advertisements->price ?? 'NA') }}</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">City</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $advertisements->city ?? 'NA' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Address</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $advertisements->adderss ?? 'NA' }}</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Pincode</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $advertisements->pincode ?? 'NA' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Width</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $advertisements->width ?? 'NA' }}</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-600 font-medium">Height</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $advertisements->height ?? 'NA' }}</p>
                        </div>
                    </div>
                </div>


                {{-- Applications linked to this Advertisement --}}
                @if ($advertisements->applications && $advertisements->applications->count() > 0)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 space-y-6 mt-6">
                        <h3 class="text-xl font-semibold mb-4">Applications</h3>
                        @foreach ($advertisements->applications as $application)
                            <div class="border rounded-lg p-4 shadow-md transition-transform transform hover:scale-105">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <p class="text-gray-600">User Price</p>
                                        <p class="text-lg font-medium">{{ '₹' . ' ' . $application->user_price ?? 'NA' }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-gray-600">Status</p>
                                        @if ($application->status == 0)
                                            <span class="text-yellow-500 font-medium">Pending</span>
                                        @elseif ($application->status == 1)
                                            <span class="text-green-500 font-medium">Approved</span>
                                        @elseif ($application->status == 2)
                                            <span class="text-red-500 font-medium">Rejected</span>
                                        @endif
                                    </div>
                                </div>

                                @if ($application->status == 2)
                                    <div class="mt-2 p-4 bg-red-50 border border-red-400 rounded-lg">
                                        <p class="text-red-700 font-semibold">Rejection Remark:</p>
                                        <p class="text-gray-600">{{ $application->remark ?? 'No remark provided' }}</p>
                                    </div>
                                @endif

                                @if ($application->status == 1)
                                    <div class="mt-2">
                                        <p class="text-gray-600">Chalan Number</p>
                                        <p class="text-lg font-medium">{{ $application->chalan_number ?? 'NA' }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-gray-600">Approved Amount</p>
                                        <p class="text-lg font-medium">{{ '₹' . ' ' . $advertisements->amount ?? 'NA' }}
                                        </p>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500">No applications available for this advertisement.</p>
                @endif
            </div>
        </div>
    @else
        <p class="text-gray-500">Advertisement not found.</p>
    @endif

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection
