CREATE DATABASE cadastro_cliente;

USE cadastro_cliente;


DELIMITER //
CREATE PROCEDURE ObterPedidosCliente(IN clienteID INT)
BEGIN
    SELECT * FROM pedidos WHERE cliente_id = clienteID;
END;
//
DELIMITER ;

DELIMITER //
CREATE FUNCTION CalcularTotalPedidosCliente(clienteID INT) RETURNS DECIMAL(10, 2)
BEGIN
    DECLARE total DECIMAL(10, 2);
    SELECT SUM(quantidade) INTO total FROM pedidos WHERE cliente_id = clienteID;
    RETURN total;
END;
//
DELIMITER ;




CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    nome_produto VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    especificacao TEXT,
    forma_pagamento VARCHAR(50) NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);