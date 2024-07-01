@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 justify-content-end">
                    <h6>Event Table</h6>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create Ticket
                    </button>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">id_tiket</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Sale Start</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Sale End</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                                    <th class="text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Barcode</th>
                                    <th class="text-secondary opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->id }}</td>
                                    <td>{{ $ticket->name_event }}</td>
                                    <td>{{ $ticket->location }}</td>
                                    <td>{{ $ticket->price }}</td>
                                    <td>{{ $ticket->quantity }}</td>
                                    <td>{{ $ticket->sale_start }}</td>
                                    <td>{{ $ticket->sale_end }}</td>
                                    <td>{{ $ticket->time }}</td>
                                    <td>{{ $ticket->barcode }}</td>
                                    <td class="align-middle">
                                        <form action="{{ route('edit-ticket', $ticket->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            <button type="submit" class="btn btn-info btn-sm">Edit</button>
                                        </form>
                                        <form action="{{ route('delete-ticket', $ticket->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center">Tidak ada data yang tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

@include('pages.admin.tickets.create')
@endsection
