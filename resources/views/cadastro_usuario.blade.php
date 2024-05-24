<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>Meu ERP</title>
       <link rel="stylesheet" href="css/style.css">
   </head>
           
   <body class=".teste">
        <header>
            <nav>
                <div>
                    <img href="#" alt="logo">
                    
                </div>
            </nav>
        </header>
        <main>
            <div style="height:10px">
            </div>
            <div class="container">
                <form action="/upUsuario" id="cadEstudante" method="POST">
                    @csrf
                    <h2>Login</h2>
                    <div class="form-grupo">
                        <label for="studentName">Nome:</label>
                        <input type="text" id="studentName" name="nome" required>
                    </div>
                    <div class="form-grupo">
                        <label for="studentName">Hobby:</label>
                        <input type="text" id="studentName" name="hobby" required>
                    </div>
                    <div class="form-grupo">
                        <label for="studentName">Idade:</label>
                        <input type="text" id="studentName" name="idade" required>
                    </div>
                    <div class="form-grupo">
                        <label for="studentName">Escolaridade:</label>
                        <input type="text" id="studentName" name="escolaridade" required>
                    </div>
                    <div class="form-grupo">
                        <label for="grade1">Senha:</label>
                        <input type="text" id="grade1" name="senha" min="0" max="100" required>
                    </div>
                    <button type="submit">Cadastrar</button>
                    <a href="/pessoa">Lista de Pessoas</a>
                </form>
                
            </div>
        </main>
   </body>       
</html>