<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_cliente";

$conn = new mysqli("localhost", "root", "", "cadastro_cliente");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$query = "SELECT * FROM pedidos";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["cliente_id"] . "</td>";
        echo "<td>" . $row["nome_produto"] . "</td>";
        echo "<td>" . $row["quantidade"] . "</td>";
        echo "<td>" . $row["especificacao"] . "</td>";
        echo "<td>" . $row["forma_pagamento"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "Nenhum pedido realizado";
}

$conn->close();
?>