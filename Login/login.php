<?php include '../conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="dec.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <title>Login</title>
    </head>
<body>
    <form action="login_action.php" method="POST">
        <div class="card">
            <div class="campo">
                <label for="nome">Nome</label>
                    <input type="text" name="nome" required id="nome" placeholder="Seu nome">
                <label for="senha">Senha</label>
                    <input type="password" name="senha" required minlength="8" id="senha" placeholder="Sua senha" autocomplete="current-password">
            </div>
            <button type="submit">Entrar</button>
            <a href="https://perdatotal.up.railway.app/registro/registro.php">Não possui conta?</a>
        </div>
    </form>
    <div class="popup" id="popup" style="display:none;">
        <div class="card" id="popup-card">
            <div class="campo">
                <p id="popup-mensagem"></p>
            </div>
            <button type="button" onclick="window.location.href='https://totalloss.up.railway.app'">Homepage</button>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
