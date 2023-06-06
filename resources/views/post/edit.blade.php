@extends('layouts.app')
@section('content')
    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="text" class="form-label">Имя</label>
            <input type="text" class="form-control" id="text" name="name" value="{{$post->name}}">
            <div class="mb-3">
                <label for="text" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="text" name="surname" value="{{$post->surname}}">
                <div class="mb-3">
                    <label for="text" class="form-label">Адрес электронной почты</label>
                    <input type="text" class="form-control" id="text" name="email" value="{{$post->email}}">
                    <div class="mb-3">
                        <label for="text" class="form-label">Возраст</label>
                        <input type="text" class="form-control" id="text" name="years" value="{{$post->years}}">
                        <label for="category">Категория </label>
                        <select class="form-control" id="category" name="category_id">
                            @foreach($categories as $category)
                                <option
                                    {{ $category->id === $post->category_id ? ' selected' : ''}}

                                    value="{{$category->id}}">{{$category->position}}</option>
                            @endforeach
                        </select>
                        <label for="category">Теги</label>
                        <select class="form-select" name="tags[]" multiple aria-label="пример множественного выбора">
                            @foreach($tags as $tag)
                                <option
                                    @foreach($post->tags as $postTag)
                                        {{ $tag->id === $postTag->id ? ' selected' : ''}}
                                    @endforeach
                                    value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
