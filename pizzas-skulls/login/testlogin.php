<?php
    //print_r($_REQUEST);
    if(isset($_POST['submit'])  && !empty($_POST['nome'] && !empty($_POST['senha'])))
    {

        include_once('C:\xampp\htdocs\pizzas-skulls\cadastro\config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        //print_r('Nome: ' . $nome);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        
        if(mysqli_num_rows($result) < 1)
        {
            
            header('Location: login.php');
            
        }
        else
        {
            
            
            header('Location: http://localhost:8080/pizzas-skulls/index/');
            
        }
    }
    else
    {
        header('Location: login.php');
    }

    

?>