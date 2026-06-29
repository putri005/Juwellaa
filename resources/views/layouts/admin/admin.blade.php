<!doctype html>
<html lang="en">

  @include('layouts.admin.partials.head')

  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      @include('layouts.admin.partials.header')
      @include('layouts.admin.partials.sidebar')

      <!--begin::App Main-->
      <main class="app-main">
        @yield('content')
      </main>
      <!--end::App Main-->

    @include('layouts.admin.partials.footer')
    </div>
    <!--end::App Wrapper-->

    @include('layouts.admin.partials.script')

  </body>
  <!--end::Body-->
</html>