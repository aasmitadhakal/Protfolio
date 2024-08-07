<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img width="200" src="{{ asset('frontend/assets/images/img12.jpg') }}" class="rounded-lg" alt="">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Basic">Dashboard</div>
            </a>
        </li>
        <!-- inquries -->
        <li class="menu-item">
            <a href="{{ route('contact.index') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Inquries</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('contact.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Inquries</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">CMS</span>
        </li>
        {{-- for blog --}}
        <li class="menu-item">
            <a href="{{ route('experience.index') }}" class="menu-link">
                <i class='menu-icon bx bxl-blogger'></i>
                <div data-i18n="Basic">Experience</div>
            </a>
        </li>
        {{-- for service --}}
        <li class="menu-item">
            <a href="{{ route('project.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Basic">Project</div>
            </a>
        </li>
        {{-- for team --}}
        <li class="menu-item">
            <a href="{{ route('skill.index') }}" class="menu-link">
                <i class='menu-icon bx bx-user'></i>
                <div data-i18n="Basic"> Skill</div>
            </a>
        </li>

        <!-- global setting -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-cog'></i>
                <div data-i18n="Layouts">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.setting.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Global Setting</div>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
