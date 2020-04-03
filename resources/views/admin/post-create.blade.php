@extends('layouts.master')



@section('title')
    Posted Blog | DOLANYO
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Create Post</h4>
    <div class="container">
        <form action="/post-store" method="post"  enctype="multipart/form-data" >
            {{ csrf_field() }}


            <div class="form-group" >
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post title">
            </div>
            <div class="form-group">               
                <input type="hidden" class="form-control" name="user_id" placeholder="Post title" value="{{ Auth::user()->id }}">
            </div>

            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" class="form-control" rows="5" placeholder="Post content" id="editor1"></textarea>
            </div>

            <div class="custom-file mb-3">
                <input type="file" name="file" class="custom-file-input" id="file" required>
                <label class="custom-file-label" >Choose file...</label>
              </div>
            <button type="submit" class="btn btn-success">Save</button>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                config.extraPlugins = 'textindent';
            </script>

        </form>
    </div>
</div>

@endsection

@section('scripts')

@endsection