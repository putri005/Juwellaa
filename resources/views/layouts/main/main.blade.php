<!DOCTYPE html>
<html lang="en">

@include('layouts.main.partials.head')

<body>
  @include('layouts.main.partials.svg')
  @include('layouts.main.partials.preloader')
  @include('layouts.main.partials.offcanvas')
  @include('layouts.main.partials.header')

  @yield('content')

  @include('layouts.main.partials.footer')
  @include('layouts.main.partials.footer-bottom')
  @include('layouts.main.partials.script')

</body>

</html>