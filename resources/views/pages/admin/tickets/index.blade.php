@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Detail Ticket</h6>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create Data
                    </button>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">no</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID Ticket</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID Event</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Location</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Quantity</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Sale Start</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Sale End</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Time</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Barcode</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tickets as $index => $ticket)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center">{{ $ticket->id_ticket }}</td>
                                    <td class="text-center">{{ $ticket->id_event }}</td>
                                    <td class="text-center">{!! nl2br(e(wordwrap($ticket->name_event, 20, "\n", true))) !!}</td>
                                    <td class="text-center">{!! nl2br(e(wordwrap($ticket->location, 20, "\n", true))) !!}</td>
                                    <td class="text-center">{{ $ticket->price }}</td>
                                    <td class="text-center">{{ $ticket->quantity }}</td>
                                    <td class="text-center">{{ $ticket->sale_start }}</td>
                                    <td class="text-center">{{ $ticket->sale_end }}</td>
                                    <td class="text-center">{{ $ticket->time }}</td>
                                    <td class="text-center">{{ $ticket->barcode }}</td>
                                    <td class="align-middle">
                                    <button type="button" class="btn btn-secondary btn-square" data-toggle="tooltip" title="Edit" onclick="window.location.href='{{ route('edit-ticket', $ticket->id_ticket) }}'">
                                    <i class="fas fa-edit fa-lg"></i> <!-- fa-lg for larger size -->
                                    </button>          
                                    <form action="{{ route('delete-ticket', $ticket->id_ticket) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-square " data-toggle="tooltip" title="Delete">
                                    <i class="fas fa-trash fa-lg"></i> <!-- fa-lg for larger size -->
                                    </button>
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
                <div class="copyright text-center text-sm text-muted text-lg-start mb-7">
                    © <script>document.write(new Date().getFullYear())</script>, K-EVENTS   
                </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@include('pages.admin.tickets.create')
@endsection
