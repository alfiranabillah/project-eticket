
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
            <form action="{{ route('add-data')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="id_organizers">Organizer ID</label>
                    <input type="text" name="id_organizers" class="form-control" id="id_organizers" name="id_organizers" value="{{ old('id_organizers')}}">
                </div>
                <div class="form-group">
                    <label for="name">Name Event</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" required>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location"  value="{{ old('mlocation')}}"  required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status"  value="{{ old('status')}}"  required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"  value="{{ old('description')}}" ></textarea>
                </div> 
                <div class="form-group">
                    <label for="poster">Poster</label>
                    <input type="file" class="form-control" id="poster" name="poster"  value="{{ old('poster')}}" >
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price"  value="{{ old('price')}}" >
                </div>
                <div class="form-group">
                    <label for="start_date">Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"  value="{{ old('start_date')}}" required>
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <input type="string" class="form-control" id="category" name="category"  value="{{ old('category')}}" required>
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
