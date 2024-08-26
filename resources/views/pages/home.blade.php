@extends('layouts.app')
@section('content')
<div class="container mt-5 d-flex justify-content-evenly flex-wrap ">
   <div class="heder">
      <div class="title upcoming mb-4">
         <h3>Event Mendatang</h3>
      </div>
      <div class="card cardcustom-upc mb-3 ">
         <div class="d-flex">
            <div class="col-lg-6 col-md-4 my-5 ms-5">
               <img src="/frontend/images/hecan.png" class="img-fluid rounded-start " style="width: 500px; " alt="...">
            </div>
            <div class="col-md-8 mt-5">
               <div class="card-body ms-2"style="margin-top: 50px;">
                  <h5 class="card-title-upc">Fullsun Love Date</h5>
                  <p class="btn btn-second-upc">10 Sept 2024</p>
                  <div class="d-flex">
                     <p><img src="/frontend/images/tickets.png" alt="">
                     <p class="ms-2 fw-bold mt-1 my-auto">150.000</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="heder">
      <div class="title event mb-4 d-flex justify-content-between rounded-pill">
         <h5 style="margin: auto; margin-left: 2px;"> Event</h5>
         @guest
         <a class="btn btn-primer-atas" type="button" onclick="showAlert()" style="margin-left: 20px;">Selengkapnya</a>
         @else
         <a class="btn btn-primer-atas" type="submit" href="{{ route('more') }}" style="margin-left: 20px;">Selengkapnya</a>
         @endguest
      </div>
      <div class="card cardcustom" style="width: 270px;">
         <img src="/frontend/images/carats.png" class="card-img-top" style="width: 270px; margin-top: -5px;" alt="...">
         <div class="card-body">
            <div class="card-text d-flex justify-content-between">
               <p class="btn btn-second">02 Sept 2024</p>
               <p class="mt-2"><img src="/frontend/images/tickets.png" alt="">
               <p class="fw-bold mt-2 my-auto">75.000</p>
            </div>
            <h5 class="card-title">Noraebang Karaoke Party SVT Anniversary</h5>
         </div>
      </div>
   </div>
   <div class="heder">
      <div class="title event mb-4 d-flex justify-content-between rounded-pill">
         <h5 style="margin: auto; margin-left: 2px;"> Competition</h5>
         @guest
         <a class="btn btn-primer-atas" type="button" onclick="showAlert()" style="margin-left: 20px;">Selengkapnya</a>
         @else
         <a class="btn btn-primer-atas" type="submit" href="{{ route('competition') }}" style="margin-left: 20px;">Selengkapnya</a>
         @endguest
      </div>
      <div class="card cardcustom" style="width: 270px;">
         <img src="/frontend/images/compt1.png" class="card-img-top " style="width: 270px; margin-top: -5px;" alt="...">
         <div class="card-body">
            <div class="card-text d-flex justify-content-between" style="margin-top: -10px;">
               <p class="btn btn-second" >01 Sept 2024</p>
               <p><img src="/frontend/images/tickets.png" alt="">
               <p class="fw-bold mt-1 my-auto">50.000</p>
            </div>
            <h5 class="card-title">KPOP Party Dance Competition</h5>
         </div>
      </div>
   </div>
</div>
<div class="container noraebang my-4">
   <div class="title-section d-flex align-items-center mb-2">
      <div class="col-lg-2 col-md-2 col-sm-4 garis"></div>
      <div class="title-competition ms-3">
         <h3>Noraebang</h3>
      </div>
   </div>
   <div class="desc-norebang d-flex mb-4 justify-content-between">
      <div class="deskripsi col-lg-8">
         <p style="margin-left: 20px; font-size: 19px;">Noraebang time! Saatnya karaoke bareng teman-teman dan seru-seruan bareng lagu favoritmu! 🎤✨</p>
      </div>
      <div class="btn-view-more">
         @guest
         <a class="btn btn-primer" type="button" onclick="showAlert()">Selengkapnya</a>
         @else
         <a class="btn btn-primer" type="submit" href="{{ route('noraebang') }}">Selengkapnya</a>
         @endguest
      </div>
   </div>
   <div class="container list-noraebang d-flex justify-content-evenly flex-wrap" style="padding-left: 0;">
      @foreach($noraebangEvents as $nor)
      <div class="norebang-content mb-4">
         <div class="card cardcustom-nor" style="width: 270px;">
            <a href="{{ route('event.show', ['id_event' => $nor->id_event]) }}">
            <img src="{{ asset('frontend/images/' . $nor->poster) }}" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="{{ $nor->name }}"></a>
            <div class="card-body">
               <div class="card-text d-flex justify-content-between" style="margin-top: -5px">
                  <p class="btn btn-second">{{ \Carbon\Carbon::parse($nor->start_date)->format('d M Y') }}</p>
                  <div class="card-tiket d-flex justify-content-between" style="margin-top: 5px;">
                     <p><img src="/frontend/images/tickets.png" alt="">
                     <p class="ms-2 fw-bold mt-1">{{ number_format($nor->price, 0, ',', '.') }}</p>
                  </div>
               </div>
               <h5 class="card-title">{{$nor-> name}}</h5>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
<div class="container noraebang my-4">
   <div class="title-section d-flex align-items-center mb-2">
      <div class="col-lg-2 col-md-2 col-sm-4 garis"></div>
      <div class="title-competition ms-3">
         <h3>Birthday Project</h3>
      </div>
   </div>
   <div class="desc-norebang d-flex mb-4 justify-content-between">
      <div class="deskripsi col-lg-8">
         <p style="margin-left: 20px; font-size: 19px;">Birthday bash alert! 🎁✨ Yuk, ikut event ini dan buat hari spesial idolamu semakin istimewa</p>
      </div>
      <div class="btn-view-more">
         @guest
         <a class="btn btn-primer" type="button" onclick="showAlert()">Selengkapnya</a>
         @else
         <a class="btn btn-primer" type="submit" href="{{ route('birthday') }}">Selengkapnya</a>
         @endguest
      </div>
   </div>
   <div class="container list-noraebang d-flex justify-content-evenly flex-wrap" style="padding-left: 0;">
      @foreach($birthdayEvents as $bday)
      <div class="norebang-content mb-4">
         <div class="card cardcustom-bday" style="width: 270px;">
            <a href="{{ route('event.show', ['id_event' => $bday->id_event]) }}">
            <img src="{{ asset('frontend/images/' . $bday->poster) }}" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="{{ $bday->name }}"></a>
            <div class="card-body">
               <div class="card-text d-flex justify-content-between" style="margin-top: -5px">
                  <p class="btn btn-second">{{ \Carbon\Carbon::parse($bday->start_date)->format('d M Y') }}</p>
                  <div class="card-tiket d-flex justify-content-between" style="margin-top: 5px;">
                     <p><img src="/frontend/images/tickets.png" alt="">
                     <p class="ms-2 fw-bold mt-1">{{ number_format($bday->price, 0, ',', '.') }}</p>
                  </div>
               </div>
               <h5 class="card-title">{{$bday-> name}}</h5>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection