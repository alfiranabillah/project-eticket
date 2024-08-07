@extends('layouts.app')

@section('content')
  
  <div class="container">
  <div class="bungkus-faq">
        <div class="title-faq"><b>FAQ</b>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Bagaimana cara memesan tiket?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ol> <div class="faq-one"> 
                        <li>Masuk ke akun dengan email dan password. Jika belum memiliki akun, klik “Register” untuk mendaftar</li>
                        <li>Pilih event yang ingin dipesan dan sesuaikan jumlah tiket yang ingin dipesan, jika sudah klik "Lanjut"</li>
                        <li>Isikan data diri yang sesuai pada “Informasi Pemesanan”, jika sudah klik “Lanjut”</li>
                        <li>Pilih metode pembayaran dan lakukan pembayaran sesuai waktu, jika sudah klik "Cek status pembayaran"</li>
                        <li>Jika pembayaran berhasil, tiket dapat dilihat pada halaman Riwayat </li>
                    </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Apa saja metode pembayaran yang bisa digunakan?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ol> <div class="faq-two"> 
                        <li>Virtual Account</li>
                        <li>E-wallet</li>
                        <li>Kartu Debit dan Credit</li>
                        <li>QRIS</li>
                        <li>Alfamart dan Indomart</li>
                    </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Bagaimana cara melihat tiketnya?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                E-ticket dapat dilihat dan diunduh langsung pada halaman Riwayat. 
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    Bagaimana jika sudah melakukan pembayaran, namun belum menerima E-ticket?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <li>Silakan lakukan refresh pada halaman Riwayat</li>
                    <li>E-ticket secara otomatis akan muncul jika Anda telah berhasil melakukan pembayaran (event berbayar). </li>
                    <li>Jika pembayaran sudah berhasil namun belum menerima E-ticket dapat mengirimkan aduan Anda melalui email kevents@gmail.com</li>
                  </div>
                </div>
              </div>
          </div>
        </div>
        </div>

@endsection
