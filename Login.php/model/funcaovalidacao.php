<?php
class LoginModel {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=login", "root", "");
    }

    public function autenticar($usuario, $senha) {
        $sql = "SELECT * FROM usuario WHERE usuario = :usuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            return true;
        }

        return false;
    }
}
?>