<?php
// Incluir arquivo de conexão com o banco de dados
include 'database.php';

// Preparar consulta SQL
$query = "SELECT * FROM tabela";

// Executar consulta SQL
$result = mysqli_query($conn, $query);

// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result) > 0) {
    // Loop para exibir todos os registros
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " Nome: " . $row['nome'] . "<br>";
    }
} else {
    echo "Não há registros";
}

// Fechar conexão com o banco de dados
mysqli_close($conn);
?>
