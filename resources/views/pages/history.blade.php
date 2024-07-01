@extends('layouts.pdf')

@section('content')

<body>
    <div class="container">
    <h3 class="mt-3">Riwayat Pesanan Tiket</h3>
        <div class=" konten-history row">
            <div class="col-md-4">
                <div class="card">
                  <div class="card-img-relative">
                    <img src="/frontend/images/image103.png" class="card-img-top" alt="Poster Festival Kuliner">
                    <span class="badge bg-success position-absolute top-0 start-0">Berlangsung</span>
                  </div>
                    <div class="card-body">
                        <h5 class="card-title fs-6">Noraebang Party "Special PCD Session"</h5>
                        <p class="card-text">30 September 2024</p>
                        <p class="card-text">1 Tiket</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat Detail</a>
                    </div>
                </div>
            </div>

              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Tiket</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <div class="content-top d-flex justify-content-between">
                                  <p>ID Transaksi</p>
                                  <P>Waktu Transaksi</P>
                                </div>
                                <div class="content-top-kanan d-flex justify-content-between">
                                  <p>ID12394XC</p>
                                  <P>21-Sep-2024 14:00 WIB</P>
                                </div>
                                <div class="content-isi">
                                  <p style="font-weight: 700;">Metode pembayaran</p>
                                  <p>QRIS</p>
                                  <p style="margin-top: 50px; font-weight: 600; color: navy;">Daftar Tiket</p>
                                  <p style="font-weight: 600; color:navy;">Noraebang Party "Special PCD Session"</p>
                                </div>
                                <div class="content-sisi-harga d-flex justify-content-between">
                                  <p>Total (1 tiket)</p>
                                  <p>75.000</p>
                                </div>
                              <div class="accordion" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                               Detail Acara
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body d-flex ms-10">
                                              <img src="/frontend/images/image103.png" alt="nora1" width="150px" height="100px">
                                              <div class="event-desc" style="margin-left: 20px; font-weight: 500;">
                                               <p style=" font-weight: 500;">Noraebang Party "Special PCD Session"</p>
                                               <p>Mall Kota Kasablanka</p>
                                               <p>30 September 2024 </p>
                                               <p>09:00 - selesai</p>
                                               <a href="" data-bs-toggle="modal" data-bs-target="#modal2">Download Tiket</a>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                            </div>
                        </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        </div>
                      </div>
                    </div>
                  </div>  
              
    <div class="modal fade" id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal2Label">Detail Pesanan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="detail-order">
                    <div class="ticketContainer" id="ticketContent">
                        <div class="ticket">
                            <div class="ticketTitle d-flex justify-content-center">
                                <img src="/frontend/images/logo.png" alt="" width="30px;" height="30px;">
                                <p class="fs-6">K-EVENTS</p>
                            </div>
                            <hr>
                            <div class="ticketSubDetail">
                                <div class="date fw-bold">ID12394XC</div>
                            </div>
                            <div class="ticketDetail">
                                <div class="judul" style="margin-top: -10px;">Event</div>
                                <div class="isi">Noraebang Party "Special PCD Session"</div>
                            </div>
                            <div class="ticketDetail">
                                <div class="judul">Waktu dan Tanggal</div>
                                <div class="isi">30 September 2024 | 09:00 - selesai</div>
                            </div>
                            <div class="ticketDetail">
                                <div class="judul">Lokasi</div>
                                <div class="isi">Mall Kota Kasablanka</div>
                            </div>
                            <div class="barcode">
                                <img src="/frontend/images/tiket.png" alt="" width="300px;" height="100px;">
                            </div>
                            <div class="ticketRip">
                                <div class="circleLeft"></div>
                                <div class="ripLine"></div>
                                <div class="circleRight"></div>
                            </div>
                            <div class="ticketSubDetail-footer">
                                <p>Syarat dan ketentuan berlaku</p>
                            </div>
                        </div>
                        <div class="ticketShadow"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="downloadTicket()">Download tiket</button>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
                  <div class="card">
                    <div class="card-img-relative">
                      <img src="/frontend/images/svt.png"  class="card-img-top" alt="Poster Festival Kuliner">
                      <span class="badge bg-secondary position-absolute top-0 start-0">Berakhir</span>
                    </div>
                      <div class="card-body">
                          <h5 class="card-title fs-6">Noraebang Party Carat</h5>
                          <p class="card-text">22 September 2024</p>
                          <p class="card-text">1 Tiket</p>
                          <a href="#" class="btn btn-primary">Lihat Detail</a>
                      </div>
                  </div>
          </div>
          </div>    
      </div>      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
