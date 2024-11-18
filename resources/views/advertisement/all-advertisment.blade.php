@extends('include.main')
@section('content')
    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #ccc;
        }

        .page-header h2 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        .add-btn {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .table-container {
            margin-top: 1rem;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f1f1f1;
        }

        .table-actions {
            text-align: center;
        }

        .table-actions button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.3rem 0.6rem;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

    <div class="xl:px-[4rem] px-[20px] py-[3rem]">
        <div class="flex items-center gap-4">
            <h2 class=" font-bold text-[32px] leading-[40px] text-[#000000]">All Advertisements</h2>
        </div>
        <div class="table-container">
            <table id="trades-table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Mobile</th>
                        <th>Height X Width</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($advertisement as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ $data->image ?? '' }}" alt="IMG"
                                    style="width: 80px; height: 80px; object-fit: cover; border-radius: 7px;">
                            </td>
                            <td>{{ $data->mobile ?? 'N/A' }}</td>
                            <td>{{ $data->height ?? 'N/A' }} X {{ $data->width ?? 'N/A' }}</td>
                            <td>{{ $data->adderss ?? 'N/A' }}</td>
                            <td>{{ $data->city ?? 'N/A' }}</td>
                            <td>{{ $data->pincode ?? 'N/A' }}</td>
                            <td>{{ '₹' . ' ' . $data->price ?? 'N/A' }}</td>
                            <td>
                                @php
                                    $hasApplied = \App\Models\ApplyAdvertisement::where('advertisement_id', $data->id)
                                        ->where('user_id', auth()->id())
                                        ->exists();
                                @endphp

                                @if ($hasApplied)
                                    <span class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md">
                                        Applied
                                    </span>
                                @else
                                    <a href="#"
                                        class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out"
                                        onclick="openModal('{{ $data->price ?? 'N/A' }}', '{{ $data->id }}')">
                                        Book
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Modal -->
            <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-5 rounded-lg shadow-lg max-w-sm w-full">
                    <h2 class="text-lg font-bold mb-4">Enter Your Price</h2>
                    <label for="userPrice" class="block text-sm font-medium text-gray-700">Your Price:</label>
                    <input type="number" id="userPrice" class="mt-1 p-2 border border-gray-300 rounded-md w-full"
                        placeholder="Enter your price" min="0">

                    <input type="hidden" id="advertisementId">

                    <p id="advertisementPrice" class="mt-2 text-gray-700"></p>

                    <div class="mt-4">
                        <button onclick="closeModal()"
                            class="mr-2 inline-block px-4 py-2 bg-red-500 text-white rounded">Cancel</button>
                        <button onclick="submitPrice()"
                            class="inline-block px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function openModal(price, id) {
            document.getElementById('advertisementPrice').innerText = "Advertisement Price: ₹" +
                price;
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('userPrice').value = '';
            document.getElementById('advertisementId').value = id;
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
            resetForm();
        }

        function submitPrice() {
            const userPrice = parseFloat(document.getElementById('userPrice').value);
            const maxPrice = parseFloat(document.getElementById('advertisementPrice').innerText.replace(/[^0-9.-]+/g,
                ""));
            const advertisementId = document.getElementById('advertisementId').value;

            if (isNaN(userPrice) || userPrice < 0 || userPrice > maxPrice) {
                alert("Please enter a valid price that is not negative and does not exceed the advertisement price.");
                return;
            }

            const data = {
                id: advertisementId,
                price: userPrice
            };

            const queryString = new URLSearchParams(data).toString();
            window.location.href = `/book-advertisement?${queryString}`;
        }

        function resetForm() {
            document.getElementById('userPrice').value = '';
            document.getElementById('advertisementPrice').innerText = '';
            document.getElementById('advertisementId').value = '';
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#trades-table').DataTable();
        });
    </script>
@endsection
