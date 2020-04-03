@extends('layouts.master')


@section('title')
    Respons Bantuan | DOLANYO
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><strong> Response Bantuan </strong></h4>
          @if (session('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
      @endif
        </div>
        <div class="card-body">
            <label for="exampleFormControlTextarea1">ID :</label>
            <h5>{{$bantuan->id}}</h5>
            <label for="exampleFormControlTextarea1">Nama :</label>
            <h5>{{$bantuan->nama}}</h5>
            <label for="exampleFormControlTextarea1">Email :</label>
            <h5>{{$bantuan->email}}</h5>
            <label for="exampleFormControlTextarea1">Pertanyaan :</label>
            <h5>{{$bantuan->pertanyaan}}</h5>
            
            <label for="exampleFormControlTextarea1">Jawaban :</label>
            
            

            <form action="/kirimresponse" method="post"  name="Form1" id="Form1" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <textarea class="form-control" name="jawaban" id="editor1" rows="15" cols="100"></textarea>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="id" placeholder="id" value="{{$bantuan->id}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="nama" placeholder="nama" value="{{$bantuan->nama}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="email" placeholder="email" value="{{$bantuan->email}}">
                </div>
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="pertanyaan" placeholder="pertanyaan" value="{{$bantuan->pertanyaan}}">
                </div>
                @php
                    $newDateFormat = $bantuan->created_at->format('d/m/Y');
                @endphp
                <div class="md-form mb-3">
                    <input type="hidden" class="form-control" name="waktu" placeholder="waktu" value="{{$newDateFormat}}">
                </div>
               
               
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-large" >Balas</button>
                    <a href="/admin/bantuan" class="btn btn-danger">Cancel</a>
                </div>
            </form>
           
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