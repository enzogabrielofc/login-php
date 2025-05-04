<?php
session_start();
require_once '../model/Authmodel.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    $auth = new AuthModel();
    $result = $auth->login($email, $senha);

    if ($result) {
        $_SESSION['msg'] = "Login realizado com sucesso!";
        header("Location: ../view/dashboard.php"); 
        exit();
    } else {
        $_SESSION['erro'] = "E-mail ou senha inválidos!";
        header("Location: ../view/login.php");
        exit();
    }
}
