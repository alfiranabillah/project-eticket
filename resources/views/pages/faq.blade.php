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
                        <li>Login akun dengan email dan password. Jika belum memiliki akun, klik “Create Account” untuk mendaftar</li>
                        <li>Pilih event yang ingin dipesan dan sesuaikan jumlah tiket yang ingin dipesan, jika sudah klik "Lanjut"</li>
                        <li>Isikan data diri yang sesuai pada “Informasi Pemesanan”, jika sudah klik “Lanjut”</li>
                        <li>Pilih metode pembayaran dan lakukan pembayaran sesuai waktu, jika sudah klik "Cek status pembayaran"</li>
                        <li>Jika pembayaran berhasil, tiket akan dikirimkan melalui email </li>
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
                        <li>Virtual Account (Bank BRI, Bank BNI, Bank Mandiri, dan Bank BCA)</li>
                        <li>QRIS</li>
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
                E-ticket akan dikirimkan melalui email yang Anda isi. Silakan download e-ticket dan simak informasi terkait pelaksanaan event. 
                E-ticket juga dapat dilihat pada bagian "Riwayat pesanan"
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    Bagaimana jika sudah melakukan pembayaran, namun belum menerima email E-ticket?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <li>Silakan lakukan pengecekan pada Spam/ Junk/ Social/ Promotion di email Anda</li>
                    <li>E-ticket secara otomatis akan terkirim ke alamat email yang terdaftar jika Anda telah berhasil melakukan pembayaran (event berbayar). Jika tidak menerima, ada kemungkinan terdapat kesalahan dalam menuliskan alamat email, pastikan email yang terdaftar aktif dan benar dalam penulisan (tidak typo). </li>
                    <li>Jika penulisan email Anda sudah benar dan pada Spam/ Junk/ Social/ Promotion email e-ticket tetap tidak Anda temukan, ada kemungkinan email e-ticket ter-block. Silakan kirimkan aduan Anda melalui email kevents@gmail.com</li>
                  </div>
                </div>
              </div>
          </div>
        </div>
        </div>

@endsection
