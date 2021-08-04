<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    {{-- <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style> --}}
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="d-none">TodoList</h1>
            </div>
            <div class="col align-self-center text-right py-2">
                <a href="https://twitter.com/leonmatiasm" target="_blanck">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    leonmatiasm
                </a>
            </div>

        </div>

    </div>
    <div class="container">
        <p class="h1 text-center">Todolist</p>
        <div class="w-75 m-auto">
            <form action="{{ route('todo.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control rounded w-100 p-2 " type="text" name="title" id="" placeholder="Title" >
                </div>
                <div class="form-group">
                    <textarea class="form-control rounded w-100 p-2" rows="3" name="description" id="" placeholder="Content..."  ></textarea>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <input class="btn btn-primary" type="submit" value="Save" >
                </div>
            </form>

        </div>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="col w-auto text-center"><span class="d-none">#</span></th>
                    <th class="col w-25">Title</th>
                    <th class="col w-50">Description</th>
                    <th class="col w-25" >Actions </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i= 1;
                @endphp
                @foreach ($objetivos as $objetivo)
                <tr>
                    {{-- <td>{{$objetivos->count()}}</td> --}}
                    <td class="text-center ">{{$i}}</td>
                    <td><strong>{{$objetivo->title}}</strong></td>
                    <td>{{$objetivo->description}}</td>
                    <td class="container">
                        <div class="row w-100 m-0">
                            <div class="col">
                                <a href="{{route('todo.edit', $objetivo->id)}}" class="btn btn-outline-primary w-100">Edit</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('todo.destroy', $objetivo->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger  w-100 " onclick="confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>