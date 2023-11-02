<!-- menu lateral começa aqui -->
<nav class="menulateral shadow-lg">
    <div class="btn-expandir">
        <img src="imgs/quizz&logo/logoEGP2.png" alt="logo" id="logo">
    </div>
    <!-- os topicos começam aqui  -->
    <ul>
        <li class="menu">
            <a href="index.php">
                <span class="icon "><i class="bi bi-person-workspace"></i></span>
                <span class="txt">Apresentação</span>
            </a>
        </li>

        <!-- 1º topico com subtópico -->
        <button class="dropdown-btn">
            <li class="menu">
                <a data-valor="topico01.php">
                    <span class="icon space"><i class="bi bi-1-circle"></i></span>
                    <span class="txt">Conhecendo a interface do Calc<i
                            class="bi bi-caret-down-fill barra-sub"></i></span>
                </a>
            </li>
        </button>
        <!-- subtopicos aqui  -->
        <div class="dropdown-container" id="spy">
            <a href="topico01.php">
                <i class="fa-regular fa-pen-to-square circulo"></i>Inicío</a>

            <a href="#item1">
                <i class="fa-regular fa-pen-to-square circulo"></i>01.2 O que é o Calc?</a>

            <a href="#item2">
                <i class="fa-regular fa-pen-to-square circulo"></i>01.3 Instalação da Suíte LibreOffice</a>

            <a href="#item3">
                <i class="fa-regular fa-pen-to-square circulo"></i>01.4 Elementos básicos de uma planilha no Calc</a>

            <a href="#item4">
                <i class="fa-regular fa-pen-to-square circulo"></i> 01.5 Interface do Calc</a>
        </div>

        <!-- 2º topico com Subtópico -->
        <button class="dropdown-btn">
            <li class="menu">
                <a data-valor="topico02.php">
                    <span class="icon space"><i class="bi bi-1-circle"></i></span>
                    <span class="txt">Células, Colunas, Linhas e Folhas de Cálculo<i
                            class="bi bi-caret-down-fill barra-sub"></i></span>
                </a>
            </li>
        </button>
        <!-- subtopicos aqui  -->
        <div class="dropdown-container" id="spy">
            <a href="topico02.php">
                <i class="fa-regular fa-pen-to-square circulo"></i>Inicío</a>

            <a href="#item1">
                <i class="fa-regular fa-pen-to-square circulo"></i> 02.2 Seleção de células, colunas, linhas e folhas</a>

            <a href="#item2">
                <i class="fa-regular fa-pen-to-square circulo"></i> 02.3 Inserção de colunas ou linhas</a>

            <a href="#item3">
                <i class="fa-regular fa-pen-to-square circulo"></i> 02.4 Exclusão de colunas ou linhas</a>

            <a href="#item4">
                <i class="fa-regular fa-pen-to-square circulo"></i> 02.5 Trabalho com folhas de cálculo</a>
        </div>        

        <li class="menu">
            <a href="topico03.php">
                <span class="icon"><i class="bi bi-3-circle"></i></span>
                <span class="txt">Disciplinas de UX</span>
            </a>
        </li>

        <li class="menu">
            <a href="topico04.php">
                <span class="icon"><i class="bi bi-4-circle"></i></span>
                <span class="txt">Quem é o usuário?</span>
            </a>
        </li>

        <li class="menu">
            <a href="topico05.php">
                <span class="icon"><i class="bi bi-5-circle"></i></span>
                <span class="txt">Benefícios de UX</span>
            </a>
        </li>

        <li class="menu">
            <a href="referencias.php">
                <span class="icon"><i class="bi bi-book-half"></i></span>
                <span class="txt">Referências</span>
            </a>
        </li>

    </ul>
</nav>