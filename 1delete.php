<?php

include('1conexao.php');

$Cod_Cliente = $_GET['Cod_Cliente'];

$sql = "DELETE FROM Cliente WHERE Cod_Cliente=$Cod_Cliente";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('Usuário alterado com sucesso.') </script>";
    header("Location: 1listausu.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
?>
