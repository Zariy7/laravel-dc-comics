<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container my-5 py-5 bg-white rounded">
        <div class="row">
            <h1 class="text-center pb-5 text-info">Comic Catalogue</h1>
            @foreach ($comics_db as $comic)
            <div class="col-3">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" class="comic-thumbnail">
                    <h5 class="text-center">
                        {{ $comic->title }}
                    </h5>
                </a>
                <a href="{{ route('comics.edit', $comic->id) }}">
                    <button class="btn btn-primary">Edit</button>
                </a>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-around">
                <a href="{{ route('comics.create') }}">
                    <button class="btn btn-success">Add Your Own!</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>