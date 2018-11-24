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
            
         <div class="col-12 col-md-4 col-lg-5 mt-5"> 
             <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid"> 
         </div>     
            
             <div class="col-12 col-md-8 col-lg-7 mt-5">
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus enim et eleifend tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tempus dui nisi, ac pharetra tortor vulputate a. Morbi sed mollis erat.
             </p>
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
                
                <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid">
             
            </div>
                
            <div class="col-12 col-md-4 col-lg-4  mb-3">
  
                
                <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid">
               
            </div>
                
            <div class="col-12 col-md-4 col-lg-4  mb-3">
                
                <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid">    
 
            </div>
             
        </div>
            
            <div class="row">
                                
            <div class="col-12 col-md-4 col-lg-4 mt-3"> 
                
                <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid">
             
            </div>
                
            <div class="col-12 col-md-4 col-lg-4 mt-3">
  
                
                <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid">
               
            </div>
                
            <div class="col-12 col-md-4 col-lg-4 mt-3">
                
                <img alt="imagemmeme" src="../../img/carouselteste03.png" class="img-fluid">    
 
            </div>
             
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
           </article>
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    
    </body>

</html>
