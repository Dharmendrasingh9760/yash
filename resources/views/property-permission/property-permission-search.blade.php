@extends('include.main')
@section('content')
<style>
        /* Add your CSS styles here */
        .hidden-Residential {
            display: none;
        }

        /* Add this to your custom CSS file */
        .active-button {
            background-color: #F26F00;
            color: #FFFFFF;

        }
        .inactive-button {
            background-color: #FFE4CD;
            color: #000000;

        }
    </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="xl:px-[4rem] md:px-[20px] px-[10px] py-[3rem]">
        <div class="lg:flex lg:items-center justify-between gap-4 flex flex-col md:flex md:flex-row">
            <h2 class=" font-bold text-[31px] lg:text-[32px] leading-[40px] text-[#000000]">Property Permission</h2>
            <a id="addnewproperty" href="{{ route('property.permission.add') }}"
                class="w-[250px] h-[70px] rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px] flex items-center justify-center">
                +Add New Property
            </a>
        </div>
        <div class="flex lg:gap-5 my-10 gap-2 items-center">
            <button id="nonResidentialBtn"
                class="lg:w-[182px] md:w-[182px] h-[70px] rounded-[100px] bg-[#F26F00] text-[#FFFFFF] w-full font-semibold text-[16px] lg:text-[18px] leading-[30px]">
                Non-Residential
            </button>
            <button id="residentialBtn"
                class="lg:w-[205px] md:w-[205px] h-[70px] rounded-[100px] bg-[#FFE4CD] text-black w-full font-semibold text-[16px] lg:text-[18px] leading-[30px]">
                Residential
            </button>
        </div>

        <div class="border border-[#B1B6C6] rounded-[20px]  ">
            <h3 class=" font-semibold text-[18px] leading-[30px] px-[10px] lg:px-[20px] pt-[20px] text-[#000000]">
                Search Property</h3>
            <p class=" font-normal text-[15px] leading-[30px] px-[10px] lg:px-[20px] py-[20px]">Provide at least one
                non-mandatory parameter to search for an application</p>
            <form id="myForm" action="{{ route('property.permission.search') }}" method="POST"
                class="lg:grid grid-cols-3 gap-10 border-b border-[#B1B6C6] mt-5 px-[10px] lg:px-[20px] pb-[80px]">
                @csrf
                <div>

                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of Chairman or Owner<span class="text-red-600">*</span></div>
                    <input type="text" name="name_chairman_owner" value=""
                        class="    w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                        placeholder="Enter Name of Chairman or Owner" autocomplete="off">

                </div>
                <input type="hidden" name="search" id="search" value="Non Residential">
                <div>
                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Construction Year
                    </div>
                    <input type="text" id="construction_year" name="construction_year"
                        class=" w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                        placeholder="Enter construction year">
                </div>
                <div>
                    <div class="font-normal text-[15px] leading-[30px] text-[#000000] pb-[10px]">Name of father/husband of Chairman/Owner
                    </div>
                    <input type="text" id="name_fh_chairman_owner" name="name_fh_chairman_owner"
                        class=" w-full border border-[#B1B6C6] pl-[19px]  rounded-[100px] h-[60px]"
                        placeholder="Enter Enter Name of father/husband">
                </div>
            <div class="lg:flex lg:flex-row justify-center my-[50px] gap-5 flex flex-col items-center  md:flex md:flex-row">
                <button id="resetButton"
                    class="w-[250px] h-[70px] text-center rounded-[100px] border border-[#B1B6C6] text-black font-semibold text-[18px] leading-[30px]">
                    Reset
                </button>
                {{-- <button type = "submit" onclick="toggleDetails()" id="searchbtn"
                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                    Search
                </button> --}}

                <button type="submit" {{-- id="searchbtn" --}}
                    class="w-[250px] h-[70px] text-center rounded-[100px] bg-[#F26F00] text-[#FFFFFF] font-semibold text-[18px] leading-[30px]">
                    Search
                </button>

            </div>
        </form>

        </div>
    <div id="searchDetails" class="mt-10 [ {{-- hidden --}} pb-[100px]">
        <div class=" border border-[#B1B6C6] rounded-[20px] pb-[80px]  ">
            <div class="flex justify-between items-center px-[20px] py-[20px] ">
                <div>
                    <h3 class=" font-semibold text-[18px] leading-[30px] text-[#000000]">Search the required details
                    </h3>
                </div>
                <div class="flex items-center gap-5">
                    <div onclick="closedList()">

                        <!-- <img src="{{ asset('admin-assets/images/print.png') }}" /> -->
                    </div>
                    <div class="dwlOpt"><a href="{{route('property.pay.list')}}?export=excel" value="excel"><i><img style="width:24px;"
                        src="{{ asset('admin-assets/images/export.png') }}" /></i></a></div>

                    {{-- <div id="excelExport">
                        <form id="excelform" action="{{ route('property.excelExport') }}" method="post">
                            @csrf
                            <input type="hidden" id="propertydata" name="propertydata" value="">
                            <input type="hidden" id="status" name="status" value="">
                            <button type="submit" id="saveexcel"></button>
                        </form>
                        <img src="{{ asset('admin-assets/images/small.png') }}" />
                    </div> --}}
                </div>
            </div>
            <div class="overflow-x-auto ">
                <table id="table-body" class=" min-w-full">
                    <thead class="border-b border-[#B1B6C6] ">
                        <tr>
                            <th class="px-4  py-4 whitespace-nowrap font-normal text-left text-[15px] leading-[30px]">
                                S.NO.</th>
                            <th class="px-4  py-4 whitespace-nowrap font-normal text-left text-[15px] leading-[30px]">
                                Application No.</th>
                            <th class="px-4 py-4 whitespace-nowrap text-left  font-normal text-[15px] leading-[30px] ">
                                Construction Year</th>
                            <th class="px-4 py-4 whitespace-nowrap text-left font-normal text-[15px] leading-[30px] ">
                                Property Type</th>
                            <th class="px-4 py-4 whitespace-nowrap text-left font-normal text-[15px] leading-[30px] ">
                                Name of Chairman or Owner</th>
                            <th class="px-4 py-4 whitespace-nowrap text-left font-normal text-[15px] leading-[30px]  ">
                                Status</th>
                        </tr>
                    </thead>
                    <tbody id="tableRow" class="border-b border-[#B1B6C6] pb-[10px] cursor-pointer">
                            @foreach ($getData as $key => $property)
                            <tr>
                                <td class="px-4  py-4  whitespace-nowrap text-left  font-medium text-[15px] leading-[30px] text-[#2C82F2]">{{ $key+1}}</td>
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">{{ $property->id ?? "NA" }}</td>
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">{{ $property->construction_year  ?? "NA"}}</td>
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">{{ $property->property ?? "NA" }}</td>
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">{{ $property->name_chairman_owner ?? "NA" }}</td>
                                @if($property->status == '0')
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#FF0000]" style="color:orange;">Waiting</td>
                                @elseif($property->status == '1')
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#FF0000]" style="color:green;">Approved</td>
                                @else
                                <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#FF0000]" style="color:red;">Rejected</td>
                                @endif
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <script>
        $(document).ready(function() {
            $('#searchbtn').click(function() {
                // Prevent the default form submission
                event.preventDefault();
                // Collect form data
                let res_details_of_owner = $('#res_details_of_owner').val();
                let search = $('#search').val();
                let construction_year = $('#construction_year').val();
                let residential_type = $('#residential_type').val();
                const Search = document.getElementById('searchDetails');
                $('#tableRow').empty();
                Search.classList.add('hidden');
                // Prepare data to be sent in the request
                let formData = {
                    res_details_of_owner: res_details_of_owner,
                    search: search,
                    construction_year: construction_year,
                    residential_type: residential_type,
                    _token: '{{ csrf_token() }}' // Add CSRF token
                };

                // Make AJAX request
                $.ajax({
                    url: "{{ route('property.search') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    success: function(data) {
                        let listData = data.property;
                        // Extract the property and status from the data array
                        listData.forEach(item => {
                            $('#tableRow').append(`
                        <tr class="bg-white my-4">
                            <td class="px-4 py-4 whitespace-nowrap text-left font-medium text-[15px] leading-[30px] text-[#2C82F2]">${item.id}</td>
                            <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">${item.construction_year}</td>
                            <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">${item.property}</td>
                            <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">${item.details_of_owner}</td>
                            <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#000000]">${item.land_building_description}</td>
                            <td class="px-4 py-4 text-left whitespace-nowrap font-medium text-[15px] leading-[30px] text-[#FF0000]">${data.status}</td>
                        </tr>
                    `);
                        });
                        Search.classList.remove('hidden');

                    },
                    error: function(xhr, status, error) {
                        $('#result').html('An error occurred: ' + error);
                    }
                });
            });
        });
    </script> --}}
    {{-- <script>
        $('#saveexcel').click(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the form element
            const form = document.getElementById('excelform');

            // Trigger the form submission
            form.submit();
        });
    </script> --}}


    {{-- <script>
        function toggleDetails() {
            const Search = document.getElementById('searchDetails');
            Search.classList.remove('hidden');
        }
    </script> --}}
    {{-- <script>
        function closedList() {
            const Search = document.getElementById('searchDetails');
            $('#tableRow').empty();
            Search.classList.add('hidden');
            const form = document.getElementById('myForm');
            form.reset();
        }
    </script> --}}
    {{-- <script>
        document.getElementById('propertybtn').addEventListener('click', function() {
            document.getElementById('search').value = "property";
        });

        document.getElementById('applicationbtn').addEventListener('click', function() {
            document.getElementById('search').value = "application";
        });
    </script> --}}
    <script>
        function toggleDropdown(id) {
            var dropdownContent = document.getElementById('dropdown-content-' + id);
            var toggleButton = document.getElementById('toggle-button-' + id);

            dropdownContent.classList.toggle('hidden');

            if (!dropdownContent.classList.contains('hidden')) {
                toggleButton.classList.remove('rounded-full');
                toggleButton.classList.add('rounded-tr-[35px]', 'rounded-tl-[35px]');
            } else {
                toggleButton.classList.remove('rounded-tr-[35px]', 'rounded-tl-[35px]');
                toggleButton.classList.add('rounded-full');
            }
        }
    </script>
    <script>
        // Select all select-box elements
        const selectBoxes = document.querySelectorAll('.select-box');

        // Loop through each select box
        selectBoxes.forEach(function(selectBox, index) {
            const selectOption = selectBox.querySelector('.select-option');
            const soValue = selectBox.querySelector('.soValue');
            const optionsLi = selectBox.querySelectorAll('.options li');
            const chooseFileButton = selectBox.querySelector('button');

            // Toggle active class on click of select-option
            selectOption.addEventListener('click', function() {
                selectBox.classList.toggle('active');
                if (selectBox.classList.contains('active')) {
                    chooseFileButton.classList.add('rounded-tr-[19px]');
                    chooseFileButton.classList.add('rounded-br-[0px]');
                } else {
                    chooseFileButton.classList.remove('rounded-tr-[19px]');
                }
            });
            // Set value on click of options
            optionsLi.forEach(function(option) {
                option.addEventListener('click', function() {
                    const text = this.textContent;
                    soValue.value = text;
                    selectBox.classList.remove('active');
                    chooseFileButton.classList.remove('rounded-tr-[19px]');
                    chooseFileButton.classList.remove('rounded-br-[0px]');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const resetButton = document.getElementById('resetButton');
            const form = document.getElementById('myForm');

            resetButton.addEventListener('click', (event) => {
                event.preventDefault();
                form.reset();
            });
        });
    </script>
     <script>
        document.addEventListener('DOMContentLoaded', () => {
            const nonResidentialBtn = document.getElementById('nonResidentialBtn');
            const residentialBtn = document.getElementById('residentialBtn');

            function handleButtonClick(activeButton, inactiveButton) {
                activeButton.classList.add('active-button');
                activeButton.classList.remove('inactive-button');
                inactiveButton.classList.add('inactive-button');
                inactiveButton.classList.remove('active-button');
            }

            nonResidentialBtn.addEventListener('click', () => {
                handleButtonClick(nonResidentialBtn, residentialBtn);
            });

            residentialBtn.addEventListener('click', () => {
                handleButtonClick(residentialBtn, nonResidentialBtn);
            });
        });
    </script>
@endsection
