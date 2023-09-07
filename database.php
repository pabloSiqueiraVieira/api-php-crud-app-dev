<?php

    //Declarando e atribuindo informações de conexão com o banco de dados 
    $server_host = "localhost"; //host bd
    $server_user = "root"; //usuario bd
    $server_password = ""; //senha do bd
    $database_name = "supreme"; //nome do db

    //Variável para receber a conexão com bd
    //mysqli_connect necessita de 4 parâmetros = host, user, pass, db name

    $conexao = mysqli_connect($server_host, $server_user, $server_password, $database_name);
