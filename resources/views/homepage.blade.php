<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


 <!DOCTYPE html>
 <html lang="en">
 
 <head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Landing Page Dolanyo
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
  
 </head>
 
 <body class="landing-page sidebar-collapse">
  
   
   <style>
     #bglanding{
    background-image: url('../assets/img/landingpage.png');
     }
 </style>

   <div id="bglanding" class="page-header mb-1" data-parallax="true">
     <div class="container">
       <div class="row">
         <div class="col-md-4 mt-4 text-center">
           <div class="card bg-transparent border-primary" > 
              <img  src="../assets/img/visitingjogja.png" alt="" class="mt-3 ml-2 mr-2" style="width: 250px;">
              <h4 class="justify-content-center"> Dolanyo spesialis jasa paket liburan wisata di Yogyakarta paling seru dan terjangkau. Segala kerperluan anda semua sudah kami urus dan selamat menikmati liburan anda.</h4>
              
              <a href="/kategoriall" class="mt-1 mb-1 btn btn-primary btn-raised btn-lg mt-1 mb-3">
                <i ></i> Get <strong>It</strong> Now !
              </a>
          </div>
         </div>
         <div class="col-md-4">
         
         </div>
         <div class="col-md-4 mt-4 text-center">
          <div class="card bg-transparent border-primary">
          <img style="width: 280px;" src="../assets/img/bannerkanan.png" alt="" class="mt-4">
           
            <br>
            <h7>Kurang Informasi wisata di Jogja ?</h7>
            <br>
            <h7>Butuh Rekomendasi wisata di Jogja ?</h7>
            <br>
            <a href="/register" target="_blank" class="btn btn-success btn-raised btn-lg mt-3 mb-3">
              Daftar disini !
            </a>
            <a href="/login">
              <p> Klik Disini untuk Login
              <a>
            </div>
         </div>
       </div>
     </div>
   </div>   
   <style>
      #mainbackground1{
        background: rgb(255,255,255);
        background: linear-gradient(90deg, rgba(255,255,255,1) 1%, rgba(217,250,239,0.2810166302849265) 12%, rgba(134,255,253,0.21939198042498254) 47%, rgba(215,248,255,0.1997841372877276) 85%, rgba(255,255,255,1) 100%);
        }     
    #mainbackground{
      background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 1%, rgba(250,237,217,0.19698301683954833) 9%, rgba(255,234,184,0.1465628487723214) 47%, rgba(255,242,215,0.1997841372877276) 91%, rgba(255,255,255,1) 100%);
}
  </style>   
   
   <div class="main main-raised" >
     <div class="container" >
      @if (session('success'))
      <div class="alert alert-success alert-dismissible" role="alert" auto-close="8000" id="moo">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session('success') }}
      </div>
      @endif
       <div class="section text-center" >
         <div class="row">
           <div class="col-md-8 ml-auto mr-auto">
             <h2 class="title">Produk Kami</h2>
             <h5 class="description">Dolanyo adalah agen perjalanan ritel dan online yang melayani perjalanan individu serta grup. Dengan paket liburan tematik terlengkap yang dibuat berdasarkan minat klien, seperti: private tours, bulan madu, liburan aktif,menyetir sendiri, dan didukung oleh personel yang berpengalaman di industri perjalanan, dolanyo menawarkan liburan yang beres dan berbeda bagi pelanggannya karena kami mengurus semua kebutuhan liburan anda.</h5>
           </div>
         </div>
         <div class="container">
          <div class="mx-auto">
             <div class="container text-center"  style="margin-top:30px">
              <div class="section text-center" >
         
                <div class="team">
                  <div class="row">
                    <div class="container text-center">
                      <div class="row">
                       <div class="col-md-3 ">
                       </div>
                       <div class="col-md-6">              
                         <div class="card bg-light">
                           <a href="/home">
                           <img class="mt-5 mb-5" style="width: 400px; height: auto;" src="../assets/img/dolanyologo.png" alt="">
                         </a>
                         </div>
                       </div>
                       <div class="col-md-3 ">              
                       </div>
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
                     <input name= "nama" type="text" class="form-control" name="name" value="" required autocomplete="name">
                      @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror</div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label class="label-floating">Your Email</label>
                     <input name="email" type="email" class="form-control" name="name" value="" required autocomplete="email">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror</div>
                 </div>
               </div>
               <div class="form-group">
                 <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                 <textarea name="pertanyaan" id="pertanyaan" type="email" class="form-control" rows="4" id="exampleMessage" required autocomplete="email" >{{old('pertanyaan')}}</textarea>
                 @error('pertanyaan')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                  @enderror</div>
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
      </div>
     </div>
   </div>
   <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="/home">
             <img style="width: 100px; height: auto;" src="../assets/img/dolanyologo.png" alt="">
            </a>
          </li>
          
        </ul>
        <ul>
         <li>
           <p><strong> PT. DOLANYO Karya Wisata</strong><p>        
           <p class="mt-0 mb-0 text-left"> Pakeran Sendangmulyo<br>Minggir Sleman<br>Yogyakarta <strong> 55562 </strong><p>
          
         </li>
         
       </ul>
      </nav>
      <div class="copyright float-right">

       <ul>
        &copy;         
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
        </ul>
        <ul>
          <button class="btn btn-info btn-mute"><i class="fa fa-whatsapp"></i>&nbsp; +62 81215405375 </button>
          <button class="btn btn-primary btn-mute"><i class="fa fa-envelope"></i>&nbsp; help@dolanyo.com </button>
        </ul>
      </div>
    </div>
  </footer>
   <!--   Core JS Files   -->
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
   
 </body>
 
 </html>
 