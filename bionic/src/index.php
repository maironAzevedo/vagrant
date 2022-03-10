<?php
    echo "Testando conexao <br/> <br/>";
    $servername = "192.168.1.24";
    $username = "phpuser";
    $password = "pass";

    $conn = new mysqli($servername, $username, $password);

    if ($conn -> connect_error) {
        die("Conexão falhou: ". $conn->connect_error);
    }

    echo "Conectado com sucesso";
?>