<!doctype html>
<?php
    include '../../../includes/matrix.php';
$kp=isset($_GET['view'])?substr($_GET['view'],0,1):0;
        $vp=isset($_GET['view'])?substr($_GET['view'],1,1):0;
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
            $nome=$roupa[$kp][$vp][$lang];
    $desc=array(
        "en" => "Description",
        "es" => "Descripción",
        "pt" => "Descrição"
    );
    $buy=array(
        "en" => "Buy",
        "es" => "Comprar",
        "pt" => "Comprar"
    );
    $caraca=array(
        "en" => "Features",
        "es" => "Caracteristicas",
        "pt" => "Características"
    );
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
        
        <div class="container">
            <div class="row my-4">

                <figure class="col-12 col-md-6 col-lg-6">

                    <img class="img-fluid w-100" alt="Feminino Undercut - Liso" src="../../../img/xadrezteste.png">

                </figure>


                <div class="col-12 col-md-4 col-lg-6">

                    <h2 class="font-weight-bold"><?php echo $roupa[$kp][$vp][$lang]; ?></h2>
                    <p class="font-weight-light pt-3"><em>Unissex</em></p>


                    <div class="form-group">
                        <button type="button" class="btn btn-outline-dark mt-5">P</button>
                        <button type="button" class="btn btn-outline-dark mt-5">M</button>
                        <button type="button" class="btn btn-outline-dark mt-5">G</button>
                        <button type="button" class="btn btn-outline-dark mt-5">GG</button>
                    </div>


                    <p class="text-right font-weight-bold h3 pt-5">R$00,00</p>

                    <div class="form-group float-right">

                        <button type="button" class="btn btn-primary btn-lg"><?php echo $buy[$lang]; ?></button>

                    </div>

                </div>
            </div>

            <div class="row my-4">

                <div class="col-12 col-md-12 col-lg-12">

                    <h4 class="font-weight-bold"><?php echo $desc[$lang]; ?></h4>

                    <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a accumsan nisl. Quisque nibh mauris, gravida dapibus massa eu, malesuada placerat risus. Nulla tortor sem, egestas quis mauris eget, viverra elementum metus. Aenean eu sagittis nisl, eget dignissim mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean scelerisque nunc id pellentesque tincidunt. Praesent iaculis sapien a arcu aliquet, eu gravida nisl hendrerit.</p>

                    <h4 class="font-weight-bold my-4"><?php echo $caraca[$lang]; ?></h4>
                    <ul class="list-unstyled">

                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis.</li>
                    </ul>


                </div>

            </div>


        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>