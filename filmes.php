<?php
session_start();
include('conexao.php');
$sql = "select * from livros";
$sql2 = "SELECT * FROM livros WHERE generolivro = 1";
$resultado2 = mysqli_query($conexao,$sql2);
$resultado = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title>Livraria Mariza de Carvalho</title>
</head>

<body>

   
   
   
    <?php
        include ('menu.php');
    ?>

        <header class="d-flex align-items-center justify-content-center">
            <link rel="stylesheet" href="css/header.css">
            <img src="img/logo.png" alt="Livraria Mariza de Carvalho">
        </header>
        <hr>

       <section class="container">
       
       <h1>10 livros que vão virar filmes em 2018</h1>
       <img src="img/Jennifer-Lawrence-as-Mystique-in-X-Men-800x445.jpg" alt="" class="container">
       <hr>
       
       <h3>Será mais um ano bastante movimentado para a literatura e o cinema!</h3>
       
       <p>Como diria Scott Fitzgerald, autor de O grande Gatsby, o que invariavelmente nos entristece é contemplar com novos olhos qualquer coisa a qual já estamos adaptados. Neste sentido, a adaptação cinematográfica de livros é um costume que existe desde os primórdios da sétima arte. Quando é divulgado que um livro será recriado nos cinemas, uma parte dos fãs já começa a especular se o roteiro seguirá à risca as passagens da obra e, assim como alguns ficam satisfeitos com o que assistiram nas telonas, outros fazem críticas ferozes o diretor por não retratar fielmente a história.</p>
       
       <p>No entanto, é essencial compreender que o cinema e a literatura, apesar de compartilharem do mesmo ponto de vista artístico – a criação de um novo universo, são canais bastante diferentes. Começando pela narrativa – na literatura o leitor imagina os personagens, olhares, toques e sensações através da descrição escrita pelo autor em cada um desses aspectos. No cinema a relação com o público é completamente visual, logo as entrelinhas que são apresentadas de forma escrita na literatura, serão compreendidas de forma visualmente coerente nas telas. Apesar de parecer óbvio, a diferença entre a linguagem das duas artes é pouco levada em consideração quando um roteiro adaptado de um livro é transformado em filme.</p>
       
       <h3>O poder das histórias</h3>
       
       <p>Algumas das adaptações mais marcantes são O grande Gatsby, O poderoso chefão, Ensaio sobre a cegueira, Clube da luta, Orgulho e preconceito, O silêncio dos inocentes, O iluminado, Harry Potter e a pedra filosofal e Trainspotting. Em 2017, tivemos um grande número de filmes e séries que foram inspirados em obras literárias, em maior ou menor escala. A série de sucesso da Netflix Stranger Things se baseou no longa Conta comigo, de 1985, para compor a caracterização das roupas dos personagens e também a fotografia da série. Além disso, o autor mais adaptado para as telas, sejam as do cinema ou da televisão, é Stephen King. Além de ter inspirado filmes clássicos como O iluminado, o filme Conta comigo também foi baseado em um dos seus contos: com o título de O corpo, o conto em questão está presente no livro Quatro estações. Desta forma, no mundo da arte as adaptações são bem populares e oferecem a vantagem do público experienciar, através de canais distintos, o poder infindável das histórias.</p>
       
       <h3>Confira os livros que estarão nas telonas em 2018!</h3>
       
       <br>
       <hr>
       <br>
       
       <h3>A garota na teia de aranha , de David Lagercrantz</h3>
       
       <p>Stieg Larsson foi um jornalista sueco e autor da triologia de sucesso Millennium, formada por três livros: Os homens que não amavam as mulheres,  A menina que brincava com fogo e A rainha do castelo de ar. Larsson faleceu em 2004, em decorrência de um ataque cardíaco fulminante. O autor planejava escrever 10 livros sobre a famosa hacker Lisbeth Salander, mas os cigarros e o sedentarismo não permitiram. Neste caso, outro autor sueco foi convidado para escrever a quarta edição da série, A garota na teia de aranha – o também jornalista David Lagercrantz.  A pressão para escrever o livro foi grande, além da expectativa dos fãs, já faziam 10 anos desde o lançamento do último livro da trilogia, em maio de 2007. A série foi um sucesso de público e crítica em simplesmente todos os países que foi lançada, alcançando o incrível número de 80 milhões de livros vendidos. A obra chega às telas de cinema em 2018, protagonizado pela atriz Claire Foy, da série The Crown, no papel de Lisbeth Salander.</p>
       
       <img src="img/filmes/agarota.jpg" alt="">
       
       <br>
       <hr>
       <br>
       
       <h3>Cadê você, Bernadette?, de Maria Semple</h3>
       
       <p>O best-seller de Maria Semple conta a história de Bee, uma menina de 15 anos, que está à procura de sua mãe desaparecida, Bernadette. O roteiro da adaptação cinematográfica está nas mãos de Scott Neustadter and Michael H. Weber, de 500 Dias com ela. A premiada atriz Cate Blanchett interpretará a mãe de Bee, Bernadette.</p>
       
       
       <img src="img/filmes/cadevoce.jpg" alt="">
       
        <br>
       <hr>
       <br>
       
       <h3>Jogador Nº1, de Ernest Cline</h3>
       
       <p>
           O trailer da adaptação do sucesso distópico Jogador Nº 1, foi lançado na Comic Con de San Diego este ano, e conta com ninguém menos do que Steven Spielberg na direção. A trama se passa em 2044 e acompanha a trajetória do adolescente Wade Watts, que fica preso em Oasis – um universo virtual.
       </p>
       
       <img src="img/filmes/jogador.png">
       
        <br>
       <hr>
       <br>
       
       <h3>Simon vs. a agenda Homo Sapiens, de Becky Albertalli</h3>
       
       <p>Simon é um garoto de 16 anos com dificuldades em revelar que é gay para seus pais e seus amigos. Mas a questão que o livro aborda é: será que ele precisa mesmo assumir uma posição quanto a sua sexualidade? As filmagens da adaptação cinematográfica já estão no fim e a estreia está prevista para o primeiro semestre de 2018. O elenco está recheado de estrelas, como Jennifer Garner, Josh Duhamel e Katherine Langford, a protagonista da série de sucesso 13 reasons why.</p>
       <img src="img/filmes/simon.jpg" alt="">
       
       
       <br>
       <hr>
       <br>
       
       <h3>Uma dobra no tempo, Madeleine L’engle
