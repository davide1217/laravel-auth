@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Index della CRUD</h1>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Bottoni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <th>{{ $post->title }}</th>
                        <th>bottoni</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
