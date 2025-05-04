<?php

require_once '../model/CadastroModel.php';

if($_POST){
    $fullName = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $cobfirmPassword = $_POST['confirmar-senha'];

    $result = register($fullName, $email, $password);

    echo $result;

    if($result){
        echo "Cadastro realizado com sucesso! ";
    }else{
        echo "Não foi possível realizar o cadrastro.";
    }
}