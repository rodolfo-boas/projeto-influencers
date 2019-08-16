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

            <section class="container-fluid">
                <article class="row align-items-center" id="bg-content">

                    <div class="col-12 col-md text-white text-center" id="">
                        <h1 class="main-title">Encontre o Influencer para o seu negócio</h1>
                        <p class="main-text">Conecte sua marca com os micro influenciadores do seu nicho de mercado e alcance o seu público alvo</p>
                    <div id="btn-content">
                        <a class="btn btn-lg btn-marca" data-toggle="modal" data-target=".bd-cliente-modal-lg"><h3 >Marca</h3></a>
                        <a class="btn btn-lg btn-influencer" data-toggle="modal" data-target=".bd-influencer-modal-lg"><h3>Influencer</h3></a>
                    </div>
                    </div>

                    <div class="col-12 col-md d-flex justify-content-center">
                        <img class="imagem-principal img-fluid d-block p-0" src="assets/image/imageHome.png" alt="principal da home" >
                    </div>
                </article>
            </section>

            <div class="pt-3 pb-3 container-fluid text-center">
                <h3>Marcas</h3>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active">
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo1.jpg"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo2.jpg"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo3.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo4.jpeg"></div>
                        </div>
                        <div class="carousel-item row no-gutters">
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo5.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo6.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo7.png"></div>
                            <div class="col-3 col-md-3 float-left"><img class="img-fluid img-carrossel" src="assets/image/logo8.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="servicos">
            <section class="container">
                <h3 class="text-center">O que fazemos</h3>
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" src="assets/image/influencer9.png" alt="">
                    </div>
                    <div class="col-md-8 servicos-texto">
                        <h2>Encontre os influenciadores para sua marca</h2>
                        <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam perferendis repudiandae laudantium 
                        assumenda odio quibusdam provident nobis laboriosam vel mollitia.</p>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" src="assets/image/influencer10.png" alt="">
                    </div>
                    <div class="col-md-8 servicos-texto">
                        <h2>Personalize sua campanha</h2>
                        <p class="m-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam perferendis repudiandae laudantium 
                        assumenda odio quibusdam provident nobis laboriosam vel mollitia.</p>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" src="assets/image/influencer10.png" alt="">
                    </div>
                    <div class="col-md-8 servicos-texto">
                        <h2>Acompanhe os resultados na nossa plataforma</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam perferendis repudiandae laudantium 
                        assumenda odio quibusdam provident nobis laboriosam vel mollitia.</p>
                    </div>
                </div>
            </section>
            </div>


            <div class="container">
            <h3 class="titulo-galeria">Galeria</h3>
            <div class="row text-center text-lg-left ">
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="polaroid">
                <img alt="picture" src="assets/image/influencer1.png" class=" img-fluid rounded">
                <h3>Juliana Ferrari</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Juliana_Ferrari</p>
                    </div>
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="polaroid">
                <img alt="picture" src="assets/image/influencer2.png" class="img-fluid rounded" />
                <h3>Barbara Ferreira</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Barbara_Ferreira</p>
                    </div>
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="polaroid">
                <img alt="picture" src="assets/image/influencer3.png" class="img-fluid rounded" />
                <h3>Paula Estevan</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Paula_Estevan</p>
                    </div>
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="polaroid">
                <img alt="picture" src="assets/image/influencer4.jpg" class="img-fluid rounded" />
                <h3>Pietra Stefani</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Pietra_Stefani</p>
                    </div>
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="influencers-desktop polaroid">
                <img alt="picture" src="assets/image/influencer5.png" class="img-fluid rounded" />
                <h3>Marcelo Silva</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Marcelo_Silva</p>
                    </div>  
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="influencers-desktop polaroid">
                <img alt="picture" src="assets/image/influencer6.jpg" class="img-fluid rounded" />
                <h3>Ana Maggiori</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Ana_Maggiori</p>
                    </div>
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="influencers-desktop polaroid">
                <img alt="picture" src="assets/image/influencer7.jpg" class="img-fluid rounded" />
                <h3>Amanda Zanon</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Amanda_Zanon</p>
                    </div>
                </div>
            </figure>
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="influencers-desktop polaroid">
                <img alt="picture" src="assets/image/influencer8.jpg" class="img-fluid rounded" />
                <h3>Aline Cury</h3>
                    <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="assets/image/insta.png" alt="">
                    <p>@Aline_Cury</p>
                    </div>   
                </div>      
            </figure>         
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

        <?php
            include "inc/footer.php";
        ?>

    </body>
</html>