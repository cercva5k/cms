@extends('welcome')

@section('content')
    @foreach ($posts as $post)
        <div class="card bg-light py-2 my-3">
            <h5>{{ $post->title }}</h5>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach
@endsection