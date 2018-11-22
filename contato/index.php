<!doctype html>
<?php
    include '../includes/matrix.php';
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
            "en" => "Contact us!",
            "es" => "Contáctenos!",
            "pt" => "Fale conosco!"        
        );
        $contato['nome'] = array(
            "en" => "Full name",
            "es" => "Nombre completo",
            "pt" => "Nome completo"
        );
        $contato['assunto'] = array(
            "en" => "Subject",
            "es" => "Sujeto",
            "pt" => "Assunto"
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
        $contato['msg'] = array(
            "en" => "Enter your message",
            "es" => "Escriba su mensaje",
            "pt" => "Digite sua mensagem"
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
                    <form class="form">
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="name" placeholder="<?php echo $contato['nome'][$lang]; ?>">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="email" class="form-control col-12 col-md-8" name="email" placeholder="Email">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="subject" placeholder="<?php echo $contato['assunto'][$lang]; ?>">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <textarea class="form-control col-12 col-md-8" name="message" placeholder="<?php echo $contato['msg'][$lang]; ?>..." rows="4"></textarea>
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