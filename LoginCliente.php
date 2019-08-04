<link rel="stylesheet" href="assets/css/login.css">

<div class="modal fade bd-cliente-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-content">
            
            <section class="container-fluid h-100">
                <div class="row h-100 d-flex">

                    <div class="sobre-borda col-10 offset-1 col-md-6 offset-md-0 d-flex flex-column justify-content-center order-1 order-md-0">
                        <div class="borda h-75 d-flex flex-column justify-content-center ">
                            <div class="cadastro">
                                <h4 class="text-center">Ainda não sou Cliente</h4>
                                <p class="text-center">Se não possui conta, clique no botão abaixo</p>
                                <div class="cadastro-button d-flex justify-content-center"> 
                                    <a class="btn btn-lg btn-influencer" href="CadastroCliente.php">quero me cadastrar</a>
                                </div> 
                            </div>
                        </div>
                    </div> <!-- fim Col Cadastro -->

                    <div class="col-10 offset-1 col-md-6 offset-md-0 d-flex flex-column justify-content-center order-0 order-md-0">
                        <div class="login">
                            <h4 class="text-center">Sou Cliente</h4>
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

        </div>
    </div>
</div>