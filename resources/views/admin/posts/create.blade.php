@extends('layouts.app')

@section('content')
    <div class="container _container">
        <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf


            <label for="title">Titolo:</label>

            @error('title')
                {{ $message }}
            @enderror

            <input type="text" name="title"
            value="{{ old('title') }}"
            class="form-control @error('title') is-invalid @enderror">



            <label for="content">Corpo:</label>

            @error('content')
                {{ $message }}
            @enderror

            <textarea name="content" cols="30" rows="10"
            class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>


            <input class="btn btn-primary" type="submit" value="Pubblica">

        </form>
    </div>
@endsection
