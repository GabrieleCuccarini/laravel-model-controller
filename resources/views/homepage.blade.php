<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel_Model_Controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="display-5 fw-bold text-center mt-3">
       Welcome to Laravel_Model_Controller
   </h1>
    <div class="container-fluid d-flex justify-content-center flex-wrap w90 mt-2">
            @foreach ($movies as $movie) 
                <div class="card mx-1 my-2 color" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: ({{$movie->id}}) {{$movie->title}} </h5>
                         @if ($movie->original_title === $movie->title)
                        @else  
                            <h5 class="card-title">Titolo originale: {{$movie->original_title}} </h5>    
                         @endif
                        <p class="card-text">Nationalità: <b>{{$movie->nationality}}</b></p>
                        <p class="card-text">Data di uscita: <b>{{$movie->date}}</b></p>
                        <p class="card-text">Valutazione: <b>{{$movie->vote}}</b></p>
                    </div>
                </div>    
            @endforeach
    </div>
</body>

</html>
