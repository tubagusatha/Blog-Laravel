<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="{{ asset('boostrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">




    <style>
        .body {
            padding: 5px;
            border-bottom: 2px solid black;
            
        }
        small {
            color: grey;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>
        Riwayat Blog
        <a href="{{ url("posts") }}" class="btn btn-primary">kembali</a>
    </h1>

    @php($number = 1)
    @foreach($posts as $p )

    
        

    <div class="card my-4">
    <div class="card-body">
        <h5 class="card-body">{{ $p->title }}</h5>
        <p class="card-text">{{ $p->content }}</p>
        <p class="card-text"><small class="text-muted">Created at {{ date(" d M Y H:i"), strtotime($p->created_at) }}  </small></p>

    </div>
    </div>
    @php($number++)
    @endforeach
</div>
    <script src="{{ asset('boostrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>