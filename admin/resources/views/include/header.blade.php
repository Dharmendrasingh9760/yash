@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\Notification;
@endphp
<style>
    .relative {
        position: relative;
        display: inline-block;
    }

    .notification-number {
        position: absolute;
        top: 8px;
        right: 7.5px;
        transform: translate(50%, -50%);
        color: white;
        font-size: 12px;
        font-weight: bold;
    }
</style>
<nav class="border-b border-[#B1B6C6] pb-[10px]">
    <div
        class="mt-[10px] xl:px-[4rem] px-[20px] flex flex-col gap-4 lg:flex lg:flex-row md:flex md:flex-row justify-between">
        <div class="flex gap-5  items-center">
            <img src="{{ asset('admin-assets/images/bar.png') }}" class="w-[24px] cursor-pointer" id="menu-button" />
        </div>
        <div class="flex gap-5 lg:gap-4 items-center">
            <a href="{{ route('notification') }}" class="cursor-pointer" rel="noopener noreferrer">
                <div class="relative">
                    <img src="{{ asset('admin-assets/images/notification1.png') }}" class="w-[29px]" />
                    <span class="notification-number">{{ totalNotification() }}</span>
                </div>
            </a>
            <div>
                @if (Auth::user()->profile_image ?? '')
                <img src="{{ Auth::user()->profile_image }}" class="w-[50px] h-[50px] rounded-full" />
                @else
                    <img src="{{ asset('admin-assets/images/default-user.jpg') }}" class="w-[44px]"
                        style="border-radius: 50%;" />
                @endif
            </div>
            <div>
                <h6 class=" font-bold text-[18px] leading-[19px] text-[#404040]">
                    {{ Auth::user()->name ?? ''}}</h6>
            </div>
            <div class="">
                <img src="{{ asset('admin-assets/images/More.png') }}" class="w-[20px]" onclick="toggleMenu()" />
            </div>

        </div>

    </div>
    <div id="menu"
        class="bg-white w-[136px] h-[80px] border absolute right-[10px] hidden border-[#D8D8D8] box-shadow">
        <a href="{{ route('profile.details') }}" aria-label="View Profile" rel="noopener noreferrer">
            <h1 class="text-center mt-[10px] cursor-pointer">
                <i class="fas fa-home mr-2 mb-2" aria-hidden="true"></i> <strong> Profile</strong>
            </h1>
        </a>
        <hr>
        <a href="{{ route('logout') }}" aria-label="Logout" rel="noopener noreferrer">
            <h1 class="text-center mt-[10px] cursor-pointer">
                <i class="fas fa-user-circle mr-2" aria-hidden="true"></i> <strong> Log-out</strong>
            </h1>
        </a>
    </div>
</nav>
<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');

    }
</script>
