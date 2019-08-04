<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include "inc/head.php";
    ?>

    <body>
    
        <?php
            include "inc/header.php"
        ?>

        <main>

        <!-- teste -->
            <section class="container-fluid">
                <article class="row" id="bg-content">
                    <div class="col-12 col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center" id="textHome">
                        <h1 class="main-title">Encontre o Influencer para o seu negócio</h1>
                        <p class="main-text">Conecte sua marca com os micro influenciadores do seu nicho de mercado e alcance o seu público alvo</p>
                    <div id="btn-content">
                        <a class="btn btn-lg btn-marca" href="#"><h3>Marca</h3></a>
                        <a class="btn btn-lg btn-influencer" href="#"><h3>Influencer</h3></a>
                    </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center" id="img-home">
                        <img class="img-fluid " src="assets/image/imageHome.png" alt="principal da home" >
                    </div>
                </article>
            </section>

            <div class="pt-3 pb-3 container-fluid text-center">
                <h3>Marcas</h3>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active">
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                        </div>
                        <div class="carousel-item row no-gutters">
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/amaro.png"></div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="container-fluid reviewContent pb-5 pt-3">
                <h3 class="text-center mb-3">Depoimentos</h3>
                <div class="container">
                <article class="row">
                    <div class="col-12 col-md-4 text-center">
                        <h4>Fulano</h4>
                        <p class="font-italic text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit Delectus aut 
                        voluptate omnis? Cum, optio culpa! Et, neque? Consequatur Lorem, ipsum dolor sit amet consectetur adipisicing 
                        elit. Culpa, nam animi?."</p>
                        <div class="col-12 reviewBorder"></div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h4>Fulano</h4>
                        <p class="font-italic text-justify ">"Lorem ipsum dolor sit amet, consectetur adipisicing elit Delectus aut 
                        voluptate omnis? Cum, optio culpa! Et, neque? Consequatur Lorem, ipsum dolor sit amet consectetur adipisicing 
                        elit. Culpa, nam animi?."</p>
                        <div class="col-12 reviewBorder"></div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h4>Fulano</h4>
                        <p class="font-italic text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit Delectus aut 
                        voluptate omnis? Cum, optio culpa! Et, neque? Consequatur Lorem, ipsum dolor sit amet consectetur adipisicing 
                        elit. Culpa, nam animi?."</p>
                        <div class="col-12 reviewBorder"></div>
                    </div>
                </div>
                </article>
            </section>






            
            <!-- <section class="container-fluid todos-influ gallery">
                <article class="row teste">
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="influenciador">
                            <div class="informacoes d-flex flex-column align-items-center justify-content-center">
                                <h2 class="d-flex flex-column  align-items-center">Bruna Perez</h2>                    
                                <p class="d-flex flex-column align-items-center"> 100.000 seguidores</p>
                                <p class="d-flex flex-column align-items-center"> Santo André</p>
                                <p class="d-flex align-items-center">#Surfista #daBaladinha #Elenão #Hypada #Moda #estilo #elesim</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="influenciador">
                            <div class="informacoes d-flex flex-column align-items-center justify-content-center">
                                <h2 class="d-flex flex-column  align-items-center">Bruna Perez</h2>                    
                                <p class="d-flex flex-column align-items-center"> 100.000 seguidores</p>
                                <p class="d-flex flex-column align-items-center"> Santo André</p>
                                <p class="d-flex align-items-center">#Surfista #daBaladinha #Elenão #Hypada #Moda #estilo #elesim</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="influenciador">
                            <div class="informacoes d-flex flex-column align-items-center justify-content-center">
                                <h2 class="d-flex flex-column  align-items-center">Bruna Perez</h2>                    
                                <p class="d-flex flex-column align-items-center"> 100.000 seguidores</p>
                                <p class="d-flex flex-column align-items-center"> Santo André</p>
                                <p class="d-flex align-items-center">#Surfista #daBaladinha #Elenão #Hypada #Moda #estilo #elesim</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </main> -->

        <?php
            include "inc/footer.php";
        ?>

    </body>
</html>