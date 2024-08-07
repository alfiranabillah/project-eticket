<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KONTEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <link rel="stylesheet" href="/frontend/styles/konten.css">
</head>
<body>

<div class="container-fluid">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Tambahkan script SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {
    const plusBtn = document.querySelector('.plus-btn');
    const minusBtn = document.querySelector('.minus-btn');
    const quantityDisplay = document.querySelector('.quantity');
    const totalDisplay = document.querySelector('.total-bottom');
    const priceDisplay = document.querySelector('#price');
    const lanjutButton = document.querySelector('.lanjut');
    const confirmDataButton = document.getElementById('confirm-data'); // Tombol Lanjut di modal

    const ticketPrice = {{ $event->price }};
    let currentQuantity = 0;
    let plusBtnClicked = false;

    // Disable tombol "Lanjut" di awal
    lanjutButton.disabled = true;
    confirmDataButton.disabled = true; // Disable tombol "Lanjut" di modal juga

    plusBtn.addEventListener('click', () => {
        plusBtnClicked = true;
        if (currentQuantity < 1) {
            currentQuantity++;
            updateDisplay();
            lanjutButton.disabled = false;
        } else {
            Swal.fire({
                text: 'Anda sudah melebihi batas pembelian 1 tiket',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        }
    });

    minusBtn.addEventListener('click', () => {
        if (currentQuantity > 0) {
            currentQuantity--;
            updateDisplay();
            if (currentQuantity === 0) {
                lanjutButton.disabled = true;
            }
        }
    });

    function updateDisplay() {
        quantityDisplay.textContent = currentQuantity;
        totalDisplay.textContent = `Total (${currentQuantity} tiket)`;
        const totalPrice = currentQuantity * ticketPrice;
        priceDisplay.textContent = `${totalPrice}`;
        minusBtn.disabled = (currentQuantity === 0);
    }

    // Event listener untuk perubahan input pada formulir di modal
    document.getElementById('payment-form').addEventListener('input', function () {
        // Ambil nilai dari form
        const firstName = document.getElementById('first_name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();

        // Aktifkan/nonaktifkan tombol Lanjut berdasarkan validasi form
        confirmDataButton.disabled = !firstName || !email || !phone;
    });

    // Event listener untuk tombol "Lanjut" di modal
    confirmDataButton.addEventListener('click', function (event) {
        // Validasi formulir
        const firstName = document.getElementById('first_name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();

        if (!firstName || !email || !phone) {
            // Formulir belum lengkap, jangan lanjutkan dan jangan tampilkan modal konfirmasi
            return; // Menghentikan eksekusi fungsi
        }

        // Isi nilai ke modal selanjutnya (confirmationModal)
        document.getElementById('confirm_first_name').innerText = firstName;
        document.getElementById('confirm_email').innerText = email;
        document.getElementById('confirm_phone').innerText = phone;

        // Tampilkan modal konfirmasi setelah validasi berhasil
        $('#confirmationModal').modal('show');
    });

    // Inisialisasi tampilan awal
    updateDisplay();
});

document.getElementById('pay-button').addEventListener('click', function (event) {
    event.preventDefault();

    // Ambil form dan buat FormData
    var form = document.getElementById('payment-form');
    var formData = new FormData(form);

    // Ambil nilai event_id
    var event_id = document.getElementById('event_id').value;
    formData.append('event_id', event_id);

    // Ambil nilai amount dari elemen confirm_amount_display dan hilangkan titik
    var amount = document.getElementById('confirm_amount_display').innerText.replace(/\./g, '').trim();
    formData.append('amount', amount);

    // Kirim formData menggunakan fetch
    fetch('/snap/checkout', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Response Data:', data);
        if (data.snap_token) {
            snap.pay(data.snap_token, {
                onSuccess: function(result) {
                    console.log('Payment Success:', result);
                    window.location.href = '/history';
                },
                onPending: function(result) {
                    console.log('Payment Pending:', result);
                },
                onError: function(result) {
                    console.log('Payment Error:', result);
                },
                onClose: function() {
                    console.log('Customer closed the popup without finishing the payment');
                }
            });
        } else {
            Swal.fire({
                text: data.error || 'Terjadi kesalahan, silakan coba lagi.',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '/';
            });
        }
    })
    .catch(error => {
        console.error('Fetch Error:', error);
        Swal.fire({
            title: 'Error',
            text: 'Terjadi kesalahan pada server. Silakan coba lagi.',
            icon: 'error',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = '/';
        });
    });
});

</script>

</html>