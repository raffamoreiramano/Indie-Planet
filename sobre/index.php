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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php
                        switch ($lang) {
                            case "en":
                                echo "About the portal";
                                break;
                            case "es":
                                echo "Sobre el portal";
                                break;
                            case "pt":
                                echo "Sobre o portal";
                                break;
                        }
                        ?></h1>
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