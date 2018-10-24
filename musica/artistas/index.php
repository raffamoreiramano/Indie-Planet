<!doctype html>
<?php
    include '../../includes/matrix.php';
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
            include $corredor.'includes/trail.php';
        ?>
        <article class="container">
            <div class="row bg-dark shadow">
                <h1 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4">Artistas Indie</h1>
            </div>
            <section class="container-fluid">
                <div class="row mt-4">
                    <div class="pl-0 pl-lg-3 col-4 col-lg-2">
                        <img class="img-fluid border border-white rounded-circle" src="../../img/behelit.jpg">
                    </div>                    
                </div>
            </section>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
