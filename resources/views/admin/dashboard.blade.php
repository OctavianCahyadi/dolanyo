@extends('layouts.master')


@section('title')
    Dashboard | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-center">Selamat Datang Di Dashboard <br> <strong>Sistem Informasi Dolanyo</strong></h4>
        <br>
        @php
         
         function tgl_indo($tanggal){
                        $bulan = array (
                            1 =>   'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                        $pecahkan = explode('-', $tanggal);
                        
                        // variabel pecahkan 0 = tanggal
                        // variabel pecahkan 1 = bulan
                        // variabel pecahkan 2 = tahun
                    
                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                    }
              $ldate = date('Y-m-d');
         @endphp
        
         <h5 class="card-title"><strong>Tanggal : </strong>{{ tgl_indo(date($ldate))}}</h5>
          @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
           
            
          </div>
        </div>
      </div>
    </div> 
  </div>   
@endsection


@section('scripts')
    
@endsection