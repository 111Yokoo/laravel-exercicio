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
    <a href="/cadPessoa">Adicionar Pessoa</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Hobby</th>
            <th>Idade</th>
            <th>Escolaridade</th>
            <th>Editar Status</th>
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
                <td style="width:160px">
                    <div style="display:flex;justify-content:space-around">
                        <form action="/editPessoa/{{$pessoa->id}}" method="GET">
                            @csrf
                            <input style="width:50%;margin:auto" type="image" src="assets/edit.jpeg" alt="editar">
                        </form>
                        <form action="/delPessoa/{{$pessoa->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input style="width:50%;margin:auto" type="image" src="assets/excluir.png"  alt="excluir">
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
