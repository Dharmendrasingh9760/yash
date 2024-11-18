<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="lg:flex justify-between px-[10px] ">
        <div class="flex justify-center lg:mx-auto pt-[40px] pb-[20px] lg:pb-[200px]">
            <div class="lg:w-[600px] w-full border border-[#00000033] rounded-[20px] p-5 shade">
                <div class="flex justify-center">
                    <img src="{{ asset('images/appentus-logo 1.png') }}" />
                </div>
                <div class="mt-10">
                    {{-- <h1 class="font-bold text-[34px] leading-[42px] text-[#000000] text-center">Login</h1> --}}
                    <p class="font-medium text-[16px] leading-[22px] text-center pt-5">Please enter email id for send
                        mail</p>
                </div>

                <form class="mt-5" action="{{ route('forgetpassword.send.mail') }}" method="POST">
                    @csrf
                    <div class="mb-10">
                        <label class="font-normal text-[15px] leading-[18px] text-[#000000] ">Email Address</label>
                        <input type="email" name="email" placeholder="Enter Email Address"
                            class="w-full h-[60px] border border-[#B1B6C6] outline-none rounded-[16px] pl-[19px] mt-3"
                            required>
                        <span class="" style="color:red">{{ $errors->first('email') }}</span>

                    </div>


                    <div class="flex justify-center">
                        <button
                            class="login w-[374px] h-[60px] bg-[#B1B6C6] text-center font-bold text-[20px] text-[#FFFFFF] leading-[20px] rounded-[100px]">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>

    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // // Toggle the eye icon
                // if (type === 'password') {
                //     togglePassword.setAttribute('src', '{{ asset('admin-assets/images/eye-slash.png') }}');
                // } else {
                //     togglePassword.setAttribute('src', '{{ asset('admin-assets/images/eye.png') }}');
                // }
            });
        });
    </script>

</body>

</html>
