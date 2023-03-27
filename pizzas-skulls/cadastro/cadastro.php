<?php

if(isset($_POST['submit']))
{
    /*print_r($_POST['Nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['Senha']);
    */

    include_once('config.php');
    $nome = $_POST['Nome'];
    $email = $_POST['email'];
    $senha = $_POST['Senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #d32f2f;
        }
        .box{
            background-color: #EEE;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            text-align: center;
            color: black;
            
            }
           
        fieldset{
            border: transparent;

           
        }
      

        input{
      border-radius: 5px;
      background-color: white;
      padding: 15px;
      border: none;
      outline: none;
      font-size: 15px;
      margin: 15px;

  }
        legend{
            padding: 10px;
            text-align: center;
            
        }
         #submit{
            cursor: pointer;
            background-color: orange;
            padding: 15px;
            width: 90%;
            color: white;

         }
        
    </style>
</head>
<body>

         

    <div class="box">
   
    
        <form action="cadastro.php" method="POST">
        
            <fieldset>
               
            <h1>Cadastro</h1>
              
            <div class="inputBox">
                <input type="text" name="Nome" id="nome" class="inputUser" placeholder="Nome" required>
                <label for="Nome"></label>
             </div>
            
             <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" placeholder="Email" required>
                <label for="Email"></label>
             </div>
     
             <div class="inputBox">
                <input type="password" name="Senha" id="Senha" class="inputUser" placeholder="Senha" required>
                <label for="Senha"></label>
             </div>

             <div>
              
                <input type="submit" name="submit" id="submit" value="Enviar" onclick="button()">
                <a href="http://localhost:8080/pizzas-skulls/login/login.php">
             </div>
    </fieldset>
    </form>
    </div>
</body>
</html>

