@extends('layouts.pdf')

@section('content')

<body>
    <div class="container">
        <h3 class="mt-3">Riwayat Pesanan</h3>
        <div class="konten-history row" style="min-height: 100vh;">
            @foreach ($orders as $index => $order)
                @if ($eventDetails[$index] !== null)
                    <div class="col-md-4" style="margin-top: 10px;">
                        <div class="card" style="margin-top: 10px; width: 300px; border-radius: 30px;">
                            <div class="card-img-relative" style="position: relative;">
                                <img src="{{ asset('frontend/images/' . $eventDetails[$index]->poster) }}" class="card-img-top" style="width: 100%; height: 400px;" alt="{{ $eventDetails[$index]->name }}">
                                <span class="badge bg-success position-absolute top-0 start-0">{{ $eventDetails[$index]->status }}</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fs-6">{{ $eventDetails[$index]->name }}</h5>
                                <p class="card-text">{{ \Carbon\Carbon::parse($eventDetails[$index]->start_date)->format('d M Y') }}</p>
                                <p class="card-text">1 Tiket</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $index }}">Lihat Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk setiap order -->
                    <div class="modal fade" id="staticBackdrop-{{ $index }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-{{ $index }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel-{{ $index }}">Detail Pesanan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="content">
                                        <div class="content-top d-flex justify-content-between">
                                            <p style="font-weight: 700;">ID Transaksi</p>
                                            <P style="font-weight: 700;">Waktu Transaksi</P>
                                        </div>
                                        <div class="content-top-kanan d-flex justify-content-between">
                                            <p class="text-uppercase">{{ $order->order_id }}</p>
                                            <P>{{ $updated_ats[$index] }}</P>
                                        </div>
                                        <div class="content-isi">
                                            <p style="margin-top: 30px; font-weight: 600; color: navy;">Daftar Tiket</p>
                                            <p style="font-weight: 600; color:navy;"><b>{{ $eventDetails[$index]->name }}</b></p>
                                        </div>
                                        <div class="content-sisi-harga d-flex justify-content-between" style="color:navy;">
                                            <p><b>Total (1 tiket)</b></p>
                                            <p><b>{{ number_format($eventDetails[$index]->price, 0, ',', '.') }}</b></p>
                                        </div>
                                        <div class="accordion" id="accordionFlushExample-{{ $index }}">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{ $index }}" aria-expanded="false" aria-controls="flush-collapseOne-{{ $index }}">
                                                        Detail Acara
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne-{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-{{ $index }}">
                                                    <div class="accordion-body d-flex ms-10">
                                                        <img src="{{ asset('frontend/images/' . $eventDetails[$index]->poster) }}" class="card-img-top" style="width: 80px; height: 100px;" alt="{{ $eventDetails[$index]->name }}">
                                                        <div class="event-desc" style="margin-left: 20px; font-weight: 500;">
                                                            <p style=" font-weight: 500;">{{ $eventDetails[$index]->name }}</p>
                                                            <p>{{ $eventDetails[$index]->location }}</p>
                                                            <p>{{ \Carbon\Carbon::parse($eventDetails[$index]->start_date)->format('d M Y') }}</p>
                                                            <p>{{ \Carbon\Carbon::parse($ticket_times[$index])->format('H:i') }} WIB - selesai</p>
                                                            <a href="" data-bs-toggle="modal" data-bs-target="#modal2-{{ $index }}">Download Tiket</a>
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
                @endif
            @endforeach
        </div>

        @foreach ($orders as $index => $order)
            @if ($eventDetails[$index] !== null)
                <!-- Modal Tiket untuk setiap order -->
                <div class="modal fade" id="modal2-{{ $index }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label-{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modal2Label-{{ $index }}">Detail Tiket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body"> <div class="detail-order"> 
                            <div class="ticket-new" id="ticketContent">
                <div class="ticket created-by-anniedotexe">
                  <div class="left">
                    <div class="image">
                      <div class="ticket-number">
                      <img src="{{ asset('frontend/images/' . $eventDetails[$index]->poster) }}"  width="200px" height="250px" style="margin-left: -5px;">
                      </div>
                    </div>
                    <div class="ticket-info">
                      <p class="date">
                        @php
                            $date = \Carbon\Carbon::parse($eventDetails[$index]->start_date);
                        @endphp
                        <span>{{ $date->format('l') }}</span>
                        <span class="june-29">{{ $date->format('d F') }}</span>
                        <span>{{ $date->format('Y') }}</span>
                      </p>
                      <div class="show-name">
                        <h5>{{$ticket_names[$index]}}</h5>
                        <h4>{!! nl2br(e(wordwrap($eventDetails[$index]->name, 20, "\n", true))) !!}</h4>
                      </div>
                      <p class="location"><span>{{$eventDetails[$index]->location}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="right">
                    <div class="right-info-container">
                      <div class="show-name">
                        <h1>See You!</h1>
                      </div>
                      <div class="time">
                        <p>{{ \Carbon\Carbon::parse($ticket_times[$index])->format('H:i') }} WIB - selesai </p>
                      </div>
                      <div class="barcode">
                      <img src="{{ asset('frontend/images/barcode.png') }}">
                      </div>
                      <p class="ticket-number">
                      {{$id_tickets[$index]}}
                      </p>
                    </div>
                  </div>
                </div>
                </div>
            </div>
                        
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="downloadTicket()">Download tiket</button>
            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
