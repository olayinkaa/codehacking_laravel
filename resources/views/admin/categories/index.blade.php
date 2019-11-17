@extends('layouts.admin')

@section('content')

    <h3>POST CATEGORIES</h3>

    <div class="container-fluids mt-5">
        <div class="row">

            <div class="col-md-4">
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store']) !!}

            <div class="form-group">
                    {!! Form::label('name', 'Categy Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-primary btn-block']) !!}
            </div>

{!! Form::close() !!}

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        @if($categories)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1  ?>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                    <a href="{{route('categories.edit',$category->id)}}">
                                        {{$category->name}}
                                    </a>
                                    </td>
                                    <td>{{$category->created_at == NULL ?"-" : $category->created_at->diffForHumans()}}</td>
                                    <td>{{$category->updated_at == NULL ?"-" : $category->updated_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        
        </div>
    </div>

@stop