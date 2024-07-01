@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>User Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">first_name</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">last_name</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">email_verified_at</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">password</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">role</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">created_at</th>
                                        <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $user->id }}</td>
                                            <td class="text-center">{{ $user->first_name}}</td>
                                            <td class="text-center">{{ $user->first_name}}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">{{ $user->phone}}</td>
                                            <td class="text-center">{{ $user->email_verified_at}}</td>
                                            <td class="text-center">{{ $user->password }}</td>
                                            <td class="text-center">{{ $user->role }}</td>
                                            <td class="text-center">{{ $user ->created_at }}</td>
                                            <td class="text-center">{{ $user ->updated_at }}</td>
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
    <footer class="footer pt-3  ">
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
@endsection