<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-joao';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else{
        echo "Conexao com suçezo";
    }
    */
    header('Location: http://localhost:8080/pizzas-skulls/login/login.php');
?>