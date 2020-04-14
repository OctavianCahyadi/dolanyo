@extends('layouts.master')


@section('title')
    Posted Blog | DOLANYO
@endsection


@section('content')

<div calss="contailer">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <h3> Edit Posted Blog </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <form action="/post-update/{{ $posts->id }}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                   <label> title </label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value ="{{$posts->title}}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Body</label>
                                    
                                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="editor1" rows="15" cols="100">{!! $posts->body !!}</textarea>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                </div>

                                <div class="custom-file mb-3">
                                    <input type="file" name="file" class="custom-file-input" id="file">
                                    <label class="custom-file-label" >Choose file...</label>
                                  </div>
                              
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/dashboard" class="btn btn-danger">Cancel</a>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection