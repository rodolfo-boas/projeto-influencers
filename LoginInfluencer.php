<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include "inc/head.php";
        include "inc/headLogin.php";
    ?>
    
    <body>
    
        <?php
            include "inc/header.php"
        ?>

        <main id="bg-content">
            <section>
                <div class="row">

                    <div class="col-10 offset-1 col-md-4 offset-md-2">
                        <div class="cadastro">
                            <h4 class="text-center">Ainda não sou Influencer</h4>
                            <p class="text-center">Se não possui conta, clique no botão abaixo</p>
                            <div class="cadastro-button d-flex justify-content-center"> 
                                <button type="submit" name="botao">quero me cadastrar</button>
                            </div> 
                            
                        </div>
                    </div> <!-- fim Col Cadastro -->

                    <div class="col-10 offset-1 col-md-4 offset-md-0">
                        <div class="login">
                            <h4 class="text-center">Sou Influencer</h4>
                            <p class="text-center">Se você já possui conta conosco, entre com seu usuário e senha abaixo:</p>
                            <form action="" class="" method="post" >
                                <div class="form-group">
                                    <input class="form-control" name="" type="email" id="email-login" placeholder="Digite seu e-mail" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="" type="password"  id="senha" placeholder="Digite sua senha" required>
                                </div> 
                            </form>
                            <div class="login-button d-flex justify-content-center"> 
                                <button type="submit" name="botao">Entrar</button>
                            </div> 
                        </div>
                    </div> <!-- fim Col Login -->

                </div> <!-- fim ROW -->
            </section>
        </main>        

        <?php
            include "inc/footer.php";
        ?>

    </body>

</html>