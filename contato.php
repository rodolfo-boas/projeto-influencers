<!DOCTYPE html>
<html lang="pt-br">
    <?php
                include "inc/head.php";
                include "inc/headContato.php"
    ?>
    <title>REACH ME OUT. - Contato</title>
    <meta name="description" content="Entre em contato conosco com a Reach Me Out">
    <link rel="canonical" href="contato.php">
    <body>

        <?php
            include "inc/header.php"
        ?>

        <section>
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