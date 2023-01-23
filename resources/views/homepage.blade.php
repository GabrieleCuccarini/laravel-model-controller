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
    <h1 class="display-5 fw-bold text-center">
       Welcome to Laravel_Model_Controller
   </h1>
    <div class="container d-flex flex-wrap">
            @php
                // dump($movies);
            @endphp
            @foreach ($movies as $movie) 
                <div class="card mx-2 my-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">({{$movie->id}}) {{$movie->title}} </h5>
                        <h5 class="card-title">Titolo originale: {{$movie->original_title}} </h5>
                        <p class="card-text">Nationalità: {{$movie->nationality}}</p>
                        <p class="card-text">Data di uscita: {{$movie->date}}</p>
                        <p class="card-text">Valutazione: {{$movie->vote}}</p>
                    </div>
                </div>    
            @endforeach
    </div>
</body>

</html>
