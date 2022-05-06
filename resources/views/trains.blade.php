<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
        
        </head>
        
        <body>
            <header>
                <h1>Trains</h1>
            </header>
            <main class="container">
                @foreach ($data as $train)
                <div class="card">
                    <div class="code">
                        {{ $train->id_treno }} <i class="fa-solid fa-star"></i>
                    </div>
                    <h2>{{ $train->stazione_partenza }} -> {{ $train->stazione_arrivo }}</h2>
                    <ul>
                        <li>Orario di partenza: {{ date("H:m:s" , strtotime($train->orario_partenza)) }} </li>
                        <li>Orario di arrivo: {{ date("H:m:s" , strtotime($train->orario_arrivo)) }}</li>
                    </ul>
                </div>
                @endforeach
            </main>
            {{ $data->links() }}
        </body>
</html>
