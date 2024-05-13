<?php
include 'dbConnection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO contact (user, email, phone) VALUES (?, ?, ?)";

    if ($stmt = $connection->prepare($sql)) {
        $stmt->bind_param("sss", $name, $email, $phone);

        if ($stmt->execute()) {
            echo "Contato adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar contato: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $connection->error;
    }
}
?>