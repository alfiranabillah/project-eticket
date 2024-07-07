@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Detail Customer</h6>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create Data
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $user->id }}</td>
                                        <td class="text-center">{{ $user->first_name }}</td>
                                        <td class="text-center">{{ $user->last_name }}</td>
                                        <td class="text-center">{{ $user->email }}</td>
                                        <td class="text-center">{{ $user->phone }}</td>
                                        <td class="text-center">{{ strlen($user->password) > 20 ? substr($user->password, 0, 20) . '...' : $user->password }}</td>
                                        <td class="text-center">{{ $user->role }}</td>
                                        <td class="text-center">
                                        <button type="button" class="btn btn-secondary btn-square" data-toggle="tooltip" title="Edit user" onclick="window.location.href='{{ route('edit-users', $user->id) }}'">
                                                <i class="fas fa-edit fa-lg"></i> <!-- fa-lg for larger size -->
                                            </button>
                                            <button type="button" class="btn btn-danger btn-square" data-toggle="tooltip" title="Delete user" onclick="window.location.href='{{ route('delete-users', $user->id) }}'">
                                                <i class="fas fa-trash fa-lg"></i> <!-- fa-lg for larger size -->
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
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>document.write(new Date().getFullYear())</script>,
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
@include('pages.admin.users.create')
@endsection
