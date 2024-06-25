@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="bungkus ">
      <div class="box">
        <h4 style="color: #73B0F8;">Noraebang Party "Special PCD Session"</h4>
        <p  style="margin-bottom:10px; color: grey;"> Mall Kota Kasablanka</p>
        <img src="img/image103.png" width="550px" height="300px" >
        <div class="content">
          <div class="info">
            <p  style="margin-top: 20px; "><b>Deskripsi</b></p>
              <hr width="98%" size="2" color="#F25D9C" noshade>
              <div class="desc" style="margin-top: 10px;">
              <p style="margin-bottom: 10px;"> Noraebang adalah skaraoke ala Korea Selatan yang biasanya dilakukan secara massal.  Noraebang menjadi ajang untuk berkumpul dan bernyanyi bersama teman satu fandom dan sesama K-Popers lainnya. Yuk Chingu kita seru-seruan Karokean lagu- lagu
            k-pop hits sambil joget bareng </p> 
            <p>Tanggal       : 11 September 2023</p> 
            <p>Waktu         : 9.00 - selesai</p>
            <p>Lokasi        : Mall Kota Kasablanka</p>
            </div>
            <div class="benefit" style="margin-top: 25px;">
            <p><b>Benefit</b></p>
            <hr width="98%" size="2" color="#F25D9C" noshade>
            <div class="square">
              <div class="item">
                <img src="img/image104.png" width="30px" height="30px" alt="Snack">
                <p>Snack & drink</p>
              </div>
              <div class="item">
                <img src="img/image104.png" width="30px" height="30px" alt="Snack">
                <p>Freebies</p>
              </div>
              <div class="item">
                <img src="img/image104.png" width="30px" height="30px" alt="Snack">
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
          <div class="total-bottom" style="color:navy; margin-top: 10px;">Total (1 tiket)</div>
        </div>
        <div class="ticket-section">
          <div class="product">
            <button class="plus-btn">-</button>
            <span class="quantity">1</span>
            <button class="minus-btn">+</button>
            
            <div class="ticket-max">max 1 tix/user</div>
            <div class="total-bottom-right" style="margin-bottom: 50px;">75.000</div>
            
          </div>
          <div class="additional-buttons">
              <button class="batal" style ="margin-bottom: 100px;">Batal</button>
              <button class="lanjut" data-bs-toggle="modal" data-bs-target="#transactionData" style ="margin-bottom: 100px;">Lanjut</button>
            </div>
        </div>      
      </div>  
    </div>
  </div>

  
<!-- Modal -->
<div class="modal fade" id="transactionData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Informasi Pemesan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="content">
          <form action="POST">
            <div class="user-details">
                <div class="input-box">
                  <span class="details">Nama Lengkap</span>
                  <input type="text" required>
                </div>
                <div class="input-box">
                  <span class="details">Email</span>
                  <input type="email" required>
                </div>
                <div class="input-box">
                  <span class="details">No Handphone</span>
                  <input type="email" required>
                </div>
            </div>
          </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#payment-tickets">Lanjut</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="payment-tickets" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal2Label">Metode Pembayaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="content">
          <form action="POST">
            <div class="form-check mb-2 gap-3 d-flex align-items-center">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios1">
                <img src="img/bri.png" alt="" width="60px" height="40px">   
                <p style="margin-top:10px;">BRI Virtual Account</p>
              </label>
            </div>
            <div class="form-check mb-2 gap-3 d-flex align-items-center">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios2">
                <img src="img/bni.png" alt="" width="60px" height="40px">    
                <p style="margin-top:10px;">BNI Virtual Account</p>        
              </label>
            </div>
            <div class="form-check mb-2 gap-3 d-flex align-items-center">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
              <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
                <img src="img/mandiri.png" alt="" width="60px" height="40px">
                <p style="margin-top:10px;">Mandiri Virtual Account</p>      
              </label>
            </div>
            <div class="form-check mb-2 gap-3 d-flex align-items-center">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
              <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
                <img src="img/permata.png" alt="" width="60px" height="40px">
                <p style="margin-top:10px;">Permata Virtual Account</p>  
              </label>
            </div>
            <div class="form-check mb-2 gap-3 d-flex align-items-center">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
              <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
                <img src="img/qris.png" alt="" width="60px" height="40px">    
                <p style="margin-top:10px;">QRIS</p>
              </label>
            </div>
          </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#endTransaction">Lanjut</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="endTransaction" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal2Label">Konfirmasi Pembayaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="detail-order">
          <div class="detail-order-top"> 
            <p style="margin-left: 10px;">ID pesanan : ID45764 </p>
            <p style="margin-left: 10px;">Email pesanan : alfiranabilll@gmail.com </p>
          </div>
          <div class="detail-order-title"> 
            <p style="margin-left: 10px; color: navy;">Order Detail </p>
            <p style="margin-left: 10px; color: navy;">Noraebang Party Special PCD Session</p>
            <p style="color: white; background-color: red; text-align: center;">Menunggu Pembayaran 14:58</p>
          </div>
          <div class="detail-order-middle"> 
            <label class="form-check-label d-flex gap-3 align-items-center" for="exampleRadios3">
              <img src="img/qris.png" alt="" width="60px" height="40px"  style="margin-left: 10px;">    
              <p style="margin-top: 15px;">QRIS</p>
            </label>
          </div>
          <div class="detail-order-end"> 
            <p style="margin-left: 10px; color: navy;">Total pembayaran</p>
            <input type="text" placeholder="75.000" style="margin-left: 10px;">
          </div>
          <div class="detail-order-end"> 
            <img src="img/barcode.png" alt="" width="200px" height="200px" style="margin-left: 10px; margin-top: 10px;">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">Lanjut</button>
        </div>
      </div>
    </div>
  </div>

    
@endsection