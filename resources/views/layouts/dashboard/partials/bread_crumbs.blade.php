<div class="container-fluid">
    <div class="page-title">
        <div class="row">

            <div class="col-sm-6">
                <h3>@yield('title', 'Dashboard')</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg></a>
                    </li>
                    {{-- @foreach ($breadcrumbs as $crumb)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">{{ $crumb['page_title'] }}</li>
                        @else
                            <li class="breadcrumb-item">
                                <a href="{{ $crumb['url'] }}">{{ $crumb['page_title'] }}</a>
                            </li>
                        @endif
                    @endforeach --}}
                </ol>
            </div>
        </div>
    </div>
</div>
