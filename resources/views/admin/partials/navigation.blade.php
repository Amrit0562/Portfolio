<!-- Topbar Start -->
<header class="app-header flex items-center px-4 gap-3.5">

    <!-- App Logo -->
    <a href="{{ route('dashboard') }}" class="logo-box">
        <!-- Light Logo -->
        <div class="logo-light">
            <img src="{{ asset('assets/images/admin/Alogosm.png') }}" class="logo-lg h-16" alt="Light logo">
            <img src="{{ asset('assets/images/admin/Alogosm.png') }}" class="logo-sm h-16" alt="Small logo">
        </div>

        <!-- Dark Logo -->
        <div class="logo-dark">
            <img src="{{ asset('assets/images/admin/Alogosm.png') }}" class="logo-lg h-16" alt="Dark logo">
            <img src="{{ asset('assets/images/admin/Alogosm.png') }}" class="logo-sm h-16" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="nav-link p-2">
        <span class="sr-only">Menu Toggle Button</span>
        <span class="flex items-center justify-center">
            <i class="ri-menu-2-fill text-2xl"></i>
        </span>
    </button>

    <!-- Topbar Search Input -->
    <div class="relative hidden lg:block">
        <form data-fc-type="dropdown" type="button">
            <input type="search" class="form-input bg-black/5 border-none ps-8 relative" placeholder="Search...">
            <span class="ri-search-line text-base z-10 absolute start-2 top-1/2 -translate-y-1/2"></span>
        </form>
    </div>
    <div class="ms-auto">
    </div>

    <!-- Theme Setting Button -->
    <div class="flex">
        <button data-fc-type="offcanvas" data-fc-target="theme-customization" type="button" class="nav-link p-2">
            <span class="sr-only">Customization</span>
            <span class="flex items-center justify-center">
                <i class="ri-settings-3-line text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Light/Dark Toggle Button -->
    <div class="lg:flex hidden">
        <button id="light-dark-mode" type="button" class="nav-link p-2">
            <span class="sr-only">Light/Dark Mode</span>
            <span class="flex items-center justify-center">
                <i class="ri-moon-line text-2xl block dark:hidden"></i>
                <i class="ri-sun-line text-2xl hidden dark:block"></i>
            </span>
        </button>
    </div>

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center">
                <i class="ri-fullscreen-line text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="relative">
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button"
            class="nav-link flex items-center gap-2.5 px-3 bg-black/5 border-x border-black/10">
            {{-- @if (auth()->user()->getFirstMedia('images'))
                <img src="{{ auth()->user()->getFirstMedia('images')->getUrl() }}" class="rounded-full h-8"
                    alt="user-image">
            @else --}}
            <img src="{{ asset('assets/images/user.png') }}" class="rounded-full h-14" alt="user-image">
            {{-- @endif --}}
            <span class="md:flex flex-col gap-0.5 text-start hidden">
                <h5 class="text-sm">{{ auth()->user()->name }}</h5>
                <span class="text-xs">Reader</span>
            </span>
        </button>

        <div
            class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-all duration-300 bg-white shadow-lg border rounded-lg py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
            <!-- item-->
            <h6 class="flex items-center py-2 px-3 text-xs text-gray-800 dark:text-gray-400">Welcome !
            </h6>

            <!-- item-->
            <a href=""
                class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-account-circle-line text-lg align-middle"></i>
                <span>My Account</span>
            </a>

            <!-- item-->
            <a href=""
                class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-settings-4-line text-lg align-middle"></i>
                <span>Settings</span>
            </a>

            <!-- item-->
            <a href="pages-faqs.html"
                class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-customer-service-2-line text-lg align-middle"></i>
                <span>Support</span>
            </a>

            <!-- item-->
            <a href="auth-lock-screen.html"
                class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-lock-password-line text-lg align-middle"></i>
                <span>Lock Screen</span>
            </a>

            <!-- item-->
            <form id="logout-form" action="{{ route('admin.logout') }}"method="POST">
                @csrf
                <button
                    class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    type="submit">

                    <i class="ri-logout-box-line text-lg align-middle"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>
</header>
