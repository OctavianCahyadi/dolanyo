@extends('layouts.master')


@section('title')
    Gallery | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Gallery</h4>
          <a href="/admin/gallery-create" class="btn btn-success">Create New Gallery</a>
          @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> ID  </th>
                <th> NAMA  </th>               
                <th>  IMAGE  </th>                
                <th>  DELETE  </th>
              </thead>
             <tbody>
               @foreach ($paket as $row)
                 <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->nama }}</td>
                     
                    <td><img width="150px" src="{{ url('/tumbnail/'.$row->image) }}"></td> 
                    
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
                          <form action="/gallery-delete/{{ $row->id }}" method="post">
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
              {{ $paket->links() }}
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>   
@endsection


@section('scripts')
    
@endsection