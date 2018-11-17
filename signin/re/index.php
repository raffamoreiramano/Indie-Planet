<!doctype html>
<?php
    include '../../includes/matrix.php';
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
            "en" => "Redeem password",
            "es" => "Resgatar contraseña",
            "pt" => "Resgatar senha"        
        );
        $contato['enviar'] = array(
            "en" => "Submit",
            "es" => "Enviar",
            "pt" => "Enviar"
        );
        $resgate=array(
            "en" => "Sen your email and wait for instructions.",
            "es" => "Envíe su email y espere instruciones.",
            "pt" => "Envie seu email e aguarde instruções."
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
                            <input type="email" class="form-control col-12 col-md-8" name="email" placeholder="Email">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <button type="submit" class="btn btn-info"><?php echo $contato['enviar'][$lang]; ?></button>
                            <p class="small my-auto ml-3 text-secondary"><?php echo $resgate[$lang]; ?></p>
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