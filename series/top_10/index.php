<!doctype html>
<?php
    include '../../includes/matrix.php';
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
?>

    <body class="<?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
            ?>
            <?php
                include $corredor.'includes/nav-mid.php';
                $manu=array("en"=>"IN MAINTENANCE","es"=>"EN MANUTENCIÓN","pt"=>"EM MANUTENÇÃO");
            ?>
        </header>
        <?php
            include $corredor.'includes/trail.php';
        ?>
        <article class="container">
            <div class="row my-5 py-5">
                <div class="col-12">
                    <h1 class="font-weight-bold text-center text-danger"><?php echo $manu[$lang]; ?></h1>
                </div>
            </div>
        </article>
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
