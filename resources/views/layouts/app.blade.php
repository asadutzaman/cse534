<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <!-- <meta name="_token" content="{{ csrf_token() }}"/> -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ url('/') }}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ url('/') }}/admin/css/simple-sidebar.css" rel="stylesheet">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="{{ url('/') }}/admin/resources/demos/style.css">

  <link rel="stylesheet" href="{{ url('/') }}/drag/css/tether.min.css"/>
  <link rel="stylesheet" href="{{ url('/') }}/drag/css/font-awesome/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="{{ url('/') }}/drag/css/form_builder.css"/>

</head>

<body>

  <div class="d-flex" id="wrapper">

  @include('layouts.partials.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('layouts.partials.head')
    @yield('content')
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  @include('layouts.partials.footer')
</body>

</html>