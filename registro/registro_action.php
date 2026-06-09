<?php
session_start();
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome            = $_POST['nome'];
    $senha           = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem!";
    } else {
        $verificar = $conn->prepare("SELECT * FROM usuarios WHERE nome = ?");
        $verificar->bind_param("s", $nome);
        $verificar->execute();
        $resultado = $verificar->get_result();

        if (mysqli_num_rows($resultado) > 0) {
            echo "Nome já cadastrado!";
        } else {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = $conn->prepare("INSERT INTO usuarios (nome, senha) VALUES (?, ?)");
            $sql->bind_param("ss", $nome, $senha_hash);

            if ($sql->execute()) {
                $_SESSION['usuario_id']   = $conn->insert_id;
                $_SESSION['usuario_nome'] = $nome;

                header("Location: /index.php");
                exit;
            } else {
                echo "Erro: " . $conn->error;
            }
        }
    }
} else {
    echo "Método inválido";
}
?>
