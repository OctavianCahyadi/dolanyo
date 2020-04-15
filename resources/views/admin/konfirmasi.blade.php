@extends('layouts.master')


@section('title')
    Transaksi Paket Wisata | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><strong> Konfirmasi Paket Wisata </strong></h4>
          @if (session('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
      @endif
        </div>
                @php
                  $harga=$transaksi->harga;
                  if (is_numeric($harga)){
                    $format_harga = 'Rp '. number_format($harga, '2', ',', '.');
                    
                  }
                @endphp
        <div class="card-body">
            <label for="exampleFormControlTextarea1">Nama Pemesan :</label>
            <h5>{{$transaksi->nama}}</h5>
            <label for="exampleFormControlTextarea1">Nomor Handphone :</label>
            <h5>{{$transaksi->handphone}}</h5>
            <label for="exampleFormControlTextarea1">Email Pemesan :</label>
            <h5>{{$users->email}}</h5>
            <label for="exampleFormControlTextarea1">Tanggal Wisata :</label>
            <h5>{{$transaksi->tanggal}}</h5>
            <label for="exampleFormControlTextarea1">Jumlah Peserta :</label>
            <h5>{{$transaksi->peserta}}</h5>
            <label for="exampleFormControlTextarea1">Paket yang diambil :</label>
            <h5>{{$pakets->title}}</h5>
            <label for="exampleFormControlTextarea1">Tempat Penjemputan :</label>
            <h5>{{$transaksi->tempat}}</h5>
            
            

            <form action="" method="post"  name="Form1" id="Form1" enctype="multipart/form-data" >
                {{ csrf_field() }}

                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="nama" placeholder="nama" value="{{$transaksi->nama}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="handphone" placeholder="handphone" value="{{$transaksi->handphone}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="peserta" placeholder="peserta" value="{{$transaksi->peserta}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="paket" placeholder="paket" value="{{$pakets->title}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="idpaket" placeholder="idpaket" value="{{$pakets->id}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="email" placeholder="email" value="{{$users->email}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="tanggal" placeholder="tanggal" value="{{$transaksi->tanggal}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="id" placeholder="id" value="{{$transaksi->id}}">
                </div>

                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="deskripsi" placeholder="deskripsi" value="{{$pakets->deskripsi}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="idtransaksi" placeholder="idtransaksi" value="{{$transaksi->id}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="harga" placeholder="harga" value="{{$transaksi->harga}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="tempat" placeholder="tempat" value="{{$transaksi->tempat}}">
                </div>
                
                <div class="modal-footer d-flex justify-content-center">
                    <button id="btn1" name="btn1" type="submit" class="btn btn-success btn-large" onclick="return OnButton1();">Konfirmasi</button>
                    <a href="#myModal" class="btn btn-danger btn-large trigger-btn" data-toggle="modal">Bantalkan </a>
                    <a href="/admin/transaksi" class="btn btn-danger">Cancel</a>
                </div>
            </form>
             <!-- Modal HTML -->
             <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                  <div class="modal-content">
                    <div class="modal-header">
                            
                      <h4 class="modal-title">Apakah anda yakin ?</h4>	
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda benar-benar ingin membatalkan transaksi ini ?</p>
                    </div>
                    <div class="modal-footer">
                      <form action="/kirimemailbatal" method="post">
                        {{ csrf_field() }}
                        <label for="exampleFormControlTextarea1">Pesan Email Alasan Pembatalan :</label>
                        <textarea class="form-control" name="overview" id="editor1" rows="15" cols="100">
                        </textarea>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="nama" placeholder="nama" value="{{$transaksi->nama}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="handphone" placeholder="handphone" value="{{$transaksi->handphone}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="peserta" placeholder="peserta" value="{{$transaksi->peserta}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="paket" placeholder="paket" value="{{$pakets->title}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="idpaket" placeholder="idpaket" value="{{$pakets->id}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="email" placeholder="email" value="{{$users->email}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="tanggal" placeholder="tanggal" value="{{$transaksi->tanggal}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="id" placeholder="id" value="{{$transaksi->id}}">
                       </div>
       
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="deskripsi" placeholder="deskripsi" value="{{$pakets->deskripsi}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="idtransaksi" placeholder="idtransaksi" value="{{$transaksi->id}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="harga" placeholder="harga" value="{{$transaksi->harga}}">
                       </div>
                       <div class="md-form mb-3">
                           <input type="hidden" class="form-control" name="tempat" placeholder="tempat" value="{{$transaksi->tempat}}">
                       </div>
                       <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                              <button type="submit"  class="btn btn-danger">Batalkan</button>
                      </form>  
                    </div>
                  </div>
                </div>
              </div>



            <script language=javascript>
               
                function OnButton1()
                {
                    document.Form1.action = "/kirimemail"    // First target
                    document.Form1.submit();        // Submit the page
                    return true;
                }
                function OnButton2()
                {
                    document.Form1.action = "/kirimemailbatal"    // First target
                    document.Form1.submit();        // Submit the page
                    return true;
                }
               
                </script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </div>
      </div>
    </div> 
  </div>   
@endsection


@section('scripts')
    
@endsection