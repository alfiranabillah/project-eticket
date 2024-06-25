@extends('layouts.kontenhead')

@section('content')
  <div class="container-fluid">
  <div class="bungkus mt">
    <div class="box">
      <p class="fw-bold fs-4"style="color: navy;">Noraebang Party "Special PCD Session"</p>
      <p  style="margin-top: -5px; color: grey; font-size: 20px;"> Mall Kota Kasablanka</p>
      <img src="/frontend/images/image103.png" width="550px" height="300px" >
      <div class="content">
        <div class="info">
           <p  style="margin-top: 20px; "><b>Deskripsi</b></p>
            <hr width="98%" size="2" color="#F25D9C" noshade>
            <div class="desc" style="margin-top: 10px;">
            <p style="margin-bottom: 10px;"> Noraebang adalah skaraoke ala Korea Selatan yang biasanya dilakukan secara massal.  Noraebang menjadi ajang untuk berkumpul dan bernyanyi bersama teman satu fandom dan sesama K-Popers lainnya. Yuk Chingu kita seru-seruan Karokean lagu- lagu
           k-pop hits sambil joget bareng </p> 
           <p>Tanggal       : 30 September 2023</p> 
           <p>Waktu         : 9.00 - selesai</p>
          <p>Lokasi        : Mall Kota Kasablanka</p>
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
      <div class="box-ticket">
        <p><b>Rincian Pesanan</b></p>
        <div class="ticket-price" style="margin-top: -5px;">Noraebang Party <br>"Special PCD Session"</div>
        <div class="total" style="color:grey; margin-top: 20px; ">IDR 75.000</div>
        <hr width="235%" size="1" color="grey" noshade style="margin-top: 10px; margin-bottom: 10px;">
        <div class="total-bottom" style="color:navy; margin-top: 10px;">Total (0 tiket)</div>
      </div>
      <div class="ticket-section">
        <div class="product">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
          
          <div class="ticket-max">max 1 tix/user</div>
          <div class="total-bottom-right" style="margin-bottom: 50px;" id= "price">IDR 0</div>
          
        </div>
        <div class="additional-buttons">
            <button class="batal" style ="margin-bottom: 100px;">Batal</button>
            <button class="lanjut" data-bs-target="#formModal" data-bs-toggle="modal" style ="margin-bottom: 100px;">Lanjut</button>
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
                    <form id="payment-form">
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
                                <input type="text" name="phone" id="phone" required>
                            </div>
                        </div>
                        <input type="hidden" name="amount" id="amount">
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
                            <td id="confirm_amount_display">75000</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#formModal">Kembali</button>
                <button type="button" class="btn btn-primary" id="pay-button">Pay</button>
            </div>
        </div>
    </div>
</div>
@endsection