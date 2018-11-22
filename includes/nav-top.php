<div id="navigation">
<nav class="navbar container-fluid navbar-expand bg-dark d-none d-lg-block">
    <ul class="navbar-nav container">
        <li class="nav-item">
            <a class="navbar-brand align-baseline d-flex flex-row" href="<?php echo $corredor."index.php"; ?>">
                <i><img alt="logo" src="<?php echo $corredor."img/planet.ico"; ?>" class="ml-2"/></i>
                <h3 class="h3 indie-brand my-auto mx-2 text-white">INDIE PLANET</h3>
            </a>
        </li>
        <?php 
            foreach ($navGeral as $area => $value) {
                echo "<li class='nav-item'>
                        <a class='nav-link h4 m-auto' href='"
                    .$corredor.$area."/index.php'>".$navGeral[$area][$lang]."</a>
                </li>";
            } // Gera conteúdo de acordo com os elementos da matriz $navGeral, que contém os nomes das áreas gerais do portal
        $dropdown = array (
            "logar" => array (
                "en" => "Sign in!",
                "es" => "Inicia!",
                "pt" => "Faça seu login!"
            ),
            "email" => array (
                "en" => "example",
                "es" => "ejemplo",
                "pt" => "exemplo"
            ),
            "senha" => array (
                "en" => "password",
                "es" => "contraseña",
                "pt" => "senha"
            ),
            "lembrar" => array (
                "en" => "Remember password",
                "es" => "Recordar contraseña",
                "pt" => "Lembrar senha"
            ),
            "esqueci" => array (
                "en" => "Forgot my password",
                "es" => "Ouvide mi contraseña",
                "pt" => "Esqueci minha senha"
            ),
            "enviar" => array (
                "en" => "Submit",
                "es" => "Enviar",
                "pt" => "Enviar"
            ),
            "criar" => array (
                "en" => "Create an account",
                "es" => "Crear una cuenta",
                "pt" => "Criar uma conta"
            )
        );
        ?>
        <li class="nav-item row mr-0 my-auto py-0">
            <div class="btn-group" role="group">

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $dropdown['logar'][$lang]; ?></button>

                    <div class="dropdown-menu dropdown-menu-right rounded-0 border-0 login-dropdown px-4 py-3">
                        <form class="text-white">
                            <div class="form-group">
                                <label for="formEmail1">Email</label>
                                <input type="email" class="form-control" id="formEmail1" placeholder="email@<?php echo $dropdown['email'][$lang]; ?>.com">
                            </div>
                            <div class="form-group">
                                <label for="formPassword1"><?php echo $dropdown['senha'][$lang]; ?></label>
                                <input type="password" class="form-control" id="formPassword1" placeholder="Password1234!">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck1">
                                <label class="form-check-label" for="formCheck1"><?php echo $dropdown['lembrar'][$lang]; ?></label>
                            </div>
                            <button type="submit" class="btn btn-info my-3"><?php echo $dropdown['enviar'][$lang]; ?></button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex flex-column">
                            <a class="text-white font-weight-bold" href="#"><?php echo $dropdown['criar'][$lang]; ?></a>
                            <a class="text-white font-weight-bold" href="#"><?php echo $dropdown['esqueci'][$lang]; ?></a>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary rounded-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo $corredor."img/".$lang; ?>.png" alt="#" class="img-fluid rounded">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right rounded-0 border-0 lang-dropdown pt-2">
                        <a href="?lang=en" class="dropdown-item p-1">
                            <div class="row m-0">
                                <div class="col pl-4">
                                    <img class="my-2" src="<?php echo $corredor."img/en.png"; ?>" alt="en">
                                </div>
                                <div class="col">
                                    <h6 class="mt-2 mb-1 text-light">EN</h6>
                                </div>
                            </div>
                        </a>
                        <a href="?lang=es" class="dropdown-item p-1">
                            <div class="row m-0">
                                <div class="col pl-4">
                                    <img class="my-2" src="<?php echo $corredor."img/es.png"; ?>" alt="es">
                                </div>
                                <div class="col">
                                    <h6 class="mt-2 mb-1 text-light">ES</h6>
                                </div>
                            </div>
                        </a>
                        <a href="?lang=pt" class="dropdown-item p-1">
                            <div class="row m-0">
                                <div class="col pl-4">
                                    <img class="my-2" src="<?php echo $corredor."img/pt.png"; ?>" alt="pt">
                                </div>
                                <div class="col">
                                    <h6 class="mt-2 mb-1 text-light">PT</h6>
                                </div>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>
        </li>
    </ul>
