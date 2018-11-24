<!doctype html>
<?php
    include '../../../includes/matrix.php';
    $HC=array("en" => "Haircut", "es" => "Corte de pelo", "pt" => "Corte de cabelo");
    $title=isset($_GET['t'])?str_replace('+',' ',$_GET['t']):$HC[$lang];
    $image=isset($_GET['img'])?$corredor."img/".$_GET['img']:$corredor."img/".'carouselteste01.png';
    $date=isset($_GET['dt'])?str_replace('+',' ',$_GET['dt']):'algumas horas atrás';
    $nome=$title;
    if ($lang=="en") {
        $liso="Straight";
        $afro="Afro";
        $cacheado="Curly";
        $fem="Female";
        $mas="Male";
    }
    elseif ($lang=="es") {
        $liso="Liso";
        $afro="Afro";
        $cacheado="Enrulado";        
        $fem="Femenino";
        $mas="Masculino";
    }
    else {   
        $liso="Liso";
        $afro="Afro";
        $cacheado="Cacheado";
        $fem="Feminino";
        $mas="Masculino";
    }
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
                <section class="row mb-4">
                    <figure class="col-6 col-lg-3 order-1 my-4 p-0">
                        <img class="img-fluid pr-md-3 w-100" alt="<?php echo $fem." ".$title." - ".$liso; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                    <div class="col-12 col-lg-6 order-12 order-lg-2 mt-2 mb-4 my-lg-4">
                        <h3 class="h4 font-weight-bold"><?php echo $title." - ".$liso; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex, egestas id porttitor sed, pulvinar vel mi. Morbi tempor mauris interdum nisl consectetur tincidunt. Quisque fermentum eu nunc eu posuere. Suspendisse potenti. Curabitur et libero lectus. Morbi suscipit lorem quis risus vestibulum convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <figure class="col-6 col-lg-3 order-2 order-lg-3 my-4 p-0">
                        <img class="img-fluid pl-md-3 w-100" alt="<?php echo $mas." ".$title." - ".$liso; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
                <section class="row mb-4">
                    <figure class="col-6 col-lg-3 order-1 my-4 p-0">
                        <img class="img-fluid pr-md-3 w-100" alt="<?php echo $fem." ".$title." - ".$afro; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                    <div class="col-12 col-lg-6 order-12 order-lg-2 mt-2 mb-4 my-lg-4">
                        <h3 class="h4 font-weight-bold"><?php echo $title." - ".$afro; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex, egestas id porttitor sed, pulvinar vel mi. Morbi tempor mauris interdum nisl consectetur tincidunt. Quisque fermentum eu nunc eu posuere. Suspendisse potenti. Curabitur et libero lectus. Morbi suscipit lorem quis risus vestibulum convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <figure class="col-6 col-lg-3 order-2 order-lg-3 my-4 p-0">
                        <img class="img-fluid pl-md-3 w-100" alt="<?php echo $mas." ".$title." - ".$afro; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
                <section class="row mb-4">
                    <figure class="col-6 col-lg-3 order-1 my-4 p-0">
                        <img class="img-fluid pr-md-3 w-100" alt="<?php echo $fem." ".$title." - ".$cacheado; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                    <div class="col-12 col-lg-6 order-12 order-lg-2 mt-2 mb-4 my-lg-4">
                        <h3 class="h4 font-weight-bold"><?php echo $title." - ".$cacheado; ?></h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a hendrerit quam, at malesuada erat. Maecenas vel ex aliquet, lobortis lectus eget, maximus ligula. Sed dignissim dignissim purus a bibendum. Donec ac placerat augue. Morbi urna ex, egestas id porttitor sed, pulvinar vel mi. Morbi tempor mauris interdum nisl consectetur tincidunt. Quisque fermentum eu nunc eu posuere. Suspendisse potenti. Curabitur et libero lectus. Morbi suscipit lorem quis risus vestibulum convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <figure class="col-6 col-lg-3 order-2 order-lg-3 my-4 p-0">
                        <img class="img-fluid pl-md-3 w-100" alt="<?php echo $mas." ".$title." - ".$cacheado; ?>" src="<?php echo $corredor; ?>img/xadrezteste.png">
                    </figure>
                </section>
            </div>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>