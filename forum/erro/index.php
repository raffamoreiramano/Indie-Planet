<!doctype html>
<?php
    include '../../includes/matrix.php';
    $pastaAtualFake="forum";
    $nome="⏚⟒⊬⍜⋏⎅"
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
            $lost=array(
                "en" => "Are you lost, earthling? <span class='h1'>👽</span> </p>\n<p class='text-light'>Why don't you come with us?",
                "es" => "¿Estás perdido, terrícola? <span class='h1'>👽</span> </p>\n<p class='text-light'>¿Por qué no vienes con nosotros?",
                "pt" => "Está perdido, terráqueo? <span class='h1'>👽</span> </p>\n<p class='text-light'>Por que não vem com a gente?"
            );
            $error=array(
                "en" => "ERROR",
                "es" => "ERROR",
                "pt" => "ERRO"
            );
            $logged=array(
                "en" => "You must be logged for this",
                "es" => "Debes estar registrado para esto",
                "pt" => "Você deve estar logado para isso"
            );
        ?>
        <article class="container">
            <div class="row m-0">
                <div class="col-12 col-md-6 p-4 p-md-5">
                    <h1 class="font-weight-bold text-white m-0"><?php echo $error[$lang]." 51"; ?></h1>
                    <p class="text-secondary small"><?php echo $logged[$lang]; ?></p>
                    <p class="text-light m-0"><?php echo $lost[$lang]; ?></p>
                </div>
                <div class="col 12 col-md-6 py-md-5 alien-box">
                    <a href="../../signin/index.php" class="d-block alien-ship h1 text-center">🛸</a>
                </div>
            </div>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>