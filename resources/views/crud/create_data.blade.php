@extends('layouts.app')
@section('title','Create User')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><span>Add User's</span> <span style="float: right;">
                       <a href="{{route('user-dashbord')}}" type="button" class="btn btn-primary">Back</a></span></div>
            <div class="card-body">
                <form class="form-horizontal" method="post" action="{{route('user-store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
@endsection