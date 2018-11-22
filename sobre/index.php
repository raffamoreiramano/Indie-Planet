<!doctype html>
<?php
    include '../includes/matrix.php';
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
            ?>
        </header>
        <div class="container rounded-0 border-0 p-0">
            <div class="card border-0 rounded-0 h-25 p-0 m-0">
                <img class='rounded-0 mh-100 img-fluid' alt='sobre' src='../img/carouselteste01.png' />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3">Sobre o portal Indie-Planet</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <article class="px-lg-4">
                        <?php
                            echo $text;
                        ?>
                    </article>
                </div>
                <?php
                    include $corredor.'includes/aside.php';
                ?>
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>