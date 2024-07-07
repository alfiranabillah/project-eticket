@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Detail Event</h6>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create Data
                    </button>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Poster</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $item->id_event }}</td>
                                        <td class="text-center">{{ $item->name }}</td>
                                        <td class="text-center">{{ $item->location }}</td>
                                        <td class="text-center">{{ $item->status }}</td>
                                        <td class="text-center">{{ $item->description }}</td>
                                        <td class="text-center">{{ $item->poster }}</td>
                                        <td class="text-center">{{ $item->price }}</td>
                                        <td class="text-center">{{ $item->start_date }}</td>
                                        <td class="text-center">{{ $item->end_date }}</td>
                                        <td class="text-center">
                                        <button type="button" class="btn btn-secondary btn-square" data-toggle="tooltip" title="Edit" onclick="window.location.href='{{ route('edit-data', $item->id_event) }}'">
                                        <i class="fas fa-edit fa-lg"></i> <!-- fa-lg for larger size -->
                                        </button>          
                                        <form action="{{ route('delete-data', $item->id_event) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-square " data-toggle="tooltip" title="Delete">
                                        <i class="fas fa-trash fa-lg"></i> <!-- fa-lg for larger size -->
                                        </button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
@include('pages.admin.event-package.create')
@endsection
