@extends('layouts.master')


@section('title')
    Transaksi Paket Wisata | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Transaksi Post</h4>
          @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
        </div>
        <form action="/transaksicari" method="GET">
          <div class="col-md-4">       
              <label>Cari Data Transaksi :</label>
              <div class="input-group">
                <input type="text" class="form-control " placeholder="Search..." name="cari" value="{{ old('cari') }}" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                  <input class="btn btn-info ml-4" type="submit" value="CARI">
                </div>
              </div>
          </div>
          <style>
            .selectWrapper{
              border-radius:36px;
              display:inline-block;
              overflow:hidden;
              background:honeydew;
              border:1px solid #cccccc;
              margin-left: 0pc;
            }
            .selectBox{
              width:140px;
              height:40px;
              border:0px;
              outline:none;
            }
          </style>
          <div class="col-md-4">
            <label>Cari Data Transaksi Berdasarkan :</label>
          <select class="selectWrapper" name="atribut">
            <option class="selectBox" selected="selected" value="id" >ID</option>
            <option class="selectBox" value="nama" >Nama</option>
          </select>
          </div>
        </form>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> ID  </th>
                <th> Nama  </th>
                <th> No Hp </th>
                <th>  Peserta  </th>
                <th>  Total Harga  </th>
                <th>  Paket  </th>
                <th>  Tanggal  </th>
               
                <th>  Status  </th>
                <th>  Delete  </th>
              </thead>
             <tbody>
               @foreach ($posts as $row)
                 <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->nama }}</td>
                     <td>{{$row->handphone}}</td>
                     <td class="text-center">{{$row->peserta}}</td>
                     <td>{{$row->harga}}</td>
                     <td>{{$row->paket}}</td>
                     <td>{{$row->tanggal}}</td>
                     <?php
                        if ($row->konfirmasi==0) {
                          $id=$row->id;
                          echo '<td><a href="/konfirmasi/'.$id.'" class="btn btn-primary">Konfirmasi</a></td>'; 
                        }else if ($row->konfirmasi==3 ){
                          echo '<td class="text-center"><h7><span class="badge badge-danger">Dibatalkan</span></h7></td>';
                        }
                         else {
                          echo '<td class="text-center"><h7><span class="badge badge-success">sukses</span></h7></td>';
                        }                        
                     ?>
                     <td class="text-center">
                      <a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fas fa-trash"></i> </a>
                  </td>
                    
                 </tr>
                 <!-- Modal HTML -->
                 <div id="myModal" class="modal fade">
                  <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                      <div class="modal-header">
                              
                        <h4 class="modal-title">Apakah anda yakin ?</h4>	
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Anda benar-benar ingin menghapus data ini ? Data yang sudah dihapus tidak dapat dikembalikan</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <form action="/transaksi-delete/{{ $row->id }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                                <button type="submit"  class="btn btn-danger">DELETE</button>
                        </form>  
                      </div>
                    </div>
                  </div>
                </div>
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


@section('scripts')
    
@endsection