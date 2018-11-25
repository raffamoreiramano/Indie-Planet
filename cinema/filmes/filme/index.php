<!doctype html>
<?php
    include '../../../includes/matrix.php';
    $nome=isset($_GET['t'])?$_GET['t']:$artista[rand(1,259)];
    $pimg=isset($_GET['pimg'])?$_GET['pimg']:6;
    $genero=isset($_GET['g'])?str_replace('--',',',$_GET['g']):"Drama";
    $art=array();
    $art['info']=array (
        "en" => "General Information",
        "es" => "Información General",
        "pt" => "Informação Geral"
    );
    $art['atividade']=array (
        "en" => "Release",
        "es" => "Lanzamiento",
        "pt" => "Lançamento"
    );
    $art['origem']=array (
        "en" => "Origin",
        "es" => "Origen",
        "pt" => "Origem"
    );
    $art['gen']=array (
        "en" => "Genre(s)",
        "es" => "Género(s)",
        "pt" => "Gênero(s)"
    );
    $art['presente']=array (
        "en" => "present",
        "es" => "presente",
        "pt" => "presente"
    );
    $ativ=rand(1980,2016);
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
        ?>
    <article class="container">
        <div class="row shadow">
            <div class='col-12 bg-dark'>
                <h1 class='py-3 text-white mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3'>
                    <?php echo $nome; ?>
                </h1>
            </div>
        </div>
        <div class='row my-3 my-lg-4'>
            <figure class='pl-md-0 col-12 col-md-4 m-0'>
                <img class='img-fluid border shadow' alt='<?php echo $nome; ?>' src='<?php echo $corredor."img/content".$pimg;?>.jpg'>
                <figcaption class='text-secondary small p-2'>
                    <?php echo $nome." - ".($ativ+2); ?>
                </figcaption>
            </figure>
            <div class='col-12 col-md-8'>
                <div class='row'>
                    <table class='table text-white'>
                        <thead class='thead bg-dark shadow'>
                            <tr>
                                <th colspan='2' class='border-0 h5 font-weight-bold'>
                                    <?php echo $art['info'][$lang]; ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class='border-0' scope='row'>
                                    <?php echo $art['atividade'][$lang]; ?>:</th>
                                <td class='border-0'>
                                    <?php echo $ativ; ?></td>
                            </tr>
                            <tr>
                                <th class='border-0' scope='row'>IMDB:</th>
                                <td class='border-0'>
                                    <?php echo isset($_GET['n'])?substr($_GET['n'],0,1).",".substr($_GET['n'],1,1):'8,7'; ?></td>
                            </tr>
                            <tr>
                                <th class='border-0' scope='row'>
                                    <?php echo $art['gen'][$lang]; ?>:</th>
                                <td class='border-0'>
                                    <?php echo $genero; ?>, Indie.</td>
                            </tr>
                            <tr>
                                <th class='border-0' scope='row'>
                                   <?php
            $mautor=array();
            $mautor['en']="Synopsis:";
            $mautor['es']="Sinopsis:";
            $mautor['pt']="Sinópse:";
            echo $mautor[$lang];
            
        ?> </th>
                                <td class='border-0'>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras egestas ornare dolor et auctor. Aliquam iaculis sem eget justo fermentum, et luctus tellus venenatis. Vestibulum nec luctus odio. In lacus diam, sollicitudin ut ullamcorper eu, vestibulum aliquam dui. Vivamus et orci quis est interdum sodales sit amet nec ipsum. Phasellus velit nunc, cursus non rutrum eget, scelerisque at est. Aenean at magna urna. Integer vulputate volutpat augue sed pharetra... </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class='row mb-3 justify-content-between'>
            <div class='row'>
                <div class="col-12 col-md-12 col-lg-12">
                <h1 class='text-white'>
                    <?php
                     $desenhos=array();
                     $desenhos['en']="Scenes from $nome";
                     $desenhos['es']="Escenas de $nome";
                     $desenhos['pt']="Cenas de $nome";
                     echo $desenhos[$lang];
            
                    ?>
                </h1>
                </div>
                <?php
                     $dsort=array(
                     "<div class='col-12 col-md-4 col-lg-4 mb-3'>
                    <img class='img-fluid rounded mx-auto d-block' alt='gorillaz old' src='../../../img/content2.jpg'>
                </div>",
                         "<div class='col-12 col-md-4 col-lg-4 mb-3'>
                    <img class='img-fluid rounded mx-auto d-block' alt='gorillaz new' src='../../../img/content3.jpg'>
                </div>", 
                         "<div class='col-12 col-md-4 col-lg-4 mb-3'>
                    <img class='img-fluid rounded mx-auto d-block' alt=' tank girl' src='../../../img/content4.jpg'>
                </div>"
                     );
                    
                shuffle($dsort);
                
                foreach($dsort as $value){
                    echo $value;
                }


                    ?>
            </div>
        </div>
    </article>
    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>