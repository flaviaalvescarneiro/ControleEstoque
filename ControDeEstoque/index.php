<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php'); ?>
<title>Login</title>
<style>
.tamanho-largura {
    max-width: 500px;
    height: auto;
    left: 50%;
    margin: -200px 0 0 -210px;
    padding: 40px;
    position: absolute;
    top: 50%;
    border: 2px solid #f3f3f3;
    border-radius: 15px;
    -webkit-box-shadow: 10px 10px 47px -3px rgba(161, 161, 161, 1);
    -moz-box-shadow: 10px 10px 47px -3px rgba(161, 161, 161, 1);
    box-shadow: 10px 10px 47px -3px rgba(161, 161, 161, 1);
}
</style>

<body>
    <div class="container tamanho-largura">
        <form action="logar.php" method="POST">
            <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="usuario" placeholder="Digite o e-mail do usuário"
                    autocomplete="off" />
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" autocomplete="off" />
            </div>
            <button type="submit" class="btn btn-success btn-sm btn-block">Entrar</button>
            <br>
            <p class="d-flex justify-content-center"><span style="width:5px"></span><a href="cadastrar_usuario_externo.php">Cadastre-se</a></p>
        </form>
    </div>


    <?php include_once('footer.php'); ?>
</body>

</html>
