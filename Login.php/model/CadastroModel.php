<?php
 
 require_once '../service/conexao.php';
 
function register($nome, $email, $senha){
    $conn = new usePDO;
    $instance = $conn->getInstance();

    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (usuario, senha) VALUES (?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$email, $senha]);
    $Iduser = $instance->lastInsertId();
 
    $sql = "INSERT INTO pessoa (nome, email, usuario) VALUES (?, ?, ?)";
    $stmt = $instance->prepare($sql);                                  
    $stmt->execute([$nome, $email, $Iduser]);  
 
    
 
    

 
    $result = $stmt->rowCount();
 
    return $result;
}
 