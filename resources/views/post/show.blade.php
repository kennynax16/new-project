@extends('layouts.app')
@section('content')

        <div>
          {{$post->id}}.{{$post->name}}.{{$post->years}}
        </div>
        <div>
            {{$post->email}}
        </div>
        <form action="{{route('post.index')}}">
            <input type="submit" class="btn btn-primary" value="Назад">
        </form>
        <form action="{{route('post.destroy',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
        <form action="{{route('post.edit',$post->id)}}">
            <input type="submit" class="btn btn-primary" value="Изменить">
        </form>
@endsection
