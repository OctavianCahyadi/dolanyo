@extends('layouts.master')



@section('title')
    Paket Wisata | DOLANYO
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Create Paket Wisata</h4>
    <div class="container">
        <form action="/paket-store" method="post"  enctype="multipart/form-data" >
            {{ csrf_field() }}

            <div class="form-group" >
                <label for="">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul Paket" required autocomplete="title" value="{{ old('title') }}">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group" >
                <label for="">Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi Paket" required autocomplete="deskripsi" value="{{ old('deskripsi') }}">
                @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            
            <div class="form-group=">
                <label for="">Overview</label>
                <div class="container mb-3">
                    <textarea name="overview" class="form-control @error('overview') is-invalid @enderror" rows="2" cols="2" placeholder="overview" id="editor1" required autocomplete="overview"> {{ old('overview') }} </textarea>
                    @error('overview')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="form-group=">
                <label for="">Fasilitas</label>
                <div class="container mb-3">
                    <textarea name="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" rows="2" cols="2" placeholder="fasilitas" id="editor2" required autocomplete="fasilitas"> {{ old('fasilitas') }} </textarea>
                    @error('fasilitas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="form-group=">
                <label for="">Ketentuan</label>
                <div class="container mb-3">
                    <textarea name="ketentuan" class="form-control @error('ketentuan') is-invalid @enderror" rows="2" cols="2" placeholder="ketentuan" id="editor3" required autocomplete="ketentuan"> {{ old('ketentuan') }} </textarea>
                    @error('ketentuan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="form-group" >
                <label for="">Harga Mulai</label>
                <input type="text" class="form-control @error('harga_mulai') is-invalid @enderror" name="harga_mulai" placeholder="Harga Mulai" required autocomplete="harga_mulai" value="{{ old('harga_mulai') }}">
                @error('harga_mulai')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <h6><span class="badge badge-neutral">Ranting</span></h5>
            <div class="form-group" >
                <div class="row">
                <div class="col-md-2 mt-1">
                    <label for="">Wisata Pegunungan</label>
                    <div class="slidecontainer">
                        <input type="range" min="0" max="4" class="slider" id="question1" name="ranting1" value="{{ old('ranting1') }}">
                        <label class="badge badge-neutral"><span id="question1score"></span></label>
                    </div>                                       
                </div>
                <div class="col-md-2 mt-1">
                    <label for="">Perkotaan/bangunan</label>
                    <div class="slidecontainer">
                        <input type="range" min="0" max="4" class="slider" id="question2" name="ranting2" value="{{ old('ranting2') }}">
                        <label class="badge badge-neutral"><span id="question2score"></span></label>
                    </div>                                       
                </div>
                <div class="col-md-2 mt-1">
                    <label for="">Sungai</label>
                    <div class="slidecontainer">
                        <input type="range" min="0" max="4"  class="slider" id="question3" name="ranting3" value="{{ old('ranting3') }}">
                        <label class="badge badge-neutral"><span id="question3score"></span></label>
                    </div>                                       
                </div>
                <div class="col-md-2 mt-1">
                    <label for="">Pantai</label>
                    <div class="slidecontainer">
                        <input type="range" min="0" max="4"  class="slider" id="question4" name="ranting4" value="{{ old('ranting4') }}">
                        <label class="badge badge-neutral"><span id="question4score"></span></label>
                    </div>                                       
                </div>
            </div>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    @foreach($kategori as $option )
                        <option value="{{ $option->id }}">{{ $option->kategori }}</option>
                    @endforeach                   
                </select>
            
            </div>
            
            <div class="custom-file mb-3 mt-3">
                <input type="file" name="file" class="custom-file-input" id="file" required>
                <label class="custom-file-label" >Choose file...</label>
              </div>
            <button type="submit" class="btn btn-success">Save</button>

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