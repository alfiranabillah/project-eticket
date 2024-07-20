@extends('layouts.app')

@section('content')
<div class="kontener" style="margin-top: 80px;">
    <div class="container noraebang my-4">
        <div class="container list-noraebang d-flex justify-content-evenly flex-wrap">
            @foreach ($items as $item)
            <div class="norebang-content mb-4" style="margin-top: 40px;">
                <div class="card cardcustom" style="width: 270px;">
                    <img src="{{ asset('frontend/images/' . $item->poster) }}" class="card-img-top" style="width: 100%; margin-top: -10px;" alt="{{ $item->name }}">
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between" style="margin-top: 10px;">
                            <p class="btn btn-second">{{ \Carbon\Carbon::parse($item->start_date)->format('d M Y') }}</p>
                            <div class="card-tiket d-flex justify-content-between" style="margin-top: 8px;">
                                <p><img src="/frontend/images/tickets.png" alt=""></p>
                                <p class="ms-2 fw-bold mt-1">{{ number_format($item->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <h5 class="card-title">{{ $item->name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
