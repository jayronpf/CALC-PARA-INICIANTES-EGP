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
                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item5">Seleção de Células, Colunas,
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
                        <div class="alert d-flex justify-content-center mt-5" role="alert">
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
                                        data-bs-target="#flush-collapseFor" aria-expanded="false"
                                        aria-controls="flush-collapseFor">
                                        Para selecionar células intercaladas
                                    </button>
                                </h2>
                                <div id="flush-collapseFor" class="accordion-collapse collapse"
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
                        </div>

                        <!-- fim acordeon com conteudo da aula -->

                        <h4 class="corsub fw-bolder scrool mt-5">Colunas, Linhas e Folha</h4>

                        <p class="scrool">
                            Colunas e linhas inteiras podem ser selecionadas de maneira muito rápida no LibreOffice.
                        </p>

                        <ul class="uls-accordion">
                            <li><i class="fa fa-dot-circle text-success fs-6"></i> Para selecionar uma única coluna,
                                clique na letra do identificador da coluna, por exemplo. Para selecionar a coluna
                                <strong>D</strong>, clique sobre a letra <strong>D</strong> no cabeçalho de colunas;
                            </li>

                            <li><i class="fa fa-dot-circle text-success fs-6"></i> Para selecionar uma única linha,
                                clique no identificador do número da linha, por exemplo. Para selecionar a linha 1,
                                clique sobre o número 1 no cabeçalho de linhas.</li>
                        </ul>

                        <!-- Caixas com conteúdo -->

                        <div class="div-cx-conteudo d-flex justify-content-evenly ">
                            <div class="alert cx-conteudo" role="alert">
                                <div class="cabecalho">
                                    <i class="fa-solid fa-cube" style="color: #477391;"></i>
                                    Para selecionar múltiplas colunas ou linhas contíguas
                                </div>

                                <div class="body ">
                                    <ul class="mt-3 uls-cx-conteudo d-flex justify-content-start flex-column">
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Clique na
                                            primeira coluna ou linha do grupo;</li>
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Pressione e
                                            segure a tecla Shift;</li>
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Clique na
                                            última coluna ou linha do grupo.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="alert cx-conteudo" role="alert">
                                <div class="cabecalho">
                                    <i class="fa-solid fa-cube" style="color: #477391;"></i>
                                    Para selecionar múltiplas colunas ou linhas não contíguas
                                </div>

                                <div class="body ">
                                    <ul class="mt-3 uls-cx-conteudo d-flex justify-content-start flex-column">
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Clique na
                                            primeira coluna ou linha do grupo;</li>
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Pressione e
                                            segure a tecla Ctrl;</li>
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Clique em
                                            todas as colunas ou linhas subsequentes,<br> enquanto segura a tecla Ctrl.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Fim das caixas com conteúdo -->

                        <p class="scrool">
                            Para selecionar uma folha inteira, clique na pequena caixa entre o identificador da coluna
                            “<strong>A</strong>” e o identificador da linha “<strong>1</strong>”.
                        </p>

                        <p class="scrool">
                            Você também pode pressionar <strong>Ctrl+A</strong> para selecionar folhas inteiras ou indo
                            em <strong>Editar → Selecionar tudo</strong>.
                        </p>

                        <!-- imagem - start -->
                        <div class="scrool">
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 4:</strong>
                                    Seleção de Planilha</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem4">
                                        <img src="imgs/topico02/figura04.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem4" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico02/figura04.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- 2º Subtopico -->
                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item6">Inserção de colunas ou linhas</h3>

                        <h4 class="corsub fw-bolder scrool">Intervalo de Célula</h4>

                        <!-- Caixas com conteúdo -->

                        <div class="div-cx-conteudo">
                            <div class="alert cx-conteudo" role="alert">
                                <div class="cabecalho">
                                    Utilizando o menu Inserir
                                </div>

                                <div class="body ">
                                    <ul class="mt-3 uls-cx-conteudo d-flex justify-content-start flex-column">
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Selecione a célula, coluna ou linha em que você quer inserir a nova coluna ou linha;</li>
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Clique em “Planilha → Inserir Colunas” ou “Planilha → Inserir → Linhas”.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="alert cx-conteudo" role="alert">
                                <div class="cabecalho">
                                    Utilizando o mouse
                                </div>

                                <div class="body ">
                                    <ul class="mt-3 uls-cx-conteudo d-flex justify-content-start flex-column">
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Selecione a célula, coluna ou linha em que você quer inserir a nova coluna ou linha;</li>

                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Clique com o botão direito do mouse no cabeçalho da coluna ou da linha;</li>
                                         
                                        <li><i class="fa-solid fa-arrow-right" style="color: #477391;"></i> Escolha entre: inserir linhas acima, inserir linhas abaixo, inserir colunas à esquerda ou inserir colunas à direita.
                                        </li>
                                    </ul>

                                    <div class="divpai-imgs d-flex justify-content-evenly">
                                    <!-- imagem - start -->
                                        <div class="scrool">
                                            <div class="text-center img-01">
                                                <p class="TituloFigura FonteMenor p-2 text-dark"><strong>Figura 5:</strong>
                                                    Inserindo coluna
                                                </p>
                                                <div class="zoom">
                                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem5">
                                                        <img src="imgs/topico02/figura05.png" alt="Imagem que remete a organização"
                                                            id="img-1">
                                                    </a>
                                                </div>
                                                <p class="FonteFigura FonteMenor text-dark"><strong>Fonte:</strong>EGPCE</p>
                                            </div>

                                            <!-- Imagem - MODAL-->
                                            <div class="modal fade text-center" id="Imagem5" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                                    <div class="modal-content w-75">
                                                        <img class="img-fluid" src="imgs/topico02/figura05.png"
                                                            alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Imagem - End-->

                                    <!-- imagem - start -->
                                        <div class="scrool">
                                            <div class="text-center img-01">
                                                <p class="TituloFigura FonteMenor text-dark p-2"><strong>Figura 6:</strong>
                                                    Inserindo linha
                                                </p>
                                                <div class="zoom">
                                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem6">
                                                        <img src="imgs/topico02/figura06.png" alt="Imagem que remete a organização"
                                                            id="img-1">
                                                    </a>
                                                </div>
                                                <p class="FonteFigura FonteMenor text-dark"><strong>Fonte:</strong>EGPCE</p>
                                            </div>

                                            <!-- Imagem - MODAL-->
                                            <div class="modal fade text-center" id="Imagem6" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div
                                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                                    <div class="modal-content w-75">
                                                        <img class="img-fluid" src="imgs/topico02/figura06.png"
                                                            alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem - End-->
                                </div>
                            </div>
                        </div>

                        <!-- Fim das caixas com conteúdo -->

                        <h4 class="corsub fw-bolder scrool mt-5">Múltiplas Colunas ou Linhas</h4>

                        <p class="scrool">
                            Você pode também inserir várias colunas ou linhas de uma só vez.
                        </p>

                        <ul>
                            <li class="mb-2"><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Selecione o número de colunas ou de linhas pressionando e segurando o botão esquerdo do mouse na primeira, e arraste o número necessário de identificadores.</li> 

                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Proceda da mesma forma, como fosse inserir uma única linha ou coluna, conforme descrito acima.</li> 
                        </ul>

                        <!-- imagem - start -->
                        <div class="scrool">
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 7:</strong>
                                    Inserindo 3 linhas abaixo da linha 1
                                </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem7">
                                        <img src="imgs/topico02/figura07.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem7" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico02/figura07.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- 3º Subtopico -->
                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item7">Exclusão de colunas ou linhas</h3>

                        <p class="scrool">
                            Colunas e linhas podem ser apagadas individualmente ou em grupos.
                        </p>

                        <h4 class="corsub fw-bolder scrool mt-5">Coluna ou Linha Única</h4>

                        <p class="scrool">
                            Uma única coluna ou linha pode ser apagada, utilizando-se o mouse:
                        </p>

                        <ul>
                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Selecione a coluna ou linha a ser apagada;</li>

                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Clique com o botão direito do mouse no identificador da coluna ou linha;</li>
                            
                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Selecione Excluir Colunas ou Excluir Linhas no menu de contexto.</li>
                        </ul>

                        <h4 class="corsub fw-bolder scrool mt-5">Múltiplas Colunas ou Linhas</h4>

                        <p class="scrool">
                            Você pode apagar várias colunas ou linhas de uma vez, ao invés de apagá-las uma por uma.
                        </p>

                        <ul>
                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Selecione as colunas que deseja apagar, pressionando o botão esquerdo do mouse na primeira, e arraste o número necessário de identificadores;</li>

                            <li><i class="fa-solid fa-arrow-right" style="color: #44833d;"></i> Proceda como se fosse apagar uma única coluna ou linha acima.</li>
                        </ul>

                        <!-- imagem - start -->
                        <div class="scrool">
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 8:</strong>
                                Excluindo 3(três) linhas abaixo da linha 1
                                </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem8">
                                        <img src="imgs/topico02/figura08.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem8" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-50">
                                        <img class="img-fluid" src="imgs/topico02/figura08.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-50 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->


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