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
                        <h2 class="Titulo fw-bolde wow fadeIn" data-wow-delay="0.3s">Conhecendo a Interface do Calc</h2>
                        <!-- Título -->

                        <!-- INICIO DO CONTEUDO -->

                        <!-- primeiro bloco -->
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                            <p class="mt-3 mb-4">
                                <strong>Objetivo:</strong> Apresentar o editor de planilhas Calc e seus elementos
                                básicos.
                            </p>

                            <h4 class="corsub fw-bolder">Suíte LibreOffice</h4>

                            <p>
                                Potente suíte de escritório, sua interface limpa. Suas poderosas ferramentas libertam a
                                criatividade e melhoram a produtividade. O LibreOffice incorpora várias aplicações que a
                                tornam uma da mais avançada suíte de escritório livre e de código aberto do mercado. O
                                Calc
                                permite abrir arquivos de outras suítes de escritório, como, por exemplo, o Pacote
                                Office da
                                Microsoft. Isso, graças à utilização do formato Open Document (ODF – OpenDocument
                                Format).
                            </p>

                            <p>
                                A Suíte conta com editor de texto (<strong>Writer</strong>), editor de planilhas
                                (<strong>Calc</strong>), criador de apresentações (<strong>Impress</strong>), editor de
                                desenho e fluxogramas (<strong>Draw</strong>), banco de dados (<strong>Base</strong>) e
                                editor de equações (<strong>Math</strong>).
                            </p>

                            <p>
                                Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá
                                utilizar qualquer outra versão.
                            </p>
                        </div>
                        <!-- fim primeiro bloco -->

                        <!-- 1º Subtopico -->

                        <h5 class="text-center wow fadeIn" data-wow-delay="0.3s"><span class="badge bg-warning p-2"><i
                                    class="bi bi-lightbulb-fill"></i>
                                Clique para saber mais</span></h5>

                        <div class="container wow animate__zoomIn" data-wow-delay="0.3s">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <h5>O que é o Calc?</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            O Calc é um dos componentes da Suíte LibreOffice e que tem como função
                                            trabalhar
                                            com
                                            planilhas eletrônicas, permitindo ao usuário realizar cálculos diversos,
                                            indo de
                                            um simples
                                            cálculo de orçamento doméstico a planilhas corporativas complexas. Dentre os
                                            recursos de uma
                                            planilha está a possibilidade de apresentar graficamente os dados
                                            selecionados
                                            pelo usuário.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Outras funcionalidades oferecidas pelo Calc:</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul class="ul">
                                                <li>
                                                    <i class="fa fa-dot-circle text-success fs-6"></i>
                                                    Funções que podem ser utilizadas para criar fórmulas, a fim de
                                                    executar
                                                    cálculos
                                                    complexos;
                                                </li>

                                                <li>
                                                    <i class="fa fa-dot-circle text-success fs-6"></i>
                                                    Funções de banco de dados, para organizar, armazenas e filtrar
                                                    dados;
                                                </li>

                                                <li>
                                                    <i class="fa fa-dot-circle text-success fs-6"></i>
                                                    Gráficos dinâmicos: um grande número de opções de gráficos em 2D e
                                                    3D;
                                                </li>

                                                <li>
                                                    <i class="fa fa-dot-circle text-success fs-6"></i>
                                                    Macros: para a gravação e a execução de tarefas repetitivas;
                                                </li>

                                                <li>
                                                    <i class="fa fa-dot-circle text-success fs-6"></i>
                                                    Capacidade de abrir, editar e salvar planilhas no formato .xls e
                                                    .xlsx
                                                    (Microsoft
                                                    Excel);
                                                </li>

                                                <li>
                                                    <i class="fa fa-dot-circle text-success fs-6"></i>
                                                    Importação e exportação de planilhas em vários formatos, incluindo
                                                    HTML,
                                                    CSV, PDF e
                                                    PostScript.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn">
                            Por ser um software do tipo livre, o LibreOffice.org garante que qualquer pessoa pode
                            utiliza-lo e/ou modifica-lo sem a necessidade de autorização prévia.
                        </p>

                        <!-- 2º Subtopico -->

                        <!-- terceiro bloco -->
                        <div class="wow fadeIn">

                            <h3 class="Titulo fw-bolder mt-5 mb-3 subtopico" id="item2">Instalação da Suíte LibreOffice
                            </h3>

                            <p>
                                Para instalar a Suíte LibreOffice, assista aos vídeos:
                            </p>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <!-- iframe - video -->
                                    <div class="container wow fadeInLeft" data-wow-delay="0.3s">
                                        <iframe width="600" height="340"
                                            src="https://www.youtube.com/embed/XEOHl_6bpNs?si=BgmZRoSseFQHjLfU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <!-- iframe - video -->
                                    <div class="container wow fadeInRight" data-wow-delay="0.3s">
                                        <iframe width="600" height="340"
                                            src="https://www.youtube.com/embed/34fBPRUh9-s?si=KP5ZNHhGvDXMCm8F"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim do terceiro bloco -->

                        <!-- 3º Subtopico -->

                        <!-- <h5 class="text-center wow fadeIn" data-wow-delay="0.3s"><span class="badge bg-warning p-2"><i
                                    class="bi bi-lightbulb-fill"></i>
                                Clique para saber mais</span></h5>

                        <div class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <h5>Planilha</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                            É o arquivo completo, com todas as suas abas ou folhas de cálculo. Na
                                            primeira aba, podemos
                                            ter, por exemplo, o cálculo de despesas do seu escritório. Na segunda aba
                                            as, receitas e na
                                            terceira aba, um gráfico demonstrativo.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Entretanto...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Isso de modo algum nos autoriza a pensar que as
                                            habilidades de um milionário
                                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos
                                            condicionados a
                                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em
                                            prejuízo de
                                            outras - como as motoras e musicais.</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <h3 class="Titulo fw-bolder mt-5 mb-3 subtopico" id="item3">Elementos Básicos de Uma
                            Planilha no
                            Calc</h3>

                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-6">
                                <img src="imgs-pessoas/Group 10.png" class="wow animate__zoomIn w-75" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">

                                <!-- quinto bloco -->
                                <div class="wow fadeInRight" data-wow-delay="0.3s">
                                    <h4 class="corsub fw-bolder mt-5">Planilha</h4>

                                    <p>
                                        <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                        É o arquivo completo, com todas as suas abas ou folhas de cálculo. Na primeira
                                        aba,
                                        podemos
                                        ter, por exemplo, o cálculo de despesas do seu escritório. Na segunda aba as,
                                        receitas e
                                        na
                                        terceira aba, um gráfico demonstrativo.
                                    </p>

                                    <p>
                                        <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                        Cada planilha contém colunas, que são dispostas lado a lado, e linhas que correm
                                        de cima
                                        a
                                        baixo, lembrando um plano cartesiano, no qual as coordenadas são representadas
                                        pelos
                                        pares
                                        ordenados "x ; y". No caso das planilhas "coluna ; linha". As colunas são
                                        rotuladas com
                                        letras e as linhas são numeradas. Cada planilha possui 1.048.576 linhas e as
                                        colunas vão
                                        das
                                        letras A à A.
                                    </p>
                                </div>
                                <!-- fim do quinto bloco -->
                            </div>

                            <!-- sexto bloco -->
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <div class="wow fadeInLeft" data-wow-delay="0.3s">
                                        <h4 class="corsub fw-bolder mt-5">Célula</h4>

                                        <p>
                                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                            Elemento básico, primordial em uma planilha. É identificado como sendo a
                                            interseção
                                            entre
                                            dois vetores (retângulo que se forma do cruzamento de linha x coluna).
                                            Recebe a
                                            informação a
                                            ser processada, podendo ser textual, numérica, fórmula ou outros caracteres.
                                        </p>

                                        <p>
                                            <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                            No exemplo, a palavra <strong>“CEDIS”</strong> pertence a célula que se
                                            forma
                                            com o
                                            cruzamento da coluna <strong>B</strong> e a linha <strong>2</strong>. Logo,
                                            o
                                            Calc
                                            entende
                                            esta coordenada como <strong>“B2”</strong>. Ela representa então o que
                                            chamamos
                                            de
                                            <strong>endereço da célula</strong>. Em caso de números, as fórmulas serão
                                            baseadas nos
                                            endereços da célula, facilitando bastante nossos futuros trabalhos com
                                            funções.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <!-- imagem - start -->
                                    <div class="wow animate__zoomIn">
                                        <div class="text-center img-01">
                                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura
                                                    1:</strong>
                                                Exemplo de uma célula</p>
                                            <div class="zoom">
                                                <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem1">
                                                    <img src="imgs/index/figura01.png"
                                                        alt="Imagem que remete a organização" id="img-1">
                                                </a>
                                            </div>
                                            <p class="FonteFigura FonteMenor text-secondary">
                                                <strong>Fonte:</strong>Tecmundo
                                            </p>
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
                                    </div>
                                    <!-- Imagem - End-->
                                </div>
                            </div>

                            <p class="mt-3">
                                <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                Observe ainda que temos (no canto superior esquerdo) o que chamamos de caixa de
                                endereço.
                                Através dela podemos visualizar o endereço da célula selecionada.
                            </p>
                        </div>
                        <!-- fim do sexto bloco -->

                        <!-- sétimo bloco -->
                        <div class="wow fadeIn" data-wow-delay="0.3s">   
                            
                        <h5 class="text-center wow fadeIn" data-wow-delay="0.3s"><span class="badge bg-warning p-2"><i
                                    class="bi bi-lightbulb-fill"></i>
                                Clique para saber mais</span></h5>

                            <div class="row">
                            <div class="col-sm-12 col-md-4">
                                    <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                        data-wow-deley="0.3s">
                                        <button class="btn btn-collapse text-light d-flex align-items" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                            aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa-solid fa-dollar-sign fs-5"></i>
                                            <strong>Valores</strong>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="text-collapse body-collpse">
                                        <p class="mt-3">
                                <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                Um valor pode representar um dado numérico ou textual inserido pelo usuário ou pode ser
                                resultado de uma fórmula ou função (nativa ou do usuário).
                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                        data-wow-deley="0.3s">
                                        <button class="btn btn-collapse text-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseExample2"
                                            aria-expanded="false" aria-controls="collapseExample">
                                            <strong>Fórmulas</strong>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample2">
                                        <div class="text-collapse body-collpse">
                                            <p class="mt-3">
                                                <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                A fórmula é uma expressão matemática, inserida na célula pelo usuário
                                                para
                                                calcular um
                                                resultado. Os critérios podem ser:
                                            </p>

                                            <ul class="ul">
                                                <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Célula;
                                                </li>
                                                <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Faixa de
                                                    células;
                                                </li>
                                                <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Resultado
                                                    aritmético;</li>
                                                <li><i class="fa-solid fa-cube" style="color: #44833d;"></i> Referência
                                                    a outras
                                                    planilhas
                                                    etc.</li>
                                            </ul>

                                            <p>
                                                <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                A fórmula é a parte inteligente da planilha e sem as fórmulas a
                                                planilha. Seria
                                                somente
                                                um
                                                amontoado de textos e números.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                        data-wow-deley="0.3s">
                                        <button class="btn btn-collapse text-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseExample3"
                                            aria-expanded="false" aria-controls="collapseExample">
                                            <strong>Funções</strong>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample3">
                                        <div class="text-collapse body-collpse">
                                            <p class="mt-3">
                                                <i class="fa-solid fa-arrow-right" style="color: #44833d;"></i>
                                                São fórmulas pré-definidas (nativas) para pouparem tempo e trabalho na
                                                criação
                                                de uma
                                                equação. O Calc contém muitas funções nativas e o usuário é livre para
                                                implementar as
                                                suas
                                                próprias funções, há de se imaginar como sendo quase ilimitado o poder
                                                do
                                                usuário em
                                                estender a funcionalidade da planilha eletrônica.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim do sétimo bloco -->

                        <!-- 4º Subtopico-->
                        <h3 class="Titulo fw-bolder mt-5 mb-3 subtopico wow fadeIn" data-wow-delayz id="item4">Interface
                            do Calc</h3>

                        <!-- imagem - start -->
                        <div>
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
                                    Interface do Calc</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem2">
                                        <img class="wow animate__zoomIn" data delay="0.3s"
                                            src="imgs/topico01/figura02.png" alt="Imagem que remete a organização"
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

                            <!-- oitavo bloco -->
                            <div class="wow fadeIn" data-wow-delay="0.3s">
                                <!-- 2º parte do 4º subtopico -->
                                <h4 class="corsub fw-bolder mt-5">Barra de Título</h4>

                                <p>
                                    Localizada no alto da tela, mostra o nome do documento atual. Quando a planilha for
                                    recém-criada, seu nome será “Sem título X”, onde X é um número. Ao ser salva pela
                                    primeira vez, você será solicitado a dar um nome a essa planilha. Encontram-se ainda
                                    na
                                    barra: a logo do Calc (lado superior esquerdo) e os botões de minimizar,
                                    restaurar/maximizar e fechar (lado superior direito).
                                </p>
                            </div>


                            <div class="row d-flex align-items-center">
                                <div class="col-sm-12 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">
                                    <!-- 3º parte do 4º subtopico -->
                                    <h4 class="corsub fw-bolder mt-5">Barra de Menu</h4>

                                    <p>
                                        Localizada abaixo da barra de título, a Barra de menu é composta por vários
                                        menus e
                                        submenus, permitindo acesso rápido a uma série de funcionalidades. Você pode
                                        personalizar a Barra de menu conforme as suas necessidades. Para isso, vá em
                                        <strong>Ferramentas → Personalizar</strong> e vá na guia <strong>Menu</strong>.
                                    </p>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <!-- imagem - start -->
                                    <div class="wow animate__zoomIn">
                                        <div class="text-center img-01">
                                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura
                                                    3:</strong>
                                                Personalizar</p>
                                            <div class="zoom">
                                                <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem3">
                                                    <img src="imgs/topico01/figura03.png" class="w-75"
                                                        alt="Imagem que remete a organização" id="img-1">
                                                </a>
                                            </div>
                                            <p class="FonteFigura FonteMenor text-secondary">
                                                <strong>Fonte:</strong>EGPCE
                                            </p>
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
                                    </div>
                                </div>

                                <!-- nono bloco -->
                                <div class="wow fadeIn" data-wow-delay="0.3s">
                                    <!-- 4º parte do 4º subtopico -->
                                    <h4 class="corsub fw-bolder mt-5">Barra de Ferramentas</h4>
                                    <p>
                                        A barra de ferramentas do LibreOffice inclui elementos comuns aos aplicativos,
                                        como
                                        os botões: salvar, imprimir, exportar como PDF, desfazer, tabelas etc.
                                    </p>

                                    <p>
                                        Na Barra de ferramentas padrão estão várias opções, tais como:
                                    </p>
                                </div>

                                <ul class="ul">
                                    <li class="wow fadeInLeft" data-wow-delay="0.2s"><i
                                            class="fa fa-dot-circle text-success fs-6"></i> Gráficos;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.4s"><i
                                            class="fa fa-dot-circle text-success fs-6"></i> Ajuda;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i
                                            class="fa fa-dot-circle text-success fs-6"></i> Alinhamento;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.8s"><i
                                            class="fa fa-dot-circle text-success fs-6"></i> Numeração;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1s"><i
                                            class="fa fa-dot-circle text-success fs-6"></i> Recuo;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"><i
                                            class="fa fa-dot-circle text-success fs-6"></i> Cor da fonte etc.</li>
                                </ul>

                            </div>

                        </div>

                    </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center wow fadeIn" data-wow-delay="0.3s">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i
                    class="fa-solid fa-chevron-left"></i> Voltar</a>

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