@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6>Detail Organizer</h6>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Create Data
                </button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">no</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id organizer</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organizers as $index => $organizer)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td class="text-center">{{ $organizer->id_organizers }}</td>
                                            <td class="text-center">{{ $organizer->name}}</td>
                                            <td class="text-center">{{ $organizer->email }}</td>
                                            <td class="text-center">{{ $organizer->phone}}</td>
                                            <td class="text-center">
                                            <button type="button" class="btn btn-secondary btn-square" data-toggle="tooltip" title="Edit user" onclick="window.location.href='{{ route('edit-org', $organizer->id_organizers) }}'">
                                                <i class="fas fa-edit fa-lg"></i> <!-- fa-lg for larger size -->
                                            </button>
                                            <button type="button" class="btn btn-danger btn-square" data-toggle="tooltip" title="Delete user" onclick="confirmDeletion('{{ route('delete-org', ['id_organizers' => $organizer->id_organizers]) }}', '{{ $index + 1 }}')">
                                                <i class="fas fa-trash fa-lg"></i>
                                            </button>
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
                <div class="copyright text-center text-sm text-muted text-lg-start mb-7">
                    © <script>document.write(new Date().getFullYear())</script>, K-EVENTS   
                </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@include('pages.admin.organizer.create')
@endsection
