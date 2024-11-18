<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        .swiper-slide {
            position: relative;
            text-align: center;
            color: white;
        }
 
        .swiper-slide img {
            width: 100%;
            height: auto;
        }
 
        .swiper-slide .text-overlay {
            position: absolute;
            bottom: 18%;
 
            padding: 10px 20px;
            border-radius: 5px;
        }
 
        .login:hover {
            background-color: rgb(242 111 0);
        }
    </style>
</head>
<body class="">
     <script type="text/javascript">
        $(document).ready(function() {
            @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
            @endif
        });
    </script>
    <div class="lg:flex justify-between px-[10px] ">
        <div class="flex justify-center lg:mx-auto pt-[40px] pb-[20px] lg:pb-[200px]">
            <div class="lg:w-[800px] w-full border border-[#00000033] rounded-[20px] p-5 shade">
                <div class="flex justify-center">
                    <a href="{{ route('login.page') }}">
                    <img src="{{ asset('images/app_logo.png') }}" />
                    </a>
                </div>
                <div class="mt-10">
                    <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Nagar Palika</h1>
                    <p class="font-medium text-[16px] leading-[22px] text-center py-3">Fetch Your Property Detail</p>
                </div>
                  <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">S NO.</th>
                          <th scope="col">Ward No.</th>
                          <th scope="col">Colony Name</th>
                          <th scope="col">House Id</th>
                          <th scope="col">House No.</th>
                          <th scope="col">Mobile Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($properties->isNotEmpty())
                            @foreach($properties as $key => $property)
                            <tr>
                              <td>{{ $key + 1 ?? 0}}</td>
                              <td>{{ $property->ward_no ?? ''}}</td>
                              <td>{{ $property->colony_name ?? ''}}</td>
                              <td>{{ $property->property_id ?? ''}}</td>
                              <td>{{ $property->house_no ?? ''}}</td>
                              <td>{{ $property->mobile_number ?? ''}}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                               <td colspan="6" class="text-center"><strong>Record Not Found</strong></td>
                            </tr>
                        @endif
                      </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>