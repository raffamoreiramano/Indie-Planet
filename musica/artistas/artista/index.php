<!doctype html>
<?php
    include '../../../includes/matrix.php';
    $nome=isset($_GET['t'])?$_GET['t']:$artista[rand(1,259)];
    $pimg=isset($_GET['pimg'])?$_GET['pimg']:6;
    $genero=isset($_GET['g'])?$_GET['g']:"Lo-Fi";
    $art=array();
    $art['info']=array (
        "en" => "General Information",
        "es" => "Información General",
        "pt" => "Informação Geral"
    );
    $art['atividade']=array (
        "en" => "Period of activity",
        "es" => "Periodo en actividad",
        "pt" => "Período em atividade"
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
    $art['int']=array (
        "en" => "Members",
        "es" => "Miembros",
        "pt" => "Integrantes"
    );
    $art['lan']=array (
        "en" => "Release",
        "es" => "Lanzamiento",
        "pt" => "Lançamento"
    );
    $art['dur']=array (
        "en" => "Length",
        "es" => "Duración",
        "pt" => "Duração"
    );
    $art['fai']=array (
        "en" => "Track",
        "es" => "Pista",
        "pt" => "Faixa"
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
                    <h1 class='py-3 text-white mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3'><?php echo $nome; ?></h1>
                </div>
            </div>
            <div class='row my-3 my-lg-4'>
                <figure class='pl-md-0 col-12 col-md-4 m-0'>
                    <img class='img-fluid border shadow' alt='<?php echo $nome; ?>' src='<?php echo $corredor."img/perfil".$pimg;?>.jpg'>
                    <figcaption class='text-secondary small p-2'><?php echo $nome." - ".($ativ+2); ?></figcaption>
                </figure>
                <div class='col-12 col-md-8'>
                    <div class='row'>
                        <table class='table text-white'>
                            <thead class='thead bg-dark shadow'>
                                <tr>
                                    <th colspan='2' class='border-0 h5 font-weight-bold'><?php echo $art['info'][$lang]; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class='border-0' scope='row'><?php echo $art['atividade'][$lang]; ?>:</th>
                                    <td class='border-0'><?php echo $ativ; ?> - presente</td>
                                </tr>
                                <tr>
                                    <th class='border-0' scope='row'><?php echo $art['origem'][$lang]; ?>:</th>
                                    <td class='border-0'>São Roque, SP, Brasil</td>
                                </tr>
                                <tr>
                                    <th class='border-0' scope='row'><?php echo $art['gen'][$lang]; ?>:</th>
                                    <td class='border-0'>Indie, <?php echo $genero; ?>, Psychodelic Alternative, Pop Rock</td>
                                </tr>
                                <tr>
                                    <th class='border-0' scope='row'><?php echo $art['int'][$lang]; ?>:</th>
                                    <td class='border-0'>
                                        <?php
                                        for($i=0;$i<rand(2,8);$i++) {
                                            echo "<p class='m-1'>".$artista[rand(100,200)].",</p>";
                                        }
                                        echo "\n<p class='m-1'>".$artista[rand(1,99)]."</p>";
                                        ?>                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class='row mb-3 justify-content-between'>
                <div class='row'>
                    <?php
                    $faixa=array();
                    $dura=0;
                    for ($i=0;$i<rand(3,5);$i++) {
                        $faixas=rand(10,20);
                        $art['album']=$artista[rand(60,200)];
                        echo "<section class='col-12 col-lg-6 text-white'>\n<div class='m-3'>\n<div class='row py-3 bg-dark shadow'>";
                        echo "<div class='col-12 col-md-4'>\n<img class='img-fluid border' alt='".$nome."' src='";
                        echo $corredor."img/xadrezteste.png'>\n</div>\n<div class='col-12 col-md-8'>";
                        echo "\n<h2 class='h5 px-3 pb-3 pt-3 pt-md-2 font-weight-bold'>".$art['album']."</h2>\n";
                        $ativ=rand($ativ,2018);
                        echo "<table class='table text-white m-0'>";
                        echo "\n<tr>\n<th class='border-0 py-1' scope='row'>".$art['lan'][$lang].":</th>";
                        echo "\n<td class='border-0 py-1'>".$ativ."</td>\n</tr>";
                        echo "<tr>\n<th class='border-0 py-1' scope='row'>".$art['dur'][$lang].":</th>"; 
                        for ($d=0;$d<$faixas;$d++) {
                            $faixa[$d]=rand(120,360);
                            $dura=$dura+$faixa[$d];
                        }
                        $dura=floor($dura/60);
                        echo "\n<td class='border-0 py-1'>".$dura."min</td>\n</tr>";
                        echo "<tr>\n<th class='border-0 py-1' scope='row'>".$art['fai'][$lang].":</th>"; 
                        echo "\n<td class='border-0 py-1'>".$faixas."</td>\n</tr>\n</table>\n</div>\n</div>";
                        echo "\n<div class='row'>\n<div class='col-12 px-4'>\n";
                        echo "<ol class='album d-flex flex-column flex-wrap my-2 mr-1 ml-3 p-0'>\n";
                        foreach ($faixa as $value) {
                            echo "<li class='pl-3'>".$artista[rand(60,200)]."</li>\n";
                        }
                        echo "</ol>\n</div>\n</div>\n</div>\n</section>";
                        
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