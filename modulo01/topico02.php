<!-- heade -->
<?php
    include( 'layout/head.php' );
    ?>

<body>
    <!-- nav -->
    <?php
    include( 'layout/nav.php' );
    ?>

    <!-- menu -->
    <?php
    include( 'layout/menu.php');
    ?>


    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">

                <!-- imagem  -->
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!-- Título -->
                        <h2 class="Titulo fw-bolde scrool">Trabalhando com Células, Colunas, Linhas e Folhas de Cálculo
                        </h2>
                        <!-- Título -->

                        <!-- INICIO DO CONTEUDO -->

                        <p class="scrool">
                            <strong>Objetivo:</strong> Conhecer alguns dos elementos básicos relacionados as células,
                            colunas, linhas e folhas de cálculo.
                        </p>

                        <h4 class="corsub fw-bolder scrool">Intervalo de Célula</h4>

                        <p class="scrool">
                            Saber a diferença entre o uso do ponto-e-vírgula e o uso dos dois pontos nas operações
                            realizadas tanto no MSExcel quanto no LibreOffice Calc é de importância fundamental.
                        </p>

                        <p class="scrool">
                            Imagine os seguintes dados: <strong>A4 = 1</strong>; <strong>A5 = 2</strong>; <strong>A6 =
                                3</strong>.
                        </p>

                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloexemplo">
                                        <div class="div_teste">
                                            <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">
                                            O uso dos <strong>DOIS PONTOS</strong> “:” em planilhas eletrônicas equivale
                                            ao intervalo de
                                            um número a outro. <br> <br>

                                            <strong>=SOMA(A4:A6)</strong> <br> <br>

                                            Com essa fórmula dizemos para a planilha que efetue a soma dos valores
                                            contidos no intervalo entre as células A4 e A6 <br> <br>

                                            Em resumo, o cálculo realizado será: <strong>A4 + A5 + A6 = 1+2+3 =
                                                6</strong>
                                        <p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloexemplo">
                                        <div class="div_teste">
                                            <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">
                                            Ao utilizar <strong>PONTO E VÍRGULA</strong> “;” dizemos para a planilha que
                                            devem ser
                                            somados os números, e somente eles, contidos nas respectivas células
                                            citadas: <br> <br>

                                            <strong>=SOMA(A4; A6)</strong> <br> <br>

                                            Em resumo, o cálculo realizado será: <strong>A4 + A6 = 1+3 = 4</strong>
                                        <p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloSaibaMais">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="saibamais">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">
                                            Vale lembrar que se quisermos selecionar as células A1, A2, A3, A4, A5, A6 e
                                            A7 para somar seu conteúdo, podemos fazer assim: <br> <br>

                                            <strong>=SOMA(A1;A2;A3;A4;A5;A6;A7)</strong> ou de uma maneira mais simples:
                                            <strong>=SOMA(A1:A7)</strong>
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <!-- 1º subtopico -->
                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item1">Seleção de Células, Colunas,
                            Linhas e Folhas</h3>

                        <h4 class="corsub fw-bolder scrool mt-5">Células</h4>

                        <p class="scrool">
                            As células podem ser selecionadas de várias maneiras e combinações
                        </p>

                        <p class="scrool">
                            <strong>Célula única:</strong> clique com o botão esquerdo do mouse sobre a célula.
                        </p>

                        <p class="scrool">
                            <strong>Grupo de células contíguas:</strong> você pode selecionar um grupo de células
                            contíguas, utilizando o teclado ou o mouse.
                        </p>

                        <!-- alerta -->
                        <div class="alert d-flex justify-content-center" role="alert">
                            <i class="bi bi-lightbulb-fill"></i>
                            <div>
                                Clique nos títulos abaixo para mais informações
                            </div>
                        </div>
                        <!-- fim do alerta -->

                        <!-- acordeon com conteudo da aula -->

                        <div class="accordion accordion-flush scrool" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Para selecionar um grupo de células arrastando o mouse
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-flex justify-content-start">
                                        <ul class="uls-accordion">
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                em uma célula;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                Pressione e segure o botão esquerdo do mouse;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Mova o
                                                mouse através da tela com o botão ainda pressionado;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Uma vez
                                                selecionado o bloco de células desejado, solte o botão do mouse.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Para selecionar um grupo de células sem arrastar o mouse
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-flex justify-content-start">
                                        <ul class="uls-accordion">
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                na célula que será um dos cantos do grupo a ser selecionado;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Mova o
                                                mouse para o canto oposto do grupo a ser selecionado, sem pressionar o
                                                botão;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                Pressione e mantenha a tecla Shift;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                na célula que será o canto oposto da seleção.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Para selecionar um grupo de células com o teclado
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="uls-accordion">
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                na célula que será um dos cantos do grupo a ser selecionado;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Mova o
                                                mouse para o canto oposto do grupo a ser selecionado, sem pressionar o
                                                botão;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                Pressione e mantenha a tecla Shift;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                na célula que será o canto oposto da seleção.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFor" aria-expanded="false"
                                        aria-controls="flush-collapseFor">
                                        Para selecionar células intercaladas
                                    </button>
                                </h2>
                                <div id="flush-collapseFor" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="uls-accordion">
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                na célula que será um dos cantos do grupo a ser selecionado;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Mova o
                                                mouse para o canto oposto do grupo a ser selecionado, sem pressionar o
                                                botão;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                Pressione e mantenha a tecla Shift;</li>
                                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique
                                                na célula que será o canto oposto da seleção.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fim acordeon com conteudo da aula -->


                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center scrool">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i
                    class="fa-solid fa-chevron-left"></i> Voltar</a>

            <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- barra de progresso embaixo -->
        <div id="progress-bar"></div>
    </div>

    <!-- BUTTON BACK TO TOP (JAMILLE) -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <?php
    include('layout/footer.php');
    ?>
</body>

</html>