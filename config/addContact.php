<?php
include 'dbConnection.php'; // inclui o arquivo de conexão
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepara a declaração SQL para inserção de dados
    $sql = "INSERT INTO contact (user, email, phone) VALUES (?, ?, ?)";

    // Prepara a declaração
    if ($stmt = $connection->prepare($sql)) {
        // Vincula parâmetros à declaração
        $stmt->bind_param("sss", $name, $email, $phone);

        // Executa a declaração
        if ($stmt->execute()) {
            echo "Contato adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar contato: " . $stmt->error;
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $connection->error;
    }
}
?>