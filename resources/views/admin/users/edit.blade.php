@extends('layouts.admin')

@section('content')



<div class="container-fluid">


    <h4>Edit Users</h4>

    <div class="row">
        <div class="col-md-2">
        
        <img src="{{$user->photo ? $user->photo->file :'/images/avatar.png'}}" 
        alt=""
        class="img-responsive rounded-circle"
        width="200"
        height="200"
        >

        </div>
        <div class="col-md-6">
        @include('includes.form_errors')

        {!! Form::model($user,['method'=>'PATCH','action' => ['AdminUsersController@update',$user->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::text('email',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',$roles,null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array(1=>'Active',0=>'Inactive'),null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Profile Image:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','Password:')!!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        
        </div>
    </div>
</div>



@stop