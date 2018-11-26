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
            ?>
    </header>
    <?php
            include $corredor.'includes/trail.php';
        ?>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3">Indieshop</h1>
                </div>
            </div>
            

            <?php
            
            for ($i=0;$i<3;$i++) {
                echo '<div class="row my-4">';
                for ($j=0;$j<4;$j++) {
                    echo '<div class="col-12 col-md-6 col-lg-3 my-4"><a href="produto/index.php?view='.$i.$j;
                    echo '" class="card no-black-before shadow">';
                    echo '<img class="card-img-top" src="'.$corredor.'img/xadrezteste.png" alt="Card image cap">';
                    echo '<div class="card-body"><h5 class="card-title text-danger font-weight-bold">';
                    echo $roupa[$i][$j][$lang].'</h5><p class="card-text text-dark font-weight-bold">R$ '.rand(50,200).',99</p>';
                    echo '</div></a></div>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </article>
    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
