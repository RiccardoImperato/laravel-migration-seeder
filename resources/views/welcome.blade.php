<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="container">
        <h1 class="text-center my-5">Trains</h1>
        <ul>
            @foreach ($trains as $train)
                <li class="card p-3 my-3 flex-row">
                    <div class="w-50">
                        <h5>Partenza</h5>
                        {{ $train['stazione_partenza'] }} - data/ora: {{ $train['orario_partenza'] }}
                    </div>
                    <div class="w-50">
                        <h5>Arrivo</h5>
                        {{ $train['stazione_arrivo'] }} - data/ora: {{ $train['orario_arrivo'] }}
                    </div>
                </li>
            @endforeach
        </ul>
    </main>
</body>

</html>
