<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partials.head')
<body>
  @include('partials.headeradmin')
  <div style="min-height:75vh">
    @yield('content')
  </div>
  @include('partials.footer')
  @include('partials.jquerys')
</div>
</body>
</html>
