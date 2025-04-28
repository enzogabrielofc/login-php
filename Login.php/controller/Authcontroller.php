<?php


session_start(); 

require_once 'Conexao.php';

class AuthController
{
    private $conn;

    public function __construct()
    {
 
        $db = new Conexao();
        $this->conn = $db->conectar();
    }

    public function login($email, $senha)
    {

        $query = "SELECT id, email, senha FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

          
            if (password_verify($senha, $usuario['senha'])) {
                
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_email'] = $usuario['email'];

                header('Location: dashboard.php');
                exit();
            } else {
                
                echo "Senha incorreta!";
            }
        } else {
          
            echo "Usuário não encontrado!";
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: login.php');
        exit();
    }
}
?>
