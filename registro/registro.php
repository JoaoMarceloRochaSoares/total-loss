<?php include __DIR__ . '/../conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="dec.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <title>Registro</title>
    </head>
<body>
    <form action="registro_action.php" method="POST">
        <div class="card">
            <div class="campo">
                <label for="nome">Nome</label>
                    <input type="text" name="nome" required id="nome" placeholder="Seu nome">
                <label for="senha">Senha</label>
                    <input type="password" name="senha" required minlength="8" id="senha" placeholder="Sua senha" autocomplete="new-password">
                <label for="confirmarSenha">Confirme sua senha</label>
                    <input type="password" name="confirmar_senha" required minlength="8" id="confirmarSenha" placeholder="Confirme sua senha" autocomplete="new-password">
            </div>
            <button type="submit">Registrar</button>
        </div>
    </form>
    <div class="popup" id="popup" style="display:none;">
        <div class="card" id="popup-card">
            <div class="campo">
                <p id="popup-mensagem"></p>
            </div>
            <button type="button" onclick="window.location.href='/Login/login.php'">Login</button>
        </div>
    </div>
    <script src="registro.js"></script>
</body>
</html>
