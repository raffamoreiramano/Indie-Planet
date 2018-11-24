<!doctype html>
<?php
    include '../includes/matrix.php';
    $page=isset($_GET['page'])?$_GET['page']:1;
    if ($page>10) {
        $page=10;  
    }
    if ($page<=0) {
        $page=1;  
    }

?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
    $topico=array(
        "tfix" => array(
            "en" => "Fixed Topics",
            "es" => "Temas Fijos",
            "pt" => "Tópicos Fixos"
        ),
        "tcom" => array(
            "en" => "Common Topics",
            "es" => "Temas Comunes",
            "pt" => "Tópicos Comuns"
        ),
        "por" => array(
            "en" => "by",
            "es" => "por",
            "pt" => "por"
        ),
        "vis" => array(
            "en" => "views",
            "es" => "vistas",
            "pt" => "visualizações"
        ),
        "res" => array(
            "en" => "replies",
            "es" => "respuestas",
            "pt" => "respostas"
        ),
        "titulo1" => array(
            "en" => "Welcome!",
            "es" => "¡Bienvenido!",
            "pt" => "Boas-vindas!"
        ),
        "titulo2" => array(
            "en" => "User manual",
            "es" => "Manual de usuario",
            "pt" => "Manual do usuário"
        )
    );
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
        <div class="container bg-white">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php
                        switch ($lang) {
                            case "en":
                                echo "Forum";
                                break;
                            case "es":
                                echo "Foro";
                                break;
                            case "pt":
                                echo "Fórum";
                                break;
                        }
                        ?></h1>
                </div>
            </div>
        </div>
        <main class="container">
            <div class="row my-3 justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <a href="erro/index.php" class="btn btn-info font-weight-bold btn-block btn-lg shadow rounded-0">+ <?php
                        switch ($lang) {
                            case "en":
                                echo "Create Topic";
                                break;
                            case "es":
                                echo "Crear Tema";
                                break;
                            case "pt":
                                echo "Criar Tópico";
                                break;
                        }
                        ?></a>
                </div>
            </div>
                <?php
                $p1=0+(($page-1)*26);
                $p2=26+(($page-1)*26);
                $rand1=10000*(11-$page);
                $rand2=$rand1*2;
                $views=rand($rand1,$rand2);
                $data="12/11/2017 - 6:16pm";
                if ($page==1) {
                    echo "<section>\n<div class='row'>\n<div class='col-12 bg-dark shadow'>\n";
                    echo "<h3 class='py-3 my-0 pl-lg-3 ml-lg-2 text-white font-weight-bold h4'>";
                    echo $topico['tfix'][$lang]."</h3>\n</div>\n</div>\n";
                    for ($i=1;$i<3;$i++) {     
                        $link=$corredor."forum/topico/index.php?t=".str_replace(' ','+',$topico['titulo'.$i][$lang]);
                        echo "<article class='topicos row mx-0 mx-lg-2 my-3'>\n<div class='p-3 col-12 bg-dark shadow text-light'>\n";
                        echo "<a href='".$link."'>\n<h2 class='h5 font-weight-bold text-white'>".$topico['titulo'.$i][$lang]."</h2>\n</a>";
                        echo "<p>".$topico['por'][$lang]." <strong class='strong-forum'>@staff</strong> ".$data."</p>";
                        echo "<div class='row m-0 p-0'>\n<div class='col-12 col-md-6 col-lg-3 p-0'>\n<p class='m-0'>";
                        echo $views-((rand(0,3)*$i)*10)." ".$topico['vis'][$lang]."</p>\n</div>";
                        echo "\n<div class='col-12 col-md-6 col-lg-3 p-0'>\n<p class='m-0'>";
                        echo "5 ".$topico['res'][$lang]."</p>\n</div>\n</div>\n</div>\n</article>\n";
                    }
                    echo "</section>\n<section>\n<div class='row'>\n<div class='col-12 bg-dark shadow'>\n";
                    echo "<h3 class='py-3 my-0 pl-lg-3 ml-lg-2 text-white font-weight-bold h4'>";
                    echo $topico['tcom'][$lang]."</h3>\n</div>\n</div>\n";
                }
                else {
                    echo "<section>\n";
                }
                $datam=12-$page;
                $datad=28;
                $dataa=2017;
                $datah=24;
                $datamin=1;
                for ($i=$p1;$i<$p2;$i+=2) {
                    $usuario=$artista[rand(1,259)];
                    $usuario=strtolower(substr($usuario,0,strpos($usuario,' ')));
                    $views=$views-(rand(0,9)*$i);
                    $topicname=$artista[$i]." ".$artista[$i+1];
                    $topicname=ucfirst(strrev(strtolower($topicname)));
                    $resp=rand(0,10);
                    $datad=$datad-rand(0,2);
                    $datah=$datah-1;
                    $datamin=rand(00,59);
                    $data=date('d m Y - g:ia',mktime($datah, $datamin, 0, $datam, $datad, 2017));
                    $dataurl=str_replace(' ','X',$data);
                    $dataurl=str_replace('-','Y',$dataurl);
                    $dataurl=str_replace(':','Z',$dataurl);
                    $link=$corredor."forum/topico/index.php?t=".str_replace(' ','+',$topicname)."&u=".$usuario."&r=".$resp."&dt=".$dataurl;
                    echo "<article class='topicos row mx-0 mx-lg-2 my-3'>\n<div class='p-3 col-12 bg-dark shadow text-light'>\n";
                    echo "<a href='".$link."'><h2 class='h5 font-weight-bold text-white'>".$topicname."</h2>\n</a>\n";
                    echo "<p>".$topico['por'][$lang]." <strong class='strong-forum'>@".$usuario."</strong> ".$data."</p>";
                    echo "<div class='row m-0 p-0'>\n<div class='col-12 col-md-6 col-lg-3 p-0'>\n<p class='m-0'>";
                    echo $views." ".$topico['vis'][$lang]."</p>\n</div>";
                    echo "\n<div class='col-12 col-md-6 col-lg-3 p-0'>\n<p class='m-0'>";
                    echo $resp." ".$topico['res'][$lang]."</p>\n</div>\n</div>\n</div>\n</article>\n";
                }
                echo "</section>"
                ?>
            <nav class="row m-0 pt-5 mt-5">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item bg-dark<?php if ($page==1) {echo " disabled";} ?>">
                            <a class="page-link border-secondary bg-dark text-<?php if($page==1){echo "secondary";}else{echo "light";} ?>" href="?page=1">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item bg-dark<?php if ($page==1) {echo " disabled";} ?>">
                            <a class="page-link border-secondary bg-dark text-<?php if($page==1){echo "secondary";}else{echo "light";} ?>" href="?page=<?php echo $page-1; ?>">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <?php
                        if ($page<5) {
                            for ($i=$page;$i<$page+5;$i++) {
                                if ($i==$page) {
                                    echo "<li class='page-item'>";
                                    echo "\n<a class='page-link border-secondary bg-secondary text-light' href='?page=$i'>".$i."</a>\n</li>";
                                }
                                else {
                                    echo "<li class='page-item d-none d-sm-block'>";   
                                    echo "\n<a class='page-link border-secondary bg-dark text-light' href='?page=$i'>".$i."</a>\n</li>";
                                }
                            }
                            echo "<li class='page-item'>";   
                            echo "\n<a class='page-link border-secondary bg-dark text-light' href='?page=".$i."'>...</a>\n</li>";
                        }
                        elseif ($page==5) {
                            for ($i=$page-2;$i<$page+3;$i++) {
                                if ($i==$page) {
                                    echo "<li class='page-item'>";
                                    echo "\n<a class='page-link border-secondary bg-secondary text-light' href='?page=$i'>".$i."</a>\n</li>";
                                }
                                else {
                                    echo "<li class='page-item d-none d-sm-block'>";   
                                    echo "\n<a class='page-link border-secondary bg-dark text-light' href='?page=$i'>".$i."</a>\n</li>";
                                }
                            }
                        }
                        else {
                            echo "<li class='page-item'>";   
                            echo "\n<a class='page-link border-secondary bg-dark text-light' href='?page=".($page-5)."'>...</a>\n</li>";
                            for ($i=6;$i<=10;$i++) {
                                if ($i==$page) {
                                    echo "<li class='page-item'>";
                                    echo "\n<a class='page-link border-secondary bg-secondary text-light' href='?page=$i'>".$i."</a>\n</li>";
                                }
                                else {
                                    echo "<li class='page-item d-none d-sm-block'>";   
                                    echo "\n<a class='page-link border-secondary bg-dark text-light' href='?page=$i'>".$i."</a>\n</li>";
                                }
                            }                            
                        }
                        ?>
                        <li class="page-item<?php if ($page==10) {echo " disabled";} ?>">
                            <a class="page-link border-secondary bg-dark text-<?php if($page==10){echo "secondary";}else{echo "light";} ?>" href="?page=<?php echo $page+1; ?>">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                        <li class="page-item<?php if ($page==10) {echo " disabled";} ?>">
                            <a class="page-link border-secondary bg-dark text-<?php if($page==10){echo "secondary";}else{echo "light";} ?>" href="?page=10">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </main>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>