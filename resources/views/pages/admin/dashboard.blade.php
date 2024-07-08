@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-square shadow d-flex justify-content-center align-items-start">
                           <i class="fas fa-dollar-sign mt-1 justify-content-center align-items-start"></i>
                        </div>
                        </div>
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Rp 0,00
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-square shadow d-flex justify-content-center align-items-start">
                           <i class="fas fa-ticket-alt mt-1 justify-content-center align-items-start"></i>
                        </div>
                        </div>
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Ticket Sold</p>
                                <h5 class="font-weight-bolder mb-0">
                                    10
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-square shadow d-flex justify-content-center align-items-start">
                           <i class="fas fa-calendar-alt mt-1 justify-content-center align-items-start"></i>
                        </div>
                        </div>
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Event Held</p>
                                <h5 class="font-weight-bolder mb-0">
                                    5
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-square shadow d-flex justify-content-center align-items-start">
                           <i class="fas fa-chart-line mt-1 justify-content-center align-items-start"></i>
                        </div>
                        </div>
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder mb-0">
                                    Rp 75000,00
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h6>Detail Pengguna</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $index => $admin)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center">{{ $admin->id }}</td>
                                    <td class="text-center">{{ $admin->name }}</td>
                                    <td class="text-center">{{ $admin->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end p-2 mt-5">
                    <a href="{{ route('admin.pengguna.data') }}" class="btn btn-primary text-uppercase">Menu Pengguna</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h6>Detail Event</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id_event</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center">{{ $item->id_event }}</td>
                                    <td class="text-center">{!! nl2br(e(wordwrap($item->name, 20, "\n", true))) !!}</td>
                                    <td class="text-center">{{ $item->location }}</td>
                                    <td class="text-center">{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end p-2 mt-5">
                    <a href="{{ route('event-page') }}" class="btn btn-primary text-uppercase">Menu event</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <footer class="footer pt-10">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        K-EVENTS
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
