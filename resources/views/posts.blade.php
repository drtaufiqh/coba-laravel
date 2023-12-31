@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search . . ." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="search">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-body-secondary text-muted">
                    By: <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more..</a>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7);"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <p>
                            <small class="text-body-secondary text-muted">
                                By: <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}...</p>
                        <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    @else
    <p class="text-center fs-4">No post found.</p>
    @endif
    {{-- @foreach ($posts->skip(1) as $post)
    <article>
        <div class="mb-3 border-bottom pb-3">
            <h2>
                <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>By: <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}...</p>
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more..</a>
        </div>
    </article>
    @endforeach --}}
@endsection
