<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KONTEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/frontend/styles/konten.css">
</head>
<body>


@yield('content')

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script type="text/javascript">
 document.addEventListener('DOMContentLoaded', () => {
  const plusBtn = document.querySelector('.plus-btn');
  const minusBtn = document.querySelector('.minus-btn');
  const quantityDisplay = document.querySelector('.quantity');
  const totalDisplay = document.querySelector('.total-bottom');
  const priceDisplay = document.querySelector('#price');
  const lanjutButton = document.querySelector('.lanjut');

  const ticketPrice = 75000;
  let currentQuantity = 0;
  let plusBtnClicked = false;

  // Disable tombol "Lanjut" di awal
  lanjutButton.disabled = true;

  plusBtn.addEventListener('click', () => {
    plusBtnClicked = true;
    if (currentQuantity < 1) {
      currentQuantity++;
      updateDisplay();
      // Aktifkan tombol "Lanjut" jika jumlah tiket lebih dari 0
      lanjutButton.disabled = false;
    } else {
      alert("Anda sudah melebihi batas pembelian 1 tiket");
    }
  });

  minusBtn.addEventListener('click', () => {
    if (currentQuantity > 0) {
      currentQuantity--;
      updateDisplay();
      // Nonaktifkan tombol "Lanjut" jika jumlah tiket kembali ke 0
      if (currentQuantity === 0) {
        lanjutButton.disabled = true;
      }
    }
  });

  // Event listener untuk modal
  $('#formModal').on('show.bs.modal', function (event) {
    if (!plusBtnClicked || currentQuantity !== 1) {
      event.preventDefault(); // Mencegah modal terbuka
      alert("Anda belum memilih tiket. Silakan klik tombol + untuk menambah tiket.");
    }
  });

  function updateDisplay() {
    quantityDisplay.textContent = currentQuantity;
    totalDisplay.textContent = `Total (${currentQuantity} tiket)`;
    const totalPrice = currentQuantity * ticketPrice;
    priceDisplay.textContent = `${totalPrice}`;
    minusBtn.disabled = (currentQuantity === 0);
  }

  // Inisialisasi tampilan awal
  updateDisplay();
});


    
    document.getElementById('confirm-data').addEventListener('click', function (event) {
        // Ambil nilai dari form
        var firstName = document.getElementById('first_name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;

        // Isi nilai ke modal 2
        document.getElementById('confirm_first_name').innerText = firstName;
        document.getElementById('confirm_email').innerText = email;
        document.getElementById('confirm_phone').innerText = phone;
    });

    
    document.getElementById('pay-button').addEventListener('click', function (event) {
            event.preventDefault();
            var form = document.getElementById('payment-form');
            var formData = new FormData(form);

            // Ambil nilai total harga dari elemen confirm_amount_display
            var amount = document.getElementById('confirm_amount_display').innerText.replace(/\./g, '').trim(); // Mengambil nilai total harga dan menghilangkan titik
            
            formData.append('amount', amount); // Menambahkan amount ke formData
            
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
                    console.error('Snap Token Error:', data.error);
                }
            })
            .catch(error => console.error('Fetch Error:', error));
        });
</script>
</html>