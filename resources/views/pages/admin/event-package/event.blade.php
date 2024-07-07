@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Event Table</h6>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Create Data
                </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">id_event</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">Poster</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">Start Date</th>
                                    <th class="text-lowercas text-secondary text-xxs font-weight-bolder opacity-7">End Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                    <tr>
                                    <td>{{ $item->id_event}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->poster }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>{{ $item->end_date }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit-data', $item->id_event) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit event">
                                                Edit
                                            </a>
                                            <form action="{{ route('delete-data', $item->id_event) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
