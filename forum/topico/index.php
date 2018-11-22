<!doctype html>
<?php
    include '../../includes/matrix.php';
    $pastaAtualFake="forum";
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
    $nome=isset($_GET['t'])?$_GET['t']:"Lorem ipsum dolor sit amet";
    $user=isset($_GET['u'])?$_GET['u']:"mussum";
    $resps=isset($_GET['r'])?$_GET['r']:0;
    $dt=isset($_GET['dt'])?$_GET['dt']:"12X11X2018XYX10Z28pm";
    $datav=explode('X', $dt);
    $datad=$datav[0];
    $datam=$datav[1];
    $datav2=explode('Z', $datav[4]);
    $datah=$datav2[0];
    $datamin=str_replace('pm','', $datav2[1]);
    $datamin=str_replace('am','', $datamin);
    $data=date('d m Y - g:ia',mktime($datah, $datamin, 0, $datam, $datad, 2018));
    $topictext[0]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et sapien sed urna tincidunt vulputate vitae convallis ex. Integer sollicitudin sit amet id vestibulum tortor interdum ut in imperdiet neque, et molestie odio tortor non ligula feugiat vulputate vitae id nulla. In pulvinar lorem nisl sagittis tristique consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lobortis eros. Etiam vehicula odio quis fringilla malesuada.";
    $topictext[1]="Integer blandit, arcu ac feugiat imperdiet, odio enim dignissim nulla, at tincidunt lacus metus eget diam. Praesent tempus dapibus elit, id vestibulum tortor interdum ut. Nunc sit amet tortor non ligula feugiat vulputate vitae id vestibulum tortor interdum ut in imperdiet neque, et molestie odio it facilisis neque id ex scelerisque, luctus semper metus pellentesque. da nulla. In pulvinar lorem non eros sodales, non scelerisque metus porttitor.";
    $topictext[2]="Proin in orci posuere in vehicula erat tincidunt ut. Pellentesque pharetra leo velit sit amet suscipit imperdiet. Etiam id mauris interdum, convallis nisl vehicula, tempor nibh sit amet, posuere massa. Fusce rutrum volutpat odio scelerisque rhoncus. Curabitur in sem fermentum, lacinia eros ac, rutrum arcu. Nunc viverra ante id congue vehicula. In dictum ipsum eu venenatis volutpat. Quisque ut nunc et metus varius viverra.";
    $topictext[3]="Nullam convallis viverra convallis. Integer volutpat dignissim eros sit amet posuere. Ut felis enim, dignissim non nibh in, venenatis blandit neque. Ut facilisis neque id ex scelerisque, luctus semper metus pellentesque.";
    $topictext[4]="Sed sed eros nulla. Cras arcu ac feugiat imperdiet, odio enim dignissim nulla, at tincidunt lacus metus eget diam. Praesent tempus dapibus elit, id vestibulum tortor interdum ut in imperdiet neque, et molestie odio. Donec ac convallis risus, vel pulvinar augue. Etiam vitae vehicula lectus. Praesent auctor condimentum erat, in vehicula erat tincidunt ut. Pellentesque pharetra leo imperdiet maximus pellentesque. Cras eu laoreet mi, sed bibendum ex.";
    $topictext[5]="Nunc posuere velit sit amet suscipit imperdiet. Etiam id mauris interdum, convallis nisl et, ultricies enim. In mattis sed mi eget ornare. Cras dignissim ta arcu ac feugiat imperdiet, odio enim dignissim nulla, at tincidunt lacus metus eget diam. Praesent tempus dapibus elit, id vestibulum tortor interdum ut in imperdiet neque, et molestie odio facilisis neque id ex scelerisque, luctus semper metus pellentesque ipsum a neque auctor, nec commodo sapien dignissim.";
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
        <article class="container my-4 topicos">
            <div class="row">
                <figure class='pl-md-0 col-4 col-md-3 m-0'>
                    <img class='img-fluid border shadow' alt='<?php echo $user; ?>' src='../../../img/perfil<?php echo rand(1,6); ?>.jpg'>
                    <figcaption class='text-secondary font-weight-bold p-2'>@<?php echo $user; ?></figcaption>
                </figure>
                <div class='col-12 col-md-9 p-0'>
                    <div class="row topic-post m-0 p-3 bg-dark shadow text-light">
                        <div class="col-12 p-0">
                            <h1 class='h3 m-0 font-weight-bold text-white'><?php echo $nome; ?></h1>
                            <p class='mx-0'><?php echo $data; ?></p>
                            <p class="m-0"><?php echo $topictext[rand(0,5)]; ?></p>
                        </div>
                    </div>
                    <div class="row mt-3 text-light">
                        <div class="col-2 pr-0">
                            <a href="#" class="p-3 text-white font-weight-bold d-block text-center bg-dark shadow"><i class="fas fa-thumbs-up"></i></a>
                        </div>
                        <div class="col-2 pr-0">
                            <p href="#" class="p-3 text-white m-0 font-weight-bold d-block text-center bg-dark shadow">9</p>
                        </div>
                        <div class="col-2 pr-0">
                            <a href="#" class="p-3 text-white font-weight-bold d-block text-center bg-dark shadow"><i class="fas fa-thumbs-down"></i></a>
                        </div>
                        <div class="col-2 pr-0">
                            <p href="#" class="p-3 text-white m-0 font-weight-bold d-block text-center bg-dark shadow">0</p>
                        </div>
                        <div class="col-4">
                            <a href="#" class="p-3 h5 text-white font-weight-bold d-block text-center bg-dark shadow">Responder</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>