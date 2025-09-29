<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.dashboard.partials.head')
</head>

<body class="dark-only">
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('layouts.dashboard.partials.header')
        <div class="page-body-wrapper">
            @include('layouts.dashboard.partials.sidebar')
            <div class="page-body">
                @include('layouts.dashboard.partials.bread_crumbs')
                {{-- @include('layouts.dashboard.partials.bread_crumbs', ['breadcrumbs' => $breadcrumbs ?? []]) --}}

                {{-- @role('super_admin')
                    @include('screens.dashboards.superadmin')
                @endrole

                @role('company_admin')
                    @include('screens.dashboards.companyadmin')
                @endrole --}}
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.dashboard.partials.scripts')
</body>

</html>
