<style>
    .active {
        background: rgb(255 228 205);
    }
</style>
<div id="sidebar"
    class="sidebar bg-white overflow-auto fixed top-0 left-0 z-40 w-[290px] h-screen transition-transform -translate-x-full xl:translate-x-0 flex flex-col py-[10px]  border-r border-[#DFEAF0] ">
    <div id="close-button" class="flex justify-end px-[20px] xl:hidden lg:flex md:flex ">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="py-[1rem] flex justify-center">
        <img width="80%" src="{{ asset('images/app_logo.png') }}" />
    </div>
    <div class="">
        <div class="flex flex-col gap-[10px] border-b px-[20px] border-[#B1B6C6]  overflow-hidden pb-[40px] ">
            <div class="">
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] addbackground"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/Dashboard.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Dashboard</span>

                </a>
            </div>
            <div class="">
                <a href="{{ route('property.text') }}"
                    class="{{ request()->routeIs(['property.text', 'property.pay.list', 'property.pay.add', 'add-property.pay.save', 'add-property.declaration.save', 'my.property.list', 'my.property.application.list', 'my.property.nonresidential.view', 'my.property.residential.view', 'my.property.application.nonresidential.view', 'my.property.application.residential.view', 'property.residential.pdf', 'property.nonresidential.pdf', 'property.residential.print.pdf', 'property.nonresidential.print.pdf', 'property.search', 'property.excelExport']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/buildings.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Property
                        Tax Asset</span>

                </a>
            </div>
            {{-- <div class="">
                <a href="{{route('property.permission')}}" class=" {{ request()->routeIs(['property.permission', 'property.permission.search', 'property.permission.add', 'property.permission.save', 'property.permission.application.list', 'property.permission.application.nonresidential.view', 'property.permission.application.residential.view', 'property.residential.permission.pdf', 'property.permission.nonresidential.pdf', 'property.permission.residential.print.pdf', 'property.permission.nonresidential.print.pdf']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{asset('admin-assets//images/buildings.png')}}" class="pl-[10px]">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Property Permission</span>

                </a>
            </div> --}}
            <div class="">
                <a href="{{ route('birth.certificate') }}"
                    class=" {{ request()->routeIs(['birth.certificate', 'birth.certificate.add', 'birth.certificate.list', 'birth.certificate.view', 'birth.certificate.pdf', 'birth.certificate.save', 'birth.certificate.print.pdf']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/cerificate.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Birth
                        certificate</span>

                </a>
            </div>
            <div class="">
                <a href="{{ route('death.certificate') }}"
                    class=" {{ request()->routeIs(['death.certificate', 'death.certificate.add', 'death.certificate.list', 'death.certificate.view', 'death.certificate.pdf', 'death.certificate.save', 'death.certificate.print.pdf']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/cerificate.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Death
                        certificate</span>

                </a>
            </div>
            <div class="">
                <a href="{{ route('marriage.certificate') }}"
                    class="{{ request()->routeIs(['marriage.certificate', 'marriage.certificate.add', 'marriage.certificate.save', 'marriage.certificate.list', 'marriage.certificate.view', 'marriage.certificate.gernatepdf', 'marriage.certificate.printpdf']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/cerificate.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Marriage
                        Certificates</span>
                </a>
            </div>
            <div class="">
                <a href="{{ route('trade.license') }}"
                    class="{{ request()->routeIs(['trade.license', 'trade.license.add', 'trade.license.save', 'trade.license.list', 'trade.license.view', 'trade.license.gernatepdf', 'trade.license.print.pdf']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/personalcard.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Trade
                        License Management </span>
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.advertisement') }}"
                    class="{{ request()->routeIs(['user.advertisement']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/personalcard.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">
                        Advertisement</span>
                </a>
            </div>
            <div class="">
                <a href="{{ route('firstWastage') }}"
                    class="{{ request()->routeIs(['firstWastage','wastage.index','wastageList','wastageView','wastageStore']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/personalcard.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Wastage
                        Collection</span>
                </a>
            </div>
            <div class="">
                <a href="{{ route('firstWater') }}"
                    class="{{ request()->routeIs(['user.waterTax','firstWater','waterList','waterView','waterStore']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/personalcard.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Water
                        Tax</span>
                </a>
            </div>

            <div class="">
                <a href="{{ route('payments') }}"
                    class="{{ request()->routeIs(['payments']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/personalcard.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Payment</span>
                </a>
            </div>

            <div class="">
                <a href="{{ route('complains') }}"
                    class="{{ request()->routeIs(['complains', 'complains.add', 'complains.save', 'complains.list', 'complains.chat', 'complains.message']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/comments.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Complains</span>

                </a>
            </div>
        </div>
        <div class="flex flex-col gap-10px px-[24px] py-[10px] ">
            <div class="">
                <a href="{{ route('profile.details') }}"
                    class="{{ request()->routeIs(['profile.details', 'profile.update']) ? 'active' : '' }} sidebar-item flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] "
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/setting.png') }}" class="pl-[10px]">
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Settings</span>

                </a>
            </div>
            <!-- <div class="">
                <a href="{{ route('logout') }}" class="flex items-center p-2 text-base text-gray-900 transition duration-75  w-[260px] h-[50px] rounded-[10px]   hover:bg-[#FFE4CD] " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <img src="{{ asset('admin-assets//images/Logout.png') }}" class="pl-[10px]">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold text-[15px] leading-[18px] text-[#000000]">Logout</span>

                </a>
            </div> -->
        </div>


    </div>
</div>
<script></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebarItems = document.querySelectorAll('.sidebar-item');

        sidebarItems.forEach(item => {
            item.addEventListener('click', (event) => {

                // Remove the active class from all items
                sidebarItems.forEach(i => i.classList.remove('bg-[#FFE4CD]'));

                // Add the active class to the clicked item
                item.classList.add('bg-[#FFE4CD]');
            });
        });
    });
</script>
