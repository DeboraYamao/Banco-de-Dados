<?php //14/10/2021
    $conn = mysqli_connect("localhost","root","","aula");//4 campos obrigatótios campo nulo é senha
    mysqli_set_charset($conn, "utf8");//para reforçar a conecxão
    if(!$conn){
        echo "Erro: Falha ao conectar-se com o banco de dados MySQL.".PHP_EOL;
        echo "Debug erro:".mysqli_connect_errno().PHP_EQL;//o código do erro
        echo "Debug erro:".mysqli_connect_error().PHP_EQL;//o erro
    }
?> 