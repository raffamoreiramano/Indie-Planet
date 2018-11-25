<!doctype html>
<?php
    include '../../includes/matrix.php';
    $page=isset($_GET['page'])?($_GET['page']):1;
    $genero=array("Indie Rock","Indie Pop","Indie Folk","Indie Indie","Índio","Indie Pop-folk-rock");
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
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php
                        switch ($lang) {
                            case "en":
                                echo "Reviews";
                                break;
                            case "es":
                                echo "Análisis";
                                break;
                            case "pt":
                                echo "Análises";
                                break;
                        }
                        ?></h1>
                </div>
            </div>
            <div class="row mx-0 pb-5 pt-0 mb-5">
                <div class="col-12 col-lg-9 px-0">
                

                    <?php
                    if ($page>10) {
                        $page=10;  
                    }
                    if ($page<=0) {
                        $page=1;  
                    }
                    $p1=0+(($page-1)*26);
                    $p2=26+(($page-1)*26);
                    $GF = array(
                        0 => array(
                            "en" => "Fantasy, RTS",
                            "es" => "Fantasía, RTS",
                            "pt" => "Fantasia, RTS"
                        ),
                        1 => array(
                            "en" => "Thriller",
                            "es" => "Suspense",
                            "pt" => "Suspense"
                        ),
                        2 => array(
                            "en" => "Mystery, Psychological Horror",
                            "es" => "Misterio, Terror psicologico",
                            "pt" => "Mistério, Terror psicológico"
                        ),
                        3 => array(
                            "en" => "Drama",
                            "es" => "Drama",
                            "pt" => "Drama"
                        ),
                        4 => array(
                            "en" => "Comedy",
                            "es" => "Comedia",
                            "pt" => "Comédia"
                        ),
                        5 => array(
                            "en" => "Drama, thriller",
                            "es" => "Drama, Suspense",
                            "pt" => "Drama, Suspense"
                        ),
                        6 => array(
                            "en" => "Comedy, Drama",
                            "es" => "Comedia, Drama",
                            "pt" => "Comédia, Drama"
                        ),
                        7 => array(
                            "en" => "Thriller",
                            "es" => "Suspense",
                            "pt" => "Suspense"
                        ),
                        8 => array(
                            "en" => "Drama, Comedy",
                            "es" => "Drama, Comedia",
                            "pt" => "Drama, Comédia"
                        ),
                        9 => array(
                            "en" => "Drama",
                            "es" => "Drama",
                            "pt" => "Drama"
                        )
                    );
                    for ($i=$p1;$i<$p2;$i+=2) {
                        $topicname=$artista[$i]." ".$artista[$i+1];
                        $topicname=ucfirst(strtolower($topicname));
                        $gene=$GF[rand(0,6)][$lang];
                        $nota=rand(70,99);
                        $pimg=rand(0,6);
                        $link="filme/index.php?t=".str_replace(' ','+',$topicname)."&g=".str_replace(',','--',str_replace(' ','+',$gene))."&n=".$nota."&pimg=".$pimg;
                        echo '<article class="topicos border-0 rounded-0 shadow card game-link row my-3">';
                        echo '<img class="card-img" src="../../img/content'.$pimg.'.jpg" alt="'.$topicname.'">';
                        echo '<a class="p-0 px-3 col-12 card-img-overlay shadow text-light" href="'.$link.'">';
                        echo '<div class="row p-0 py-3 m-0"><div class="col-7 p-0 pl-4 my-4">';
                        echo '<h2 class="h4 font-weight-bold text-white">'.$topicname.'</h2>';
                        echo '<h4 class="h6 d-none d-md-block m-0">'.$gene.'</h4></div><section class="col-5 p-4">';
                        echo '<h4 class="h1 m-0 mt-2 font-weight-bold text-white text-right">';
                        echo substr($nota,0,1).','.substr($nota,1,1).'</h4></section></div></a></article>';
                        
                       
                    }
                    
                    ?>
                
                </div>
                
            </div>     
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
        </div>
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>