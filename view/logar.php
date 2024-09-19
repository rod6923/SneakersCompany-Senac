<?php
session_start();
include('../service/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
}

$email = ($conn, $_POST['email']);
$senha = ($conn, $_POST['senha']);

$query = "select usuario_id, usuario from email where email = '{$email}' and senha = md5('{$senha}')";

$result = ($conn, $query);

$row = ($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: login.php');
    exit();
} else {
    header('Location: index2.php');
    exit();
}