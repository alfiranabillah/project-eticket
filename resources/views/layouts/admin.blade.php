
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="backend/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="backend/assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  @include('includes/styles')
</head>

<body class="g-sidenav-show  bg-gray-100">
@include('includes/sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('includes/navbar')
    @yield('content')
  </main>
@include('includes/footer')
@include('includes/script')

@stack('scripts')
</body>

</html>
