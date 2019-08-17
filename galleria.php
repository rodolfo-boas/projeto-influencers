<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include "inc/head.php";
    ?>
    <link rel="stylesheet" href="assets/css/galeria.css">
    </head>

    <body>
    
    <header>
        <nav class="navbar navbar-expand-md navbar-light align-items-baseline m-0">
            <p class="col-8 col-md-4">
            Olá : "nome do banco de dados"</p>
            <section class="collapse navbar-collapse col-md-8">
            <ul class="navbar-nav">
                <li>Minha Conta</li>
                <li>Favoritos</li>
                <li>Suporte</li>
            </ul>
            </section>
        </nav>
    </header>

    <div class="container-fluid">
        <h1 class="text-center">Influencers</h1>
        <div class="row">
            
            <div class="col-2">
            <h2>Reach Me Out</h2>
                <p>Navegue por Filtro</p>
                <ul>Moda
                    <li>Trends</li>
                    <li>Casual</li>
                    <li>Street</li>
                </ul>
                <ul>Saúde
                    <li>Alimentação</li>
                    <li>Medicina</li>
                    <li>Emagrecimento</li>
                </ul>
                <ul>Lifestyle
                    <li>Cultura</li>
                    <li>Artes</li>
                    <li>Música</li>
                </ul>
                <ul>Esporte
                    <li>Pilates</li>
                    <li>Musculação</li>
                    <li>Corredores</li>
                </ul>
                <ul>Geek
                    <li>Filmes</li>
                    <li>Moda</li>
                </ul>
                <ul>Viagens
                    <li>Turismo</li>
                    <li>Road Trip</li>
                    <li>Dicas de Viagens</li>
                </ul>
            </div>

            <div class="col-10">
                <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                    <div class="produto-imagem text-center">
                        <div class="flip-container">
                        <div class="flipper">
                            <img class="img-fluid" src="assets/image/modelo1.jpg" alt="">
                            <div class="flip-card-back">
                            <div class="text-box">
                            <h2>@Ana_Alves</h2>
                            <p>27000 seguidores</p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <h2>Nome</h2>
                        <button class="mb-5" type="button" data-toggle="modal" data-target="#modalInfo">Modal Info</button>
                        <button class="mb-5" type="button" data-toggle="modal" data-target="#modalMensagem">Mensagem</button>
                    </div>
                </figure>            
            </div>
        </div>
    </div>

            <!-- Modal info -->
        <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInfo">Mensagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Enviar Mensagem
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
            </div>
            </div>
        </div>

        <!-- Modal msg -->
        <div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="modalMensagem" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMensagem">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



        </body>
</html>
