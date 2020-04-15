@extends('layouts.master')


@section('title')
    Registered Roles | DOLANYO
@endsection


@section('content')
<style>
  
</style>




<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Registered Roles</h4>
          @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
        </div>

        <form action="/user/cari" method="GET">
          <div class="col-md-4">       
              <label>Cari Data User :</label>
              <div class="input-group no-border">
                <input type="text" class="form-control " placeholder="Search..." name="cari" value="{{ old('cari') }}" required >
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
            <label>Cari Data User berdasarkan :</label>
          <select class="selectWrapper" name="atribut">
            <option class="selectBox" selected="selected" value="nama" >Nama</option>
            <option class="selectBox" value="email" >Email</option>
          </select>
          </div>
        </form>
     
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> ID  </th>
                <th> Name  </th>
                <th> Phone </th>
                <th>  Email  </th>
                <th>  Role  </th>
                <th>  EDIT  </th>
                <th>  DELETE  </th>
              </thead>
             <tbody>
               @foreach ($users as $row)
                 <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->name }}</td>
                     <td>{{$row->phone}}</td>
                     <td>{{$row->email}}</td>
                     <td>{{$row->usertype}}</td>
                     <td>
                     <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                    </td>
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
                        <form action="/role-delete/{{ $row->id }}" method="post">
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
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>   
@endsection


@section('scripts')
    
@endsection