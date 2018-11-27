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



    <article class="container">
        <div class="row news-header">
            <h1 class="mx-0 h4 font-weight-bold my-4 text-body">
                <?php
                        switch ($lang) {
                            case "en":
                                echo "Top 10 Comics";
                                break;
                            case "es":
                                echo "Top 10 Quadrinetos";
                                break;
                            case "pt":
                                echo "Top 10 Quadrinhos";
                                break;
                        }
                        ?>
            </h1>
        </div>


        <!-- TOP 1/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">


            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">1
                        </h5>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>A Ameaça do Barão Macaco</h2>
                
                <table class="table">
         
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                               
                        </th>
                        <td>Hector Lima, Milton Sobreiro e Felipe Sobreiro</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                               
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                           
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "When some drug trafficking operations begin to go wrong, with money fading and crime bosses dead, the structure is shaken and mistrust sets in. Along with this, rumors are running about a mysterious monkey-like figure at the scene of the crime and a journalist begins to investigate what is happening.";
                                break;
                            case "es":
                                echo "Cuando algunas operaciones del tráfico de drogas empiezan a ir mal, con dinero desapareciendo y los jefes del crimen apareciendo muertos, la estructura se vuelve sacudida y la desconfianza se instala. Junto con eso, corren rumores sobre una figura misteriosa con cara de mono en el lugar de los crímenes y una periodista empieza a investigar lo que está pasando.";
                                break;
                            case "pt":
                                echo "Quando algumas operações do tráfico de drogas começam a dar errado, com dinheiro sumindo e chefões do crime aparecendo mortos, a estrutura fica abalada e a desconfiança se instala. Junto com isso, correm boatos sobre uma figura misteriosa com cara de macaco no local dos crimes e uma jornalista começa a investigar o que está acontecendo.";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>

        <!-- TOP 2/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">2
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>9 Horas</h2>
                
                <table class="table">
                    
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                              
                        </th>
                        <td>Magenta King</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "During a trip through Asia, a couple finds a demon that forces them to go through different realities, dangers and challenges every 9 hours. In each of these worlds or stages, they are pursued by bizarre creatures and need to win small trophies before reaching the final boss.";
                                break;
                            case "es":
                                echo "Durante un viaje por Asia, una pareja encuentra a un demonio que los fuerza a pasar por diferentes realidades, peligros y desafíos cada 9 horas. En cada uno de estos mundos o fases, son perseguidos por criaturas extrañas y necesitan conquistar pequeños trofeos antes de llegar al jefe final.";
                                break;
                            case "pt":
                                echo "Durante uma viagem pelo Ásia, um casal encontra um demônio que os força a passar por diferentes realidades, perigos e desafios a cada 9 horas. Em cada um desses mundos ou fases, eles são perseguidos por criaturas bizarras e precisam conquistar pequenos troféus antes de chegar no boss final.";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 3/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



            -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">3
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>Astromini</h2>
                
                <table class="table">

                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>Vencys Lao e Welton Santos</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "An adventurer breaks a world where nothing is what it seems.";
                                break;
                            case "es":
                                echo "Una aventurera desbraba un mundo donde nada es lo que parece ser.";
                                break;
                            case "pt":
                                echo "Uma aventureira desbrava um Mundo onde nada é o que parece ser. ";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 4/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->



        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">4
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-8 mb-5">
               
                <h2>Mayara e Annabelle</h2>
                
                <table class="table">
                    
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>Pablo Casado e Talles Rodrigues</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "Two public officials from the Secretariat of Activities Outside the Common Place of Ceará (SECAFC CE) must prevent supernatural creatures from violating human laws.";
                                break;
                            case "es":
                                echo "Dos funcionarios públicos de la Secretaría de Actividades Fuera del Common de Ceará (SECAFC CE) necesitan impedir que criaturas sobrenaturales infrinjan las leyes humanas.";
                                break;
                            case "pt":
                                echo "Duas funcionárias públicas da Secretaria de Atividades Fora Do Comum do Ceará (SECAFC CE) precisam impedir que criaturas sobrenaturais infrinjam as leis humanas.";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>



        <!-- TOP 5/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">5
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>O Rei Amarelo</h2>
                
                <table class="table">

                    <tr>
                    <th scope="row">
                        
                                <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                            
                    </th>
                    <td>Pedro Pedrada, Tiago P. Zanetic, LuCAS Chewie, Mauricio R. B. Campos, Péricles Ianuch, Airton Marinho, Marcos Caldas, Erik Avilez, André Freitas, Tiago Rech, Victor Freundt, Rafael Levi, Samuel Bono e Raphael Salimena.</td>

                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                               
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                     
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "A collection of eight horror stories inspired by The Yellow King by Robert W. Chambers";
                                break;
                            case "es":
                                echo "Coletánea con ocho historias de horror inspiradas por El Rey Amarillo, de Robert W. Chambers";
                                break;
                            case "pt":
                                echo "Coletânea com oito histórias de horror inspiradas por O Rei Amarelo, de Robert W. Chambers";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>



        <!-- TOP 6/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->



        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">6
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
             <h2>Moschitto</h2>
                
                <table class="table">

                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>Claudia Senlle e George Schall</td>
                    </tr>
                    <tr>
                        <th scope="row">
                           
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "When a member of a traditional Italian mafia family (of mosquitoes) is brutally murdered, there is only one solution: REVENGE!";
                                break;
                            case "es":
                                echo "Cuando un miembro de una tradicional familia de la mafia italiana (de pernilongos) es asesinado brutalmente, sólo hay una solución: ¡VENGANZA!";
                                break;
                            case "pt":
                                echo "Quando um membro de uma tradicional família da máfia italiana (de pernilongos) é assassinado brutalmente, só há uma solução: VINGANÇA!";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 7/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">7
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>São Paulo dos Mortos</h2>
                
                <table class="table">

                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>Daniel Esteves, Al Stefano, Alex Rodrigues, Ibraim Roberson, Jozz, Laudo Ferreira, Omar Viñole, Samuel Bono, Wagner de Souza, Wanderson de Souza.</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "A collection of zombie stories set in the gray streets of São Paulo.";
                                break;
                            case "es":
                                echo "Una colección de historias de zombis ambientadas en las calles grises de São Paulo.";
                                break;
                            case "pt":
                                echo "Uma coletânea de histórias de zumbis ambientadas nas ruas cinzentas de São Paulo.";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 8/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">8
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>Carnaval de Meus Demônios</h2>
                
                <table class="table">

                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td>Guilherme Petreca</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "A story changes about demons from which it is impossible to escape.";
                                break;
                            case "es":
                                echo "Una historia cambia sobre demonios de los cuales es imposible huir.";
                                break;
                            case "pt":
                                echo "Uma história muda sobre demônios dos quais é impossível fugir.";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 9/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">9
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                
                <h2>Feliz Aniversário, Minha Amada</h2>
                
                <table class="table">
                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td>Brão Barbosa</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "The second HQ of Brão Barbosa tells the story of a rather bizarre love triangle. Anythingd that speaks of the synopsis in addition can ruin the experience. The ending is unbelievably surprising and any sentiment I divulge about it: if I found it strange, beautiful, if I cried or smiled, it can also ruin the experience.";
                                break;
                            case "es":
                                echo "La segunda HQ de Brão Barbosa cuenta la historia de un triángulo amoroso bastante bizarro. Cualquier cosa que se hable de la sinopsis además, puede estropear la experiencia. El final es increíblemente sorprendente y cualquier sentimiento que yo divulgue sobre eso: si me pareció extraño, bonito, si lloré o si sonríe, también puede arruinar la experiencia.";
                                break;
                            case "pt":
                                echo "A segunda HQ de Brão Barbosa conta a história de um triângulo amoroso bastante bizarro. Qualquer coisa que se fale da sinopse além disso, pode estragar a experiência. O final é inacreditavelmente surpreendente e qualquer sentimento que eu divulgue sobre isso: se achei estranho, bonito, se chorei ou se sorri, também pode estragar a experiência.";
                                break;
                        }
                        ?> </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 10/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->

            <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/xadrezretrato.png" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">10
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
               
                 <h2>OLHARES</h2>
                
                <table class="table">

                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                           case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            
                                
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                
                            
                        </th>
                        <td><?php
                        switch ($lang) {
                            case "en":
                                echo "The distant world where a mere glance is worth more than any note of money, ore, or food. The true look only the pure-hearted knight and the royal princess could have.";
                                break;
                            case "es":
                                echo "El mundo distante donde una simple mirada vale más que cualquier nota de dinero, mineral o comida. La mirada verdadera sólo el caballero de corazón puro y la princesa real podían tener.";
                                break;
                            case "pt":
                                echo "O mundo distante onde um simples olhar vale mais que qualquer nota de dinheiro, minério ou comida. O olhar verdadeiro só o cavaleiro de coração puro e a princesa real poderíam ter. ";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- FIM DOS QUADRINHOS



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->



    </article>

    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
