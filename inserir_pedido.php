<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_cliente";

$cliente_id = $_POST['cliente_id'];
$nome_produto = $_POST['nome_produto'];
$quantidade = $_POST['quantidade'];
$especificacao = $_POST['especificacao'];
$forma_pagamento = $_POST['forma_pagamento'];

$conn = new mysqli("localhost", "root", "", "cadastro_cliente");

$query = "INSERT INTO pedidos (cliente_id, nome_produto, quantidade, especificacao, forma_pagamento) VALUES ('$cliente_id', '$nome_produto', '$quantidade', '$especificacao', '$forma_pagamento')";

if ($conn->query($query) === TRUE) {
    echo "Pedido cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar pedido: " . $conn->error;
}

$conn->close();
?>
