@extends('layouts.app')

@section('content')
    <div class="container _container">
        <form action="{{ route('admin.posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')

            <label for="title">Titolo:</label>

            @error('title')
                {{ $message }}
            @enderror

            <input type="text" name="title"
            @if (!$errors->any())
                value="{{ $post->title }}"
            @else
                value="{{ old('title') }}"
            @endif
            class="form-control @error('title') is-invalid @enderror">



            <label for="content">Corpo:</label>

            @error('content')
                {{ $message }}
            @enderror

            @if (!$errors->any())

                <textarea name="content" cols="30" rows="10"
                class="form-control @error('content') is-invalid @enderror">{{ $post->content }}</textarea>

            @else

                <textarea name="content" cols="30" rows="10"
                class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>

            @endif

            <input class="btn btn-primary" type="submit" value="Pubblica">

        </form>
    </div>
@endsection
