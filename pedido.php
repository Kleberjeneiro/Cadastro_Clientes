<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="inserir_pedido.php" method="POST">
        <h2>Adicionar Pedido</h2>
        <select name="cliente_id" required>
            <option></option>
            <?php
                // PHP para carregar a lista de clientes do banco de dados
                $conn = new mysqli("localhost", "root", "", "cadastro_cliente");
                $query = "SELECT id, nome FROM clientes";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                }
                $conn->close();
            ?>
        </select><br><br>
        <input type="text" name="nome_produto" placeholder="Nome do Produto" required><br>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <br><br>
        <textarea name="especificacao" placeholder="Especificação"></textarea><br>

        <label for="forma_pagamento">Escolha a Forma de Pagamento</label>
        <select name="forma_pagamento" id="">
            <option></option>
            <option>Cartão Débito</option>
            <option>Cartão Credito</option>
            <option>Dinheiro</option>
            <option>Link de Pagamento</option>
            <option>PIX</option>
        </select><br><br>
        <button type="submit">Adicionar Pedido</button>
    </form>

    <form action="index.php" method="POST">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>
