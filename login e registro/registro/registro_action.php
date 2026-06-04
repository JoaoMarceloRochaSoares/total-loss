<?php 
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem!";
    } else {
        $verificar = "SELECT * FROM usuários WHERE nome = '$nome'";
        $resultado = mysqli_query($conn, $verificar);

        if (mysqli_num_rows($resultado) > 0) {
            echo "Nome já cadastrado!";
        } else {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuários (nome, senha, confirmar_senha) VALUES ('$nome', '$senha_hash', '$senha_hash')";
            
            if (mysqli_query($conn, $sql)) {
                echo "Usuário registrado com sucesso!";
            } else {
                echo "Erro ao registrar: " . mysqli_error($conn);
            }
        }
    }
}
?>
