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
            <div class="card cardcustom" style="width: 270px;">
                <img src="/frontend/images/nor3.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between" style="margin-top: -5px">
                        <p class="btn btn-second">20 Juli 2024</p>
                        <div class="card-tiket d-flex justify-content-between" style="margin-top: -5px;">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1"> 80.000</p>
                        </div>
                    </div>
                    <h5 class="card-title">Oneweve's Cosmic Serenade Our Anniversary Voyage</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
                    <div class="card  cardcustom" style="width: 270px;">
                        <img src="/frontend/images/carats.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between" style="margin-top: 10px;">
                                <p class="btn btn-second">22 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: 8px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1">75.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Noraebang Karaoke Party Seventeen Anniversary</h5>
                        </div>
                    </div>
                </div>
                <div class="norebang-content mb-4">
            <div class="card cardcustom" style="width: 270px;">
                <img src="/frontend/images/teum.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between" style="margin-top: -5px;">
                        <p class="btn btn-second">25 Juli 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1"> 75.000</p>
                        </div>
                    </div>
                    <h5 class="card-title">Noraebang Party Road To Reboot Tour In Jakarta</h5>
                </div>
            </div>
        </div>
        <div class="norebang-content mb-4">
            <div class="card cardcustom" style="width: 270px;">
                <img src="/frontend/images/jyp.png" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="...">
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between">
                        <p class="btn btn-second">27 Juli 2024</p>
                        <div class="card-tiket d-flex justify-content-between ">
                            <p><img src="/frontend/images/tickets.png" alt="">
                            <p class="ms-2 fw-bold mt-1"> 80.000</p>
                        </div>
                    </div>
                    <h5 class="card-title">JYP Nation Party O'Clock Singing in The Blue Area</h5>
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
                                <p class="btn btn-second" >29 Juli 2024</p>
                                <div class="card-tiket d-flex justify-content-between" style="margin-top: 5px;">
                                    <p><img src="/frontend/images/tickets.png" alt="">
                                    <p class="ms-2 fw-bold mt-1"> 100.000</p>
                                </div>
                           
                            </div>
                            <h5 class="card-title">Friday Noraebang With Zirius</h5>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
</div>

@endsection