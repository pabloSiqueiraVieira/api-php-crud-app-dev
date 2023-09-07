<?php
require_once('header.php');
include_once "database.php";
$sqlDadosDb = "SELECT * FROM supreme_produtos";
//Conexão e execução do sql
$dadosDb = mysqli_query($conexao, $sqlDadosDb);
//Conversão em array dissociativo
?>
<h1>API - PHP CRUD - READ (SELECT)</h1>
<p>Lista de produtos</p>
<h2>Listagem de produtos</h2>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Fornecedor</th>
            <th>Atualizar: </th>
            <th>Excluir: </th>
        </tr>
    </thead>
    <tbody>
        <?php
        //Convertendo os dados em um array associativo
        while($dados = mysqli_fetch_array($dadosDb)){

        ?>
            <tr>
                <td><?php echo $dados['nome_produto']?></td>
                <td><?php echo $dados['descricao_produto']?></td>
                <td><?php echo $dados['quantidade_produto']?></td>
                <td><?php echo $dados['fornecedor_produto']?></td>
                <td><a href="formAtualizarCadastro?id_produto=<?php echo $dados['id_produto']?>">Atualizar</a></td>
                <td><a href="formExcluirCadastro?id_produto=<?php echo $dados['id_produto']?>">Excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
require_once('footer.php');
?>