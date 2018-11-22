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
    <div class="container">
       <article>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h2 class="font-weight-bold">  <?php
                    $rei=array();
                    $rei['en']="The king of indie animation: Bill Plympton";
                    $rei['es']="El rey de la animación indie: Bill Plympton";
                    $rei['pt']="O rei da animação indie : Bill Plympton";
                    echo $rei[$lang];
                        ?></h2>
                <p class="font-italic"> <?php
                    $contrato=array();
                    $contrato['en']="Rejected contract with Disney to continue independent artist";
                    $contrato['es']="Rechazó contrato con Disney para continuar un artista independiente";
                    $contrato['pt']="Recusou contrato com disney para continuar um artista independente";
                    echo $contrato[$lang];
                        ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8"> 
                     <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kmrXJxSv56Y " allowfullscreen></iframe>
                </div>
            </div>
                <div class="col-12 col-md-12 col-lg-4">
                     <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet viverra urna, eu auctor lorem congue sed. Fusce dolor leo, venenatis sit amet augue scelerisque, laoreet suscipit lectus. Nam facilisis eu ipsum ac sollicitudin. Nullam non felis erat. In viverra, felis vitae malesuada semper, erat massa auctor felis, nec fringilla nunc lacus eget tortor. Praesent id orci quis velit placerat condimentum vitae aliquet arcu. Cras venenatis sit amet libero in auctor.</p>
                    <p class="text-justify"><?php
                    $siteb=array();
                    $siteb['en']="Bill Plympton's website:";
                    $siteb['es']="el sitio de Bill Plympton:";
                    $siteb['pt']="site do Bill Plympton:";
                    echo $siteb[$lang];
                        ?>  <a href="https://www.plymptoons.com/"> Plymptoons </a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h2 class="font-weight-bold"><?php
                    $programas=array();
                    $programas['en']="Programs for those who want to make indie animations";
                    $programas['es']="Programas para quien quiere hacer animaciones indie";
                    $programas['pt']="Programas pra quem quer fazer animações indie";
                    echo $programas[$lang];
                        ?></h2>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jXiDPCguIN0 " allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/abyzFaiES2c" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
           
            <div class="row">
                 <div class="col-12 col-md-12 col-lg-12"> 
                    <h2 class="font-weight-bold">  <?php
                    $gato=array();
                    $gato['en']="Brazilian indie entertainer animator: Gato galático.";
                    $gato['es']="Animador indie brasileño: Gato galático.";
                    $gato['pt']="Animador indie brasileiro: Gato galático.";
                    echo $gato[$lang];
                        ?></h2>
                     </div>
                <div class="col-12 col-md-12 col-lg-12"> 
                    
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mFnyrFwLyIQ" allowfullscreen></iframe>
                    </div>
            </div>
                <div class="col-12 col-md-12 col-lg-12">
                     <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet viverra urna, eu auctor lorem congue sed. Fusce dolor leo, venenatis sit amet augue scelerisque, laoreet suscipit lectus. Nam facilisis eu ipsum ac sollicitudin. Nullam non felis erat. In viverra, felis vitae malesuada semper, erat massa auctor felis, nec fringilla nunc lacus eget tortor. Praesent id orci quis velit placerat condimentum vitae aliquet arcu. Cras venenatis sit amet libero in auctor.</p>
                    <p class="text-justify"><?php
                    $siteg=array();
                    $siteg['en']="Gato galaticos channel:";
                    $siteg['es']="canal del gato galáctico:";
                    $siteg['pt']="Canal do gato galatico::";
                    echo $siteg[$lang];
                        ?> <a href="https://www.youtube.com/channel/UCbt4SegZBQLeXMTMvnrfZtw/"> gato galatico </a></p>
                </div>
            </div>
           
           
           
           
        </article>


    </div>
    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
