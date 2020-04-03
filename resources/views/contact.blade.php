@extends('layouts.masterblog') 

@section('head')
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<script src="https://code.jquery.com/jquery.min.js"></script>
<title>
  Contact Us DOLANYO
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
          <h1 class="mt-5" style="color: white"><strong> Contact US </strong></h1>
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
        <div class="container align-items-center" >
          <div class="row justify-content-center">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="card 1 text-center">
                <div class="container text-center">
                  <div class="card-head mt-3" >
                    <h3 class="card-title text-center mt-3 mb-3 text-dark font-weight-bold  "><strong> PT. DOLANYO Karya Wisata</strong></h3>   
                  </div>
                  <div class="card-body mt-0 ">
                             
                    <p class="text-left"><strong></strong><p>        
                      <p class="mt-0 mb-0 text-left"> Pakeran Sendangmulyo<br>Minggir Sleman<br>Yogyakarta <strong> 55562 </strong><p>
                  </div>
                  <div class="card-footer text-center">
                    <button class="btn btn-info btn-mute"><i class="fa fa-whatsapp"></i>&nbsp; +62 81215405375 </button>
                    <button class="btn btn-primary btn-mute"><i class="fa fa-envelope"></i>&nbsp; help@dolanyo.com </button>
                  </div>
                </div>
              </div>
            </div>
              
            </div>
          </div>
        </div>
      </div>

<div class="section section-contacts text-left" >
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <h2 class="text-center title">Bantuan ?</h2>
      <h4 class="text-center description">Apabila anda memiliki request, pertanyaan, maupun saran silahkan isi kotak pesan di bawah ini.</h4>
    
     <form action="/bantuan" method="post" class="contact-form" enctype="multipart/form-data" >
         {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="label-floating">Your Name</label>
              <input name= "nama" type="text" class="form-control" value="{{Auth::user()->name}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="label-floating">Your Email</label>
              <input name="email" type="email" class="form-control"  value="{{Auth::user()->email}}">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
          <textarea name="pertanyaan" type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
        </div>
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto text-center">
            <button class="btn btn-primary btn-raised">
              Send Message
            </button>
          </div>
        </div>
      </form>
    </div>
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