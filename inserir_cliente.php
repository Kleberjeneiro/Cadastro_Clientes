<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_cliente";

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$conn = new mysqli("localhost", "root", "", "cadastro_cliente");

$query = "INSERT INTO clientes (nome, endereco, telefone, email) VALUES ('$nome', '$endereco', '$telefone', '$email')";

if ($conn->query($query) === TRUE) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente: " . $conn->error;
}

$conn->close();
?>
