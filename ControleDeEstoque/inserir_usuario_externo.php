<?php
include_once 'conexao.php';
include_once 'password.php';

$nome = trim($_POST["nome"]);
$sobrenome = trim($_POST["sobrenome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);
$nivelUsuario = 3;

$sql = "INSERT INTO `usuario` (`Nome`, `Sobrenome`, `Email`, `Senha`, `NivelUsuario`, `Status`) VALUES " .
    "('$nome', '$sobrenome','$email', sha1('$senha'), $nivelUsuario, 'Inativo')";
$inserir = mysqli_query($conexao, $sql);
?>

<?php include_once 'head.php'?>
<style>
    .btn-green {
        background-color: green;
        color: white;
    }
    .btn-green:hover {
        background-color: darkgreen;
        color: white;
    }
</style>
<div style="padding:20px 0;max-width:800px;text-align:center" class="container">
    <h4>Usuário <b></b> cadastrado com sucesso!</h4>
    <a class="btn btn-sm btn-green" role="button" href="index.php">Voltar</a>
</div>
