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
                    <h2> O rei da animação indie : Bill Plympton </h2>
                <p class="font-italic"> Recusou contrato com disney para continuar um artista independente</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8"> 
                     <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kmrXJxSv56Y " allowfullscreen></iframe>
                </div>
            </div>
                <div class="col-12 col-md-4 col-lg-4">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet viverra urna, eu auctor lorem congue sed. Fusce dolor leo, venenatis sit amet augue scelerisque, laoreet suscipit lectus. Nam facilisis eu ipsum ac sollicitudin. Nullam non felis erat. In viverra, felis vitae malesuada semper, erat massa auctor felis, nec fringilla nunc lacus eget tortor. Praesent id orci quis velit placerat condimentum vitae aliquet arcu. Cras venenatis sit amet libero in auctor.</p>
                    <p> site do Bill Plympton: <a href="https://www.plymptoons.com/"> Plymptoons </a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h2> Programas pra quem quer fazer animações indie</h2>
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
        </article>


    </div>
    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
