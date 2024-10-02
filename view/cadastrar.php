<?php
session_start();
include("../service/conexao.php");

$nome = (trim($_POST['nome']));
$sobrenome  = (trim($_POST["sobrenome"]));
$email = (trim($_POST["email"]));
$senha = (trim($_POST["senha"]));

$sql = "select count(*) as total from cadastro where email = '$email'";
$result = $conn->prepare($sql);
$result->execute();
$row = $result->fetchAll(PDO::FETCH_ASSOC)[0];


if($row["total"] == 1) {
$_SESSION['usuario_existe'] = true;
header('Location: login.php');
exit;
}else {

$sql = "INSERT INTO cadastro (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

if($conn->query($sql)) {
    $_SESSION['status_cadastro'] = true;
    $_SESSION['req'] = 1;
}



header('Location: cadastro.php');
exit;
}
?>