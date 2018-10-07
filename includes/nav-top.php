<nav class="navbar container-fluid navbar-expand bg-dark d-none d-lg-block">
    <ul class="navbar-nav container">
        <li class="nav-item">
            <a class="navbar-brand align-baseline d-flex flex-row" href="<?php echo $corredor."index.php"; ?>">
                <i><img alt="logo" src="<?php echo $corredor."img/planet.ico"; ?>"/></i>
                <h3 class="h3 indie-brand">INDIE PLANET</h3>
            </a>
        </li>
        <?php 
            foreach ($navgeral as $area) {
                echo "<li class='nav-item'>
                        <a class='nav-link h4 align-baseline' href='"
                    .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                </li>";
            }
        ?>
        <li class="nav-item">
            <button type="button" class="btn btn-secondary align-baseline">Faça seu login!</button>
        </li>
    </ul>
</nav>
<nav class='navbar <?php echo $pastaAtual; ?> d-lg-none container-fluid'>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand" href="<?php echo $corredor."index.php"; ?>">
        <i><img alt="logo" src="<?php echo $corredor."img/planet.ico"; ?>"/></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbarlogin">
        <i class="fas fa-ellipsis-v trespontinhos"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
                foreach ($nav as $area => $pagina) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='"
                        .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                        </div>
                        <div class='col'>
                            <button class='navbar-toggler float-right flecha' type='button' data-toggle='collapse' data-target='#collapsibleNavbar$area'>
                                <i class='fas fa-angle-down'></i>
                                <i class='fas fa-angle-left'></i>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class='collapse navbar-collapse' id='collapsibleNavbar$area'>
                            <ul class='navbar-nav ul-inside-collapse'>";
                        
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item row'>
                            <div class='col'>
                                <a class='nav-link h4' href='"
                            .$corredor.str_replace(' ','_',strtolower(pato($area))).
                            "/"
                            .str_replace(' ','_',strtolower(pato($pagina))).
                            "/index.php'>$pagina</a>
                            </div>
                        </li>";
                    }
                    echo "      </ul>
                        </div>
                    </li>";
                }
                foreach ($navgeral as $area) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='"
                        .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                        </div>
                    </li>";
                }
            ?>
            
            
            
        </ul>
    </div>
</nav>
