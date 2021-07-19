<?php

require_once 'conexao.php';

function uploadImagem($imagem_temp_name,$name_imagem)
{
    $extensao =     strtolower(substr($name_imagem,-4));
    $novo_nome =     md5(time()).$extensao;
    $diretorio =     "imagens/up/";

 

    move_uploaded_file($imagem_temp_name ,$diretorio.$novo_nome);

 

    return $diretorio.$novo_nome;
}

$nomeProduto = $_POST['produto'];
$valorProduto = $_POST['valor'];
$descricaoProduto = $_POST['descricao'];
$categoriaProduto=$_POST['categoria'];
$imagens = uploadImagem($_FILES["imagens"]["tmp_name"],$_FILES["imagens"]["name"]);


$comando = "insert into tblProdutos(produto, valor, descricao,idCategoria,imagens) values ('$nomeProduto','$valorProduto','$descricaoProduto','$categoriaProduto','$imagens')";
$registro = mysqli_query($conexao,$comando);
if ($registro){

    echo " Produto inserido";
    
    
}else{
    echo "Erru ao inserir produto.".mysqli_error($conexao);
}
?>
<a href="dashboard.php">Voltar pro meu dashboard </a>

