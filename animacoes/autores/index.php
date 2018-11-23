<!doctype html>
<?php
    include '../../includes/matrix.php';
    $page=isset($_GET['page'])?($_GET['page']):1;
    if($lang=="en"){
        $genero=array("Rotoscopy","Stop Motion","CGI","Cartoon");
    }
    if($lang=="es"||$lang=="pt"){
        $genero=array("Rotoscopia","Stop Motion","CGI","Cartoon");
    }
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
            $h1=array();
            $h1['en']="Indie Authors (A-Z)";
            $h1['es']="Autores Indie (A-Z)";
            $h1['pt']="Autores Indie (A-Z)";
            
        ?>
        <article class="container">
            <div class="row bg-dark shadow">
                <h1 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4"><?php echo $h1[$lang]; ?></h1>
            </div>
            <div class="row mx-0 pb-5 pt-4 my-5">
                
                    <?php
                    if ($page>10) {
                        $page=10;  
                    }
                    if ($page<=0) {
                        $page=1;  
                    }
                    $p1=0+(($page-1)*26);
                    $p2=26+(($page-1)*26);
                    
                    for ($i=$p1;$i<$p2;$i++) {
                        $pimg=rand(0,6);
                        $g=$genero[rand(0,count($genero)-1)];
                        echo "<div class='col-12 col-lg-6 p-0'>";
                        echo "<section class='container-fluid autores mt-4 p-0'>\n<div class='row m-0'>\n";
                        echo "<div class='pl-0 pl-lg-3 col-4 col-md-2 col-lg-4'>\n<img alt='".$artista[$i]."' ";
                        echo "class='img-fluid border shadow border-dark rounded-circle' src='../../img/perfil".$pimg.".jpg'>\n";
                        echo "</div>\n<div class='pl-0 pl-lg-3 col-8 col-md-10 col-lg-8'>\n<div class='row h-100 m-0'>";
                        echo "\n<a href='autor/index.php?t=".str_replace(' ','+',$artista[$i])."&pimg=".$pimg."&g=".str_replace(' ','+',$g);
                        echo "' class='my-auto'>\n<h2 class='h4 font-weight-bold text-light'>";
                        echo $artista[$i]."</h2>\n<h3 class='h6 text-secondary'>".$g."</h3>\n";
                        echo "</a>\n</div>\n</div>\n</div>\n</section>";
                        echo "\n</div>\n";
                    }
                    
                    ?>
                
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
        </article>
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
=======
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
        
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>