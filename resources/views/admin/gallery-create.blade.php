@extends('layouts.master')



@section('title')
    Posted Blog | DOLANYO
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">New Photo Gallery</h4>
    <div class="container">
        <form action="/gallery-store" method="post"  enctype="multipart/form-data" >
            {{ csrf_field() }}


            <div class="form-group" >
                <label for="">Nama :</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama ...">
            </div>            
            <label for="">Image :</label>
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