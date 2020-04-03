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
  @yield('head')

  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
    </style>

 </head>
  <body class="landing-page sidebar-collapse ">
   <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-dark" color-on-scroll="0">
     <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          <img style="width: 150px; height: auto;" src="../assets/img/dolanyologo.png" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>



      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="/">
             <i class="now-ui-icons transportation_air-baloon "></i> 
             <p class="">Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kategoriall" >
              <i class="now-ui-icons transportation_bus-front-12"></i>
              <p class="">Paket Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/viewgalleryall" >
              <i class="now-ui-icons media-1_album"></i>
              <p class="">Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post1">
              <i class="now-ui-icons location_world"></i>
              <p class="">Blog</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactall">
              <i class="now-ui-icons ui-2_favourite-28"></i>
              <p class="">Contact Us</p>
            </a>
          </li>
          <li class="login">
            <a class="nav-link" href="/login">
              <i class="now-ui-icons users_single-02"></i>
              <p class="">Login</p>
            </a>
          </li>
          
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
            <i class="fab fa-twitter"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
            <i class="fab fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
            <i class="fab fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
          
        </ul>
      </div>
     </div>
   </nav>
          <div class="content">
            @yield('content')
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
                   <p class="mt-0 mb-0"> Pakeran Sendangmulyo<br>Minggir Sleman<br>Yogyakarta <strong> 55562 </strong><p>
                  
                 </li>
                 
               </ul>
              </nav>
              <div class="copyright float-right">
       
               
                <ul>
                  <button class="btn btn-info btn-mute"><i class="fa fa-whatsapp"></i>&nbsp; +62 81215405375 </button>
                  <button class="btn btn-primary btn-mute"><i class="fa fa-envelope"></i>&nbsp; help@dolanyo.com </button>
                </ul>
                <ul>
                  &copy;         
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, made with <i class="material-icons">favorite</i> by
                  <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
                  </ul>
              </div>
            </div>
          </footer>
   <!--   Core JS Files   -->
    @yield("script")
   
 </body>
 
 </html>
 