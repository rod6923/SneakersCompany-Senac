<?php
session_start();
include("../conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$sobrenome  = mysqli_real_escape_string($conexao, trim($_POST["sobrenome"]));
$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST["senha"])));

sql = "select count(*) as total from cadastro where cadastro = '$cadastro'";
$result = myqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if(row["total"] == 1) {
$_SESSION['usuario_existe'] = true;
header('Location: cadastro.php');
exit;
}

$sql = "INSERT INTO cadastro (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha', NOW())";

if(conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>