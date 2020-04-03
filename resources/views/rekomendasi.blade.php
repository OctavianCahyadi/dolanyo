
@extends('layouts.masterblog')

@section('head')
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
  Rekomendasi Paket Wisata
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
<style>
  .card {
  
    height: 300px;
  width: 350px;
  border-radius: 10px;
  box-shadow: 5px 5px 10px 7px rgba(0,0,0,0.01), -5px -5px 30px 7px rgba(0,0,0,0.12);
  cursor: pointer;
  transition: 1.5s;
}
  .card:hover {
    transform: scale(1.1, 1.1);
    box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
      -5px -5px 30px 15px rgba(0,0,0,0.22);
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
        <div class="col-md-10 ml-auto mr-auto">
          <div class="brand text-center">
            <h1 class="title" style="color: white">Rekomendasi Paket Untuk Anda</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="brand text-center">
            <a href="/rekomendasi0">
              <button href type="submit" class="btn btn-default btn-large " >Reset Recommendations</button>
              </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
   <div class="main main-raised">
     <div class="container">
        <div class="row justify-content-center">
          <div class="card-deck justify-content-center" >
            
            @php
                $counter=0;
            @endphp
            @foreach ($rekomendasi as $item)
              @foreach ($paket as $item2)
                @if ($item2->title==$item->paket)
                  <a class="class" href="/paketdetail/{{ $item2->id }}" >
                    <div class="card mb-5 ml-5 mr-5" style="background-image: url('{{ url('/data_file/'.$item2->image) }}')">
                      @php
                          $harga=$item2->harga_mulai;
                          if (is_numeric($harga)){
                            $format_harga = 'Rp '. number_format($harga, '2', ',', '.');
                          }
                          $counter++;
                      @endphp
                      <div class="card-head mt-3" style="background-color: rebeccapurple;">
                        <h4 class="card-title text-center mt-3 mb-3 text-light font-weight-bold  "><strong>{{ $item2->title }}</strong></h4>
                      </div>
                        <div class="card-body mt-0 ">        
                            <h3 class="card-tittle text-mute mb-0 mt-2 text-light font-weight-bold " >Mulai </h3>
                            <h3 class=" text-light mt-1 mb-5"><strong class=" badge-primary" style="width: 12rem; hight: 5rem;"><?php echo $format_harga; ?></strong> /pax</h3>
                            <h3 class="badge badge-primary text-center mb-0 ">Rekomendasi &nbsp;<span style="font-size: 150%;"><?php echo $counter ?></span> 
                          </div>
                          <div class="card-footer text-left">
                            <button style="border-radius: 12px;" type="button" class="btn btn-primary ml-3" data-toggle="popover" title="Destinasi" data-content="{{ $item2->deskripsi }}">Detail</button>
                            </div>
                    </div>    
                  </a>
                @endif
             @endforeach
           @endforeach
         </div>
       </div>
     </div>
   </div>
   @endsection

   @section('script')
   <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            placement : 'top',
            trigger : 'hover'
        });
    });
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
   
  
  
 