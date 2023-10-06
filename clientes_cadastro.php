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
            <th>Nome</th>
            <th>Endereco</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>
        <?php include 'listar_clientes.php'; ?>
    </table>
    <form action="index.php" method="POST">
        <button type="submit">Pagina Inicial</button>
    </form>
</body>
</html>