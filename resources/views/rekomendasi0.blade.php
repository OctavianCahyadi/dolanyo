@extends('layouts.masterblog')

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
<style>
  .slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;  
  background: #ffffff;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%; 
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
.mycustom-jumbotron {
  
  
    padding-top: 18%;
    padding-bottom: 18%;
    background: url('../assets/img/pegunungan.jpg') ; 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: cover;
}
</style>

  @endsection


@section('content')
<div class="page-body " data-parallax="true" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.0) ), url('../assets/img/landingpage.png')">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8 mb-0 mt-3 text-center">
        <h1 class="title" style="color: white"><strong> Tell Us About You </strong></h1>
      </div>
      <div class="col-md-2 " >
        <a href="/home">
        <button href type="submit" class="btn btn-default btn-large " style="position:absolute; bottom:25px" >Skip Recommendations</button>
        </a>
      </div>
    </div>
    <div class="jumbotron mycustom-jumbotron text-center">  
    </div>
    
    <div class="row mt-4" id="row1">
      <div class="col-md-4 text-right">
        <h5><span class="badge badge-primary">0</span></h5>
      </div>
      <div class="col-md-4 mt-1">
        <div class="slidecontainer">
          <form action="/inputrekomendasi0/{{ Auth::user()->id }}" method="post"  enctype="multipart/form-data" >
            {{ csrf_field() }}
          <input type="range" min="0" max="4" value="50" class="slider" id="myRange" name="ranting">
        </div>
      </div>
      <div class="col-md-4 text-left">
        <h5><span class="badge badge-primary">4</span></h5>
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-12 text-center mb-0 mt-0">
        <label class="badge badge-primary font-weight-bold" style="color: white">Nilai Ranting: <strong> &nbsp;&nbsp;<span id="demo" style=" font-size: 150%;"></span>&nbsp;&nbsp;</strong></label>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      <br>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success btn-large">Next</button>
      </div>
      </a>
    </div>
    </form>
    </div>
  </div>
 
    

    
 </div>
   @endsection

   @section('script')
   <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;
    
    slider.oninput = function() {
      output.innerHTML = this.value;
    }
    </script>
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
   