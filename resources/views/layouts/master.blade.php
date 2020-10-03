<!DOCTYPE html>
<html>
@include('_menu.head')
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
 @include('_menu.main-header')
 @include('_menu.sidebar')
  <div class="content-wrapper">

  	{{-- @include('layouts._flash') --}}
    @yield('content')
  </div>
  <footer class="main-footer">
    @include('_menu.footer')
  </footer>
@include('_menu.control-sidebar')
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('_menu.script')
</body>
</html>
