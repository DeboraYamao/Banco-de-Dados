<?php //14/10/2021
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "UPDATE pessoa SET nome = ?, idade = ?, data_cadastro = NOW() Where id = ?";//orientação a objeto
    $stmt = $conn->prepare($sql) or die($conn->error);//verificando se a query está ok
    if(!$stmt){
        echo 'Erro na atualização: '.$conn->errno.' - '.$conn->error;//outro modo de mostrar o erro
    }
    $stmt->bind_param('ssi',$nome,$idade,$id);
    $stmt->execute();
    $conn->close();
    header("location: index.php");
?>