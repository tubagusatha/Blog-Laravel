@extends('layouts.app')


@section('title')

@section('content')

    <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ date(" d M Y H:i", strtotime($post->created_at))}}</p>

    <p>{{ $post->content }}</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur reiciendis magnam ut dolore, veritatis impedit. Deserunt vero at unde veniam illo. Recusandae tempora distinctio voluptatibus reiciendis a esse aliquid laudantium.</p>
   
   <small>{{ $total }} komentar</small>


    @foreach($comments as $comment)
     <div class="card">
        <div class="card-body mb-3">
            <p>{{ $comment->comment }}</p>
        </div>
     </div>

    @endforeach

      </article>
      <a href="{{ url("posts") }}" class="btn btn-primary">kembali</a>


      @endsection