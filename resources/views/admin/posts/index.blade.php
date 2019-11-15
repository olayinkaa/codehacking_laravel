@extends('layouts.admin')

@section('content')

<h4>All Posts</h4>

<div class="container-fluids">
    <div class="row">
        <div class="col-md-12">
        
            <div class="card shadow-md">
                <div class="card-body">
                @if($posts)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th>Category</th>
                                <th scope="col">Author</th>
                                <th scope="col">Title</th>
                                <th scope="col">Body</th>
                                <th scope="col">Created</th>
                                <th scope="col">Updated</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $i=1 ?>

                            @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>
                                    <img 
                                    width="100px"
                                    src="{{$post->photo ? $post->photo->file :'/images/avatar.png'}}" 
                                    alt="">
                                </td>
                                <td>{{$post->category->name}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{str_limit($post->body,100)}}</td>
                                <td>{{$post->created_at->diffForHumans()}}</td>
                                <td>{{$post->updated_at->diffForHumans()}}</td>
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