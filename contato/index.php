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
        <div class="container bg-white">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3">Fale cornosco!</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 p-0 my-4 text-white">
                    <form class="form">
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="name" placeholder="Nome completo">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="email" class="form-control col-12 col-md-8" name="email" placeholder="Email">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <input type="text" class="form-control col-12 col-md-8" name="subject" placeholder="Assunto">
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <textarea class="form-control col-12 col-md-8" name="message" placeholder="Digite aqui sua mensagem..." rows="4"></textarea>
                        </div>
                        <div class="form-group row mx-3 mx-lg-4 pl-lg-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
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