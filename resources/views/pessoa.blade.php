<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
    <style>
        table, td, th{
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Hobby</th>
            <th>Idade</th>
            <th>Escolaridade</th>
        <tr>
    </thead>
    <tbody>  
        @foreach ($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa->id}}</td>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->hobby}}</td>
                <td>{{$pessoa->idade}}</td>
                <td>{{$pessoa->escolaridade}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
