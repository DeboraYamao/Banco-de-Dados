<?php //14/10/2021
    include 'conecta.php';//para se conectar ao banco
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "INSERT INTO pessoa(nome,idade,data_cadastro) VALUES('$nome','$idade',NOW())";
    if(mysqli_query($conn,$sql))//query = inserção
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro inserido com sucesso!');
        window.location.href='index.php';
        </script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro não foi inserido com sucesso!');
        window.location.href='index.php';
        </script>";        
    }
    mysqli_close($conn);//SEMPRE fechar o banco, para otimização do sistema
?>