<?php
require_once('header.php');
?>
<div class="container mt-3">
    <h1>API - PHP CRUD - CREATE (INSERT)</h1>
    <p>Cadastro de produtos</p>
    <h2>Página de cadastros</h2>
    <form action="cadastroProduto.php" method="post">
        <div class="mb-3 mt-3">
            <label for="nomeProduto" class="form-label">Nome:</label>
            <input type="text" name="nomeProduto" id="nomeProduto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="descricaoProduto" class="form-label">Descrição:</label>
            <input type="text" name="descricaoProduto" id="descricaoProduto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="quantidadeProduto" class="form-label">Quantidade:</label>
            <input type="number" name="quantidadeProduto" id="quantidadeProduto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fornecedorProduto" class="form-label">Fornecedor:</label>
            <input type="text" name="fornecedorProduto" id="fornecedorProduto" class="form-control">
        </div>

            <input type="submit" value="Cadastrar Produto" class="btn btn-primary">
    </form>
</div>
<?php
require_once('footer.php');
?>