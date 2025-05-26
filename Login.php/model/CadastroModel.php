<?php
require_once '../service/conexao.php';

class AuthModel {

    public function register($nome, $email, $senha) {
        $conn = new usePDO;
        $instance = $conn->getInstance();

        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir na tabela usuario
        $sql = "INSERT INTO usuario (usuario, senha) VALUES (?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email, $hashed_password]);
        $Iduser = $instance->lastInsertId();

        // Inserir na tabela pessoa
        $sql = "INSERT INTO pessoa (nome, email, usuario) VALUES (?, ?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$nome, $email, $Iduser]);

        return $stmt->rowCount();
    }

    public function login($email, $senha) {
        $conn = new usePDO;
        $instance = $conn->getInstance();

        $sql = "SELECT * FROM usuario WHERE usuario = ?";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha, $user['senha'])) {
                // Login válido
                $_SESSION['usuario'] = $user['usuario'];
                return true;
            }
        }

        return false;
    }
}
