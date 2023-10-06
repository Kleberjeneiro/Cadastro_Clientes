<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Clientes</h1>

    <form action="inserir_cliente.php" method="POST">
        <h2>Adicionar Cliente</h2>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <input type="tel" name="telefone" placeholder="Telefone" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Cadastrar Cliente</button>
    </form>

    <form action="pedido.php" method="POST">
        <button type="submit">Adicionar Pedido</button>
    </form>

    <form action="clientes_cadastro.php" method="POST">
        <button type="submit">Consultar Clientes</button>
    </form>
</body>
</html>
