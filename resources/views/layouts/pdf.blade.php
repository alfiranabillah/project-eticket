<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/libraries/bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/styles/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function downloadTicket() {
            const element = document.getElementById('ticketContent');
            html2pdf(element, {
                margin:       2,
                filename:     'tiket_event.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            });
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
                        K-EVENTS
                    </div>
            </div>
 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('history-page') }}">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('faq-page') }}">FAQ</a>
              </li>
            </ul>


            @guest
            <form class="d-flex" role="search">
              <a class="btn btn-primer" type="submit" href="{{ route('login')}}">Login</a>
            </form>
            @endguest

            @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-primer" type="submit">{{Auth::user()->first_name}}</button>
            </form>
            @endauth
          </div>
        </div>
    </nav>

  

  @yield('content')
        


     
    
</body>
<script src="/frontend/libraries/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</html>