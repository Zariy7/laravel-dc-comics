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

<div class="container text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                {{$comic->title}}
            </h1>
        </div>
        <div class="col-12 d-flex">
            <img src="{{$comic->thumb}}" class="comic-detailed-image my-3">
            <div class="px-3">
                <div>
                    <span class="text-warning">Description:</span>
                    <p>
                        {{$comic->description}}
                    </p>
                </div>
                <div>
                    <span class="text-warning">Price:</span>
                    <div>
                        {{$comic->price}}
                    </div>
                </div>
                <div>
                    <span class="text-warning">Series:</span>
                    <div>
                        {{$comic->series}}
                    </div>
                </div>
                <div>
                    <span class="text-warning">Sale Date:</span>
                    <div>
                        {{$comic->sale_date}}
                    </div>
                </div>
                <div>
                    <span class="text-warning">Artists:</span>
                    <div>
                        {{implode(', ', explode(',', $comic->artists))}}.
                    </div>
                </div>
                <div>
                    <span class="text-warning">Writers:</span>
                    <div>
                        {{implode(', ', explode(',', $comic->writers))}}.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex">
            <a href="{{ route('comics.edit', $comic->id) }}" class="me-3">
                <button class="btn btn-primary">Edit</button>
            </a>

            <form action="{{ route('comics.destroy', $comic->id)}}" method="POST" onsubmit="return confirm('Do you want to remove this comic from the catalogue?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>