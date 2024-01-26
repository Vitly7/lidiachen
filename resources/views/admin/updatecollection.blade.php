<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lidia Chen Admin</title>
    <base href="/public">
    @include('admin.css')
    <style>
        .title
        {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')

      <div class="container-fluid page-body-wrapper">

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container">
                <h1 class="title" align="center">Update Collection</h1>
    
                @if(session()->has('message'))
    
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <a href="{{ url('/showcollection') }}"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    {{ session()->get('message') }}
                </div>
    
                @endif
    
                <form action="{{ url('updatecollections', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" style="padding: 15px;">
                        <label for="title">Collection Title</label>
                        <input class="form-control" style="color: black;" type="text" name="title" id="title" value="{{ $data->title }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="price">Price</label>
                        <input class="form-control" style="color: black;" type="number" name="price" id="price" value="{{ $data->price }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="discount">Discount</label>
                        <input class="form-control" style="color: black;" type="number" name="discount" id="discount" value="{{ $data->discount }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="description">Description</label>
                        <textarea class="form-control" style="color: black; white-space: pre-line;" required name="description" id="description">{{ $data->description }}</textarea>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="quantity">Quantity</label>
                        <input class="form-control" style="color: black;" type="number" name="quantity" id="quantity" value="{{ $data->quantity }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="old_image">Old Image</label>
                        <img class="img-fluid" style="height: 150px; width: 150px;" src="/imagecollection/{{ $data->image }}" alt="">
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="file">Change Image</label>
                        <input class="form-control" type="file" name="file" id="file">
                    </div>
                    <div class="form-group" style="padding: 15px;" >
                        <input style="padding: 15px;" class="btn btn-success" type="submit" value="Update">
                    </div>
                </form>
                
            </div>
          </div>
      </div>
    </div>
    @include('admin.js')
  </body>
</html>

