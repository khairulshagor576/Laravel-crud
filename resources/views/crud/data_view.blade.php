@extends('layouts.app')
@section('title','Data Show')
@section('content')
    <div class="container">
        <div class="col-md-8">
           <div class="card">
               <div class="card-header"><span style="font-weight: bold;">User's Data</span><span style="float: right;"><button type="button" class="btn btn-primary">Add User</button></span></div>
               <div class="card-body">
                   <table class="table">
                       <thead class="thead-dark">
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name</th>
                           <th scope="col">Email</th>
                           <th scope="col">Password</th>
                           <th scope="col">Action</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($users as $user)
                       <tr>
                           <th>1</th>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->password}}</td>
                           <td>
                               <a href="" class="btn btn-success">Edit
                                   <i class="fa fa-edit"></i>
                               </a>
                               <a href="" class="btn btn-danger">Delete
                                   <i class="fa fa-trash"></i>
                               </a>
                           </td>
                       </tr>
                       @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
        </div>
    </div>
@endsection