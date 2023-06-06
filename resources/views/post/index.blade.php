@extends('layouts.app')
@section('content')
    @foreach($posts as $post)
        <div>
           <a href="{{route('post.show',$post->id)}}">{{$post->id}}.{{$post->name}}</a>
        </div>
    @endforeach
    <form action="{{route('post.create')}}">
    <input type="submit" class="btn btn-success" value="Создать">
    </form>


@endsection
