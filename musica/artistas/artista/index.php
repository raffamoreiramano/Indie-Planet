<!doctype html>
<?php
    $nome=$_GET['t'];
    include '../../../includes/matrix.php';
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
?>

    <body class="bg-dark-indie <?php echo $pastaAtual; ?>">
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
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>