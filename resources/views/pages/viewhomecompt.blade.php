@extends('layouts.app')

@section('content')

<div class="kontener" style="margin-top: -50px;">
<div class="container mt-5 d-flex flex-wrap justify-content-between">
    
        <div class="btn-search mb-4 d-flex rounded-pill"> 
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </div>
        <div class="container noraebang my-4">
            <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/k-fest.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">17 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">75.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Annyeong K-Fest Competition</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/xdinary.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">19 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bolder mt-1">70.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">JCM Cover Dance Competition</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/compt1.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">21 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: -5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">80.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">KPOP Party Dance Competition</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/jog.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between" style="margin-top: -5px;">
                                <p class="btn btn-second">24 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">70.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Plantomic Y2K Pop Festival</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--birthday-->
        <div class="container noraebang my-4">
            <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/niji.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">26 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">80.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Niji Pop Culture Festival</h5>
                        </div>
                    </div>
                </div>
</div>
@endsection