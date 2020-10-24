@extends('welcome')

@section('content')
        <div class="d-block bg-warning my-3">
            <h1 class="pt-3">{{ $post->title }}</h1>
            <hr>
            <p class="pb-3">{{ $post->description }}</p>
            <hr>
            <ul>
                @foreach ($post->toppings as $topic)
                    <li>{{ $topic }}</li>
                @endforeach
            </ul>
            <form action="/show/{{ $post->id }}" method="POST">
                @csrf
                {{-- @method('DELETE') --}}
                <button class="btn btn-danger my-3">Remove Post</button>
            </form>
        </div>
@endsection