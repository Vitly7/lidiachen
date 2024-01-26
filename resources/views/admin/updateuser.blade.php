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
                <h1 class="title" align="center">Update User & Admin</h1>
    
                @if(session()->has('message'))
    
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <a href="{{ url('/showuser') }}"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    {{ session()->get('message') }}
                </div>
    
                @endif
    
                <form action="{{ url('updateusers', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" style="padding: 15px;">
                        <label for="title">Name</label>
                        <input class="form-control" style="color: black;" type="text" name="name" id="name" value="{{ $data->name }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="price">Email</label>
                        <input class="form-control" style="color: black;" type="email" name="email" id="email" value="{{ $data->email }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="discount">User Type</label>
                        <input class="form-control" style="color: black;" type="number" name="usertype" id="usertype" value="{{ $data->usertype }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="discount">Phone</label>
                        <input class="form-control" style="color: black;" type="number" name="phone" id="phone" value="{{ $data->phone }}" required>
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <label for="quantity">Address</label>
                        <input class="form-control" style="color: black;" type="text" name="address" id="address" value="{{ $data->address }}" required>
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

