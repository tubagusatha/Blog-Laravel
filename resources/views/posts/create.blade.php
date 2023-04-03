@extends('layouts.app')


@section('title',"ubah Postingan")


@section('content')
    <h1>Buat Post Baru</h1>
<form method="POST" action="{{ url('posts') }}">

    @csrf 

    <div class="mb-3">
  <label for="title" class="form-label">Judul</label>
  <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
    <label for="content" class="form-label">kontent</label>
    <textarea class="form-control" id="content" rows="3" name="content"required></textarea>

    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ url("posts") }}" class="btn btn-success">kembali</a>


    </form>
    </div>

@endsection