<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
        
        </style>
    </head>
    <body>
    <h1><?php echo $pagina ?></h1>
    @isset($esportes)
        @foreach ($esportes as $key => $esporte)
             @foreach ($esporte as $key => $esp)
                @isset($esp)
                    @if($key == 'tipo')
                        @switch($esp)
                            @case($esp == 'E')
                                <p><span style="font-size: 24px; font-weight: 800">{{$key}}</span>: {{$esp}} - Equipe</p>
                                @break
                            @case($esp == 'I')
                                <p><span style="font-size: 24px; font-weight: 800">{{$key}}</span>: {{$esp}} - Individual</p>
                                @break
                        @endswitch
                    @else
                        <p><span style="font-size: 24px; font-weight: 800">{{$key}}</span>: {{$esp}}</p>
                    @endif
                @endisset
            @endforeach
            <hr>
        @endforeach
    @endisset
    </body>
</html>
