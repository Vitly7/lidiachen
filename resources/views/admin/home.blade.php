<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lidia Chen Admin</title>
    @include('admin.css')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

   
        Pusher.logToConsole = true;

        var pusher = new Pusher('c3207dedf13cfe81c97c', {
        cluster: 'ap1'
        });

        var channel = pusher.subscribe('lidiachen');
        channel.bind('userpush', function(data) {
            if (data.datas) {
              toastr.info(JSON.stringify(data.datas) + ' has sent a message');
                
            }

            if (data.email) {
              toastr.info(JSON.stringify(data.email) + ' has joined your website');
            }
        });

    </script>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        @include('admin.body')
      </div>
    </div>
    @include('admin.js')
  </body>
</html>

