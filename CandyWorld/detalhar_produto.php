<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,300,300italic,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../CandyWorld/CSS/candyworld.css">

</head>

<body>

   <div class="site">
    <div id ="topo"></div>
    <div class="cabecalho">
        <div class="logo">
            <img id="lg" src="../CandyWorld/imagens/Index/LogoCandy2.png" alt="Logo Candy World">
        </div>
        <div class="pesquisar">
            <form method="" action="">
                <input type="search" class="buscaint" id="busca" placeholder="Busque o produto por nome ou sabor" autocomplete="off">
                <a class="btn-search" href="#">
                    <ion-icon name="search-outline"></ion-icon>
            </form>
        </div>

        <div class="perfil">
            <a class="btn-primario" href="carrinho.html">
                <ion-icon name="cart-outline"></ion-icon>
                <span>Carrinho</span>
            </a>
            <a class="btn-primario" href="cadastrologin.html">
                <ion-icon name="person-outline"></ion-icon>
                <span>Olá, faça seu login ou cadastre-se.</span>
            </a>
        </div>
    
    
</div>
<script  src = "https://unpkg.com/ionicons@5.2.3/dist/ionicons.js" ></script>

<div id="menu">
    <ul>
        <li><a href="candyworld.php">Ínicio</a></li>
        <li><a href="bolos.html">Bolos</a></li>
        <li><a href="tortas.html">Tortas</a></li>
        <li><a href="doces.html">Doces</a></li>
        <li><a href="promocao.html">Promoções</a></li>
        <li><a href="sobre.html">Sobre</a></li>
        <li><a href="contato.html">Contato</a></li>
    </ul>

    
</div>
<body>

<?php
    require_once 'conexao.php';
    $id_produto=$_GET['idProduto'];
    $comando = "SELECT * FROM tblProdutos WHERE idProduto=$id_produto";
    $resultado = mysqli_query($conexao,$comando);
    $linha=mysqli_fetch_assoc($resultado);
?>


<div class="produtosgeral">
    <h4 id="titulos">DETALHAMENTO DO PRODUTO</h4>
    <br>
   <div class="detalheproduto">
    <div class="flex">
   <img id="imgproduto1" src="<?=$linha['imagens']?> " alt= "Produto candyworld">    
  </div>
 <br>
  <div class="textproduto">
    <div class="details">
    <div class="pproduto">
        <br>
    <h1 id="titleproduto"> <?=$linha['produto']?></h1>
    <span>Preço: R$<strong><?=$linha['valor']?></strong></span>
    <ul>
        <li><strong> <p><?=$linha['descricao']?></p></strong></li>
        <li>0% Gordura trans</li>
        <li>Versão light</li>
        <li>Porção com até 100 g de calorias</li>
        <li> O doce que roubou seu coração!</li>
    </ul>
</div>
</div>
    <div class="btnprod">
    <a class="btn-produtos" href="carrinho.html">
        <ion-icon name="bag-handle"></ion-icon>
        <span>Eu quero!</span>
    </a>
    <a class="btn-produtos" href="#">
        <ion-icon name="logo-whatsapp"></ion-icon>
        <span>Contate pra saber ainda mais</span>
    </a>

</div>
<div class="quantidadeProduto">
    <label class="tituloQuantidade">Selecione a quantidade:</label>
    <input class="Medium500"type="number" value="1" min="1">
</div>
  </div>
  </div>   
</div>


<div class="convite_cadastro">
    <div class="imagemconvite">
        <img id="imgconv" src="../CandyWorld/imagens/Index/LogoCandy.png" alt="">
    </div>
    <div class="tituloconvite">
    <h2>Quer ter um mundo doce como o nosso? </h2>
    <h2>Faça parte da franquia mais docinho do Brasil!</h2>
    <h3 id=subtitulocadastro>Cadastre-se!</h3>
    <a class="btn-convcad" href="cadastrologin.html">
        <ion-icon name="thumbs-up-outline"></ion-icon>
        <span>Opa, quero me cadastrar!</span>
    </a>
    
    </div>
</div>
    <div class="rodape">
        <ul>
            <li id="socialmedia"><ion-icon  name="logo-facebook"></ion-icon></li>
            <li id="socialmedia"><ion-icon  name="logo-instagram"></ion-icon></li>
            <br>
            <a href="dashboard.php">
                <li>Dashboard</li>
            </a>
            <li>Lojas</li>
            <li>Privacidade</li>
            <li>Atendimento</li>
            <li>Política de vendas</li>
        </ul>
        <span style="font-size: .9em;">Central de Atendimento: 15 xxxx xxxx (SP e Grande SP) | 4002 89 22(Demais Regiões) | segunda a sexta, das 08h às 18h | <a href="#">sac@candyworld.com.br</a></span>
    </div>
    
</div>
</div>

</div>



</body>
</html>


