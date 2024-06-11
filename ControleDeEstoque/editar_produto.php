<?php

include_once 'conexao.php';
include_once('head.php');
$id = $_GET['id'];

?>

<div style="padding:20px 0;max-width:800px" class="container">
    <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Formulário de Cadastro de Produto</h4>
    <form action="atualizar_produto.php" method="POST">
        <?php
            $sql = "SELECT * FROM estoque WHERE IdProduto = $id";
            $retorno = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
                $idProduto = $array['IdProduto'];
                $categoria = $array['Categoria'];
                $fornecedor = $array['Fornecedor'];
                $nome = $array['Nome'];
                $numero = $array['Numero'];
                $quantidade = $array['Quantidade'];
        ?>
        <input style="display:none" id="idProduto" name="idProduto" value="<?=$idProduto?>">
        <div class="form-group">
            <label for="numeroProduto">Número Produto</label>
            <input type="number" class="form-control" id="numeroProduto" placeholder="Digite o número do produto"
                name="numeroProduto" required autocomplete="off" value="<?=$numero?>" readonly>
        </div>
        <div class="form-group">
            <label for="nomeProduto">Nome Produto</label>
            <input type="text" class="form-control" id="nomeProduto" name="nomeProduto"
                placeholder="Digite o nome do produto" autocomplete="off" value="<?=$nome?>">
        </div>

        <div class="form-group">
            <label for="quantidadeProduto">Quantidade</label>
            <input type="number" class="form-control" id="quantidadeProduto" name="quantidadeProduto"
                placeholder="Digite o nome do produto" autocomplete="off" value="<?=$quantidade?>">
        </div>

        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control" id="categoria" name="categoria">
                <?php
                include_once('conexao.php');
                $sql = "SELECT * FROM categoria ORDER BY Nome ASC";
                $retorno = mysqli_query($conexao,$sql);
                while($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)){
                    $idCategoria = $array["IdCategoria"];
                    $nomeCategoria = $array["Nome"];
                    ?>
                    <option <?php if($categoria == $nomeCategoria) echo 'selected'; ?>><?=$nomeCategoria?></option>
                <?php }?>
            </select>
        </div>

        <div class="form-group">
            <label for="fornecedor">Fornecedor</label>
            <select class="form-control" id="fornecedor" name="fornecedor">
                <?php
                $sqlFornecedor = "SELECT * FROM fornecedor";
                $retornoFornecedor = mysqli_query($conexao, $sqlFornecedor);
                while ($arrayFornecedor = mysqli_fetch_array($retornoFornecedor, MYSQLI_ASSOC)) {
                    $nomeFornecedor = $arrayFornecedor['Nome'];
                    ?>
                    <option <?php if($fornecedor == $nomeFornecedor) echo 'selected'; ?>><?=$nomeFornecedor?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn-enviar btn btn-success btn-sm btn-block">Atualizar</button>
        <?php } ?>
    </form>
</div>
