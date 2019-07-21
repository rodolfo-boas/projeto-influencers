<!DOCTYPE html>
<html lang="pt-br">
    <?php
                include "inc/head.php";
                include "inc/headContato.php"
    ?>
    <body>

        <?php
            include "inc/header.php"
        ?>

        <section>
            <!-- <article class="row" id="bg-content">
                <div class="col-6 d-flex flex-column justify-content-center align-items-center"> -->
                    <!-- <p>formulario</p>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="" alt="">
                </div> --> 
            <!-- </article> -->
            <div class="fundo">
                <div class="contact">
                    <div class="contact-title text-center">
                        <h4>Quer mais Informações? Ficou com duvida?<br>
                                Entre em contato conosco</h4>
                    </div> 
                    <form action="#">
                        <label for="">Nome</label>
                        <input type="text">
                        <label for="">E-mail</label>
                        <input type="email">
                        <label for="">Mensagem</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>   
                        <div class="contact-button"> 
                            <button type="submit" name="botao">Enviar</button>                                        
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <?php
            include "inc/footer.php";
        ?>

    </body>
</html>