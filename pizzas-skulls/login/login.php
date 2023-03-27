<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: #d32f2f;;  
            font-family: Arial, Helvetica, sans-serif;
        }
        div{
            background-color: #EEE;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: black;
            text-align: center;

        }
        input{
         
            background-color: white;
            border-radius: 5px;
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            color: black;
            

        }
        .inputSubmit{
            background-color: orange;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            cursor: pointer;
        }
     a{
        text-decoration: none;
        color: orange;
        
     }
    </style>
</head>
<body>
    <div>
       
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <br><br>
       
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
       
       <input class="inputSubmit" type="submit" name="submit" value="Enviar" onclick="button()">
       <br><br>

        <span>Não possui conta?</span>
        <a href="http://localhost:8080/pizzas-skulls/cadastro/cadastro.php"> 
        <span>Criar Conta!</span>
        </a>
        </form>
    </div>
</body>
</html>