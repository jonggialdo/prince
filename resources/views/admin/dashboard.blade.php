<!DOCTYPE html>
<html>
  @include('admin.partials._head')
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.partials._side')
        @include('admin.partials._nav')
      <div class="content-wrapper">
        @include('admin.partials._alert')
        @yield('content')
      </div>
      @include('admin.partials._footer')
    </div>
    @include('admin.partials._scripts')
    @yield('scripts')
  </body>
</html>
