@extends('layouts.master')



@section('title')
    Edit Paket Wisata | DOLANYO
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Paket Wisata</h4>
    <div class="container">
        <form action="/paket-update/{{ $paket->id }}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
            {{ method_field('PUT') }}


            <div class="form-group" >
                <label for="">Judul</label>
                <input value ="{{$paket->title}}" type="text" class="form-control" name="title" placeholder="Judul Paket">
            </div>

            <div class="form-group" >
                <label for="">Deskripsi</label>
                <input value ="{{$paket->deskripsi}}" type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Paket">
            </div>
            
            <div class="form-group=">
                <label for="">Overview</label>
                <div class="container mb-3">
                    <textarea  name="overview" class="form-control" rows="2" cols="2" placeholder="overview" id="editor1">{!!$paket->overview!!}</textarea>
                    </div>
            </div>

            <div class="form-group=">
                <label for="">Fasilitas</label>
                <div class="container mb-3">
                    <textarea name="fasilitas" class="form-control" rows="2" cols="2" placeholder="fasilitas" id="editor2">{!!$paket->fasilitas!!}</textarea>
                    </div>
            </div>

            <div class="form-group=">
                <label for="">Ketentuan</label>
                <div class="container mb-3">
                    <textarea name="ketentuan" class="form-control" rows="2" cols="2" placeholder="ketentuan" id="editor3">{!!$paket->ketentuan!!}</textarea>
                    </div>
            </div>

            <div class="form-group" >
                <label for="">Harga Mulai</label>
                <input value ="{{$paket->harga_mulai}}" type="text" class="form-control" name="harga_mulai" placeholder="Harga Mulai">
            </div>

            <h6><span class="badge badge-neutral">Ranting</span></h5>
            <div class="form-group" >
                <div class="row">
                <div class="col-md-2 mt-1">
                    <label for="">Wisata Pegunungan</label>
                    <div class="slidecontainer">
                        <input value ="{{$paket->pegunungan}}" type="range" min="1" max="4" class="slider" id="question1" name="ranting1">
                        <label class="badge badge-neutral"><span id="question1score"></span></label>
                    </div>                                       
                </div>
                <div class="col-md-2 mt-1">
                    <label for="">Perkotaan/bangunan</label>
                    <div class="slidecontainer">
                        <input value ="{{$paket->bangunan}}" type="range" min="1" max="4" class="slider" id="question2" name="ranting2">
                        <label class="badge badge-neutral"><span id="question2score"></span></label>
                    </div>                                       
                </div>
                <div class="col-md-2 mt-1">
                    <label for="">Wisata Sungai</label>
                    <div class="slidecontainer">
                        <input value ="{{$paket->sungai}}" type="range" min="1" max="4"  class="slider" id="question3" name="ranting3">
                        <label class="badge badge-neutral"><span id="question3score"></span></label>
                    </div>                                       
                </div>
                <div class="col-md-2 mt-1">
                    <label for="">Wisata pantai</label>
                    <div class="slidecontainer">
                        <input value ="{{$paket->pantai}}" type="range" min="1" max="4"  class="slider" id="question4" name="ranting4">
                        <label class="badge badge-neutral"><span id="question4score"></span></label>
                    </div>                                       
                </div>
                </div>
               
            </div>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <?php
                    $id=$paket->kategori;
                    ?>
                    @foreach($kategori as $option )
                         <option value="{{ $option->id }}" <?php if($id==$option->id) echo 'selected="selected"'; ?>>{{ $option->kategori }}</option>
                    @endforeach   
                    
                </select>
            </div>
        

            <div class="custom-file mb-3 mt-3">
                <input type="file" name="image" class="custom-file-input" id="image" required>
                <label class="custom-file-label" >Choose file...</label>
              </div>
              <button type="submit" class="btn btn-success">Update</button>
              <a href="/admin/paket" class="btn btn-danger">Cancel</a>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1',{
                    height: 50,
                    width:'70%'
                } );
                CKEDITOR.replace( 'editor2',{
                    height: 50,
                    width:'70%'
                } );
                CKEDITOR.replace( 'editor3',{
                    height: 50,
                    width:'70%'
                } );
            </script>

        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
   var sliders = document.getElementsByClassName("slider");

        for(var i=0; i<(sliders.length); i++) {
        sliders[i].addEventListener('input', function() {
            document.getElementById(this.getAttribute('id')+'score').innerText = this.value;
        });
        }
    </script>
@endsection