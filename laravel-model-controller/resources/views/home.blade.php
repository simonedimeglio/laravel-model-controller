<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quentin Tarantino - TRS</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>

        <header>
            <div class="logo-container">
                <img src="https://i.pinimg.com/originals/b0/17/18/b01718c0409eb6faee6a71c513025266.png" alt="Scritto e diretto da Quentin Tarantino">
            </div> 
            <h1>Trilogia del Revisionismo Storico</h1>
        </header>

        <main>

            <div class="container">
                @foreach($allMovies as $movie)
                <div class="card">
                    <h2>{{$movie->title}}</h2>
                    <img src="{{ $movie->cover }}" alt="Locandina del film {{$movie ->title}}"/>
                    <h3>DESCRIZIONE</h3>
                    <p>{{$movie->plot}}</p>
                </div>
            @endforeach
            </div>


        </main>
        
    </body>
</html>