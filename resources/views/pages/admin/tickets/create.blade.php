
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
            <form action="{{ route('add-ticket')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name_event">Event</label>
                    <input type="text" class="form-control" id="name_event" name="name_event" value="{{ old('name_event')}}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price"  value="{{ old('price')}}" >
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"  value="{{ old('quantity')}}" >
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location"  value="{{ old('location')}}"  required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" name="time"  value="{{ old('time')}}"  required>
                </div>
                <div class="form-group">
                    <label for="sale_start">Date</label>
                    <input type="date" class="form-control" id="sale_start" name="sale_start"  value="{{ old('sale_start')}}" required>
                </div>
                <div class="form-group">
                    <label for="sale_end">Date</label>
                    <input type="date" class="form-control" id="sale_end" name="sale_end"  value="{{ old('sale_end')}}" required>
                </div>
                <div class="form-group">
                    <label for="barcode">Barcode:</label>
                    <input type="file" class="form-control" id="barcode" name="barcode"  value="{{ old('barcode')}}"  required>
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
