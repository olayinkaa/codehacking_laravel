@extends('layouts.admin')

@section('content')


<h4>Users</h4>


<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                
                @if($users)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Active</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td scope="row">{{$user->id}}</td>
                        <td>
                            <img 
                            height="100"
                            src="{{$user->photo?$user->photo->file:'/images/avatar.png'}}" 
                            alt="">
                        </td>
                        <td>
                        <a href="{{route('users.edit', $user->id)}}">
                        {{$user->name}}                        
                        </a>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>
                        {{$user->is_active==1?'Active':'Not Active'}}
                        </td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else

                NO AVAILABLE DATA

                @endif

                </div>
            </div>
        </div>
    </div>
</div>



@stop