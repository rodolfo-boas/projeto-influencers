<header class="container-fluid navbar navbar-expand-sm navbar-light row align-items-baseline m-0">
    <!-- Incluindo col-4 para fixar o tamanho -->
    <span class="col-8 col-sm-8 col-md-4">
        <a href="index.php">REACH ME OUT</a><span class="dot-color">.</span>
    </span>

    <!-- Toggle para navegação mobile -->  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#naveffect"
    aria-controls="navbarNav" aria-expanded ="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>

    <!-- navbar collpase que faz aparecer e desaparecer o menu -->
    <!-- retirei col-8 para fizer o tamnaho do colapse ficar no centro-->
    <nav class="col-md-8 text-center navbar-collapse collapse" id="naveffect">

    <!-- inserido navbarnav na ul aumentando seu tamanho e flex para posicionar -->
    <!-- FICOU FALTANDO POSICIONAR AS CATEGORIAS NO COLLAPSE -->

        <ul class="navbar-nav d-flex justify-content-md-end">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem Somos</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>     
    </nav>
</header>