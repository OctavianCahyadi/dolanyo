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
                    
                    <td>
                      <form action="/gallery-delete/{{ $row->id }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                              <button type="submit"  class="btn btn-danger">DELETE</button>
                      </form>  
                  </td>
                 </tr>
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