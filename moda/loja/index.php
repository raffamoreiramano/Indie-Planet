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

            <div class="row my-4">
                <div class="col-12 my-2">

                    <h1 class="text-center font-weight-bold">Loja Online</h1>
                </div>

            </div>

            <div class="row my-4">

                <div class="col-12 my-2">

                    <h2 class="text-center font-weigth-bold">Nós fazemos nossa própria moda!</h2>

                </div>

            </div>

            <?php
            $roupa=array(
                0 => array(
                    0 => array (
                        "en" => "Tie-dye T-Shirt",
                        "es" => "Camiseta Tie-dye",
                        "pt" => "Camiseta Tie-dye"
                    ),
                    1 => array (
                        "en" => "Bomber Jacket",
                        "es" => "Chaqueta Bomber",
                        "pt" => "Jaqueta Bomber"
                    ),
                    2 => array (
                        "en" => "Alt-J T-Shirt",
                        "es" => "Camiseta Alt-J",
                        "pt" => "Camiseta Alt-J"
                    ),
                    3 => array (
                        "en" => "Strapback Cap",
                        "es" => "Gorro Strapback",
                        "pt" => "Boné Strapback"
                    )
                ),
                1 => array(
                    0 => array (
                        "en" => "MGMT T-Shirt",
                        "es" => "Camiseta MGMT",
                        "pt" => "Camiseta MGMT"
                    ),
                    1 => array (
                        "en" => "Strokes Cap",
                        "es" => "Gorro Strokes",
                        "pt" => "Boné Strokes"
                    ),
                    2 => array (
                        "en" => "Killers Dress",
                        "es" => "Vestido Killers",
                        "pt" => "Vestido Killers"
                    ),
                    3 => array (
                        "en" => "Gorillaz T-Shirt",
                        "es" => "Camiseta Gorillaz",
                        "pt" => "Camiseta Gorillaz"
                    )
                ),
                2 => array(
                    0 => array (
                        "en" => "Tie-dye Pants",
                        "es" => "Pantalones Tie-dye",
                        "pt" => "Calça Tie-dye"
                    ),
                    1 => array (
                        "en" => "Mickey T-Shirt",
                        "es" => "Camiseta Mickey",
                        "pt" => "Camiseta Mickey"
                    ),
                    2 => array (
                        "en" => "Perfecto Jacket",
                        "es" => "Chaqueta Perfecto",
                        "pt" => "Jaqueta Perfecto"
                    ),
                    3 => array (
                        "en" => "Fedora",
                        "es" => "Fedora",
                        "pt" => "Fedora"
                    )
                )
            );
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
