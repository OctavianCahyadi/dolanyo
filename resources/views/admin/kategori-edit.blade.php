@extends('layouts.master')


@section('title')
   Edit Kategori Wisata | DOLANYO
@endsection


@section('content')

<div calss="contailer">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <h3>Edit Kategori Wisata</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <form action="/kategori-update/{{ $kategori->id }}" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group" >
                                    <label for="">Nama Kategori</label>
                                    <input type="text" class="form-control" name="kategori" placeholder="Nama Kategori" value="{{ $kategori->kategori }}">
                                </div>

                                <div class="form-group" >
                                    <label for="">Minimal Peserta</label>
                                    <input type="text" class="form-control" name="minimal" placeholder="Minimal Kategori" value="{{ $kategori->minpeserta }}">
                                </div>
                                <div class="form-group" >
                                    <label for="">Maksimal Pesera</label>
                                    <input type="text" class="form-control" name="maksimal" placeholder="Maksimal Kategori" value="{{ $kategori->maxpeserta }}">
                                </div>
                                
                                <div class="custom-file mb-3">
                                    <input type="file" name="file" class="custom-file-input" id="file" required>
                                    <label class="custom-file-label" >Choose file...</label>
                                  </div>
                                <button type="submit" class="btn btn-success">Save</button>


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