<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pessoa</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content:center;
        }
        form{
            border: 1px groove #000;
            width:500px; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        div{
            padding:10px;
            margin:10px;
        }
        input{
            width: 450px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="/updatePessoa/{{$pessoa->id}}" method="POST">
    @method('PUT')
    @csrf
        <div>
        Nome: 
        <input name="nome" type="text" value="{{$pessoa->nome}}"/>
        </div>
        <div>
        Hobby: 
        <input name="hobby" type="text" value="{{$pessoa->hobby}}"/>
        </div>
        <div>
        Idade: 
        <input name="idade" type="text" value="{{$pessoa->idade}}"/>
        </div>
        <div>
        Escolaridade: 
        <input name="escolaridade" type="text" value="{{$pessoa->escolaridade}}"/>
        </div>
        <div><input type="submit" value="Enviar"/></div>
    </form>
</body>
</html>