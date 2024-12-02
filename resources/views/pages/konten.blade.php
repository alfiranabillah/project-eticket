@extends('layouts.kontenhead')

@section('content')
  <div class="bungkus mt">
    <div class="box">
      <div class="judul">
      <p class="fw-bold fs-4"style="color: navy;">{{ $event->name }}</p>
      </div>
      <p  style="margin-top: -5px; color: grey; font-size: 20px;">{{ $event->location }}</p>
      <img src="{{ asset('frontend/images/' . $event->poster) }}" class="card-img-top" style="width:300px; margin-top: -20px; height: 400px; display:block; margin:auto;" alt="{{ $event->name }}">
      <div class="content">
        <div class="info">
           <p  style="margin-top: 20px; "><b>Deskripsi</b></p>
            <hr width="98%" size="2" color="#F25D9C" noshade>
            <div class="desc" style="margin-top: 10px;">
            <p style="margin-bottom: 10px;">{{ $event->description }}</p> 
           <p>Tanggal       : {{ \Carbon\Carbon::parse($event->start_date)->format('d F Y') }}</p> 
           <p>Waktu         : {{ \Carbon\Carbon::parse( $firstTicketTime )->format('H:i') }} WIB - selesai</p>
          <p>Lokasi        : {{ $event->location}}</p>
          </div>
          <div class="benefit" style="margin-top: 25px;">
          <p><b>Benefit</b></p>
          <hr width="98%" size="2" color="#F25D9C" noshade>
          <div class="square">
            <div class="item">
              <img src="/frontend/images/image104.png" width="30px" height="30px" alt="Snack">
              <p>Snack & drink</p>
            </div>
            <div class="item">
              <img src="/frontend/images/image104.png" width="30px" height="30px" alt="Snack">
              <p>Freebies</p>
            </div>
            <div class="item">
              <img src="/frontend/images/image104.png" width="30px" height="30px" alt="Snack">
              <p>Special Guest</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="box-pay ">
    <div class="box-ticket d-flex">
    <p class="order-summary d-flex"><b>Rincian Pesanan</b></p>
    <div class="ticket-price" style="margin-top: -5px;">
        {!! nl2br(e(wordwrap($event->name, 35, "\n", true))) !!}
    </div>
    <div class="total d-flex" style="color:grey; margin-top: 20px;">
        Rp {{ number_format($event->price, 0, ',', '.') }}
    </div>
</div>
      <div class="ticket-section">
        <div class="product">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
          <div class="ticket-max " style="margin-left: 3px;">max 1 tix/user</div>
        </div>
        <div class="order-bottom">
        <div class="total-bottom">Total (0 tiket)</div>
        <div class="total-bottom-right" style="margin-top: 3px;" id= "price">0</div>
        </div>
        <div class="additional-buttons">
            <button class="lanjut" data-bs-target="#formModal" data-bs-toggle="modal" style ="margin-top: 60px;">Lanjut</button>
          </div>
      </div>      
    </div>  
  </div>
</div>

<!-- Modal 1-->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Informasi Pemesan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content">
                    <form id="payment-form" >
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Nama Lengkap</span>
                                <input type="text" name="first_name" id="first_name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">No Handphone</span>
                                <input type="number" name="phone" id="phone" required>
                            </div>
                        </div>
                        <input type="hidden" name="amount" id="amount">
                        <input type="hidden" name="event_id" id="event_id" value="{{ $event->id_event }}">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal" id="confirm-data">Lanjut</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirmationModalLabel">Konfirmasi Data Pemesan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content">
                    <table class="table">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td id="confirm_first_name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td id="confirm_email"></td>
                        </tr>
                        <tr>
                            <td>No Handphone</td>
                            <td id="confirm_phone"></td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td id="confirm_amount_display">{{$event->price}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#formModal">Kembali</button>
                <button type="button" class="btn btn-primary" id="pay-button">Bayar</button>
            </div>
        </div>
    </div>


@endsection