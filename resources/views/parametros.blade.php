<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1><?php echo $pagina ?></h1>
        <h2>Exige Parâmetros</h2>        
       <?php 
            foreach ($dados as $key => $value) { 
                echo "Parâmetro ".$key." = ".$value."<br/>";
            }
        ?>
    </body>
</html>
