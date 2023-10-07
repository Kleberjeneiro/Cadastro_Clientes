<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h2>Clientes Cadastrados:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Cliente_id</th>
            <th>Nome_produto</th>
            <th>Quantidade</th>
            <th>Especificação</th>
            <th>Forma de Pagamento</th>
        </tr>
        <?php include 'listar_pedidos.php'; ?>
    </table>
    <form action="index.php" method="POST">
        <button type="submit">Pagina Inicial</button>
    </form>

    <form action="clientes_cadastro.php" method="POST">
        <button type="submit">Consultar Clientes</button>
    </form>
</body>
</html>