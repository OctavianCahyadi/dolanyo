@extends('layouts.master')


@section('title')
    Posted Blog | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kategori Paket Wisata</h4>
          <a href="/admin/kategori-create" class="btn btn-success ">Create New kategori</a>
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
                <th> KATEGORI  </th>
                <th>  IMAGE  </th>
                <th>  EDIT  </th>
                <th>  DELETE  </th>
              </thead>
             <tbody>
               @foreach ($posts as $row)
                 <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->kategori }}</td>                    
                    <td><img width="150px" src="{{ url('/tumbnail/'.$row->image) }}"></td> 
                     <td>
                     <a href="/kategori-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                    </td>
                    <td>
                      <form action="/kategori-delete/{{ $row->id }}" method="post">
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