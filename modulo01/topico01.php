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
                        <h2 class="Titulo fw-bolde scrool">Conhecendo a Interface do Calc</h2>
                        <!-- Título -->

                        <!-- INICIO DO CONTEUDO -->

                        <p class="scrool mt-3 mb-4">
                            <strong>Objetivo:</strong> Apresentar o editor de planilhas Calc e seus elementos básicos.
                        </p>

                        <h4 class="corsub fw-bolder scrool">Suíte LibreOffice</h4>

                        <p class="scrool">
                            Potente suíte de escritório, sua interface limpa. Suas poderosas ferramentas libertam a
                            criatividade e melhoram a produtividade. O LibreOffice incorpora várias aplicações que a
                            tornam uma da mais avançada suíte de escritório livre e de código aberto do mercado. O Calc
                            permite abrir arquivos de outras suítes de escritório, como, por exemplo, o Pacote Office da
                            Microsoft. Isso, graças à utilização do formato Open Document (ODF – OpenDocument Format).
                        </p>

                        <p class="scrool">
                            A Suíte conta com editor de texto (<strong>Writer</strong>), editor de planilhas
                            (<strong>Calc</strong>), criador de apresentações (<strong>Impress</strong>), editor de
                            desenho e fluxogramas (<strong>Draw</strong>), banco de dados (<strong>Base</strong>) e
                            editor de equações (<strong>Math</strong>).
                        </p>

                        <p class="scrool">
                            Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá
                            utilizar qualquer outra versão.
                        </p>

                        <!-- 1º Subtopico -->

                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item1">O que é o Calc?</h3>

                        <p class="scrool">
                            O Calc é um dos componentes da Suíte LibreOffice e que tem como função trabalhar com
                            planilhas eletrônicas, permitindo ao usuário realizar cálculos diversos, indo de um simples
                            cálculo de orçamento doméstico a planilhas corporativas complexas. Dentre os recursos de uma
                            planilha está a possibilidade de apresentar graficamente os dados selecionados pelo usuário.
                        </p>

                        <p class="scrool">
                            Outras funcionalidades oferecidas pelo Calc:
                        </p>

                        <ul class="scrool ul">
                            <li>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Funções que podem ser utilizadas para criar fórmulas, a fim de executar cálculos
                                complexos;
                            </li>

                            <li>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Funções de banco de dados, para organizar, armazenas e filtrar dados;
                            </li>

                            <li>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Gráficos dinâmicos: um grande número de opções de gráficos em 2D e 3D;
                            </li>

                            <li>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Macros: para a gravação e a execução de tarefas repetitivas;
                            </li>

                            <li>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Capacidade de abrir, editar e salvar planilhas no formato .xls e .xlsx (Microsoft
                                Excel);
                            </li>

                            <li>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Importação e exportação de planilhas em vários formatos, incluindo HTML, CSV, PDF e
                                PostScript.
                            </li>
                        </ul>

                        <p class="scrool">
                            Por ser um software do tipo livre, o LibreOffice.org garante que qualquer pessoa pode
                            utiliza-lo e/ou modifica-lo sem a necessidade de autorização prévia.
                        </p>

                        <!-- 2º Subtopico -->

                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item2">Instalação da Suíte LibreOffice</h3>

                        <p class="scrool">
                            Para instalar a Suíte LibreOffice, assista aos vídeos:
                        </p>

                        <!-- iframe - video -->
                        <div class="container">
                            <iframe width="600" height="340"
                                src="https://www.youtube.com/embed/XEOHl_6bpNs?si=BgmZRoSseFQHjLfU"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <!-- iframe - video -->
                        <div class="container">
                            <iframe width="600" height="340"
                                src="https://www.youtube.com/embed/34fBPRUh9-s?si=KP5ZNHhGvDXMCm8F"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <!-- 3º Subtopico -->

                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item3">Elementos Básicos de Uma Planilha no
                            Calc</h3>

                        <h4 class="corsub fw-bolder scrool mt-5">Planilha</h4>

                        <p class="scrool">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            É o arquivo completo, com todas as suas abas ou folhas de cálculo. Na primeira aba, podemos
                            ter, por exemplo, o cálculo de despesas do seu escritório. Na segunda aba as, receitas e na
                            terceira aba, um gráfico demonstrativo.
                        </p>

                        <p class="scrool">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            Cada planilha contém colunas, que são dispostas lado a lado, e linhas que correm de cima a
                            baixo, lembrando um plano cartesiano, no qual as coordenadas são representadas pelos pares
                            ordenados "x ; y". No caso das planilhas "coluna ; linha". As colunas são rotuladas com
                            letras e as linhas são numeradas. Cada planilha possui 1.048.576 linhas e as colunas vão das
                            letras A à A.
                        </p>

                        <!-- SEGUNDA PARTE -->
                        <h4 class="corsub fw-bolder mt-5 scrool">Célula</h4>

                        <p class="scrool">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            Elemento básico, primordial em uma planilha. É identificado como sendo a interseção entre
                            dois vetores (retângulo que se forma do cruzamento de linha x coluna). Recebe a informação a
                            ser processada, podendo ser textual, numérica, fórmula ou outros caracteres.
                        </p>

                        <p class="scrool">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            No exemplo, a palavra <strong>“CEDIS”</strong> pertence a célula que se forma com o
                            cruzamento da coluna <strong>B</strong> e a linha <strong>2</strong>. Logo, o Calc entende
                            esta coordenada como <strong>“B2”</strong>. Ela representa então o que chamamos de
                            <strong>endereço da célula</strong>. Em caso de números, as fórmulas serão baseadas nos
                            endereços da célula, facilitando bastante nossos futuros trabalhos com funções.
                        </p>

                        <!-- imagem - start -->
                        <div class="scrool">
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                    Exemplo de uma célula</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem1">
                                        <img src="imgs/index/figura01.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Tecmundo</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem1" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/index/figura01.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>Tecmundo</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem - End-->
                        </div>

                        <p class="scrool mt-3">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            Observe ainda que temos (no canto superior esquerdo) o que chamamos de caixa de endereço.
                            Através dela podemos visualizar o endereço da célula selecionada.
                        </p>

                        <!-- TERCEIRA PARTE -->
                        <h4 class="corsub fw-bolder mt-5 scrool">Valores</h4>

                        <p class="scrool mt-3">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            Um valor pode representar um dado numérico ou textual inserido pelo usuário ou pode ser
                            resultado de uma fórmula ou função (nativa ou do usuário).
                        </p>

                        <!-- QUARTA PARTE -->
                        <h4 class="corsub fw-bolder mt-5 scrool">Fórmulas</h4>

                        <p class="scrool mt-3">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            A fórmula é uma expressão matemática, inserida na célula pelo usuário para calcular um
                            resultado. Os critérios podem ser:
                        </p>

                        <ul class="scrool ul">
                            <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Célula;</li>
                            <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Faixa de células;</li>
                            <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Resultado aritmético;</li>
                            <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Referência a outras planilhas
                                etc.</li>
                        </ul>

                        <p class="scrool">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            A fórmula é a parte inteligente da planilha e sem as fórmulas a planilha. Seria somente um
                            amontoado de textos e números.
                        </p>

                        <!-- QUINTAS PARTE -->
                        <h4 class="corsub fw-bolder mt-5 scrool">Funções</h4>

                        <p class="scrool mt-3">
                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                            São fórmulas pré-definidas (nativas) para pouparem tempo e trabalho na criação de uma
                            equação. O Calc contém muitas funções nativas e o usuário é livre para implementar as suas
                            próprias funções, há de se imaginar como sendo quase ilimitado o poder do usuário em
                            estender a funcionalidade da planilha eletrônica.
                        </p>

                        <!-- 4º Subtopico-->
                        <h3 class="Titulo fw-bolder mt-5 mb-3 scrool subtopico" id="item4">Interface do Calc</h3>

                        <!-- imagem - start -->
                        <div class="scrool">
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
                                    Interface do Calc</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem2">
                                        <img src="imgs/topico01/figura02.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem2" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico01/figura02.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem - End-->

                            <!-- 2º parte do 4º subtopico -->
                            <h4 class="corsub fw-bolder mt-5 scrool">Barra de Título</h4>

                            <p class="scrool">
                                Localizada no alto da tela, mostra o nome do documento atual. Quando a planilha for recém-criada, seu nome será “Sem título X”, onde X é um número. Ao ser salva pela primeira vez, você será solicitado a dar um nome a essa planilha. Encontram-se ainda na barra: a logo do Calc (lado superior esquerdo) e os botões de minimizar, restaurar/maximizar e fechar (lado superior direito).
                            </p>

                            <!-- 3º parte do 4º subtopico -->
                            <h4 class="corsub fw-bolder mt-5 scrool">Barra de Menu</h4>

                            <p class="scrool">
                                Localizada abaixo da barra de título, a Barra de menu é composta por vários menus e submenus, permitindo acesso rápido a uma série de funcionalidades. Você pode personalizar a Barra de menu conforme as suas necessidades. Para isso, vá em <strong>Ferramentas → Personalizar</strong> e vá na guia <strong>Menu</strong>.
                            </p>

                            <!-- imagem - start -->
                        <div class="scrool">
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 3:</strong>
                                    Personalizar</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem3">
                                        <img src="imgs/topico01/figura03.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem3" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico01/figura03.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem - End-->

                            <!-- 4º parte do 4º subtopico -->
                            <h4 class="corsub fw-bolder mt-5 scrool">Barra de Ferramentas</h4>
                            <p class="scrool">
                                A barra de ferramentas do LibreOffice inclui elementos comuns aos aplicativos, como os botões: salvar, imprimir, exportar como PDF, desfazer, tabelas etc.
                            </p>

                            <p class="scrool">
                                Na Barra de ferramentas padrão estão várias opções, tais como:
                            </p>

                            <ul class="scrool ul">
                                <li><i class="fa fa-dot-circle text-success fs-6"></i> Gráficos;</li>
                                <li><i class="fa fa-dot-circle text-success fs-6"></i> Ajuda;</li>
                                <li><i class="fa fa-dot-circle text-success fs-6"></i> Alinhamento;</li>
                                <li><i class="fa fa-dot-circle text-success fs-6"></i> Numeração;</li>
                                <li><i class="fa fa-dot-circle text-success fs-6"></i> Recuo;</li>
                                <li><i class="fa fa-dot-circle text-success fs-6"></i> Cor da fonte etc.</li>
                            </ul>
                            
                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i
                    class="fa-solid fa-chevron-left"></i>   Voltar</a>

            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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