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
                <input type="text" class="form-control" name="kategori" placeholder="Nama Kategori">
            </div>
            <div class="form-group" >
                <label for="">Minimal Peserta</label>
                <input type="text" class="form-control" name="minimal" placeholder="Minimal Kategori">
            </div>
            <div class="form-group" >
                <label for="">Maksimal Pesera</label>
                <input type="text" class="form-control" name="maksimal" placeholder="Maksimal Kategori">
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