@extends('layouts.masterblogall')

  @section('head')
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Blog Pariwisata Yogyakarta
  </title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  @endsection


@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.0) ), url('{{ url('/data_file/'.$post->image) }}')">
     <div class="container">
       <div class="row">
         <div class="col-md-8 ml-auto mr-auto">
           <div class="brand text-center">
            <h1 class="mt-5" style="color: white; text-shadow: 2px 2px 4px #808080;"><strong> {{ $post->title }} <span class="lead"> </span>  </strong></h1>
            <hr style="text-shadow: 2px 2px 4px 	#696969;">by <a href="#"> {{ $post->user->name }} </a>
            <p style="text-shadow: 2px 2px 4px 	#696969;">Posted {{ $post->created_at->diffForHumans() }} </p>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="main main-raised">
     <div class="container">
       <div class="section text-justify">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">              
              <p class="lead">{!! $post->body !!}</p>                            
              <hr>              
            </div>
          </div>
        </div>
       </div>
     </div>
   </div>
   @endsection

   @section('script')
   <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
   <script src="../assets/js/plugins/moment.min.js"></script>
   <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
   <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!--  Google Maps Plugin    -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
   <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
   
   @endsection
   