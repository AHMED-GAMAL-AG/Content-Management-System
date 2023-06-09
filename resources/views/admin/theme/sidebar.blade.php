    <!-- Sidebar -->
    <ul class="pr-0 navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="">
                CMS AHMED
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span> {{ __('الإحصائيات') }}</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        {{-- /category* the * means any thing that comes after the * ex. delete ,create ect.. --}}
        <li class="nav-item {{ request()->is('admin/category*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('category.index') }}">
                <i class="fas fa-book-open"></i>
                <span> {{ __('التصنيفات') }}</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        {{-- /user* the * means any thing that comes after the * ex. delete ,create ect.. --}}
        <li class="nav-item {{ request()->is('admin/user*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('user.index') }}">
                <i class="fas fa-users"></i>
                <span> {{ __('المستخدمون') }}</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        {{-- /posts* the * means any thing that comes after the * ex. delete ,create ect.. --}}
        <li class="nav-item {{ request()->is('admin/posts*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('posts.index') }}">
                <i class="fas fa-pen-fancy"></i>
                <span> {{ __('المنشورات') }}</span>
            </a>
        </li>

        <!-- Nav Item - Charts -->
        {{-- /role* the * means any thing that comes after the * ex. delete ,create ect.. --}}
        <li class="nav-item {{ request()->is('admin/role*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('role.index') }}">
                <i class="fas fa-table"></i>
                <span> {{ __('الأدوار') }} </span></a>
        </li>

        <!-- Nav Item - Tables -->
        {{-- /permission* the * means any thing that comes after the * ex. delete ,create ect.. --}}
        <li class="nav-item {{ request()->is('admin/permission*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('permissions') }}">
                <i class="fas fa-folder"></i>
                <span> {{ __('الصلاحيات') }}</span></a>
        </li>

        {{-- /page* the * means any thing that comes after the * ex. delete ,create ect.. --}}
        <li class="nav-item {{ request()->is('admin/page*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('page.index') }}">
                <i class="fas fa-file"></i>
                <span> {{ __('الصفحات') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
