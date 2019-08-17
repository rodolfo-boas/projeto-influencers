<header>
<nav class=" navNova navbar navbar-expand-lg navbar-light bg-light">
  <a class="marca navbar-brand" href="#">REACH ME OUT<span class="dot-color">.</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="justify-content-between collapse navbar-collapse" id="navbarSupportedContent">
    <ul class=" navDireita navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quemsomos.php">Quem somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target=".bd-cliente-modal-lg">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target=".bd-influencer-modal-lg">Influencer</a>
      </li>
    </ul>
  </div>
</nav>


    <?php
        include "LoginCliente.php";

        include "LoginInfluencer.php";
    ?> 
