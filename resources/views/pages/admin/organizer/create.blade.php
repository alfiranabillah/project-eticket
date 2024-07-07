
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
            <form action="{{ route('add-org')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                            <label for="name">name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone')}}" required>
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
