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
            <div class="col-12 text-white">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                    <label for="thumb" class="form-label">Image Link:</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old('thumb') ?? $comic->thumb }}">
                    
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') ?? $comic->title }}">

                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" name="description" id="description" class="form-control" cols="10" rows="10">{{ old('description') ?? $comic->description }}</textarea>

                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') ?? $comic->price }}">

                    <label for="series" class="form-label">Series:</label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ old('series') ?? $comic->series }}">

                    <label for="sale_date" class="form-label">Sale Date:</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date') ?? $comic->sale_date }}">

                    <label for="type" class="form-label">Comic Type:</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ old('type') ?? $comic->type }}">

                    <label for="artists" class="form-label">Artists:</label>
                    <textarea type="text" name="artists" id="artists" class="form-control" cols="10" rows="10">{{ old('artists') ?? $comic->artists }}</textarea>

                    <label for="writers" class="form-label">Writers:</label>
                    <textarea type="text" name="writers" id="writers" class="form-control" cols="10" rows="10">{{ old('writers') ?? $comic->writers }}</textarea>
                    
                    <input type="submit" class="btn btn-success" value="Submit!">
                </form>
            </div>
        </div>
    </div>
</body>

</html>