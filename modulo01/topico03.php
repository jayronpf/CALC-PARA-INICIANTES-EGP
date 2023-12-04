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
                        <h2 class="Titulo fw-bolder">Sintaxe, Formatações e Comandos</h2>
                        <!-- Título -->

                        <!-- INICIO DO CONTEÚDO -->

                        <p>
                            <strong>Objetivo:</strong> Apresentar a sintaxe padrão do Calc através da utilização de
                            comandos de operações básicas e formatações de fórmulas simples.
                        </p>

                        <h4 class="corsub fw-bolder mt-5">Sintaxe</h4>

                        <p>
                            Em uma planilha, nós utilizamos as operações básicas para instruí-la sobre os nossos
                            cálculos, e nos valemos de fórmulas simples para as operações mais sofisticadas.
                        </p>

                        <!-- imagem - start -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11:</strong>
                                    Exemplo de fórmula
                                </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem11">
                                        <img src="imgs/topico03/figura11.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico03/figura11.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        <!-- Imagem - End-->

                        <p>
                            Observe a fórmula acima para efeito de exemplos de sintaxe. Note que há parênteses, sinais
                            de operadores aritméticos (+, -, / ,*), além de ponto e vírgula e dois pontos.
                        </p>

                        <h4 class="corsub fw-bolder mt-5">Operadores Aritméticos</h4>

                        <!-- 1º TABELA -->

                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-success text-light">Operador</th>
                                        <th scope="col" class="bg-success text-light">Nome</th>
                                        <th scope="col" class="bg-success text-light">Exemplo</th>
                                    </tr>
                                </thead>
                                <tbody class="tBody">
                                    <tr>
                                        <td data-th="Operador">+ (mais)</td>
                                        <td data-th="Nome">Adição</td>
                                        <td data-th="Exemplo"> 1 + 1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">- (menos)</td>
                                        <td data-th="Nome">Subtração</td>
                                        <td data-th="Exemplo">A - 1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">- (menos)</td>
                                        <td data-th="Nome">Negação</td>
                                        <td data-th="Exemplo">-5</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">* (asterisco)</td>
                                        <td data-th="Nome">Multiplicação</td>
                                        <td data-th="Exemplo">2 * 2</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">/ (barra)</td>
                                        <td data-th="Nome">Divisão</td>
                                        <td data-th="Exemplo">6 / 3,1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">% (porcentagem)</td>
                                        <td data-th="Nome">Porcentagem</td>
                                        <td data-th="Exemplo">15,00%</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">^ (circunflexo)</td>
                                        <td data-th="Nome">Exponenciação</td>
                                        <td data-th="Exemplo">3 ^ 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Fim da 1º tabela -->

                        <h4 class="corsub fw-bolder mt-5">Operadores de Comparação</h4>

                        <!-- 2º TABELA -->

                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-success text-light">Operador</th>
                                        <th scope="col" class="bg-success text-light">Nome</th>
                                        <th scope="col" class="bg-success text-light">Exemplo</th>
                                    </tr>
                                </thead>
                                <tbody class="tBody">
                                    <tr>
                                        <td data-th="Operador">= (sinal de igual)</td>
                                        <td data-th="Nome"> Igualdade</td>
                                        <td data-th="Exemplo"> A1 = B1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">> (maior que)</td>
                                        <td data-th="Nome">Maior que</td>
                                        <td data-th="Exemplo">A1 > B1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">
                                            < (menor que)</td>
                                        <td data-th="Nome">Menor que</td>
                                        <td data-th="Exemplo"> A1 < B1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">>= (maior ou igual a)</td>
                                        <td data-th="Nome">Maior ou igual a</td>
                                        <td data-th="Exemplo">A1 >= B1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">
                                            <= (menor ou igual a)</td>
                                        <td data-th="Nome">Menor ou igual a</td>
                                        <td data-th="Exemplo">A1 <= B1</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">
                                            <> (diferente)
                                        </td>
                                        <td data-th="Nome">Desigualdade</td>
                                        <td data-th="Exemplo">A1 <> B1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Fim da 2º tabela -->

                        <h4 class="corsub fw-bolder mt-5">Comandos / Instruções</h4>

                        <!-- 2º TABELA -->

                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-success text-light">Operador</th>
                                        <th scope="col" class="bg-success text-light">Nome</th>
                                        <th scope="col" class="bg-success text-light">Exemplo</th>
                                    </tr>
                                </thead>
                                <tbody class="tBody">
                                    <tr>
                                        <td data-th="Operador">: (dois-pontos)</td>
                                        <td data-th="Nome">Intervalo</td>
                                        <td data-th="Exemplo">A1 : C108</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">! (ponto de exclamação)</td>
                                        <td data-th="Nome">Interseção</td>
                                        <td data-th="Exemplo">SOMA (A1 : B6 ! B5 : C12) Calcula a soma de todas as
                                            células na interseção. Neste exemplo, o resultado traz a soma das células B5
                                            e B6.</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Operador">~ (Til)</td>
                                        <td data-th="Nome">Concatenação ou união</td>
                                        <td data-th="Exemplo">Toma duas referências e retorna uma lista de referência,
                                            que é a concatenação da referência à esquerda seguida da referência à
                                            direita. Entradas duplas são referenciadas duplamente.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- Fim da 2º tabela -->

                        <!-- Subtopico -->

                        <h3 class="Titulo fw-bolder mt-5 mb-3 subtopico" id="item9">Seleção de Células, Colunas,
                            Linhas e Folhas</h3>

                        <p>
                            Os dados no Calc podem ser formatados de várias maneiras. Eles tanto podem ser editados como
                            parte do estilo da célula, e assim a formatação é aplicada automaticamente, quanto podem ser
                            aplicados manualmente à célula. Algumas formatações manuais podem ser aplicadas
                            utilizando-se os ícones da barra de ferramentas. Para um controle maior e opções extras,
                            selecione a célula e clique com o botão direito sobre ela, e selecione Formatar células.
                            Todas as opções de formatação serão tratadas abaixo.
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
                        <div class="container">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Mesclar células
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="p-accordion">
                                                Um recurso útil do Calc é a possibilidade de mesclar várias células
                                                contíguas para formar um título de uma folha de planilha, por exemplo.
                                                Para isso, selecione as células contíguas a serem mescladas e vá em
                                                "Formatar → Mesclar células → Mesclar células” ou “Formatar → Mesclar
                                                células → Mesclar e centralizar células", para centralizar e mesclar.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Ferramenta pincel de estilo
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <p class="p-accordion">
                                                Serve para copiar a formatação para outras células da mesma planilha ou
                                                para outras planilhas.
                                            </p>

                                            <p class="p-accordion">
                                                Para copiar o estilo de uma célula, clique uma vez no <img
                                                    src="imgs/topico03/pincel.png" alt="pincel" class="img-pincel">,
                                                localizado na barra de formatação. Em seguida, clique na célula a ser
                                                formatada.
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Inserir uma anotação (comentário)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <p class="p-accordion">
                                                As células podem conter observações de outros usuários ou lembretes que
                                                ficam ocultos, isto é, não são impressos. Uma célula contendo uma
                                                anotação apresenta um pequeno <strong class="text-danger">triângulo
                                                    vermelho</strong> no canto superior direito.
                                            </p>

                                            <p class="p-accordion">
                                                Para inserir uma anotação, clique com o botão direito do mouse na célula
                                                que conterá a anotação e selecione a opção <strong>Inserir
                                                    anotação</strong> ou pressione <strong>Ctrl + Alt + C</strong>. Em
                                                seguida, digite o texto e clique fora da caixa de texto quando tiver
                                                terminado.
                                            </p>

                                            <p class="p-accordion">
                                                Para visualizar a anotação, basta posicionar o ponteiro do mouse em cima
                                                do <strong class="text-danger">triângulo vermelho</strong>. Você pode
                                                ainda clicar com o botão direito sobre a célula que possui a anotação e
                                                clicar em “ <strong>Mostrar anotação</strong>” para deixá-la sempre a
                                                amostra ou clicar em <strong>Excluir anotação</strong> para excluí-la.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- fim acordeon com conteudo da aula -->

                        <h4 class="corsub fw-bolder mt-5">Formatação de Linhas de Texto</h4>

                        <p>
                            Múltiplas linhas de texto podem ser inseridas em uma única célula, utilizando a quebra
                            automática de texto, ou quebras manuais de linha. Cada um desses métodos é útil em
                            diferentes situações.
                        </p>

                        <!-- imagem - start -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12:</strong>
                                    Quebra de linha em células.
                                </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem12">
                                        <img src="imgs/topico03/figura12.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Guia de
                                    Introdução às Funções do LibreOffice Calc</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem12" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico03/figura12.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>Guia de Introdução às Funções
                                            do LibreOffice Calc</p>
                                    </div>
                                </div>
                            </div>
                        <!-- Imagem - End-->

                        <h4 class="corsub fw-bolder mt-5">Utilizando a Quebra Automática de Texto</h4>

                        <p>
                            Para configurar a quebra automática no final da célula, clique com o botão direito nela e
                            selecione a opção <strong>Formatar Células</strong> (ou clique em <strong>Formatar →
                                Células</strong> na barra de menu, ou pressione Ctrl+1). Na aba
                            <strong>Alinhamento</strong> embaixo de <strong>Propriedades</strong>, selecione
                            <strong>Disposição automática</strong> de texto e clique em <strong>OK</strong>.
                        </p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">
                                            Ainda dentro da caixa de formatação de células, ao selecionar
                                            <strong>Disposição automática de texto</strong>, fica disponível o recurso
                                            <strong>Hifenização ativa</strong> que adiciona um "-" quebrando além da
                                            linha, também a palavra, quando ela não couber toda de uma vez.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

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
                                            Uma maneira rápida e fácil de aplicar o recurso recurso de quebra de linha
                                            automática, é procurar o atalho
                                            <img src="imgs/topico03/quebral.png" alt="pincel" class="img-pincel">,
                                            localizado na barra de formatação. Por padrão, ele quebra a linha mas não
                                            hifeniza.


                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <!-- imagem - start -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13:</strong>
                                    Formatar Células.
                                </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem13">
                                        <img src="imgs/topico03/figura13.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem13" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico03/figura13.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        <!-- Imagem - End-->

                        <h4 class="corsub fw-bolder mt-5">Utilizar Quebras Manuais de Linha</h4>

                        <p>
                            Para inserir uma quebra manual de linha, enquanto digita dentro de uma célula, pressione
                            <strong>Ctrl+Enter</strong>. Quando for editar o texto, primeiro clique duas vezes na
                            célula, depois clique na posição em que você quer quebrar a linha. Quando uma quebra manual
                            de linha é inserida, a largura da célula não é alterada.
                        </p>

                        <h4 class="corsub fw-bolder mt-5">Encolher o Texto para Caber na Célula</h4>

                        <p>
                            O tamanho da fonte pode ser ajustado automaticamente para caber na célula. Para isso, clique
                            com o botão direito na célula a ser formatada e clique em <strong>Formatar Células → na aba
                                Alinhamento</strong>. Marque então o campo <strong>Reduzir para caber na
                                célula</strong>.
                        </p>

                        <h4 class="corsub fw-bolder mt-5">Formatação de Largura da Coluna</h4>

                        <p>
                            A largura da coluna pode ser ajustada automaticamente, para que consigamos visualizar todo o
                            conteúdo da célula. Para isso, clique com o botão direito na coluna a ser formatada e clique
                            em <strong>Largura ideal da coluna</strong>. Aceite, clicando em <strong>OK</strong>.
                        </p>

                        <!-- imagem - start -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 14:</strong>
                                    Largura da coluna </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem14">
                                        <img src="imgs/topico03/figura14.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico03/figura14.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        <!-- Imagem - End-->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">
                                            Uma outra maneira de ajustar a largura da coluna é dar um duplo clique com o
                                            mouse na linha que separa as colunas:
                                            <img src="imgs/topico03/larguraC.png" alt="">
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

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
                                            Você realizou seu cálculo e na célula selecionada, ao receber o resultado, se deparou com um conjunto de "#########"? O que será que houve? Será que a fórmula foi digitada de maneira incorreta?
                                        </p>
                                        
                                        <p class="txt-caixasecundaria">
                                            Calma, você provavelmente digitou a fórmula correta sim! Esse conjunto de "########" aparece quando a largura da célula está menor do que o resultado final. Para corrigir, basta alterar a largura da coluna para um valor maior.
                                        </p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <h4 class="corsub fw-bolder mt-5">Formatação de Números</h4>  
                        
                        <p>
                            Vários formatos diferentes de números podem ser aplicados às células através dos ícones da Barra de ferramentas de formatação. Selecione a célula, e clique no ícone desejado.
                        </p>

                        <!-- imagem - start -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 15:</strong>
                                    Ícones de formatação numérica. Da esquerda para a direita: moeda, porcentagem, data, exponencial, padrão, adiciona casa decimal, exclui casa decimal.
                                </p>    
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem15">
                                        <img src="imgs/topico03/figura15.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem15" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico03/figura15.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        <!-- Imagem - End-->

                        <p>
                            Para um melhor controle ou para selecionar outros formatos numéricos, utilize a <strong>aba Números</strong> da caixa de diálogo <strong>Formatar Células</strong>:
                        </p>

                        <ul class="ul">
                            <li><i class="fa-solid fa-circle-check" style="color: #44833d;"></i> Aplique qualquer um dos tipos de dados na lista Categoria aos dados;</li>

                            <li><i class="fa-solid fa-circle-check" style="color: #44833d;"></i> Controle o número de casas decimais e de zeros à esquerda;</li>

                            <li><i class="fa-solid fa-circle-check" style="color: #44833d;"></i> Entre com um formato numérico personalizado.</li>
                        </ul>

                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 16:</strong>
                                    Formatação de células no formato de números.
                                </p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem16">
                                        <img src="imgs/topico03/figura16.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>EGPCE</p>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem16" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/topico03/figura16.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong>EGPCE</p>
                                    </div>
                                </div>
                            </div>
                        <!-- Imagem - End-->

                        <h4 class="corsub fw-bolder mt-5">Sintaxe</h4>

                        <p>
                            Para escolher rapidamente a fonte a ser utilizada na célula, selecione a célula, e clique na seta próxima à caixa Nome da Fonte na Barra de Ferramentas de Formatação e escolha uma fonte da lista.
                        </p>

                        <p>
                            Para escolher o tamanho da fonte, clique na seta, ao lado da caixa Tamanho da Fonte, na Barra de Ferramentas de Formatação. Para outras formatações, você pode utilizar os ícones de , Itálico, ou Sublinhado.
                        </p>


                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
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