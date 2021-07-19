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
   
    <title>Candy World</title>
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

<div class="conteinerSacola">
    <div class="sacola">
        <div class="infoSacola">
            <div class="cabecalhoSacola">
                <div class="tituloSacola">
                    <h1>Produtos cadastrados</h1>
                </div>
                <?php
                require_once 'conexao.php';
                $comando = "SELECT * FROM tblProdutos";
                $resultado = mysqli_query($conexao,$comando);
                ?>
            
            </div>
            <div class="conteudoSacola">
                <div class="titulosConteudoSacola">
                    <span class="tituloConteudo_Produto styleTitulosConteudo">Produto</span>
                    <span class="tituloConteudo_Quantidade styleTitulosConteudo">Descrição</span>
                    <span class="tituloConteudo_Total styleTitulosConteudo">Preço</span>
                    <span class="tituloConteudo_editar styleTitulosConteudo">Editar</span>

                </div>
                <?php
                while($linha=mysqli_fetch_assoc($resultado)){
                ?>
                <div class="produtosInfo">
                    <div class="produtoSacola">
                        <a href="detalhar_produto.php?idProduto=<?=$linha['idProduto']?>">
                        <img id="sacolaimg" src="<?=$linha['imagens']?> ">
                       </a>
                        <div class="carrinhonomeproduto">
                            <h4><?=$linha['produto']?></h4>
                        </div>
                        
                        <div class="quantidadeProdutoSacola stylequantidadeproduto1">
                            <?=$linha['descricao']?>
                        </div>
                        <div class="precoProdutoSacola">
                            <?=$linha['valor']?>
                        </div>
                        <div class="botãoExcluirProdutoSacola">
                            <a href="delete_produto.php?idProduto=<?=$linha['idProduto']?>">
                            <ion-icon name="trash-outline"></ion-icon>
                            </a>
                        </div>

                        <div class="botãoExcluirProdutoSacola">
                        <a href="formalterar_produto.php?idProduto=<?=$linha['idProduto']?>">
                            <ion-icon name="hammer-outline"></ion-icon>
                        </a>
                        </div>
                    </div>
                </div>

                
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="infoDash">
            <div class="tituloInfoCompra">
                <h3 id="admin">Olá <strong>admin!</strong></h3>
                <h4>Resumo da Compra</h4>
                <a id="link" href="dashboard.php">
                    <p>Todos os produtos</p>
                    
                </a>
                <br>
                <a  id="link" href="cadastrarproduto.php">
                <p>Cadastrar produto</p>
                </a>

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

