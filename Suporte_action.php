<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = $conn->prepare("INSERT INTO Suporte (nome, email, mensagem) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nome, $email, $mensagem);

    if ($sql->execute()) {
        echo "sucesso";
    } else {
        echo "erro";
    }
}
?>