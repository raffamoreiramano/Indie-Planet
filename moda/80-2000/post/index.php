<!doctype html>
<?php
    include '../../../includes/matrix.php';
    $title=isset($_GET['t'])?str_replace('+',' ',$_GET['t']):'Título da postagem';
    $image=isset($_GET['img'])?$corredor."img/".$_GET['img']:$corredor."img/".'carouselteste01.png';
    $date=isset($_GET['dt'])?str_replace('+',' ',$_GET['dt']):'algumas horas atrás';
    $nome=$title;
    $anos['80']['en']="In the 80s";
    $anos['90']['en']="In the 90s";
    $anos['2000']['en']="In the 2000s";
    $anos['agora']['en']="Nowadays";
    $anos['80']['es']="Años 80";
    $anos['90']['es']="Años 90";
    $anos['2000']['es']="Años 2000";
    $anos['agora']['es']="Hoy en día";
    $anos['80']['pt']="Anos 80";
    $anos['90']['pt']="Anos 90";
    $anos['2000']['pt']="Anos 2000";
    $anos['agora']['pt']="Hoje em dia";
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
                        <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php echo $title; ?></h1>
                    </div>
                </div>
                <section class="row mb-5 justify-content-center">
                    <div class="col-12">
                        <h3 class="h4 font-weight-bold text-center"><?php echo $anos['80'][$lang]; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex, egestas id porttitor sed, pulvinar vel mi. Morbi tempor mauris interdum nisl consectetur tincidunt. Quisque fermentum eu nunc eu posuere. Suspendisse potenti. Curabitur et libero lectus. Morbi suscipit lorem quis risus vestibulum convallis. Lorem ipsum dolor sit amet.</p>
                    </div>
                    <figure class="col-12 col-md-6 col-lg-4 mb-4">
                        <img class="img-fluid w-100" alt="<?php echo $title." ".$anos['80'][$lang]; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
                <section class="row mb-5 justify-content-center">
                    <div class="col-12">
                        <h3 class="h4 font-weight-bold text-center"><?php echo $anos['90'][$lang]; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex. Quisque gravida nunc molestie nulla egestas gravida. Nam ut metus cursus, aliquam tortor non, volutpat risus. Nunc finibus molestie ipsum sed ullamcorper. Praesent nec commodo metus. Ut sollicitudin tristique turpis. Nulla mattis ipsum ut ligula dictum, nec aliquam erat ultrices.</p>
                    </div>
                    <figure class="col-12 col-md-6 col-lg-4 mb-4">
                        <img class="img-fluid w-100" alt="<?php echo $title." ".$anos['90'][$lang]; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
                <section class="row mb-5 justify-content-center">
                    <div class="col-12">
                        <h3 class="h4 font-weight-bold text-center"><?php echo $anos['2000'][$lang]; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex, egestas id porttitor sed, pulvinar vel mi. Morbi tempor mauris interdum nisl consectetur tincidunt. Quisque fermentum eu nunc eu posuere. Suspendisse potenti. Jiaculis elit nec, commodo velit. Quisque gravida nunc molestie nulla egestas gravida. Nam ut metus cursus, aliquam tortor non, volutpat risus. Nunc finibus molestie ipsum sed ullamcorper. Praesent nec commodo metus. Ut sollicitudin tristique turpis. Nulla mattis ipsum ut ligula dictum, nec aliquam erat ultrices.</p>
                    </div>
                    <figure class="col-12 col-md-6 col-lg-4 mb-4">
                        <img class="img-fluid w-100" alt="<?php echo $title." ".$anos['2000'][$lang]; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
                <section class="row mb-5 justify-content-center">
                    <div class="col-12">
                        <h3 class="h4 font-weight-bold text-center"><?php echo $anos['agora'][$lang]; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex, egestas id porttitor sed, pulvinar vel mi. Morbi tempor mauris interdum nisl consectetur tincidunt. Quisque fermentum eu nunc eu posuere. Suspendisse potenti. Curabitur et libero lectus. Morbi suscipit lorem quis risus vestibulum convallis. Lorem ipsum dolor sit amet.</p>
                    </div>
                    <figure class="col-12 col-md-6 col-lg-4 mb-4">
                        <img class="img-fluid w-100" alt="<?php echo $title." ".$anos['agora'][$lang]; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
            </div>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>