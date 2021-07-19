<?php

require_once 'conexao.php';

$id_Produto = $_GET ['idProduto'];
$comando = "DELETE FROM tblProdutos WHERE idProduto = $id_Produto";

$registro = mysqli_query($conexao,$comando);

if ($registro){
    echo "Produto excluído.";
}else{
    echo "Erro ao excluir produto.".mysqli_error($conexao);
}

?>

<a href="dashboard.php">Voltar pro meu dashboard </a>