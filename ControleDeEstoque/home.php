<!DOCTYPE html>
<html lang="en">
<?php
include_once 'head.php';
include_once 'validacao.php';
?>
<title>Gerenciamento de Produtos</title>
<br>
<header class="header">
    <div class="container text-center">
        <h4 class="text-muted"><strong>GERENCIAMENTO DE PRODUTOS</strong></h4>
        <hr style="width: 50%; margin-top: 0; margin-bottom: 20px;">
    </div>
</header>
<br>
<br>
<br>    
<body>
            
    <div style="padding:20px 0" class="container text-center">
        <div class="row">
            <?php
            if (($nivel == 1) || ($nivel == 2)) {
            ?>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class=""></i> Adicionar Produto</h5>
                        <p class="card-text">Cadastre novos produtos no estoque. <BR></BR></p>
                        <a href="cadastrar_produto.php" class="btn btn-success">Cadastrar produto</a>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class=""></i> Lista de Produtos</h5>
                        <p class="card-text">Visualizar, gerar relatório, editar ou excluir os produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-success">Ver Produtos</a>
                    </div>
                </div>
            </div>
            <?php
            if (($nivel == 1) || ($nivel == 2)) {
            ?>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class=""></i> Adicionar Categoria</h5>
                        <p class="card-text">Cadastre novas categorias para os produtos. <BR></BR></p>
                        <a href="cadastrar_categoria.php" class="btn btn-success">Cadastrar categoria</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <br>
        <div class="row">
            <?php
            if (($nivel == 1) || ($nivel == 2)) {
            ?>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class=""></i> Adicionar Fornecedor</h5>
                        <p class="card-text">Cadastre novos fornecedores de seus produtos.</p>
                        <a href="cadastrar_fornecedor.php" class="btn btn-success">Cadastrar fornecedor</a>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class=""></i> Cadastrar Usuário</h5>
                        <p class="card-text">Cadastre um novo usuário no sistema. <BR></BR></p>
                        <a href="cadastrar_usuario.php" class="btn btn-success">Cadastrar Usuários</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class=""></i> Aprovar Usuários</h5>
                        <p class="card-text">Aprove novos usuários que foram cadastrados no sistema.</p>
                        <a href="aprovar_usuario.php" class="btn btn-success">Aprovar Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br>
<footer class="footer">
    <div class="container text-center">
        <BR>
        <BR>
        <span class="text-muted" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">2024 © StockEasy - Projeto integrador</span>
    </div>
</footer>

</html>
