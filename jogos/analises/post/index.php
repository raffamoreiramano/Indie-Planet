<!doctype html>
<?php
    include '../../../includes/matrix.php';
    $title=isset($_GET['t'])?str_replace('+',' ',$_GET['t']):'Título da postagem';
    $image=isset($_GET['pimg'])?$corredor."img/content".$_GET['pimg'].".jpg":$corredor."img/content5.jpg";
    $date=isset($_GET['dt'])?str_replace('+',' ',$_GET['dt']):'algumas horas atrás';
    $nome=$title;
    $nota=isset($_GET['n'])?substr($_GET['n'],0,1).",".substr($_GET['n'],1,1):'8,7';
    $pros=array(
        "en" => "Pros",
        "es" => "Pros",
        "pt" => "Prós"
    );
    $cons=array(
        "en" => "Cons",
        "es" => "Contras",
        "pt" => "Contras"
    );
    $ver=array(
        "en" => "Verdict",
        "es" => "Veredicto",
        "pt" => "Veredito"
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
        <div class="container rounded-0 border-0 p-0">
            <div class="card game-link-post  border-0 rounded-0 h-25 p-0 m-0">
                <img class='rounded-0 mh-100 img-fluid' alt='<?php echo $title; ?>' src='<?php echo $image; ?>' />
                <div class='card-img-overlay h-100 d-flex flex-column text-white justify-content-end mx-lg-4'>
                    <div class="row m-0 p-0">
                        <div class="col-6 p-0 m-0">
                            <h1 class='card-title my-0 news-title-link-b h5 font-weight-bold mb-0 mb-md-3'><?php echo $title; ?></h1>
                            <div class='card-text d-flex flex-row'>
                                <i class='far fa-clock mb-auto mt-auto ml-0 mr-2'></i>
                                <p class='my-auto'><?php echo $date; ?></p>
                            </div>
                        </div>
                        <div class="col-6 p-0 m-0 text-right">
                            <h3 class="h1 pb-4 mb-4 pr-4 font-weight-bold text-white"><?php echo $nota; ?></h3>
                        </div>
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
                    <article class="px-lg-4 mb-5">
                        <blockquote class='blockquote text-right'><h3 class='h5 text-muted'>Suspendisse tristique nunc leo, at fermentum quam eleifend scelerisque</h3><footer class='blockquote-footer'>Antonio Margheriti.</footer></blockquote><p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis vehicula dui. Curabitur ornare sapien tellus, a tristique mauris aliquet id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at enim sit amet arcu efficitur pulvinar. Donec pulvinar, dolor at scelerisque pharetra, eros ipsum ultrices est, eget aliquam arcu risus vitae nisi. Phasellus efficitur tellus a fermentum accumsan. Cras viverra in ex non pulvinar. Morbi nec dolor iaculis, sagittis mauris ut, venenatis lacus. Aliquam commodo ultrices tincidunt. Fusce viverra urna lorem, vel congue felis sollicitudin ut.</p><p class='text-justify'>Mauris finibus sodales est, eget sodales eros fringilla rutrum. In at magna lobortis, suscipit enim ut, aliquet tortor. Aliquam nec semper felis, sed tincidunt lectus. Nullam a dolor augue. Donec vestibulum fringilla nisl, a congue justo dictum non. Pellentesque non pulvinar nibh, et convallis enim. Vestibulum sit amet diam erat. Mauris fermentum convallis nisi a dignissim. Nam nec faucibus mi.</p><p class='text-justify'>Phasellus lorem lorem, euismod vel neque id, dignissim imperdiet odio. Phasellus urna purus, mattis eget gravida id, porta sed nibh. Aliquam aliquet massa nulla, et congue sapien rhoncus ut. Nunc in imperdiet dui. Nunc scelerisque dui id magna tincidunt egestas. Curabitur in dolor ut justo laoreet cursus consectetur et lorem. Nam at lacinia urna. Vivamus vestibulum, augue at lobortis euismod, elit est blandit risus, pellentesque semper nibh purus ac eros. Etiam rutrum felis velit, ut aliquet urna rutrum sit amet. Cras purus ipsum, bibendum vel luctus vel, fermentum a eros. Maecenas ac elit vel urna volutpat aliquam. Maecenas et porttitor lacus. Donec tristique erat vitae nibh venenatis pulvinar. Donec tincidunt interdum bibendum.</p>
                        <section>
                            <div class="row mt-5 mb-3 bg-success">
                                <h2 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4">
                                    <?php echo $pros[$lang]; ?>
                                </h2>
                            </div>
                            <p class='text-justify'>Mauris finibus sodales est, eget sodales eros fringilla rutrum. In at magna lobortis, suscipit enim ut, aliquet tortor. Aliquam nec semper felis, sed tincidunt lectus. Nullam a dolor augue. Donec vestibulum fringilla nisl, a congue justo dictum non.</p>
                            <p class='text-justify'>Dignissim imperdiet odio. Phasellus urna purus, mattis eget gravida id, porta sed nibh. Aliquam aliquet massa nulla, et congue donec tristique erat vitae nibh venenatis pulvinar. Donec tincidunt interdum bibendum.</p>
                        </section>
                        <section>
                            <div class="row mt-5 mb-3 bg-danger">
                                <h2 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4">
                                    <?php echo $cons[$lang]; ?>
                                </h2>
                            </div>
                            <p class='text-justify'>Dignissim imperdiet odio. Phasellus urna purus, mattis eget gravida id, mauris finibus sodales est, eget sodales eros fringilla rutrum. In at magna lobortis, suscipit enim ut, aliquet tortor. Aliquam nec semper felis, sed tincidunt lectus. Nullam a dolor augue. Donec vestibulum fringilla nisl, a congue justo dictum non.</p>
                        </section>
                        <section>
                            <div class="row mt-5 mb-3 bg-warning">
                                <h2 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4">
                                    <?php echo $ver[$lang]; ?>
                                </h2>
                            </div>
                            <p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis vehicula dui. Curabitur ornare sapien tellus, a tristique mauris aliquet id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at enim sit amet arcu efficitur pulvinar. Donec pulvinar, dolor at scelerisque pharetra, eros ipsum ultrices est, eget aliquam arcu risus vitae nisi. Phasellus efficitur tellus a fermentum accumsan. Cras viverra in ex non pulvinar. Morbi nec dolor iaculis, sagittis mauris ut, venenatis lacus. Donec vestibulum fringilla nisl, a congue justo dictum non.</p>
                        </section>
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