<!DOCTYPE html>
<html lang="en" class ="lain">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/libraries/bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/styles/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
       function downloadTicket() {
    const element = document.getElementById('ticketContent');
    
    // Pindahkan posisi scroll ke elemen untuk memastikan elemen dalam posisi tampilan
    window.scrollTo(0, element.offsetTop);

    // Tunggu hingga gambar barcode termuat sepenuhnya sebelum memulai proses download
    const barcodeImg = element.querySelector('.barcode img');
    
    barcodeImg.onload = function() {
        const contentWidth = element.scrollWidth;
        const contentHeight = element.scrollHeight;

        const opt = {
            margin: 0, // Hapus margin untuk menghindari ruang kosong
            filename: 'tiket_event.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: {
                scale: 2,  // Gunakan skala tetap untuk kualitas gambar yang baik
                useCORS: true,
                allowTaint: true,
                scrollX: 0,
                scrollY: 0,
                backgroundColor: null,
                width: contentWidth,  // Gunakan lebar elemen yang sebenarnya
                height: contentHeight // Gunakan tinggi elemen yang sebenarnya
            },
            jsPDF: {
                unit: 'px',
                format: [contentWidth, contentHeight], // Pastikan format sesuai dengan elemen
                orientation: contentWidth > contentHeight ? 'landscape' : 'portrait' // Tetapkan orientasi berdasarkan dimensi
            }
        };

        html2pdf().from(element).set(opt).save();
    };

    if (barcodeImg.complete) {
        barcodeImg.onload();
    }
}



    </script>
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
                    G-POINT
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
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
                    <span>G-POINT</span>
                </div>
                <a href="mailto:kevents@gmail.com"><i class="fa fa-envelope"></i> gpoint@gmail.com</a>
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
     
    
</body>
<script src="/frontend/libraries/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</html>