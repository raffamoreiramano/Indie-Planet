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
                                echo "Literature Indie Ascends with Books";
                                break;
                            case "es":
                                echo "
                               Literatura Indie Ascende con Libros";
                                break;
                            case "pt":
                                echo "Lieratura Indie Ascende com Livros";
                                break;
                        }
                        ?></h1>
                </div>
            </div>
        <div class="row text-justify">
            
             <div class="col-10 col-md-8 col-lg-3 mb-5" >
                 
                        <?php
                        switch ($lang) {
                            case "en";
                                echo "INDIE, a term that has been heard for decades, often turned to music (especially on account of some very influential bands). Indie is the abbreviation of the English term 'independent', which means 'independent' in Portuguese. This name refers to the cultural style that does not fit into companies, forms, predefined models of culture or society. AN INDEPENDENT CULTURAL STYLE.";
                                break;
                            case "es":
                                echo "INDIE, Un término que viene siendo escuchado por décadas, muchas veces volcados a la música (especialmente por cuenta de algunas bandas muy influyentes). Indie es la abreviatura del término Inglés 'independiente', que significa 'independiente' en portugués. Este nombre remite al estilo cultural que no encaja en empresas, formas, modelos predefinidos de cultura o sociedad. UN ESTILO CULTURAL INDEPENDIENTE.";
                                break;
                            case "pt":
                                echo "INDIE, Um termo que vem sendo escutado por décadas, muitas vezes voltados à música (especialmente por conta de algumas bandas muito influentes). Indie é a abreviação do termo em inglês 'independent' que significa “independente”, em português. Esse nome remete ao estilo cultural que não se encaixa em empresas, formas, modelos predefinidos de cultura ou sociedade. UM ESTILO CULTURAL INDEPENDENTE.";
                                break;
                        }
                        ?>
                    </div>
             
            
              <div class="col-12 col-md-8 col-lg-6 mb-5" >
                  <img alt="imagemquadrinho1" src="../../img/content3.jpg" class="img-fluid"> 
              </div>
            
             
              <div class="col-10 col-md-8 col-lg-3 mb-5" >
             <?php
                        switch ($lang) {
                            case "en";
                                echo "Although this style has grown primarily in music, it now fits into many areas of culture, making it even possible to create that portal. Being on the literary side of the site, we can see an absurd growth in indie written creations, where writers escape from the publishers and manage to reach a unfortunately minimalist public with good content. Worth checking out!";
                                break;
                                case "es":
                                echo "A pesar de que este estilo ha crecido primordialmente en la música, ahora encaja en muchas áreas de la cultura, haciendo posible incluso la creación de ese portal. En la parte literaria del sitio, podemos notar un crecimiento absurdo en las creaciones indies escritas, donde escritores escapan de las editoriales y logran llegar a un público desafortunadamente minimalista, con contenidos buenos. ¡Vale la pena!";
                                break;
                                case "pt":
                                echo "Apesar desse estilo ter crescido primordialmente na música, agora ele se encaixa em muitas áreas da cultura, tornando possível inclusive a criação desse portal. Estando na parte literária do site, podemos notar um crescimento absurdo nas criações indies em livros, onde escritores escapam das editoras e conseguem chegar a um público infelizmente minimalista, com conteúdos bons. Vale conferir!";
                                break;
                        }
                        ?>
                    </div>              
         </div>     
             
             
        <div class="row news-header">
            <h1 class="mx-0 h4 font-weight-bold my-4 text-body mt-5 mb-5">
                <?php
                switch ($lang) {
                    case "en":
                        echo "Indie Book Highlights:";
                        break;
                    case "es":
                        echo "Destacados del Libro Indie:";
                        break;
                    case "pt":
                        echo "Destaque de Livros Indie:";
                        break;
                }
                ?>
            </h1>
        </div>  
        
             <!-- Destaque 1 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->
             
         <section class="row justify-content-between">
            
            <div class="p-0 col-12 col-md-4 mt-5 mb-5 w-100">
                      
            <img alt="imgcapalivro1" src="../../img/xadrezretrato.png" class="img-fluid card-img">
            
            </div>
           
                
            
            <div class="col-12 col-md-8 col-lg-7 mt-5 mb-5" >
            
                      <h2>O Apanhador no Campo de Centeio</h2>
     
                <table class="table">
                 
                    <tr>
                      <th scope="row">
                        <p><?php
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
                        ?></p>
                    </th>
                      <td>J.D. Salinger</td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <p><?php
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
                        ?></p>
                  </th>
                      <td>1945-1946</td>
                    </tr>
                        <tr>
                      <th scope="row">
                        <p><?php
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
                        ?></p>
                    </th>
                      <td><?php
                        switch ($lang) {
                            case "en":
                                echo "
                                
                                The book chronicles a weekend in the life of Holden Caulfield, a seventeen-year-old from a wealthy New York family. Holden, a student at a reputed boarding school for boys, Pencey College, returns home early in the winter ...";
                                break;
                            case "es":
                                echo "
                                El libro narra un fin de semana en la vida de Holden Caulfield, un joven de diecisiete años venido de una familia acomodada de Nueva York. Holden, estudiante de un reputado internado para chicos, el Colegio Pencey, vuelve a casa más temprano en el invierno ...";
                                break;
                            case "pt":
                                echo "O livro narra um fim-de-semana na vida de Holden Caulfield, um jovem de dezessete anos vindo de uma família abastada de Nova Iorque. Holden, estudante de um reputado internato para rapazes, o Colégio Pencey, volta para casa mais cedo no inverno...   ";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>    
            </div>
            </section>     
        
              <!-- Destaque 2



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->
             
                  <section class="row justify-content-between">
            
            <div class="p-0 col-12 col-md-4 mt-5 mb-5 w-100">
                    
            
                
            <img alt="imgcapalivro2" src="../../img/xadrezretrato.png" class="img-fluid card-img">
            
             
                </div>
           
            
            <div class="col-12 col-md-8 col-lg-7 mt-5 mb-5" >
               
                      <h2>As Vantagens de Ser Invisível</h2>
                
                <table class="table">

                    <tr>
                      <th scope="row">
                        <p><?php
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
                        ?></p>
                    </th>
                      <td>Stephen Chbosky</td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <p><?php
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
                        ?></p>
                    </th>
                      <td>01 de Fevereiro de 1999</td>
                    </tr>
                        <tr>
                      <th scope="row">
                        <p><?php
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
                        ?></p>
                    </th>
                      <td><?php
                        switch ($lang) {
                            case "en":
                                echo "
                                
                                Narrated in the first person by a teenager who calls himself 'Charlie', the plot follows several scenes of the boy's life through letters written by him to an anonymous person. The novel covers topics such as introversion, sexuality, drug use and other common issues in adolescence ...";
                                break;
                            case "es":
                                echo "
                                Narrado en la primera persona por un adolescente que se autodenomina 'Charlie', la trama acompaña varias escenas de la vida del chico a través de cartas escritas por él a una persona anónima. La novela aborda temas como introversión, sexualidad, uso de drogas y otros asuntos comunes en la adolescencia ...";
                                break;
                            case "pt":
                                echo " Narrado na primeira pessoa por um adolescente que se autodenomina 'Charlie', a trama acompanha diversas cenas da vida do rapaz através de cartas escritas por ele a uma pessoa anônima. O romance aborda temas como introversão, sexualidade, uso de drogas e outros assuntos comuns na adolescência...    ";
                                break;
                        }
                        ?></td>
                    </tr>
                </table>    
            </div>
            </section>   
             
             <!-- Destaque 3



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->
             
                  <section class="row justify-content-between">
            
            <div class="p-0 col-12 col-md-4 mt-5 mb-5 w-100">
                            
            <img alt="imgcapalivro3" src="../../img/xadrezretrato.png" class="img-fluid card-img">
            
             
                </div>
           
                
            
            <div class="col-12 col-md-8 col-lg-7 mt-5 mb-5" >
                
                      <h2>Submarino</h2>
                
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
                      <td>Joe Dunthorne</td>
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
                      <td>--/--/----</td>
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
                                echo "Oliver Tate lives in a small coastal town in Wales. The Teen Precocious, about to turn 15, considers himself a social scientist, a spy in the mysterious world of adults. Your goals? Discover what is behind the unstable marriage of your parents, uncover who is your mysterious and also attractive ...";
                                break;
                            case "es":
                                echo "Oliver Tate vive en una pequeña ciudad costera en el País de Gales. El precoz adolescente, a punto de cumplir 15 años, se considera un científico social, un espía en el misterioso mundo de los adultos. ¿Tus objetivos? Descubrir lo que hay detrás del inestable casamiento de sus padres, desvelar quién es su misteriosa y también atractiva ...";
                                break;
                            case "pt":
                                echo "Oliver Tate vive numa pequena cidade costeira no País de Gales. O Precoce adolescente, prestes a completar 15 anos, se considera um cientista social, um espião no misterioso mundo dos adultos. SEus objetivos? Descobrir o que há por trás do instável casamento de seus pais, desvendar quem é sua misteriosa e também atraente... ";
                                break;
                        }
                        ?> </td>
                    </tr>
                </table>   
            </div>
            </section>   
   
        </article>
     
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
             
    </body>
</html>
