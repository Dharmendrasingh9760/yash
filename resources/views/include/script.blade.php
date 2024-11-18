<!-- <script src="{{asset('js/talwinnd.js')}}"></script>

<link rel="stylesheet" href="{{asset('css/toastr.css')}}">
<link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
<script src="{{asset('jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontend/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/toastr.min.js')}}"></script>
    <script src="{{asset('frontend/slick.min.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script> -->
    <!-- <script src="slick.js"></script> -->
    

{{-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    document.getElementById('payButton').onclick = function(e) {
        e.preventDefault();

        var id = "{{ $deathcertificate->id ?? '' }}";
        var amount = "{{ $deathcertificate->amount ?? '' }}";
        // alert(amount);
        fetch('/create-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    id: id,
                    amount: amount,
                    type: 'DEATH'
                })
            })
            .then(response => response.json())
            .then(data => {
                var options = {
                    "key": "{{ env('RAZORPAY_KEY_ID') }}", // Replace with your Razorpay key ID
                    "amount": data.amount, // Amount in the smallest currency unit
                    "currency": "INR",
                    "name": "Appentus",
                    "description": "Test Transaction",
                    "order_id": data.order_id, // Order ID returned from the server
                    "handler": function(response) {
                        // Call backend to verify the payment
                        fetch('/verify-payment', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF Token for Laravel
                                },
                                body: JSON.stringify({
                                    razorpay_order_id: response.razorpay_order_id,
                                    razorpay_payment_id: response.razorpay_payment_id,
                                    razorpay_signature: response.razorpay_signature,
                                    data: data
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message);
                            });
                    },
                    // "prefill": {
                    //     "name": "Appentus",
                    //     "email": "appentus@gmail.com",
                    //     "contact": "8585857485"
                    // },
                    "theme": {
                        "color": "#F37254"
                    }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            })
            .catch(error => console.error('Error:', error));
    };
</script> --}}


<script>
    function getDefaults() {
        return {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    }

    function getOptions() {
        return $.extend({}, getDefaults(), toastr.options);
    }

    $(document).ready(function() {
        toastr.options = getOptions();

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('menu-button');
        const closeButton = document.getElementById('close-button');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        if (menuButton) {
            menuButton.addEventListener('click', function() {
                console.log('Menu button clicked');
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('xl:-translate-x-full');
                mainContent.classList.toggle('shifted');
            });
        } else {
            console.error('Menu button not found');
        }

        if (closeButton) {
            closeButton.addEventListener('click', function() {
                console.log('Close button clicked');
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('xl:-translate-x-full');
                mainContent.classList.toggle('shifted');
            });
        } else {
            console.error('Close button not found');
        }

        const currentLocation = window.location.href;
        const sidebarLinks = document.querySelectorAll('#sidebar a');

        sidebarLinks.forEach(link => {
            if (link.href === currentLocation) {
                link.classList.add('bg-[#FFE4CD]', '');
                link.closest('div').classList.remove('hidden');
            }
        });
    });
</script>

<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');

    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const arrow = item.querySelector('.faq-arrow');

            question.addEventListener('click', () => {
                answer.classList.toggle('hidden');
                arrow.classList.toggle('rotate-90');
            });
        });
    });
</script>
<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');

    }
</script>
