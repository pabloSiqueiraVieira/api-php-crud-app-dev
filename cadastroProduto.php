<?php
//incluir arquivo de conexão bd
include_once "database.php";

//resgatar info do formulário via POST
$nome_produto = $_POST["nomeProduto"];
$descricao_produto = $_POST["descricaoProduto"];
$quantidade_produto = $_POST["quantidadeProduto"];
$fornecedor_produto = $_POST["fornecedorProduto"]; //[campo name do html]

// INSERT INTO `supreme_produtos` (`id_produto`, `nome_produto`, `descricao_produto`, `quantidade_produto`, `fornecedor_produto`) VALUES (NULL, 'Teste nome produto', 'Teste descricao produto', '6', 'Teste fornecedor produto')
$sql = "INSERT INTO supreme_produtos
 (nome_produto, descricao_produto, quantidade_produto, fornecedor_produto) 
 VALUES ('$nome_produto', '$descricao_produto', '$quantidade_produto', '$fornecedor_produto');";

 //mysqli_query necessita de 2 parâmetros, conexão com o bd e o sql

 if (mysqli_query($conexao, $sql)){
    header("Location: listarProdutos.php");
 }else{
    echo "Falha ao cadastrar produto";
 }
