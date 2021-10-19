
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Solver Or Solver</title>
    
    @include('style.style')
  </head>
  <body class="skin-default card-no-border">
    @yield('content')
  </body>
    @include('script.script')
</html>