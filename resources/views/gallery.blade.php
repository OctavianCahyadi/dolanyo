@extends('layouts.masterblog')


@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Gallery</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="cards-gallery.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    Gallery DOLANYO
    </title>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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

    <div class="jumbotron" data-parallax="true" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.0) ), url('../assets/img/landingpage.png')">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="brand text-center">
                <h1 class="mt-5" style="color: white"><strong> Our Best Moments </strong></h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    <section class="gallery-block cards-gallery">
         <div class="container">
             <div class="row Text-center">
                @foreach ($gallery as $post)
                 <div class="col-md-6 col-lg-4 text-center">
                     <div class="card border-0 transform-on-hover text-center">
                         <a class="lightbox" href="{{ url('/gallery/'.$post->image) }}">
                             <img src="{{ url('/tumbnail/'.$post->image) }}" alt="Card Image" class="card-img-top">
                         </a>
                         <div class="card-body text-center">
                             <h6><a href="#">{{ $post->nama }}</a></h6>
                             
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
             <div class="d-flex justify-content-center">
                {{ $gallery->links() }}
              </div>
         </div>
     </section>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
     <script>
         baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
     </script>

@endsection

@section('script')
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

@endsection