<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/libraries/bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>K-EVENTS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: white;">
        <div class="container-fluid">

            <div class="logo d-flex align-items-center">
                <div class="logo-img me-3">
                    <img src="/frontend/images/image 102.png" alt="">
                </div>
                <div class="title-navbar fw-bold" style="color: #F25D9C; font-size: 20px;">
                    K-EVENTS
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('history-page') }}">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq-page') }}">FAQ</a>
                    </li>
                </ul>

                @guest
                <form class="d-flex" role="search">
                    <a class="btn btn-primer-atas btn-custom-width" type="submit" href="{{ route('login') }}">Masuk</a>
                </form>
                @endguest

                @auth
                <div class="dropdown">
                    <button class="btn btn-primer-nav dropdown-toggle btn-custom-width" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->first_name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item btn-custom-width" type="submit">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="footer-container">
            <!-- Left Section: Logo and Email -->
            <div class="footer-left">
                <div class="logo-container">
                    <img src="/frontend/images/image 102.png" alt="Logo">
                    <span>K-EVENTS</span>
                </div>
                <a href="mailto:kevents@gmail.com"><i class="fa fa-envelope"></i> kevents@gmail.com</a>
            </div>

            <!-- Right Section: Horizontal Links -->
            <div class="horizontal-links">
                <a href="{{ route('home')}}">Beranda</a>
                <a href="{{ route('faq-page')}}">FAQ</a>
                <a href="{{ route('history-page')}}">Riwayat</a>
                <a href="{{ route('more')}}">Events</a>
            </div>
        </div>

        <!-- Credit Section -->
        <div class="credit">
            <span>© 2024 K-EVENTS. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function showAlert() {
        Swal.fire({
            text: 'Anda harus masuk terlebih dahulu',
            icon: 'warning',
            confirmButtonText: 'OK',
        });
    }
</script>

</body>
</html>
