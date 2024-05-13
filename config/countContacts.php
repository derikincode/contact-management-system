<?php
include 'dbConnection.php';

if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

// Consulta SQL para contar o número de contatos
$sql = "SELECT COUNT(*) AS total FROM contact";
$resultado = $connection->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $total_contatos = $row['total'];
} else {
    $total_contatos = 0;
}

$connection->close();
?>