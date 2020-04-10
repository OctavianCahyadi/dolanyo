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
  <div class="page-header" data-parallax="true" style="background-image: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.0) ), url('{{ url('/data_file/'.$paket->image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center mt-5">
           <h1 style="text-shadow: 2px 2px 4px #808080;">{{ $paket->title }} <span class="lead mt-5"> </span> </h1>
           <p style="text-shadow: 2px 2px 4px 	#696969;">Posted {{ $paket->created_at->diffForHumans() }} </p>
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
             @php
                 $harga=$paket->harga_mulai;
                 if (is_numeric($harga)){
                   $format_harga = number_format($harga, '0', ',', '.');                    
                 }
                 $total=$paket->harga_mulai * $kategori->maxpeserta;
             @endphp
             <script>
               function fun(){                  
                 var price = "<?php echo $total ?>";  
                 var harga_mulai= "<?php echo $paket->harga_mulai ?>"; 
                 var member = document.getElementById("contactform-member").value;  
                 var calculate = price / member;
                 var temp = Math.ceil(calculate);
                 var harga= Math.round(temp/1000)*1000;
                 var reverse = harga.toString().split('').reverse().join(''),
                 ribuan = reverse.match(/\d{1,3}/g);
                 ribuan = ribuan.join('.').split('').reverse().join('');
                 document.getElementById("member-kosten").innerHTML = ribuan;
                 document.getElementById("peserta").innerHTML = member;
                   }
               </script>

             <p class="lead">{!! $paket->deskripsi !!}</p> 
             <label class="" for="contactform-member"><span class="contact_form_span">Jumlah Peserta: </span> </label>
             <input style="width:13%;input[type=number]:focus {  border: 3px solid #555;};border-radius: 4px;" class="text-center" type="number" id="contactform-member" placeholder="Peserta" name="member" value="{{ $kategori->maxpeserta }}" min="{{ $kategori->minpeserta }}" max="{{ $kategori->maxpeserta }}"/>
             <button class="btn btn-primary" onclick="fun()">Hitung Harga</button>
             <p class="lead">Harga <strong>Rp. <span id="member-kosten">{!! $format_harga !!}</span></strong> /Pax untuk <strong><span id="peserta">{!! $kategori->maxpeserta !!}</span> </strong>peserta.</p> 
          
             <div class="card card-plain">
               <div class="">
                 <!-- Nav tabs -->
                 <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" data-background-color="orange">
                     <li class="nav-item ml-5 mr-5">
                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                     </li>
                     <li class="nav-item  ml-5 mr-5">
                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Fasilitas</a>
                     </li>
                     <li class="nav-item  ml-5 mr-5">
                     <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Ketentuan</a>
                     </li>
                     
                 </ul>
           
               <!-- Tab panes -->
               <div class="card-body">
                 <div class="tab-content text-justify ">
                     <div class="tab-pane active"  id="home" role="tabpanel" aria-labelledby="home-tab"><p class="lead card-text collapse" id="collapseContent">{!! $paket->overview !!}</p></div>
                     <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><p class="lead">{!! $paket->fasilitas !!}</p></div>
                     <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"><p class="lead">{!! $paket->ketentuan !!}</p></div>
                   
                 </div>
               </div>
             </div>
           </div> 
         </div>
             
             <hr>
             
           </div>
         </div>
          <div class="text-center">
            <a href="/login" class="btn btn-lg btn-primary btn-rounded mb-2 " ><strong>Login</strong> Untuk Pesan !</a><br>
            <a href="/register"><strong>Register</strong> Untuk Bergabung !</a>
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
   