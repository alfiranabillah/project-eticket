@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-evenly flex-wrap ">
<div class="heder">
            <div class="title upcoming mb-4">
                <h3>Upcoming Event</h3>

            </div>
            <div class="card cardcustom mb-3" style="width: 540px; ">

                <div class="d-flex">
                <div class="col-lg-6 col-md-4 my-5 ms-5">
                    <img src="/frontend/images/hecan.png" class="img-fluid rounded-start " style="width: 500px; " alt="...">
                </div>
                <div class="col-md-8 mt-5">
                    <div class="card-body ms-3">
                    <p class="card-text ">October 2024</p>
                    <h5 class="card-title">Fullsun Love Date</h5>
                    <p class="btn btn-second">10 Oct 2024</p>
                    <div class="d-flex">
                    <p><img src="/frontend/images/tickets.png" alt="">
                    <p class="ms-2 fw-bold mt-1 my-auto">150.000</p>
                    </div>
                    @guest
                    <a class="btn btn-primer my-5" type="button" onclick="showAlert()">View more</a>
                    @else
                    <a class="btn btn-primer" type="submit" href="{{ route('more') }}">View more</a>
                    @endguest
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class="heder">
        <div class="title event mb-4 d-flex justify-content-between rounded-pill">
            <h5 style="margin: auto; margin-left: 15px;"> Event</h5>
            @guest
                <a class="btn btn-primer" type="button" onclick="showAlert()">View more</a>
            @else
                <a class="btn btn-primer" type="submit" href="{{ route('more') }}">View more</a>
            @endguest
        </div>
        <div class="card cardcustom" style="width: 270px;">
            <img src="/frontend/images/carats.png" class="card-img-top" style="width: 270px; margin-top: -5px;" alt="...">
            <div class="card-body">
                <div class="card-text d-flex justify-content-between">
                    <p class="btn btn-second">22 Sept 2024</p>
                    <p><img src="/frontend/images/tickets.png" alt="">
                    <p class="ms-2 fw-bold mt-1 my-auto">75.000</p>
                </div>
                <h5 class="card-title">Noraebang Karaoke Party SVT Anniversary</h5>
            </div>
        </div>
    </div>
    <div class="heder">
        <div class="title event mb-4 d-flex justify-content-between rounded-pill">
            <h5 style="margin: auto; margin-left: 15px;"> Competition</h5>
            @guest
                <a class="btn btn-primer" type="button" onclick="showAlert()">View more</a>
            @else
                <a class="btn btn-primer" type="submit" href="{{ route('more') }}">View more</a>
            @endguest
        </div>
            <div class="card cardcustom" style="width: 270px;">
                <img src="/frontend/images/compt1.png" class="card-img-top " style="width: 270px; margin-top: -5px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between" style="margin-top: -10px;">
                        <p class="btn btn-second" >28 Sept 2024</p>
                        <p><img src="/frontend/images/tickets.png" alt="">
                        <p class="ms-2 fw-bold mt-1 my-auto">50.000</p>
                    </div>
                    <h5 class="card-title">KPOP Party Dance Competition</h5>
                    </div>
            </div>
        </div>
      </div>

        <div class="container noraebang my-4">
            <div class="title-section d-flex align-items-center mb-2">
                <div class="col-lg-2 col-md-2 col-sm-4 garis"> </div>

                <div class="title-competition ms-3">
                    <h4>Noraebang</h4>
                </div>
            </div>
            <div class="desc-norebang d-flex mb-4 justify-content-between">
                <div class="deskripsi col-lg-8">
                    <p>Rayakan ulang tahun idolamu bersama fanbase</p>
                </div>
                <div class="btn-view-more">
                @guest
                <a class="btn btn-primer" type="button" onclick="showAlert()">View more</a>
                @else
                <a class="btn btn-primer" type="submit" href="{{ route('more') }}">View more</a>
                @endguest
                </div>
            </div>
            @foreach ($items as $item)
            <div class="card cardcustom mb-3" style="width: 540px; ">
                <div class="d-flex">
                    <div class="col-lg-6 col-md-4 my-5 ms-5">
                        <img src="{{ $item->poster }}" class="img-fluid rounded-start " style="width: 500px; " alt="...">
                    </div>
                    <div class="col-md-8 mt-5">
                        <div class="card-body ms-3">
                            <p class="card-text ">{{ $item->start_date }}</p>
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="btn btn-second">{{ $item->end_date }}</p>
                            <div class="d-flex">
                                <p><img src="/frontend/images/tickets.png" alt="">
                                <p class="ms-2 fw-bold mt-1 my-auto">{{ $item->desc }}</p>
                            </div>
                            <a href="#" class="btn btn-primer my-5">View More </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container noraebang my-4">
            <div class="title-section d-flex align-items-center mb-2">
                <div class="col-lg-2 col-md-2 col-sm-4 garis"> </div>

                <div class="title-competition ms-3">
                    <h4>Birthday Event</h4>
                </div>
            </div>

            <div class="desc-norebang d-flex mb-4 justify-content-between">
                <div class="deskripsi col-lg-8">
                    <p>Rayakan ulang tahun idolamu bersama fanbase</p>
                </div>
                <div class="btn-view-more">
                @guest
                <a class="btn btn-primer" type="button" onclick="showAlert()">View more</a>
                @else
                <a class="btn btn-primer" type="submit" href="{{ route('more') }}">View more</a>
                @endguest
                </div>
            </div>

            <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/image 91.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between" style="margin-top: -5px">
                                <p class="btn btn-second">6 April 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: -5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1"> 150.000</p>
                                </div>

                            </div>
                            <h5 class="card-title">Pocha Gyu's World - Kim Mingyu</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/image 92.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between" style="margin-top: -5px;">
                                <p class="btn btn-second">28 April 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1"> 100.000</p>
                                </div>

                            </div>
                            <h5 class="card-title">Wonderful Days - Kim Wonpil</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/suho.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">22 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1"> 145.000</p>
                                </div>

                            </div>
                            <h5 class="card-title">Su:Home Screening - Suho Birthday Party</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/jeno.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between" style="margin-top: -5px;">
                                <p class="btn btn-second">23 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                <p><img src="/frontend/images/tickets.png" alt="">
                                <p class="ms-2 fw-bold mt-1"> 145.000</p>
                                </div>

                            </div>
                            <h5 class="card-title">Eyesmile Prince - Jeno Birthday Party </h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</div>

@endsection
