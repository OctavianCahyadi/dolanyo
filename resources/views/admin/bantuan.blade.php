@extends('layouts.master')


@section('title')
    Bantuan | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bantuan</h4>
          @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
        </div>
        <form action="/showunrespons" method="GET">
          <div class="col-md-4">       
              <label>Tampil bantuan yang belum direspons :</label>
              <div class="input-group">
                <div class="input-group-append">
                  <input class="btn btn-info ml-4" type="submit" value="Show">
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
         
        </form>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> ID  </th>
                <th> Email  </th>
                <th> Nama  </th>
                <th> Pertanyaan </th>
                <th>  Jawaban  </th>
                <th>  Status  </th>
                <th class="text-center">  DELETE  </th>
              </thead>
             <tbody>
               @foreach ($posts as $row)
                 <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->nama}}</td>
                     <td>{{$row->email }}</td>
                     <td>{!!substr(strip_tags($row->pertanyaan),0,50)!!}{{ strlen(strip_tags($row->pertanyaan))>50 ?'...' :"" }}</td>
                     <td>{!!substr(strip_tags($row->jawaban),0,50)!!}{{ strlen(strip_tags($row->jawaban))>50 ?'...' :"" }}</td>
                     <?php
                        if ($row->respons==0) {
                          $id=$row->id;
                          echo '<td><a href="/bantuan/'.$id.'" class="btn btn-primary">Respons</a></td>'; 
                        }
                         else {
                          echo '<td class="text-center"><h7><span class="badge badge-success">Confirmed</span></h7></td>';
                        }
                     ?>
                      <td class="text-center">
                      <button class="btn btn-danger" data-toggle="modal" data-id="{{ $row->id }}" data-target="#delete"><i class="fas fa-trash"></i> </button>
                  </td>
                 </tr>
                  <!-- Modal HTML -->
                  <div id="delete" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-confirm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Apakah anda yakin ?</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form action="/bantuan-delete/data" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                          <p>Anda benar-benar ingin menghapus data ini ? Data yang sudah dihapus tidak dapat dikembalikan</p>
                          <input type="hidden" name="datadelete" id="id" value="">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
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