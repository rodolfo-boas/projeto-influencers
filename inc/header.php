<header class="container-fluid navbar navbar-expand-sm navbar-light row align-items-baseline m-0">
  <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
    <span class="col-8 col-sm-8 col-md-4">
        <a href="index.php" class="navbar-brand">REACH ME OUT</a><span class="dot-color">.</span>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link text-center" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target=".bd-cliente-modal-lg">Cliente</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target=".bd-influencer-modal-lg" >Influencer</a></li>
        </ul>
    </div>
</header>
    <?php
        include "LoginCliente.php";

        include "LoginInfluencer.php";
    ?> 


<!-- <header class="container-fluid navbar navbar-expand-sm navbar-light row align-items-baseline m-0"> -->
    <!-- Incluindo col-4 para fixar o tamanho -->
    <!-- <span class="col-8 col-sm-8 col-md-4">
        <a href="index.php">REACH ME OUT</a><span class="dot-color">.</span>
    </span> -->

    <!-- Toggle para navegação mobile -->  
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#naveffect"
    aria-controls="navbarNav" aria-expanded ="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button> -->

    <!-- navbar collpase que faz aparecer e desaparecer o menu -->
    <!-- retirei col-8 para fizer o tamnaho do colapse ficar no centro-->
    
    <!-- <nav class="col-md-4 text-center navbar-collapse collapse" id="naveffect"-->

    <!-- inserido navbarnav na ul aumentando seu tamanho e flex para posicionar -->
    <!-- FICOU FALTANDO POSICIONAR AS CATEGORIAS NO COLLAPSE -->
    
        <!-- <ul class="navbar-nav d-flex justify-content-md-end"> -->
            <!-- <ul>
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem Somos</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="quemsomos.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php">Cadastro</a></li>
        </ul>     
    </nav> --> 
  <!-- <header> -->

  <!-- </header> -->