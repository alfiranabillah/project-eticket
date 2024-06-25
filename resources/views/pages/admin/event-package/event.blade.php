@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 justify-content-end">
              <h6>Event Table</h6>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Create Data
                </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" >
                  <thead>
                    <tr>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">event_id</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">location</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">start_date</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">end_date</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">desc</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">created_at</th>
                      <th class="text-center text-lowercase text-secondary text-xxs font-weight-bolder opacity-7">updated_at</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>{{ $item->end_date }}</td>
                        <td>{{ $item->poster }}</td>
                        <td>{{ $item->desc }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td class="align-middle">
                            <a href="{{ route('edit-data', $item->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit event">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="text-center">Tidak ada data yang tersedia</td>
                    </tr>
                    @endforelse

                  </tbody>

                </table>
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




<!-- Button trigger modal -->


  <!-- Modal -->

  @include('pages.admin.event-package.create')
@endsection
