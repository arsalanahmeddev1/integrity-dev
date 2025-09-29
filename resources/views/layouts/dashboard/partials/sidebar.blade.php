@php
    $userRoleId = checkUser()->roles->first()->id;
@endphp

<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div class="logo-wrapper">
        <a href="">
            <img class="img-fluid for-light" src="{{ asset('assets/web/images/logo.png') }}" alt=""
                style="max-width: 90px" />
            <img class="img-fluid for-dark" src="{{ asset('assets/web/images/logo.png') }}" alt=""
                style="max-width: 90px" />
        </a>
        <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="">
            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" />
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" />
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div>
                        <h6>Pinned</h6>
                    </div>
                </li>
                @foreach (dynamic_sidebar($userRoleId) as $module)
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title">
                            <span class="theme-icons"><i class="{{ $module->icon }}"></i></span>
                            <span>{{ $module->name }}</span>
                        </a>
                        @php
                            $children = $module->children->filter(function ($child) use ($userRoleId) {
                                $permission = $child->permissions->first(); // pre-loaded collection

                                if ($userRoleId == 1) {
                                    return true;
                                }

                                return $permission &&
                                    ($permission->is_add ||
                                        $permission->is_view ||
                                        $permission->is_update ||
                                        $permission->is_delete);
                            });
                        @endphp

                        @if ($children->count())
                            <ul class="sidebar-submenu">
                                @foreach ($children as $child)
                                    <li>
                                        <a href="">
                                            {{ $child->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow">
            <i data-feather="arrow-right"></i>
        </div>
    </nav>
</div>
