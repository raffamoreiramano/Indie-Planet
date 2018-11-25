<!doctype html>
<?php
    include '../../../includes/matrix.php';
    $title=isset($_GET['t'])?str_replace('+',' ',$_GET['t']):'Título da postagem';
    $image=isset($_GET['img'])?$corredor."img/".$_GET['img']:$corredor."img/content5.jpg";
    $date=isset($_GET['dt'])?str_replace('+',' ',$_GET['dt']):'algumas horas atrás';
    $nome=$title;
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
                <img class='rounded-0 mh-100 img-fluid' alt='<?php echo $title; ?>' src='<?php echo $image; ?>' />
                <div class='card-img-overlay h-100 d-flex flex-column text-white justify-content-end mx-lg-4'>
                    <h1 class='card-title my-0 news-title-link-b h5 font-weight-bold mb-0 mb-md-3'><?php echo $title; ?></h1>
                    <div class='card-text d-flex flex-row'>
                        <i class='far fa-clock mb-auto mt-auto ml-0 mr-2'></i>
                        <p class='my-auto'><?php echo $date; ?></p>
                    </div>
                </div>

            </div>
        </div>
        <?php
            include $corredor.'includes/trail.php';
        ?>
        <div class="container">
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