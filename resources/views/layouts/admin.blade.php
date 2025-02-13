
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="backend/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="backend/assets/img/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>
    Admin K-EVENTS
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDeletion(url, number) {
        Swal.fire({
            text: 'Are you sure you want to delete data number ' + number + '? This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
</html>
