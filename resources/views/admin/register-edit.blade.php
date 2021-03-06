@extends('layouts.master')


@section('title')
    Registered Roles | DOLANYO
@endsection


@section('content')

<div calss="contailer">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <h3> Edit Role fore Registered user </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="/role-register-update/{{ $users->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                   <label> Name <label>
                                    <input type="text" name="username" value ="{{$users->name}}" class="form-control">
                                </div>
                            <div class="form-group">
                                <label>Give Role </label>
                                <select name="usertype" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="">None</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/admin/role-register" class="btn btn-danger">Cancel</a>
        
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