</h3>
       <p>O livro de suspense e sci-fi de Madeleine L’Engle também vai ganhar sua versão para os cinemas, pelos estúdios Disney e com estreia prevista para março do ano que vem. Só o elenco já causa ansiedade do público: terá Reese Whiterspoon, Chris Pine e Oprah Winfrey.

</p>
       <img src="img/filmes/tempo.jpg" alt="">
       
       
       <br>
       <hr>
       <br>
       
       <h3>Aniquilação, de Jeff Vandermeer
</h3>
       <p>A adaptação do livro de Jeff Vandermeer chega em fevereiro aos cinemas e terá direção de Alex Garland, do filme Ex-machina. O longa traz a vencedora do Oscar Natalie Portman e também a atriz Gina Rodriguez, famosa por protagonizar o seriado Jane, the virgin.

</p>
       <img src="img/filmes/Aniquilacao.jpg" alt="">
       
       
        </section>

        <div class="container">
            <img src="img/lerfazbem.png" alt="" class="col-12">
        </div>

        <hr>
        <footer class="bg-dark container-fluid">
            <link rel="stylesheet" href="css/footer.css">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="titulo">
                            <h4>ACOMPANHE A GENTE</h4>
                        </div>

                        <div class="redes">
                            <img src="img/footer/facebook.png" alt="" class="col-lg-4 col-sm-4"><img src="img/footer/instagram.png" alt="" class="col-lg-4 col-sm-4 w-75"><img src="img/footer/t.png" alt="" class="col-lg-4 col-sm-4">
                        </div>


                        <!--
                            <img src="img/footer/t.png" alt="" class="w-75 h-75">
                                  <img src="img/footer/instagram.png" alt="" class="w-75 h-75">
                            </div>
                            <div class="redes col-12 col-md-4">
                                
                            </div>
                            <div class="redes col-12 col-md-4">
                              
                            </div>
                        -->
                    </div>

                    <div class="pagamento col-md-4">
                        <div class="titulo">
                            <h4>FORMAS DE PAGAMENTO</h4>
                        </div>
                        <div class="pagseguro">
                            <img src="img/footer/pagseguro.gif" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="quemsomos col-md-4">
                        <div class="titulo">
                            <h4>SOBRE:</h4>
                        </div>
                        <ul>
                            <li>QUEM SOMOS</li>
                            <li>TERMOS DE USO</li>
                            <li>FRETE GRATIS</li>
                            <li>AJUDA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <nav>
            <p class="bg-dark text-center">
                © - Livraria Mariza de Carvalho
            </p>
        </nav>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>
