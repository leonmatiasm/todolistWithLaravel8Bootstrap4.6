<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <title>Edit</title>
</head>
<body>
    <div class="container">
        <p class="h1">Edit</p>
        <form action="{{route('todo.update', $id->id)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- {{dd($id->title)}} --}}
            <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{$id->title}}">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" id="">{{$id->description}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>