<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['nome'] ?? ''; 
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($usuario) || empty($senha)) {
        die("Usuário e senha são obrigatórios.");
    }

    $conn = new mysqli("localhost", "root", "", "login");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuario (usuario, senha) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $senhaHash);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Acesso inválido.";
}

