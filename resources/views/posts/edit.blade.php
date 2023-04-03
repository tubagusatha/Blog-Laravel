@extends('layouts.app')

@section('title', "edit")

@section('content')

    <h1>Ubah post baru</h1>
<form method="POST" action="{{ url("posts/{$post->slug}") }}">
    @method('PATCH')
    @csrf 

    <div class="mb-3">
  <label for="title" class="form-label">Judul</label>
  <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
    </div>
    <div class="mb-3">
    <label for="content" class="form-label">kontent</label>
    <textarea class="form-control" id="content" rows="3" name="content" value="{{ $post->content }}" required>{{ $post->content }}</textarea>

    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="button" class="btn btn-danger my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
    <a href="{{ url("posts") }}" class="btn btn-success">kembali</a>
    
   


</div>  



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Ini?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Kamu Beneran Mau Hapus Postingan</h5>
        <span>'{{ $post->title }}'</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>

        </form>

    <form method="POST" class="" action="{{ url("posts/$post->id") }}" >
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-primary">Iya</button>
        </form>
      </div>
    </div>
  </div>

</div>  


    
@endsection