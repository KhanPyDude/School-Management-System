<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend/images/favicon.ico')}}">

    <title>SMS - Dashboard</title>

	@include('admin.body.css.themecss')

  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    {{-- admin header area start start --}}
        @include('admin.body.header')
    {{-- admin header area start end --}}

{{-- admin panel sidebar start --}}
    @include('admin.body.sidebar')
{{-- admin panel sidebar end --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		@yield('admin')
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

  {{-- admin footer area start --}}
     @include('admin.body.footer')
  {{-- admin footer area end --}}


<!-- ./wrapper -->


    {{-- Theme script starts --}}
        @include('admin.body.js.themescript')
    {{-- Theme script ends --}}




</body>
</html>
