<?php
    $server = '127.0.0.1';
    $username = 'root';
    $password = '';
    $bd_name = 'banco';

    $conexao = mysqli_connect($server, $username, $password, $bd_name);
    mysqli_set_charset($conexao, "utf8");

    if (mysqli_connect_errno($conexao)) {
        echo "Erro na conexão com o banco de dados ";
    }
?>