@extends('layouts.app')

@section('content')
<div class="kontener" style="margin-top: -50px;">
<div class="container mt-5 d-flex flex-wrap justify-content-between">
        <div class="d-flex"> 
            <div class="btn-event mb-4 d-flex rounded-pill">
            <a class="btn btn-masuk" type="submit" href="{{ route('more')}}">All</a>
            </div>
            <div class="btn-event mb-4 d-flex rounded-pill">
                <button class="btn btn-masuk ">Noraebang</button>
            </div>
            <div class="btn-event mb-4 d-flex rounded-pill">
            <a class="btn btn-masuk" type="submit" href="{{ route('birthday')}}">Birthday Cafe</a>
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
                        <img src="/frontend/images/nor2.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second" style="margin-top: 10px;">25 Mei 2024</p>
                                <div class="card-tiket d-flex justify-content-between " style="margin-top: 10px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1" >75.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Noraebang RPD Tepi Pantai</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/nor3.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">29 Mei 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">80.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Oneweve's Cosmic Serenade</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/teum.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second">10 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bolder mt-1">80.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Road to Reboot Tour in Jakarta</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/jyp.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between" style="margin-top: -5px;">
                                <p class="btn btn-second">23 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between ">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">100.000</p>
                                </div>             
                            </div>
                            <h5 class="card-title">JYP Nation Party O'Clock | Singing in the Blue Area</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>   
        <div class="container noraebang my-4">
            <div class="container list-noraebang d-flex justify-content-evenly flex-wrap  ">
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/friday (1).png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second" >26 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: 5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1"> 100.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Friday Noraebang With Zirius</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                    <a href="{{ route('event')}}"><img src="/frontend/images/vertical.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between">
                                <p class="btn btn-second" style="margin-top: -10px;">30 Sept 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: -5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1 text-black"> 75.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title text-black">Noraebang Party Special PCD Session</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</div>

@endsection