@extends('layouts.app')
@section('title','Create User')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Add User's</div>
            <div class="card-body">
                <form class="form-horizontal" method="post" action="{{route('user-update',$users->id)}}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$users->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{$users->password}}">
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
@endsection