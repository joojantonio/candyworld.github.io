<?php

require_once "conexao.php";
$idProduto=$_POST['txtIdProduto'];
$produto=$_POST['produto'];
$valor=$_POST['valor'];
$descricao=$_POST['descricao'];

$comando= "UPDATE tblprodutos SET produto= '$produto',valor= '$valor',descricao='$descricao'
WHERE idProduto= $idProduto";

$resultado=mysqli_query($conexao,$comando);
if ($resultado){
    echo "Produto alterado com sucesso";
}else{
    echo "errado mesmo".mysqli_error($conexao);
}

?>

<a href="dashboard.php">Voltar pro meu dashboard </a>
