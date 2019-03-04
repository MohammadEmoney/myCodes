@include('admin.incs.header')
@include('admin.incs.nav')

<div class="d-flex">

    @include('admin.incs.sidebar')

    <div class="content p-4">
        @yield('content')
    </div>
</div>

@include('admin.incs.footer')

