@extends('layouts.app')

@section('content')

<div class="kontener" style="margin-top: -50px;">
<div class="container mt-5 d-flex flex-wrap justify-content-between">
        <div class="d-flex"> 
            <div class="btn-event mb-4 d-flex rounded-pill">
            <a class="btn btn-masuk" type="submit" href="{{ route('more')}}">All</a>
            </div>
            <div class="btn-event mb-4 d-flex rounded-pill">
            <a class="btn btn-masuk" type="submit" href="{{ route('noraebang')}}">Noraebang</a>
            </div>
            <div class="btn-event mb-4 d-flex rounded-pill">
                <button class="btn btn-masuk ">Birthday Cafe</button>
            </div>
        </div>
    
        <div class="btn-search mb-4 d-flex rounded-pill"> 
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </div>
    <div class="container noraebang my-4">
        <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
            <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/jeno.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second" style="margin-top: -5px;">23 April 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1 my-auto">70.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Eyesmile Prince Day - Jeno Birthday Party </h5>
                        </div>
                    </div>
                </div>
            <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/image 91.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">19 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: -5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">100.000</p>
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
                                <p class="btn btn-second">28 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">100.000</p>
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
                                <p class="btn btn-second">20 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">145.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Su:Home Screening - Suho Birthday Party</h5>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>

        <div class="container noraebang my-4">
            <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/wonu.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second" style="margin-top: -5px;">28 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: -5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1"> 100.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Cl-eisure Time | Wonwoo Birthday Party</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>

@endsection