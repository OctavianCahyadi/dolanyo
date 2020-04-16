@extends('layouts.masterblog') 

@section('head')
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<script src="https://code.jquery.com/jquery.min.js"></script>
<title>
  Home DOLANYO
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />


<style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
}
  .cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card1 {
  margin: 20px auto;
  width: 300px;
  height: 200px;
  border-radius: 10px;
  box-shadow: 5px 5px 5px 7px rgba(0,0,0,0.01), -5px -5px 10px 7px rgba(0,0,0,0.12);
  cursor: pointer;
  transition: 1.5s;
}


.card1 .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card1 .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card1 .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card1:hover {
  transform: scale(0.95, 0.95);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}
a.class, a.class:hover {
    text-decoration:none;
    font-weight:bold
}
  </style>
@endsection

  @section('content')
  <div class="jumbotron" data-parallax="true" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.0) ), url('../assets/img/landingpage.png')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
          <h1 class="mt-5" style="color: white"><strong> WELCOME </strong></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(function() {
      var alert = $('div.alert[auto-close]');
      alert.each(function() {
        var that = $(this);
        var time_period = that.attr('auto-close');
        setTimeout(function() {
          that.alert('close');
        }, time_period);
      });
    });
  </script>

  @if (session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert" auto-close="8000" id="moo">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('success') }}
                        </div>
                    @endif

  
      <div class="main main-raised">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                    <img class="d-block  img-fluid" src="../../../gallery/slide1.png" alt="First slide">
                
                </div>
                <div class="carousel-item active">
                  <img class="d-block  img-fluid" src="../../../gallery/slide2.png" alt="Second slide">
                  
                </div>
                <div class="carousel-item">
                  <img class="d-block  img-fluid" src="../../../gallery/slide3.png"  alt="Third slide">
                  
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
              </a>
            </div>
          </div>

     <div class="container">
     <div class="mx-auto">
        <div class="container text-center"  style="margin-top:30px">
        <h2> Kenapa Harus Dolanyo ? </h2>
        </div>
        <div class="card card-nav-tabs card-plain">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mudah</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Akomodasi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Harga</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Destinasi</a>
            </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content text-center">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"><img style="width: 800px; height: auto;  box-shadow: 5px 5px 10px 7px rgba(0,0,0,0.01), -5px -5px 30px 7px rgba(0,0,0,0.12);border-radius:25px;" src="../assets/img/mudah.png" alt=""></div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <img style="width: 800px; height: auto;  box-shadow: 5px 5px 10px 7px rgba(0,0,0,0.01), -5px -5px 30px 7px rgba(0,0,0,0.12);border-radius:25px;" src="../assets/img/akomodasi.png" alt=""></div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"><img style="width: 800px; height: auto;  box-shadow: 5px 5px 10px 7px rgba(0,0,0,0.01), -5px -5px 30px 7px rgba(0,0,0,0.12);border-radius:25px;" src="../assets/img/harga.png" alt=""></div>
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab"><img style="width: 800px; height: auto;  box-shadow: 5px 5px 10px 7px rgba(0,0,0,0.01), -5px -5px 30px 7px rgba(0,0,0,0.12);border-radius:25px;" src="../assets/img/destinasi.png" alt=""></div>
        </div>
    </div> 
</div>
</div>
</div>
@php
if ( Auth::user()->pantai==NULL) {
  $url='/rekomendasi0';
  $link='Rekomendasi';
}else {
  $id= Auth::user()->id;
  $url='/showrekomendasi/'.$id;
  $link='Rekomendasi';
}
@endphp

<div class="container text-center"  style="margin-top:30px">
  <a href="{{ $url}}" class="btn btn-lg btn-primary btn-rounded mb-4 " >Lihat Rekomendasi Paket Wisata Dari Kami Untuk Anda</a>
  </div>

<div class="container mb-5 align-items-center" >
  <div class="row justify-content-center">
    <div class="container text-center"  style="margin-top:30px">
      <h2> Nikmati Paket Yang Kami Tawarkan </h2>
      </div>
    @foreach ($kategori as $item)
    <a class="class" href="/paket/{{$item->id}}">
      <div class="card1 1 text-center ml-2 mr-2">
        
        <img class="img-fluid" src="{{ url('/data_file/'.$item->image) }}"  alt="Card Image Cap" style="width: 250px">
        
        <div class="container text-center">
            <h5 class="text-muted">{{$item->kategori}}</h5>
        </div>
      </div>
    </a>
  @endforeach
  </div>
</div>
    
      @endsection

  @section('script')
      <script>
      $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
      });

      function scrollToDownload() {

        if ($('.section-download').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-download').offset().top
          }, 1000);
        }
      }
    </script>
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

</body>

</html>