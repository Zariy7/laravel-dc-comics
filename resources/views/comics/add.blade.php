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
                <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                    <label for="thumb" class="form-label">Image Link:</label>
                    <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror">
                    @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="10" rows="10"></textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="series" class="form-label">Series:</label>
                    <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror">
                    @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="sale_date" class="form-label">Sale Date:</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror">
                    @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="type" class="form-label">Comic Type:</label>
                    <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                    @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="artists" class="form-label">Artists:</label>
                    <textarea type="text" name="artists" id="artists" class="form-control @error('artists') is-invalid @enderror" cols="10" rows="10"></textarea>
                    @error('artists')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="writers" class="form-label">Writers:</label>
                    <textarea type="text" name="writers" id="writers" class="form-control @error('writers') is-invalid @enderror" cols="10" rows="10"></textarea>
                    @error('writers')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <input type="submit" class="btn btn-success" value="Submit!">
                </form>
            </div>
        </div>
    </div>
</body>

</html>