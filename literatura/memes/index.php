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
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php
                        switch ($lang) {
                            case "en":
                                echo "Bakhtin Theory (Why are Memes Indie):";
                                break;
                            case "es":
                                echo "Teoría Bakhtin (Por qué Memes son Indie?)";
                                break;
                            case "pt":
                                echo "Teoria Bakhtin (Por que Memes São Indie?):";
                                break;
                        }
                        ?></h1>
                </div>
            </div>
            
        <div class="row">
            
         <div class="col-12 col-md-4 col-lg-7 mt-5"> 
             <img alt="imagemmeme" src="../../img/content5.jpg" class="img-fluid"> 
         </div>     
            
             <div class="col-12 col-md-8 col-lg-5 mt-5">
             <?php
                        switch ($lang) {
                            case "en":
                                echo "Memes are usually Indie because they are created by most people most of the time. It ceases to be independent at the time it is posted on any page, blog or other medium of administrative scale. But a lot of the memes do not go through this stage of publishing in famous companies, it becomes known through the sharing of individuals in social networks, websites, and so on.
                                Even after they pass through organized media vehicles (pages and others) they will still be of independent origin, as the author / creator is a person without associations or links with such vehicles. And that makes about 95% of all memes in Brazil are Indies. 
                                The theory behind this text was the work of Mikhail Bakhtin, a great scholar of the forms of discourse ";
                                break;
                            case "es":
                                echo "Los memes normalmente son indie por qué son creados por la persona física la mayor parte del tiempo. Deja de ser independiente en el momento en que se publica en alguna página, blog u otro medio de comunicación que tenga escala administrativa. Pero mucho de los memes no pasan por esa etapa de publicación en compañías famosas, se vuelve conocido a través del compartir de individuos en las redes sociales, sitios web y etc.
                                Incluso después de que pasen por vehículos mediáticos organizados (páginas y otros), serán de origen independiente, pues el autor / creador es una persona sin asociaciones o vínculos con dichos vehículos. Y eso hace que alrededor del 95% de todos los memes en Brasil sean Indies. 
                                La teoría que embasa ese texto fue el trabajo de Mikhail Bakhtin, gran investigador de las formas del discurso.";
                                break;
                            case "pt":
                                echo "Os memes normalmente são Indie pelo fato de serem criados por pessoas independentes. Ele não deixa de de ter origem independente mesmo no momento em que é públicado em alguma página, blog ou outro meio de comunicação que tenha escala administrativa. Muito dos memes não passam por essa etapa de publicação em companhias famosas, ele se torna conhecido através do compartilhamento de indivíduos nas redes sociais, sites e etc.
                                Após eles passarem por veículos midiaticos organizados (páginas e outros) ainda assim serão de origem independente, pois o autor/criador é uma pessoa sem associações ou vínculos com tais veículos. E isso faz com que por volta de 95% de todos os memes no Brasil sejam Indies. A teoria que embasa esse texto foi o trabalho de Mikhail Bakhtin, grande pesquisador das formas do discurso.";
                                break;
                        }
                    ?>
             
             </div>    
             </div>
            <div class="row news-header">
                <h2 class="mx-0 h4 font-weight-bold my-4 text-body mt-5 mb-5">
                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Gallery Memes:";
                                break;
                            case "es":
                                echo "Galería Memes:";
                                break;
                            case "pt":
                                echo "Galeria Memes:";
                                break;
                        }
                    ?>
                </h2>
            </div>    
            <div class="row">
                                
            <div class="col-12 col-md-4 col-lg-4 mb-3"> 
                
                <img alt="imagemmeme" src="../../img/xadrezteste.png" class="img-fluid">
             
            </div>
                
            <div class="col-12 col-md-4 col-lg-4  mb-3">
  
                
                <img alt="imagemmeme" src="../../img/xadrezteste.png" class="img-fluid">
               
            </div>
                
            <div class="col-12 col-md-4 col-lg-4  mb-3">
                
                <img alt="imagemmeme" src="../../img/xadrezteste.png" class="img-fluid">    
 
            </div>
             
        </div>
            
            <div class="row">
                                
            <div class="col-12 col-md-4 col-lg-4 mt-3"> 
                
                <img alt="imagemmeme" src="../../img/xadrezteste.png" class="img-fluid">
             
            </div>
                
            <div class="col-12 col-md-4 col-lg-4 mt-3">
  
                
                <img alt="imagemmeme" src="../../img/xadrezteste.png" class="img-fluid">
               
            </div>
                
            <div class="col-12 col-md-4 col-lg-4 mt-3">
                
                <img alt="imagemmeme" src="../../img/xadrezteste.png" class="img-fluid">    
 
            </div>
             
        </div>
        

           </article>
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    
    </body>

</html>
