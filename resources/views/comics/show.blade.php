<head>
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
    </div>
</div>