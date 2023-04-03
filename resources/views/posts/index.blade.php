@extends('layouts.app')

@section('title')
    Blog
@endsection


@section('content')

    <h1>
    <i class="fa-sharp fa-solid fa-blog"></i>
        BLOG-KU
        <a class="btn btn-success" href="{{ url('posts/create')}}">+ Buat Blog</a>
        <a class="btn btn-danger" href="{{ url('posts/trash')}}">Riwayat Hapus</a>
    </h1>
    <span class="badge bg-success">
        <p class="text-muted"> Total Postingan Aktif : {{ $total_active }}</p>
    </span>

    <span class="badge bg-warning">
    <p class="text-muted">Total Postingan Non Aktif : {{ $total_nonactive }}</p>

    </span>

    <span class="badge bg-primary">

    <p class="text-muted">Total Postingan Dihapus : {{ $total_dihapus }}</p>
    </span>



    @php($number = 1)
    @foreach($posts as $p )

    
        

    <div class="card my-4">
    <div class="card-body">
        <h5 class="card-body">{{ $p->title }}</h5>
        <p class="card-text">{{ $p->content }}</p>
        <p class="card-text"><small class="text-muted">Created at {{ date(" d M Y H:i"), strtotime($p->created_at) }}  </small></p>
        <a href="{{ url("posts/$p->slug") }}" class="btn btn-primary">Selengkapnya</a>
        <a href="{{ url("posts/$p->slug/edit") }}" class="btn btn-warning">Edit</a>

    </div>
    </div>
    @php($number++)
    @endforeach
@endsection

    