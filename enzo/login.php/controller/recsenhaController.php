<?php
require_once '../service/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $sql->execute([$email]);
    $user = $sql->fetch();

    if ($user) {
        $codigo = rand(100000, 999999);
        $sql = $pdo->prepare("INSERT INTO code (user_id, code) VALUES (?, ?)");
        $sql->execute([$user['id'], $codigo]);

        echo "Código enviado para o e-mail! Código: $codigo";
    } else {
        echo "Email não encontrado.";
    }
}
?>