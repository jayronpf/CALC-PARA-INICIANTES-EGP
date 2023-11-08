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
                        <h2 class="Titulo fw-bolde scrool">Apresentação</h2>
                        <!-- Título -->

                        <!-- INICIO DO CONTEUDO -->

                        <!-- imagem -->
                        <div class="text-center img-01 scrool">
                            <div class="zoom2">
                                <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs/index/banner.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Primeiro bloco -->
                        <div class="scrool">
                            <p class="mt-4"><strong>Bem-vindo ao Curso “Calc para Iniciantes”!</strong></p>

                            <p>
                                Conhecido como um potente editor de Planilhas Eletrônicas, o LibreOffice Calc é um
                                software livre e gratuito, que surgiu como uma alternativa ao Microsoft Excel, software
                                proprietário e pago.
                            </p>

                            <p>
                                Nosso curso busca apresentar uma linguagem simples que lhe ajudará a conhecer um pouco
                                mais sobre os conceitos básicos da utilização desse programa, através da utilização de
                                exemplos claros e objetivos.
                            </p>

                            <p>
                                Esperamos que você se dedique ao curso e tenha um bom aproveitamento!
                            </p>
                        </div>
                        <!-- Fim do primeiro bloco -->

                        <!-- Segundo bloco -->
                        <div class="scrool">
                            <h2 class="Titulo fw-bolder mt-5">Objetivo</h2>

                            <p>
                                <i class="fa fa-dot-circle text-success fs-6"></i>
                                Proporcionar ao aluno uma visão básica de alguns recursos do LibreOffice Calc através de
                                exemplos práticos que possam ser utilizados em seu cotidiano pessoal e profissional.
                            </p>
                        </div>
                        <!-- Fim do segundo bloco -->

                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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