<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="container">
        <form method="POST" action="Login.php">
            <h1>Login</h1>

            <div class="input-box">
                <label for="email">Nome de Usuário</label>
                <input placeholder="usuario" type="email" name="email" required>
            </div>

            <div class="input-box">
                <label for="senha">Senha</label>
                <input placeholder="senha" type="password" name="senha" required>
            </div>

            <button type="submit" class="login btn btn-primary mt-3">Login</button>

            <div class="remenber-forgot mt-2">
                <a href="esqueci a senha/esqueci.php">Esqueci a senha</a>
            </div>

            <div class="register-link mt-2">
                <a href="cadastro/register.php" target="_blank">Cadastre-se</a>
            </div>
        </form>
    </main>
</body>
</html>