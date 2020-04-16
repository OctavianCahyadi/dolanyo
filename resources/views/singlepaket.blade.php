@extends('layouts.masterblog')

  @section('head')
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
 
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
  <link href="../assets/css/spinner.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/ispin/dist/ispin.css">
  <script defer src="https://unpkg.com/ispin"></script>
  <style>
    .datepicker{z-index:1151;}
    </style>
    <script>
    $(function(){
    $(“#tanggal”).datepicker({
    format:’yyyy/dd/mm’
    });
    });
    </script>
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
                  $harga=$paket->harga_mulai*$kategori->maxpeserta;
                  $pajak=$harga/10;
                  if (is_numeric($harga)){
                    $format_harga = number_format($harga, '0', ',', '.');                    
                  }
                  if (is_numeric($pajak)){
                    $format_pajak = number_format($pajak, '0', ',', '.');                    
                  }
                  $total=$paket->harga_mulai * $kategori->maxpeserta;
              @endphp
              <script>
                function fun(){                  
                  var price = "<?php echo $total ?>";  
                  var harga_mulai= "<?php echo $paket->harga_mulai ?>"; 
                  var member = document.getElementById("contactform-member").value;  
                  var max="<?php echo $kategori->maxpeserta ?>"; 
                  var temp=max/2;
                  var max2= Math.round(temp);
                  //var harga=harga_mulai*member;
                  var harga=Number(harga_mulai);

                  if (member < max2) {
                    harga=harga+(harga*25/100);
                  }

                  harga1=harga*member;

                  // var calculate = price / member;
                  // var temp = Math.ceil(calculate);
                  // var harga= Math.round(temp/1000)*1000;
                  var pajak=harga1/10;
                  var reverse = harga1.toString().split('').reverse().join('');
                  var reversepajak = pajak.toString().split('').reverse().join('');
                  ribuanpajak = reversepajak.match(/\d{1,3}/g);
                  ribuanpajak = ribuanpajak.join('.').split('').reverse().join('');

                  // var reversepaket = harga.toString().split('').reverse().join('');
                  // ribuanpaket = reversepaket.match(/\d{1,3}/g);

                  ribuan = reverse.match(/\d{1,3}/g);
                  ribuan = ribuan.join('.').split('').reverse().join('');
                  document.getElementById("member-kosten").innerHTML = ribuan;
                  document.getElementById("peserta").innerHTML = member;
                  document.getElementById("pajak").innerHTML = ribuanpajak;
                  document.getElementById("paket").innerHTML = harga;
                    }
                </script>

              <p class="lead">{!! $paket->deskripsi !!}</p> 
              <label class="" for="contactform-member"><span class="contact_form_span">Jumlah Peserta: </span> </label>
              <input style="width:13%;input[type=number]:focus {  border: 3px solid #555;};border-radius: 4px;" class="text-center" type="number" id="contactform-member" placeholder="Peserta" name="member" value="{{ $kategori->maxpeserta }}" min="{{ $kategori->minpeserta }}" max="{{ $kategori->maxpeserta }}"/>
              <button class="btn btn-primary" onclick="fun()">Hitung Harga</button>
              <p class="lead">Harga paket <strong>Rp. <span id="paket">{!! $paket->harga_mulai !!}</span> /pax</strong></p>
              <p class="lead">Total Harga yang harus dibayar <strong>Rp. <span id="member-kosten">{!! $format_harga !!}</span></strong> untuk <strong><span id="peserta">{!! $kategori->maxpeserta !!}</span> </strong>peserta *.</p> 
              <label class="" for="contactform-member"><span class="contact_form_span">*Total Harga belum ditambah pajak 10% Rp.<strong><span id="pajak">{!! $format_pajak !!}</span></strong></span> </label>
           
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
            <a href="" class="btn btn-lg btn-primary btn-rounded mb-4 " data-toggle="modal" data-target="#modalRegisterForm">Pesan Sekarang Juga !</a>
          </div>
        </div>
       
       </div>
       
     </div>
   </div>
          <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Pesan Sekarang</h4><span></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/transaksi" method="post"  enctype="multipart/form-data" >
                {{ csrf_field() }}

                <div class="modal-body mx-3">
                <div class="md-form mb-2">
                  <i class="fas fa-user prefix grey-text"></i><label data-error="wrong" data-success="right" for="orangeForm-name"><span>&nbsp;</span>Nama Lengkap</label>
                  <input type="text" id="orangeForm-name" name="nama" class="form-control validate">
                </div>

                <div class="md-form mb-2">
                  <i class="fas fa-phone prefix grey-text"></i><label data-error="wrong" data-success="right" for="orangeForm-hp"><span>&nbsp;</span>No Handphone</label>
                  <input type="text" id="orangeForm-phone" name="handphone" class="form-control validate" value="{{ Auth::user()->phone }}">
                </div>

                <?php
                   $mindata=$kategori->minpeserta;
                   $maxdata=$kategori->maxpeserta;
                   $totalharga=$paket->harga_mulai*$maxdata;
                  ?>

                <div class="md-form">
                  <i class="fas fa-lock prefix grey-text"></i><label data-error="wrong" data-success="right" for="orangeForm-jumlah"><span>&nbsp;</span>Jumlah Peserta</label>
                  <div class='ctrl align-items-center'>
                      <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
                      <div class='ctrl__counter'>
                        <input class='ctrl__counter-input' name="peserta" id="orangeForm-peserta" maxlength='10' type='text' value='<?php echo $mindata; ?>'>
                        <div class='ctrl__counter-num'><?php echo $mindata; ?></div>
                      </div>
                      <div class='ctrl__button ctrl__button--increment'>+</div>
                    </div>
                </div>

               

                <div class="md-form mb-3">
                  <input type="hidden" class="form-control" name="harga" placeholder="Harga" value="<?php echo $paket->harga_mulai; ?>">
                </div>

                <div class="md-form mb-3">
                  <input type="hidden" class="form-control" name="paket" placeholder="paket" value="{{ $paket->title }}">
                </div>
                
                <div class="md-form mb-3">
                  <input type="hidden" class="form-control" name="max" placeholder="max" value="{{ $kategori->maxpeserta }}">
                </div>

                <div class="md-form mb-3">
                  <input type="hidden" class="form-control" name="user_id" placeholder="user_id" value="{{ Auth::user()->id }}">
                </div>
                

                <div class="md-form mb-3">
                  <i class="fas fa-calendar-alt prefix grey-text"></i><label data-error="wrong" data-success="right" for="date-picker-example">Tanggal Rencana</label>
                  <input class="form-control" name="tanggal" type="date" id=”tanggal”>
                </div>

                <div class="md-form mb-2">
                  <i class="fas fa-map-marker-alt prefix grey-text"></i><label data-error="wrong" data-success="right" for="orangeForm-hp"><span>&nbsp;</span>Tempat Penjemputan</label>
                  <input type="text" id="orangeForm-tempat" name="tempat" class="form-control validate">
                </div>


              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-large">Pesan</button>
              </div>

              </form>
            </div>
          </div>
        </div>
        

   @endsection

   @section('script')
   <script>
    
    $(document).ready(function() {
     
      nowuiKit.initSliders();
    });

    
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }


    (function() {
        'use strict';

        function ctrls() {
          var _this = this;
          var max = <?php echo $maxdata; ?>;  
          var min = <?php echo $mindata; ?>;  
          this.counter = min;
          this.els = {
            decrement: document.querySelector('.ctrl__button--decrement'),
            counter: {
              container: document.querySelector('.ctrl__counter'),
              num: document.querySelector('.ctrl__counter-num'),
              input: document.querySelector('.ctrl__counter-input')
            },
            increment: document.querySelector('.ctrl__button--increment')
          };

          this.decrement = function() {
            var counter = _this.getCounter();
            var nextCounter = (_this.counter > min) ? --counter : counter;
            _this.setCounter(nextCounter);
          };

          this.increment = function() {
            var counter = _this.getCounter();
            var nextCounter = (counter < max) ? ++counter : counter;
            _this.setCounter(nextCounter);
          };

          this.getCounter = function() {
            return _this.counter;
          };

          this.setCounter = function(nextCounter) {
            _this.counter = nextCounter;
          };

          this.debounce = function(callback) {
            setTimeout(callback, 100);
          };

          this.render = function(hideClassName, visibleClassName) {
            _this.els.counter.num.classList.add(hideClassName);

            setTimeout(function() {
              _this.els.counter.num.innerText = _this.getCounter();
              _this.els.counter.input.value = _this.getCounter();
              _this.els.counter.num.classList.add(visibleClassName);
            }, 100);

            setTimeout(function() {
              _this.els.counter.num.classList.remove(hideClassName);
              _this.els.counter.num.classList.remove(visibleClassName);
            }, 200);
          };

          this.ready = function() {
            _this.els.decrement.addEventListener('click', function() {
              _this.debounce(function() {
                _this.decrement();
                _this.render('is-decrement-hide', 'is-decrement-visible');
              });
            });

            _this.els.increment.addEventListener('click', function() {
              _this.debounce(function() {
                _this.increment();
                _this.render('is-increment-hide', 'is-increment-visible');
              });
            });

            _this.els.counter.input.addEventListener('input', function(e) {
              var parseValue = parseInt(e.target.value);
              if (!isNaN(parseValue) && parseValue >= 0) {
                _this.setCounter(parseValue);
                _this.render();
              }
            });

            _this.els.counter.input.addEventListener('focus', function(e) {
              _this.els.counter.container.classList.add('is-input');
            });

            _this.els.counter.input.addEventListener('blur', function(e) {
              _this.els.counter.container.classList.remove('is-input');
              _this.render();
            });
          };
        };

        // init
        var controls = new ctrls();
        document.addEventListener('DOMContentLoaded', controls.ready);
      })();




  </script>

   <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
   <script src="../assets/js/plugins/moment.min.js"></script>
   <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->

   <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!--  Google Maps Plugin    -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
   <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
   
   @endsection
   