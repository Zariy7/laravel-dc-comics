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
    <div class="container">
        <div class="row">
            @foreach ($comics_db as $comic)
            <div class="col-3">
                <a href="{{ route('comic', $comic) }}">
                    <img src="{{ $comic->thumb }}" class="img-fluid img-thumbnail">
                    <h3>
                        {{ $comic->title }}
                    </h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>