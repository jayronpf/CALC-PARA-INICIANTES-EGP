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

                        <p class="scrool mt-3 mb-4">
                            <strong>Objetivo:</strong> Apresentar o editor de planilhas Calc e seus elementos básicos.
                        </p>

                        <h4 class="corsub fw-bolder">Suíte LibreOffice</h4>

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

                        <h3 class="Titulo fw-bolder mt-5 mb-3" id="item1">O que é o Calc?</h3>

                        <p class="scrool">
                            O Calc é um dos componentes da Suíte LibreOffice e que tem como função trabalhar com
                            planilhas eletrônicas, permitindo ao usuário realizar cálculos diversos, indo de um simples
                            cálculo de orçamento doméstico a planilhas corporativas complexas. Dentre os recursos de uma
                            planilha está a possibilidade de apresentar graficamente os dados selecionados pelo usuário.
                        </p>

                        <p class="scrool">
                            Outras funcionalidades oferecidas pelo Calc:
                        </p>

                        <ul>
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

                        <h3 class="Titulo fw-bolder mt-5 mb-3" id="item2">Instalação da Suíte LibreOffice</h3>

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

                        <h3 class="Titulo fw-bolder mt-5 mb-3" id="item3">Elementos Básicos de Uma Planilha no Calc</h3>

                        <!-- modal -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Planilha
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 btntitle" id="exampleModalLabel">Planilha</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        dgdfdf
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>










                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i
                    class="fa-solid fa-chevron-left"></i>Voltar</a>

            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo<i
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