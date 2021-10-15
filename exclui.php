<?php //14/10/2021
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa WHERE id=$id";// se programar somente até pessoa, deleta todos os registros
    if(mysqli_query($conn,$sql))//query = inserção
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro excluído com sucesso!');
        window.location.href='index.php';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Registro não foi excluído com sucesso!');
        window.location.href='index.php';
        </script>";
    }

?>