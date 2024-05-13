<?php
include './config/dbConnection.php';

// Verifica se há erro na conexão
if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

// Consulta SQL para contar o número de contatos
$sql = "SELECT COUNT(*) AS total FROM contact";
$resultado = $connection->query($sql);

if ($resultado->num_rows > 0) {
    // Extrai o resultado da consulta
    $row = $resultado->fetch_assoc();
    $total_contatos = $row['total'];
} else {
    // Se nenhum contato for encontrado, define o total como 0
    $total_contatos = 0;
}

// Fecha a conexão com o banco de dados
$connection->close();
?>