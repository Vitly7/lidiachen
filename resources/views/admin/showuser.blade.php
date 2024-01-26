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
        <div style="margin-top:30px; margin-bottom:40px;" class="container-fluid page-body-wrapper">
          <div class="container-fluid">
            <h1 class="title" style="margin-bottom:10px;" align="center">User & Admin</h1>
            @if(session()->has('message'))
  
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  {{ session()->get('message') }}
              </div>
  
              @endif
              <div class="table-responsive">
                <table class="table table-dark" >
                  <thead style="background-color: rgb(255, 255, 255);" align="center">
                    <tr>
                      <th >Name</th>
                      <th >Email</th>
                      <th >User Type</th>
                      <th >Phone</th>
                      <th >Address</th>
                      <th >Update</th>
                      <th >Delete</th>
                    </tr>
                  </thead>
    
                  @foreach ($data as $user)
                  <tbody  style="background-color: black;" align="center">
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->usertype }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->address }}</td>
                      <td><a class="btn btn-primary" href="{{ url('updateuser',$user->id) }}">Update</a></td>
                      <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('deleteuser',$user->id) }}">Delete</a></td>
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

