
@if ($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $error)

                <li>{{ $error}}</li>

            @endforeach
        </ul>
    </div>

@endif



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add-users')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                            <label for="first_name">first_name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">last_name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">password:</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="role">role:</label>
                            <input type="role" class="form-control" id="role" name="role" value="{{ old('role')}}" required>
                        </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
