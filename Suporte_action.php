<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = $conn->prepare("INSERT INTO Suporte (nome, email, mensagem) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nome, $email, $mensagem);

    if ($sql->execute()) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem!'); window.history.back();</script>";
    }
}
?>
