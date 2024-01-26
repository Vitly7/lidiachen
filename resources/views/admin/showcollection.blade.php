<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
   <style>
    table{
      color:white;
    }
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div style="margin:90px 10px 40px 20px;" >
          <div class="container-fluid">
            <h1 class="title" style="margin-bottom:10px;" align="center">Collection</h1>
            @if(session()->has('message'))
  
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  {{ session()->get('message') }}
              </div>
  
              @endif
              <div class="m-1">
                <a class="btn btn-primary" href="{{ url('collection') }}">Add Collection</a>
              </div>
              <div class="table-responsive">
                <table class="table table-dark" >
                  <thead style="background-color: rgb(255, 255, 255);" align="center">
                    <tr>
                      <th >No</th>
                      <th >Title</th>
                      <th >Description</th>
                      <th >Quantity</th>
                      <th >Price</th>
                      <th >Discount</th>
                      <th >Image</th>
                      <th >Update</th>
                      <th >Delete</th>
                    </tr>
                  </thead>
    
                  @foreach ($data as $collection)
                  <tbody  style="background-color: black;" align="center">
                    <tr>
                      <td scope="row">{{ $collection->id }}</td>
                      <td>{{ $collection->title }}</td>
                      <td style="white-space: pre-line;">{{ $collection->description }}</td>
                      <td>{{ $collection->quantity }}</td>
                      <td>{{ $collection->price }}</td>
                      <td>{{ $collection->discount }}</td>
                      <td><img style="width:70px; height:70px;" src="/imagecollection/{{ $collection->image }}" alt=""></td>
                      <td><a class="btn btn-primary" href="{{ url('updatecollection',$collection->id) }}">Update</a></td>
                      <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('deletecollection',$collection->id) }}">Delete</a></td>
                    </tr>
                  </tbody>
                  @endforeach
    
                </table>
              </div>
          </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  
    <!-- End custom js for this page -->
  </body>
</html>

