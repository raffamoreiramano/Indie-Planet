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
                                echo "Need for Indie Arrangement of Books";
                                break;
                            case "es":
                                echo "
                                Necesidad del Surgimiento Indie de Libros";
                                break;
                            case "pt":
                                echo "Necessidade do Surgimento Indie de Livros";
                                break;
                        }
                        ?></h1>
                </div>
            </div>
        <section class="row">
            
             <div class="col-10 col-md-8 col-lg-3 mb-5" >
                 <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus enim et eleifend tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tempus dui nisi, ac pharetra tortor vulputate a. Morbi sed mollis erat.
             </div>
            
              <div class="col-12 col-md-8 col-lg-6 mb-5" >
                  <img alt="imagemquadrino1" src="../../img/carouselteste03.png" class="img-fluid"> 
              </div>
            
              <div class="col-10 col-md-8 col-lg-3 mb-5" >
             <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus enim et eleifend tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tempus dui nisi, ac pharetra tortor vulputate a. Morbi sed mollis erat. 
             </div>          
         </section>     
             
             
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
             
         <section class="row">
            
            <div class="p-0 col-12 col-md-4 col-lg-3 mt-5 mb-5" >
                      
            <img alt="imagemquadrino1" src="../../img/Capa%20olh.jpeg" class="img-fluid card-img">
            
            </div>
           
                
            
            <div class="col-12 col-md-8 col-lg-7 mt-5 mb-5" >
                <table class="table">
                    <tr>
                      <h1>OLHARES</h1>
                    </tr>
                    <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>01/12/2012</td>
                    </tr>
                        <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia.  </td>
                    </tr>
                </table>    
            </div>
            </section>     
        
              <!-- Destaque 2



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->
             
                  <section class="row">
            
            <div class="p-0 col-12 col-md-4 col-lg-3 mt-5 mb-5" >
                    
            
                
            <img alt="imagemquadrino1" src="../../img/capa%20rei..jpeg" class="img-fluid card-img">
            
             
                </div>
           
                
            
            <div class="col-12 col-md-8 col-lg-7 mt-5 mb-5" >
                <table class="table">
                    <tr>
                      <h1>OLHARES</h1>
                    </tr>
                    <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>01/12/2012</td>
                    </tr>
                        <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia.  </td>
                    </tr>
                </table>    
            </div>
            </section>   
             
             <!-- Destaque 3



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->
             
                  <section class="row">
            
            <div class="p-0 col-12 col-md-4 col-lg-3 mt-5 mb-5" >
                            
            <img alt="imagemquadrino1" src="../../img/capa%20pow.jpeg" class="img-fluid card-img">
            
             
                </div>
           
                
            
            <div class="col-12 col-md-8 col-lg-7 mt-5 mb-5" >
                <table class="table">
                    <tr>
                      <h1>OLHARES</h1>
                    </tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>Gui Oliveira</td>
                    <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>01/12/2012</td>
                    </tr>
                        <tr>
                      <th scope="row"><div class="row">
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
                    </div></th>
                      <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia.  </td>
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
