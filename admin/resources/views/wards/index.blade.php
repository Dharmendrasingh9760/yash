@extends('include.main')

@section('content')
    <style>
        .dataTables_length {
            padding-left: 20px;
        }

        .dataTables_filter {
            padding-right: 20px;
        }
    </style>
    <div class="xl:px-[4rem] px-[10px] py-[1rem]">
        <h2 class="font-bold text-[32px] leading-[40px] text-[#000000]"> {{ $sectionName }} </h2>
         <!-- Search Form -->
            <div class="container my-4">
                <div class="mt-3 d-flex justify-content-end">
                    <button onclick="toggleCollapse()" class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-400 hover:from-green-500 hover:via-blue-600 hover:to-purple-500 text-white font-bold py-2 px-6 rounded-lg mx-2">Search</button>

                    <!-- <a href="{{ route($modelName.'.create') }}" class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-400 hover:from-green-500 hover:via-blue-600 hover:to-purple-500 text-white font-bold py-2 px-6 rounded-lg">Add {{ $sectionName }}</a> -->
                </div>
                <div class="mt-2" id="content" style="display: {{ !empty($searchVariable) ? 'block' : 'none' }};">
                <form action="{{ route($modelName.'.index') }}" method="GET" class="row g-3">
                    <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-4">
                         <label for="name" class="form-label">Name:</label>
                         <input type="text" name="name" class="form-control" value="{{ isset($searchVariable['name']) ? $searchVariable['name'] : '' }}" placeholder="Name">
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-4">
                         <label for="ward_number" class="form-label">Word Number:</label>
                         <input type="text" name="ward_number" class="form-control" value="{{ isset($searchVariable['ward_number']) ? $searchVariable['ward_number'] : '' }}" placeholder="Ward Number">
                    </div>
                  </div>

                    <!-- Search Button -->
                    <div class="col-md-6">
                        
                       <button type="button" onclick="window.location.href='{{ route($modelName.'.index') }}';" class="bg-gradient-to-r from-red-500 to-purple-500 hover:from-red-600 hover:to-purple-600 text-white font-bold py-2 px-6 rounded-lg mx-2">
                            <i class="fas fa-times"></i> Clear
                        </button>


                          <button type="submit" class="bg-gradient-to-r from-green-400 via-danger-500 to-purple-400 hover:from-green-500 hover:via-blue-600 hover:to-purple-500 text-white font-bold py-2 px-6 rounded-lg mx-2"><i class="fas fa-search"></i> Search
                         </button>
                    </div>
                </form>
              </div>
            </div>

        <div class="border border-[#A0A0A0] rounded-[15px] py-[20px] mt-6">
            <table id="trades-table" class="display">

                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Word Number</th>
                        <th>Added On</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $key => $result)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $result->name ?? 'NA' }}</td>
                            <td>{{ $result->word_number ?? 'NA' }}</td>
                            <td>{{ $result->created_at ? \Carbon\Carbon::parse($result->created_at)->format('d-M-Y') : 'NA' }}
                            </td>
                            <!-- <td>
                                <a href="{{ route($modelName.'.edit', $result->id) }}" class="mx-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                
                                <a onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) { window.location.href='{{ route($modelName.'.delete', $result->id) }}'; }" class="mx-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
<div class="pagination">
    {{ $results->links() }} <!-- This will render the pagination links -->
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
