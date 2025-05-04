<?php
require_once '../service/conexao.php';

class AuthModel {
    public function login($email, $senha) {
        $conn = new usePDO;
        $instance = $conn->getInstance();

        $sql = "SELECT * FROM usuario WHERE usuario = ?";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha, $user['senha'])) {
                $_SESSION['usuario'] = $user['usuario'];
                return true;
            }
        }

 
        return false;
    }
}
