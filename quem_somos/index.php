<!doctype html>
<?php
    include '../includes/matrix.php'; // Inclusão do arquivo necessário para o funcionamento do resto dos includes
    $nome="Quem somos";
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php'; // Uso de $corredor no início dos links para voltar para a o diretorio principal do portal antes de prosseguir para o destino do arquivo
?>

    <body class="<?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        <article class="container perfis">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php
                        switch ($lang) {
                            case "en":
                                echo "Our team";
                                break;
                            case "es":
                                echo "Nuestro equipo";
                                break;
                            case "pt":
                                echo "Nossa equipe";
                                break;
                        }
                        ?></h1>
                </div>
            </div>
            <?php
                $perfil = array();
                $perfil['en'] = array (
                    0 => array (
                        "n"=>"Adrian Toninato",
                        "f"=>"Developer",
                        "r"=>"2650831813031",
                        "a"=>"Animations",
                        "l"=>"animacoes/index.php",
                        "t"=>"Adrian, nineteen years old. Studying Internet Systems at Fatec São Roque. Has a way with logical reasoning and is always trying his best to help."
                    ),
                    1 => array (
                        "n"=>"Amauri Carvalho",
                        "f"=>"Developer",
                        "r"=>"2650831813032",
                        "a"=>"Cinema",
                        "l"=>"cinema/index.php",
                        "t"=>"Amauri Carlos, eighteen years old, interested in japanese culture. Studies Internet Systems at Fatec São Roque, aiming to live abroad."
                    ),
                    2 => array (
                        "n"=>"Andrei Moreira",
                        "f"=>"Developer",
                        "r"=>"2650831723013",
                        "a"=>"Series",
                        "l"=>"series/index.php",
                        "t"=>"Andrei Moreira, nineteen years old, student of Internet Systems at FATEC São Roque. Self-taught classical guitar and musical theory."
                    ),
                    3 => array (
                        "n"=>"Diego Bergame",
                        "f"=>"Developer",
                        "r"=>"2650831813030",
                        "a"=>"Fashion",
                        "l"=>"moda/index.php",
                        "t"=>"Diego Bergame, eighteen years old. A fan of fashion wearing and sports. Studies Internet Systems at Fatec São Roque aiming to be self-sustainable."
                    ),
                    4 => array (
                        "n"=>"Guilherme Oliveira",
                        "f"=>"Developer",
                        "r"=>"2650831813010",
                        "a"=>"Literature",
                        "l"=>"literatura/index.php",
                        "t"=>"Hi, I'm Guilherme, eighteen years old, and a student at Fatec São Roque. Glad to be on the team and hopeful to do a great job on this project."
                    ),
                    5 => array (
                        "n"=>"Rafael Leme",
                        "f"=>"Leader, programmer and developer",
                        "r"=>"2650831813023",
                        "a"=>"Music",
                        "l"=>"musica/index.php",
                        "t"=>"Rafael Leme, twenty two years old, studies Internet Systems at Fatec São Roque. Happy with his life and giving his maximum effort to keep it this way."
                    ),
                    6 => array (
                        "n"=>"Vinícius Gatinoni",
                        "f"=>"Developer",
                        "r"=>"2650831813027",
                        "a"=>"Games",
                        "l"=>"jogos/index.php",
                        "t"=>"Vinicius Gatinoni, eighteen years old. Student of Internet Systems at Fatec São Roque. Interested in electronic games and books in general."
                    )
                    
                
                );
                
                $perfil['es'] = array (
                    0 => array (
                        "n"=>"Adrian Toninato",
                        "f"=>"Desarrollador",
                        "r"=>"2650831813031",
                        "a"=>"Animaciones",
                        "l"=>"animacoes/index.php",
                        "t"=>"Adrian, de diecinueve años. Estudiando Sistemas para Internet en Fatec São Roque. Tiene una especial habilidad con el razonamiento lógico y siempre está haciendo todo lo posible para ayudar."
                    ),
                    1 => array (
                        "n"=>"Amauri Carvalho",
                        "f"=>"Desarrollador",
                        "r"=>"2650831813032",
                        "a"=>"Cinema",
                        "l"=>"cinema/index.php",
                        "t"=>"Amauri Carlos, de dieciocho años, interesado en la cultura japonesa. Estudia Sistemas para Internet en Fatec São Roque, con el objetivo de vivir en el extranjero."
                    ),
                    2 => array (
                        "n"=>"Andrei Moreira",
                        "f"=>"Desarrollador",
                        "r"=>"2650831723013",
                        "a"=>"Series",
                        "l"=>"series/index.php",
                        "t"=>"Andrei Moreira, de diecinueve años, estudiante de Sistemas para Internet en FATEC São Roque. Guitarra clásica autodidacta y teoría musical."
                    ),
                    3 => array (
                        "n"=>"Diego Bergame",
                        "f"=>"Desarrollador",
                        "r"=>"2650831813030",
                        "a"=>"Moda",
                        "l"=>"moda/index.php",
                        "t"=>"Diego Bergame, de dieciocho años. Un fanático de la moda y los deportes. Estudia Sistemas para Internet en la Fatec São Roque con el objetivo de ser autosostenible."
                    ),
                    4 => array (
                        "n"=>"Guilherme Oliveira",
                        "f"=>"Desarrollador",
                        "r"=>"2650831813010",
                        "a"=>"Literatura",
                        "l"=>"literatura/index.php",
                        "t"=>"Hola, soy Guilherme, tengo dieciocho años y soy estudiante de la Fatec São Roque. Me alegra estar en el equipo y espero hacer un gran trabajo en este proyecto."
                    ),
                    5 => array (
                        "n"=>"Rafael Leme",
                        "f"=>"Líder, programador y desarrollador",
                        "r"=>"2650831813023",
                        "a"=>"Música",
                        "l"=>"musica/index.php",
                        "t"=>"Rafael Leme, veintidós años, estudia Sistemas para Internet en Fatec São Roque. Feliz con su vida y dando su máximo esfuerzo para que siga así."
                    ),
                    6 => array (
                        "n"=>"Vinícius Gatinoni",
                        "f"=>"Desarrollador",
                        "r"=>"2650831813027",
                        "a"=>"Juegos",
                        "l"=>"jogos/index.php",
                        "t"=>"Vinicius Gatinoni, de dieciocho años. Estudiante de Sistemas para Internet en Fatec São Roque. Interesado en juegos electrónicos y libros en general."
                    )
                    
                
                );
                
                $perfil['pt'] = array (
                    0 => array (
                        "n"=>"Adrian Toninato",
                        "f"=>"Desenvolvedor",
                        "r"=>"2650831813031",
                        "a"=>"Animações",
                        "l"=>"animacoes/index.php",
                        "t"=>"Adrian, dezenove anos de idade. Cursando Sistemas para Internet na Fatec São Roque. Leva jeito com raciocínio lógico e está sempre dando seu melhor para ajudar."
                    ),
                    1 => array (
                        "n"=>"Amauri Carvalho",
                        "f"=>"Desenvolvedor",
                        "r"=>"2650831813032",
                        "a"=>"Cinema",
                        "l"=>"cinema/index.php",
                        "t"=>"Amauri Carlos, dezoito anos, interessado em cultura japonesa. Estuda Sistemas para Internet na Fatec São Roque, com o objetivo de morar no exterior."
                    ),
                    2 => array (
                        "n"=>"Andrei Moreira",
                        "f"=>"Desenvolvedor",
                        "r"=>"2650831723013",
                        "a"=>"Séries",
                        "l"=>"series/index.php",
                        "t"=>"Andrei Moreira, 19 anos, aluno de Sistemas para Internet na FATEC São Roque. Autodidata de violão clássico e teoria musical."
                    ),
                    3 => array (
                        "n"=>"Diego Bergame",
                        "f"=>"Desenvolvedor",
                        "r"=>"2650831813030",
                        "a"=>"Moda",
                        "l"=>"moda/index.php",
                        "t"=>"Diego Bergame, dezoito anos de idade. Fã de moda e esportes. Estuda Sistemas para Internet na Fatec São Roque com o objetivo de ser auto-sustentável."
                    ),
                    4 => array (
                        "n"=>"Guilherme Oliveira",
                        "f"=>"Desenvolvedor",
                        "r"=>"2650831813010",
                        "a"=>"Literatura",
                        "l"=>"literatura/index.php",
                        "t"=>"Oi, eu sou o Guilherme, tenho dezoito anos, e sou aluno da Fatec São Roque. Fico feliz em estar na equipe e espero fazer um ótimo trabalho no projeto."
                    ),
                    5 => array (
                        "n"=>"Rafael Leme",
                        "f"=>"Líder, programador e desenvolvedor",
                        "r"=>"2650831813023",
                        "a"=>"Música",
                        "l"=>"musica/index.php",
                        "t"=>"Rafael Leme, vinte e dois anos, estuda Sistemas para Internet na Fatec São Roque. Feliz com sua vida e dando o seu esforço máximo para continuar assim."
                    ),
                    6 => array (
                        "n"=>"Vinícius Gatinoni",
                        "f"=>"Desenvolvedor",
                        "r"=>"2650831813027",
                        "a"=>"Jogos",
                        "l"=>"jogos/index.php",
                        "t"=>"Vinícius Gattinoni, dezoito anos. Estudante de Sistemas para Internet na Fatec São Roque. Interessado em jogos eletrônicos e livros em geral."
                    )
                    
                
                );
                
                for ($i=0;$i<7;$i++){
                    if ($i%2==0) {
                        echo "<section id='perfil$i' class='row bg-gradient-0 pb-3 justify-content-around'>\n";
                        echo "<div class='col-8 mt-3 mb-4 my-md-auto px-2 col-md-3 col-lg-2'>\n";
                        echo "<img alt='".$perfil[$lang][$i]['n']."' class='img-fluid rounded-circle' src='".$corredor."img/perfil$i.jpg'>\n";
                        echo "</div>\n<div class='col-12 order-12 col-md-6 mt-2 mt-md-0 col-lg-5 perfil pt-2 pt-md-0 px-2 text-center text-md-right'>";
                        echo "<h2 class='h3 font-weight-bold'>".$perfil[$lang][$i]['n']."</h2>\n<div class='my-0 my-md-1 row'>\n";
                        echo "<h4 class='col-12 h6 font-weight-bold'>".$perfil[$lang][$i]['f']."</h4>\n";
                        echo "<h4 class='col-12 h6 font-weight-bold'>".$perfil[$lang][$i]['r']."</h4>\n</div>\n";
                        echo "<p class='my-0 my-md-1'>".$perfil[$lang][$i]['t']."</p>\n";
                        echo "<a href='".$corredor.$perfil[$lang][$i]['l']."' class='font-weight-bold h6 perfil-link'>";
                        echo $perfil[$lang][$i]['a']."</a>\n</div>\n</section>\n";
                    }
                    else {
                        echo "<section class='row bg-gradient-1 pb-3 justify-content-around'>\n";
                        echo "<div class='col-12 order-12 order-md-1 mt-2 mt-md-0 col-md-6 col-lg-5 perfil pt-2 pt-md-0 px-2 text-center text-md-left'>\n";
                        echo "<h2 class='h3 font-weight-bold'>".$perfil[$lang][$i]['n']."</h2>\n<div class='my-0 my-md-1 row'>\n";
                        echo "<h4 class='col-12 h6 font-weight-bold'>".$perfil[$lang][$i]['f']."</h4>\n";
                        echo "<h4 class='col-12 h6 font-weight-bold'>".$perfil[$lang][$i]['r']."</h4>\n</div>\n";
                        echo "<p class='my-0 my-md-1'>".$perfil[$lang][$i]['t']."</p>\n";
                        echo "<a href='".$corredor.$perfil[$lang][$i]['l']."' class='font-weight-bold h6 perfil-link'>".$perfil[$lang][$i]['a']."</a>\n</div>\n";
                        echo "<div class='col-8 order-1 order-md-12 mt-3 mb-4 my-md-auto px-2 col-md-3 col-lg-2'>\n";
                        echo "<img alt='".$perfil[$lang][$i]['n']."' class='img-fluid rounded-circle' src='";
                        echo $corredor."img/perfil$i.jpg'>\n</div>\n</section>\n";
                    }
                }
            ?>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>