<!doctype html>
<?php
    include '../includes/matrix.php';
    $pastaAtualFake="forum";
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
?>

    <body class="bg-dark-indie <?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
            ?>
            <?php
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        <?php
        $contato = array();
        $contato['h1'] = array(
            "en" => "Create an account",
            "es" => "Crear una cuenta",
            "pt" => "Criar conta"        
        );
        $contato['nick'] = array(
            "en" => "Username",
            "es" => "Nombre de usuario",
            "pt" => "Nome de usuário"
        );
        $contato['nome'] = array(
            "en" => "Full name",
            "es" => "Nombre completo",
            "pt" => "Nome completo"
        );
        $contato['enviar'] = array(
            "en" => "Submit",
            "es" => "Enviar",
            "pt" => "Enviar"
        );
        $contato['senha'] = array(
            "en" => "Password",
            "es" => "Contraseña",
            "pt" => "Senha"
        );
        $contato['confirm'] = array(
            "en" => "Confirm password",
            "es" => "Confirmar contraseña",
            "pt" => "Confirmar senha"
        );
        ?>
        <div class="container bg-white">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php echo $contato['h1'][$lang]; ?></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 p-0 my-4 text-white">
                    <form class="form" method="post">
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="name" placeholder="<?php echo $contato['nome'][$lang]; ?>">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="email" class="form-control col-12 col-md-8" name="email" placeholder="Email">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="username" placeholder="<?php echo $contato['nick'][$lang]; ?>">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="password" placeholder="<?php echo $contato['senha'][$lang]; ?>">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="psvalidation" placeholder="<?php echo $contato['confirm'][$lang]; ?>">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <button type="submit" class="btn btn-info"><?php echo $contato['enviar'][$lang]; ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>
</html>