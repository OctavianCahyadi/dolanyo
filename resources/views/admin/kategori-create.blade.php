@extends('layouts.master')


@section('title')
    Create Kategori | DOLANYO
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Create New Kategori</h4>
    <div class="container">
        <form action="/kategori-store" method="post"  enctype="multipart/form-data" >
            {{ csrf_field() }}


            <div class="form-group" >
                <label for="">Nama Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="kategori" placeholder="Nama Kategori" required autocomplete="kategori">
                @error('kategori')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group" >
                <label for="">Minimal Peserta</label>
                <input type="text" class="form-control @error('minimal') is-invalid @enderror" name="minimal" placeholder="Minimal Kategori" required autocomplete="minimal">
                @error('minimal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group" >
                <label for="">Maksimal Pesera</label>
                <input type="text" class="form-control @error('maksimal') is-invalid @enderror" name="maksimal" placeholder="Maksimal Kategori" required autocomplete="maksimal">
                @error('maksimal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="custom-file mb-3">
                <input type="file" name="file" class="custom-file-input" id="file" required>
                <label class="custom-file-label" >Choose file...</label>
              </div>
            <button type="submit" class="btn btn-success">Save</button>
          

        </form>
    </div>
</div>

@endsection

@section('scripts')

@endsection