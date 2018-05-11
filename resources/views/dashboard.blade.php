<!DOCTYPE html>
<html>
    @include('part.head')
    <body>
        <div class="super_container">
            @include('part.header')
            @yield('content')
            @include('part.footer')
        </div>
        @include('part.scripts')
        @yield('scripts')
    </body>
</html>
