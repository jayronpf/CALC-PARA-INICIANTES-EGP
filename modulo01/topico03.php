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
                        <h2 class="Titulo fw-bolde scrool">Sintaxe, Formatações e Comandos</h2>
                        <!-- Título -->

                        <!-- INICIO DO CONTEÚDO -->

                        <p class="scrool">
                            <strong>Objetivo:</strong> Apresentar a sintaxe padrão do Calc através da utilização de
                            comandos de operações básicas e formatações de fórmulas simples.
                        </p>

                        <h4 class="corsub fw-bolder scrool mt-5">Sintaxe</h4>

                        <p class="scrool">
                            Em uma planilha, nós utilizamos as operações básicas para instruí-la sobre os nossos
                            cálculos, e nos valemos de fórmulas simples para as operações mais sofisticadas.
                        </p>

                        <!-- imagem - start -->
                        <div class="scrool">
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
                        </div>
                        <!-- Imagem - End-->

                        <p class="scrool">
                            Observe a fórmula acima para efeito de exemplos de sintaxe. Note que há parênteses, sinais
                            de operadores aritméticos (+, -, / ,*), além de ponto e vírgula e dois pontos.
                        </p>

                        <h4 class="corsub fw-bolder scrool mt-5">Operadores Aritméticos</h4>

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

                        <h4 class="corsub fw-bolder scrool mt-5">Operadores de Comparação</h4>

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
                                    <td data-th="Nome">	Igualdade</td>
                                    <td data-th="Exemplo">	A1 = B1</td>
                                </tr>
                                <tr>
                                    <td data-th="Operador">> (maior que)</td>
                                    <td data-th="Nome">Maior que</td>
                                    <td data-th="Exemplo">A1 > B1</td>
                                </tr>
                                <tr>
                                    <td data-th="Operador">< (menor que)</td>
                                    <td data-th="Nome">Menor que</td>
                                    <td data-th="Exemplo">	A1 < B1</td>
                                </tr>
                                <tr>
                                    <td data-th="Operador">>= (maior ou igual a)</td>
                                    <td data-th="Nome">Maior ou igual a</td>
                                    <td data-th="Exemplo">A1 >= B1</td>
                                </tr>
                                <tr>
                                    <td data-th="Operador"><= (menor ou igual a)</td>
                                    <td data-th="Nome">Menor ou igual a</td>
                                    <td data-th="Exemplo">A1 <= B1</td>
                                </tr>
                                <tr>
                                    <td data-th="Operador"><> (diferente)</td>
                                    <td data-th="Nome">Desigualdade</td>
                                    <td data-th="Exemplo">A1 <> B1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                        <!-- Fim da 2º tabela -->

                        <h4 class="corsub fw-bolder scrool mt-5">Comandos / Instruções</h4>

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
                                    <td data-th="Exemplo">SOMA (A1 : B6 ! B5 : C12) Calcula a soma de todas as células na interseção. Neste exemplo, o resultado traz a soma das células B5 e B6.</td>
                                </tr>
                                <tr>
                                    <td data-th="Operador">~ (Til)</td>
                                    <td data-th="Nome">Concatenação ou união</td>
                                    <td data-th="Exemplo">Toma duas referências e retorna uma lista de referência, que é a concatenação da referência à esquerda seguida da referência à direita. Entradas duplas são referenciadas duplamente.</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                        <!-- Fim da 2º tabela -->

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