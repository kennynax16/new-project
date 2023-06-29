@extends('layouts.app')
@section('content')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label">Имя</label>
            <input value="{{ old('name') }}" type="text" class="form-control" id="text" name="name">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Фамилия</label>
                <input value="{{ old('surname') }}" type="text" class="form-control" id="text" name="surname">
                @error('surname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Адрес электронной почты</label>
                    <input value="{{ old('email') }}" type="text" class="form-control" id="text" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Возраст</label>
                        <input value="{{ old('years') }}" type="text" class="form-control " id="text" name="years">
                        @error('years')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                        <label for="category">Категория </label>
                        <select class="form-select " name="category_id">
                            @foreach($categories as $category)
                                <option
                                    {{old('category_id')==$category->id ? 'selected' : '' }}
                                    value="{{$category->id}}">{{$category->position}}</option>
                            @endforeach
                        </select>
                        <label for="tag">Теги</label>
                        <select class="form-select" name="tags[]" multiple aria-label="пример множественного выбора">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
