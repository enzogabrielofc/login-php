<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="form-container">
        <h1>Criar Conta</h1>
        <form action="/LOGIN.PHP/controller/CadastroController.php" method="POST">
            <div class="input-wrapper">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
            </div>
            <div class="input-wrapper">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="input-wrapper">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
            </div>
            <div class="input-wrapper">
                <label for="confirmar-senha">Confirmar senha</label>
                <input type="password" id="confirmar" name="confirmar-senha" placeholder="Confirme sua senha" required>
            </div>
            <button type="submit" class="submit-btn">Cadastrar</button>
        </form>
    </div>