@extends('layouts.masterblog') 

@section('head')
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<script src="https://code.jquery.com/jquery.min.js"></script>
<title>
  User Profile DOLANYO
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="./../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="./../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />


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
          <h1 class="mt-5" style="color: white"><strong> User Profile </strong></h1>
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
                    <h3 class="card-title text-center mt-3 mb-3 text-dark font-weight-bold  "><strong> Hii, {{ Auth::user()->name }} </strong></h3>   
                  </div>
                  <div class="card-body mt-0 ">  
                    <p class="text-left"><strong></strong><p>        
                      <p class="mt-0 mb-0 text-left">Email: <strong> {{ Auth::user()->email }} </strong><br>Phone Number: <strong> {{ Auth::user()->phone }} </strong><p>
                  </div>
                  <div class="card-footer text-center">
                    <a href="/editprofile">
                    <button class="btn btn-info">Edit Profile </button></a>
                    <a href="/password/reset">
                    <button class="btn btn-primary">Reset Password</button></a>
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
    <div class="col-md-10 ml-auto mr-auto">
      <h2 class="text-center title">Transaksi Anda</h2>
     <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary text-center">
              
              <th> Nama  </th>
              <th> No Hp </th>
              <th>  Peserta  </th>
              <th>  Total Harga  </th>
              <th>  Paket  </th>
              <th>  Tanggal  </th>
              <th>  Status  </th>
            </thead>
           <tbody>
             @foreach ($posts as $row)
               <tr>
                   <td>{{$row->nama }}</td>
                   <td>{{$row->handphone}}</td>
                   <td class="text-center">{{$row->peserta}}</td>
                   <td>{{$row->harga}}</td>
                   <td>{{$row->paket}}</td>
                   <td>{{$row->tanggal}}</td>
                   <?php
                      if ($row->konfirmasi==0) {
                        $id=$row->id;
                        echo '<td class="text-center"><h7><span class="badge badge-primary">Belum </span></h7></td>';
                      }else if ($row->konfirmasi==3 ){
                        echo '<td class="text-center"><h7><span class="badge badge-danger">Dibatalkan</span></h7></td>';
                      }
                       else {
                        echo '<td class="text-center"><h7><span class="badge badge-success">Sukses</span></h7></td>';
                      }
                      
                   ?>
                   <td>                   
                </td>
                  
               </tr>
              @endforeach
          </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{ $posts->links() }}
          </div>
        </div>
      </div>
     
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
    <script src="./../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="./../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  @endsection

</body>

</html>