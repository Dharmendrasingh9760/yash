@extends('include.main')
@section('content')
    <style>
        .dataTables_length, .dataTables_filter {
            display: none;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .pagination li {
            list-style-type: none;
            padding: 8px 16px;
            margin: 0 5px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .pagination li.active {
            background-color: #007bff;
            color: #fff;
        }

        .pagination li:hover {
            background-color: #ddd;
        }

        .search-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
        }

        .search-container input {
            padding: 6px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-container button {
            padding: 6px 10px;
            font-size: 16px;
            border: 1px solid #007bff;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class="font-bold text-[32px] leading-[40px] text-[#000000]">Property Verification Request</h2>
            <!-- Search Form -->
            <div class="container my-4">
                <!-- Reset Button & Export/Import Links -->
                <div class="mt-3 d-flex justify-content-end">
                    <button onclick="toggleCollapse()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Search</button>
                    <a href="{{ route('PropertyImport') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded mx-2"> <i class="fas fa-download"></i> Import
                    </a>
                    <a href="{{ route('PropertyExport') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded "> <i class="fas fa-download"></i> Export
                    </a>
                </div>
                <div class="mt-2" id="content" style="display: {{ !empty(Request::all()) ? 'block' : 'none' }};">
                <form action="{{ route('my.property.list') }}" method="GET" class="row g-3">
                    <!-- Search Input -->
                    <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-4">
                         <label for="start_date" class="form-label">Search:</label>
                         <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search property...">
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-4">
                        <label for="start_date" class="form-label">Start Date:</label>
                        <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}" class="form-control" placeholder="Select start date">
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-4">
                        <label for="end_date" class="form-label">End Date:</label>
                        <input type="date" id="end_date" name="end_date" value="{{ request('start_date') }}" class="form-control" placeholder="Select end date">
                    </div>
                  </div>

                    <!-- Search Button -->
                    <div class="col-md-6">
                         <!-- <button href="{{ route('my.property.list') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded">Reset</button> -->
                         <button type="button" onclick="window.location.href='{{ route('my.property.list') }}';" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mx-2">
                          <i class="fas fa-times"></i> Clear</button>

                        <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3">
                            <i class="fas fa-search"></i> Search</button>
                    </div>
                </form>
              </div>
            </div>

        <div class="border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6">
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Property ID</th>
                        <th>Date</th>
                        <th>Applicant's Name</th>
                        <th>Property Type</th>
                        <th>Remarks</th>
                        <th>Application Status</th>
                        <th>Payment Status</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($property as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->property_id ?? 'NA' }}</td>
                            <td>{{ isset($data->created_at) ? $data->created_at->format('d-m-Y') : 'NA' }}</td>
                            <td>{{ $data->property_owner_name ?? 'NA' }}</td>
                            <td>{{ $data->property ?? 'NA' }}</td>
                            <td>{{ $data->remarks ?? 'NA' }}</td>
                            <td style="color: {{ $data->status == 0 ? 'orange' : ($data->status == 1 ? 'green' : 'red') }}">
                                {{ $data->status == 0 ? 'Pending' : ($data->status == 1 ? 'Approved' : 'Rejected') }}
                            </td>
                            <td style="color: {{ $data->payment_status == 0 ? 'orange' : 'green' }}">
                                {{ $data->payment_status == 0 ? 'Due' : 'Paid' }}
                            </td>
                            <td>
                                <a href="{{ route('property.view', ['id' => $data->id]) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('propertyNotification', ['id' => $data->id]) }}" class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="notification">

                                    <i class="fas fa-bell"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="h5 text-center">No property requests found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div class="pagination">
                {{ $property->links() }}
            </div>
        </div>
    </div>


<script>
function toggleCollapse() {
    var content = document.getElementById('content');
    if (content.style.display === 'none') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}
</script>

@endsection
