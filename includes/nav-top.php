<nav class="navbar container-fluid navbar-expand bg-dark d-none d-lg-block">
    <ul class="navbar-nav container">
        <li class="nav-item">
            <a class="navbar-brand align-baseline d-flex flex-row" href="<?php echo $corredor."index.php"; ?>">
                <i><img alt="logo" src="<?php echo $corredor."img/planet.ico"; ?>" class="ml-2"/></i>
                <h3 class="h3 indie-brand mt-auto mb-auto ml-2 mr-2 text-white">INDIE PLANET</h3>
            </a>
        </li>
        <?php 
            foreach ($navGeral as $area) {
                echo "<li class='nav-item'>
                        <a class='nav-link h4 m-auto' href='"
                    .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                </li>";
            } // Gera conteúdo de acordo com os elementos da matriz $navGeral, que contém os nomes das áreas gerais do portal
        ?>
        <li class="nav-item">
            <button type="button" class="btn btn-secondary mt-auto mb-auto mr-2 ml-0">Faça seu login!</button>
        </li>
    </ul>
</nav>
<nav class='navbar d-lg-none container-fluid'>
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
                    } // Laço com o conteúdo particular de cada área do portal
                    echo "      </ul>
                        </div>
                    </li>";
                } // Esse laço serve para gerar o conteúdo principal da navegação do portal
                foreach ($navGeral as $area) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='"
                        .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                        </div>
                    </li>";
                } // Termina o menu de navegação com algumas das áreas gerais do portal
            ?>
            
            
            
        </ul>
    </div>
</nav>