</nav>
<nav class='navbar d-lg-none container-fluid' id="topNav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand" href="<?php echo $corredor."index.php"; ?>">
        <i><img alt="logo" src="<?php echo $corredor."img/planet.ico"; ?>"/></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleForm" aria-expanded="false">
        <i class="fas fa-ellipsis-v trespontinhos"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" data-parent="#topNav">
        <ul class="navbar-nav">
            <?php
                foreach ($nav as $area => $pagina) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='"
                        .$corredor.$area."/index.php'>".$nav[$area]['primario'][$lang]."</a>
                        </div>
                        <div class='col'>
                            <button class='navbar-toggler float-right flecha' type='button' data-toggle='collapse' data-target='#collapsibleNavbar".$area."'>
                                <i class='fas fa-angle-down'></i>
                                <i class='fas fa-angle-left'></i>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class='collapse navbar-collapse' id='collapsibleNavbar".$area."'>
                            <ul class='navbar-nav ul-inside-collapse'>";
                        
                    foreach ($nav[$area]['secundario'] as $elemento => $pagina) {
                        echo "<li class='nav-item row'>
                            <div class='col'>
                                <a class='nav-link h4' href='"
                            .$corredor.$area.
                            "/"
                            .$elemento.
                            "/index.php'>".$nav[$area]['secundario'][$elemento][$lang]."</a>
                            </div>
                        </li>";
                    } // Laço com o conteúdo particular de cada área do portal
                    echo "      </ul>
                        </div>
                    </li>";
                } // Esse laço serve para gerar o conteúdo principal da navegação do portal
                foreach ($navGeral as $area => $value) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='"
                        .$corredor.$area."/index.php'>".$navGeral[$area][$lang]."</a>
                        </div>
                    </li>";
                } // Termina o menu de navegação com algumas das áreas gerais do portal
            ?>
            
            
            
        </ul>
    </div>
    <div class="px-4 w-100 my-3 collapse" id="collapsibleForm" data-parent="#topNav">
        <form method="get" class="container p-0 text-white">
            <label class="font-weight-bold"><?php
                switch ($lang) {
                    case "en":
                        echo "Language";
                        break;
                    case "es":
                        echo "Idioma";
                        break;
                    case "pt":
                        echo "Língua";
                        break;
                }
                ?></label>
            <div class="btn-group btn-group-toggle row mx-0 mb-3 w-100 justify-content-center">
                <button class="col-4 px-4 btn btn-danger" type="submit" name="lang" id="option1" value="en">EN</button>
                <button class="col-4 px-4 btn btn-warning text-danger" type="submit" name="lang" id="option2" value="es">ES</button>
                <button class="col-4 px-4 btn btn-success text-warning" type="submit" name="lang" id="option3" value="pt">PT</button>
            </div>
        </form>
        <form class="text-white">
            <div class="form-group">
                <label for="formEmail2" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" id="formEmail2" placeholder="email@<?php echo $dropdown['email'][$lang]; ?>.com">
            </div>
            <div class="form-group">
                <label for="formPassword2" class="font-weight-bold"><?php echo $dropdown['senha'][$lang]; ?></label>
                <input type="password" class="form-control" id="formPassword2" placeholder="Password1234!">
            </div>
            <div class="form-check my-4">
                <input type="checkbox" class="form-check-input" id="formCheck2">
                <label class="form-check-label font-weight-bold" for="formCheck2"><?php echo $dropdown['lembrar'][$lang]; ?></label>
            </div>
            <button type="submit" class="btn btn-info w-100"><?php echo $dropdown['enviar'][$lang]; ?></button>
            </form>
            <div class="dropdown-divider pt-2"></div>
            <div class="d-flex flex-column">
                <a class="text-white font-weight-bold my-2" href="#"><?php echo $dropdown['criar'][$lang]; ?></a>
                <a class="text-white font-weight-bold my-2" href="#"><?php echo $dropdown['esqueci'][$lang]; ?></a>
            </div>
    </div>
</nav>
</div>