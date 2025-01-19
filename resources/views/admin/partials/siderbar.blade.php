<div class="app-menu">

    <!-- App Logo -->
    <a href="{{ route('dashboard') }}" class="logo-box">
        <!-- Light Logo -->
        <div class="logo-light">
            <img src="{{ asset('assets/images/frontend/amritlogolandbg.png') }}" class="logo-lg h-28" alt="Light logo">
            <img src="assets/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
        </div>

        <!-- Dark Logo -->
        <div class="logo-dark">
            <img src="assets/images/logo-dark.png" class="logo-lg h-28" alt="Dark logo">
            <img src="assets/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5 z-50">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="ri-checkbox-blank-circle-line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="scrollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">

            <li class="menu-item">
                <a href="{{ route('dashboard') }}" data-fc-type="collapse" class="menu-link">
                    <i class="ri-home-4-line"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <div href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-account-circle-line"></i>
                    </span>
                    <span class="menu-text"> User </span>
                    <span class="menu-arrow"></span>
                </div>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-text">View</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('userInfo.create') }}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-code-box-line"></i>
                    </span>
                    <span class="menu-text"> Technology </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-text">View</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('technology.create') }}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</div>
