<!doctype html>
<?php
    include '../../includes/matrix.php';
    $pastaAtualFake="forum";
    $page=isset($_GET['page'])?$_GET['page']:1;
    if ($page>10) {
        $page=10;  
    }
    if ($page<=0) {
        $page=1;  
    }
?>
<html lang="pt-BR">
<?php
    $nome=isset($_GET['t'])?$_GET['t']:"Lorem ipsum dolor sit amet";
    include $corredor.'includes/head.php';
    $user=isset($_GET['u'])?$_GET['u']:"mussum";
    $resps=isset($_GET['r'])?$_GET['r']:0;
    $dt=isset($_GET['dt'])?$_GET['dt']:"12X11X2017XYX10Z28pm";
    $datav=explode('X', $dt);
    $datad=$datav[0];
    $datam=$datav[1];
    $datav2=explode('Z', $datav[4]);
    $datah=$datav2[0];
    $datamin=str_replace('pm','', $datav2[1]);
    $datamin=str_replace('am','', $datamin);
    $data=date('d m Y - g:ia',mktime($datah, $datamin, 0, $datam, $datad, 2017));
    $topictext[0]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et sapien sed urna tincidunt vulputate vitae convallis ex. Integer sollicitudin sit amet id vestibulum tortor interdum ut in imperdiet neque, et molestie odio tortor non ligula feugiat vulputate vitae id nulla. In pulvinar lorem nisl sagittis tristique consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec lobortis eros. Etiam vehicula odio quis fringilla malesuada.";
    $topictext[1]="Integer blandit, arcu ac feugiat imperdiet, odio enim dignissim nulla, at tincidunt lacus metus eget diam. Praesent tempus dapibus elit, id vestibulum tortor interdum ut. Nunc sit amet tortor non ligula feugiat vulputate vitae id vestibulum tortor interdum ut in imperdiet neque, et molestie odio it facilisis neque id ex scelerisque, luctus semper metus pellentesque. da nulla. In pulvinar lorem non eros sodales, non scelerisque metus porttitor.";
    $topictext[2]="Proin in orci posuere in vehicula erat tincidunt ut. Pellentesque pharetra leo velit sit amet suscipit imperdiet. Etiam id mauris interdum, convallis nisl vehicula, tempor nibh sit amet, posuere massa. Fusce rutrum volutpat odio scelerisque rhoncus. Curabitur in sem fermentum, lacinia eros ac, rutrum arcu. Nunc viverra ante id congue vehicula. In dictum ipsum eu venenatis volutpat. Quisque ut nunc et metus varius viverra.";
    $topictext[3]="Nullam convallis viverra convallis. Integer volutpat dignissim eros sit amet posuere. Ut felis enim, dignissim non nibh in, venenatis blandit neque. Ut facilisis neque id ex scelerisque, luctus semper metus pellentesque.";
    $topictext[4]="Sed sed eros nulla. Cras arcu ac feugiat imperdiet, odio enim dignissim nulla, at tincidunt lacus metus eget diam. Praesent tempus dapibus elit, id vestibulum tortor interdum ut in imperdiet neque, et molestie odio. Donec ac convallis risus, vel pulvinar augue. Etiam vitae vehicula lectus. Praesent auctor condimentum erat, in vehicula erat tincidunt ut. Pellentesque pharetra leo imperdiet maximus pellentesque. Cras eu laoreet mi, sed bibendum ex.";
    $topictext[5]="Nunc posuere velit sit amet suscipit imperdiet. Etiam id mauris interdum, convallis nisl et, ultricies enim. In mattis sed mi eget ornare. Cras dignissim ta arcu ac feugiat imperdiet, odio enim dignissim nulla, at tincidunt lacus metus eget diam. Praesent tempus dapibus elit, id vestibulum tortor interdum ut in imperdiet neque, et molestie odio facilisis neque id ex scelerisque, luctus semper metus pellentesque ipsum a neque auctor, nec commodo sapien dignissim.";
    $responder=array(
        "en" => "Reply",
        "es" => "Responder",
        "pt" => "Responder"
    );
    $resposta=array(
        "en" => "Enter your reply...",
        "es" => "Escriba su respuesta...",
        "pt" => "Digite sua resposta..."
    );
    $enviar=array(
        "en" => "Submit",
        "es" => "Enviar",
        "pt" => "Enviar"
    );
    $topicoh=array(
        "en" => "Topic",
        "es" => "Tema",
        "pt" => "Tópico",
    );
    $respostash=array(
        "en" => "Replies",
        "es" => "Respuestas",
        "pt" => "Respostas",
    );
    $logged=array(
        "en" => "You must be logged for this",
        "es" => "Debes estar registrado para esto",
        "pt" => "Você deve estar logado para isso"
    );
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
        <article class="container mb-4 topicos" id="topicos">
            <div class="row mb-4 bg-dark shadow">
                <h3 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4"><?php echo $topicoh[$lang]; ?></h3>
            </div>
            <div class='row'>
                <figure class='pl-md-0 col-4 col-md-3 m-0'>
                    <img class='img-fluid border shadow' alt='<?php echo $user; ?>' src='../../../img/perfil<?php echo rand(1,6); ?>.jpg'>
                    <figcaption class='text-secondary font-weight-bold p-2'>@<?php echo $user; ?></figcaption>
                </figure>
                <div class='col-12 col-md-9 p-0'>
                    <div class='row topic-post m-0 p-3 bg-dark shadow text-light'>
                        <div class='col-12 p-0 reply-txt'>
                            <h1 class='h3 m-0 font-weight-bold text-white'><?php echo $nome; ?></h1>
                            <p class='mx-0'><?php echo $data; ?></p>
                            <p class='m-0'><?php echo $topictext[rand(0,5)]; ?></p>
                        </div>
                    </div>
                    <div class='row mt-3 text-light'>
                        <div class='col-3 col-md-2 pr-md-0'>
                            <a href="#" class='p-3 text-white font-weight-bold d-block text-center bg-dark shadow'><i class='fas fa-thumbs-up'></i></a>
                        </div>
                        <div class='col-3 col-md-2 pr-md-0'>
                            <p class='p-3 text-white m-0 font-weight-bold d-block text-center bg-dark shadow'><?php echo rand(4,19); ?></p>
                        </div>
                        <div class='col-3 col-md-2 pr-md-0'>
                            <a href='#' class='p-3 text-white font-weight-bold d-block text-center bg-dark shadow'><i class='fas fa-thumbs-down'></i></a>
                        </div>
                        <div class='col-3 col-md-2 pr-md-0'>
                            <p class='p-3 text-white m-0 font-weight-bold d-block text-center bg-dark shadow'><?php echo rand(0,3); ?></p>
                        </div>
                        <div class='col-12 mt-3 mt-md-0 col-md-4'>
                            <a class='p-3 h5 text-white font-weight-bold d-block text-center bg-dark shadow' data-toggle='collapse' data-target='#collapseReply' href='#collapseReply' aria-expanded='false' aria-controls='collapseReply'><?php echo $responder[$lang]; ?></a>
                        </div>
                    </div>
                    <div class='row mt-3 collapse' id='collapseReply' data-parent='#topicos'>
                        <div class='col-12'>
                            <form class='form'>
                                <fieldset disabled>
                                    <div class='form-group row mx-3 mx-md-0'>
                                        <textarea class='form-control col-12 rounded-0 shadow' name='message' placeholder="<?php echo $resposta[$lang]; ?>" rows='4'></textarea>
                                    </div>
                                    <div class='form-group row mx-3 mx-md-0'>
                                        <button type='submit' class='btn btn-info btn-lg rounded-0 font-weight-bold shadow'><?php echo $enviar[$lang]; ?></button>
                                        <p class='small my-auto ml-3 text-secondary'><?php echo $logged[$lang]; ?></p>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($resps!=0) {
                echo "<div class='row bg-dark mt-5 mb-4 shadow'>";
                echo "<h3 class='py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4'>";
                echo $respostash[$lang]."</h3>\n</div>\n";
            }
            ?>
            <?php
            $p1=0;
            $p2=$resps*2;
            for ($i=$p1;$i<$p2;$i+=2) {
                $usuario=$artista[rand(1,259)];
                $usuario=strtolower(substr($usuario,0,strpos($usuario,' ')));
                $datad=$datad+rand(0,2);
                $datah=$datah+1;
                $datamin=rand(00,59);
                $data=date('d m Y - g:ia',mktime($datah, $datamin, 0, $datam, $datad, 2017));
                echo "<section class='row mb-5 mt-3'>\n<figure class='pl-md-0 col-4 col-md-3 m-0'>\n<img class='img-fluid border shadow' alt='";
                echo $usuario."' src='".$corredor."img/perfil".rand(1,6).".jpg'>\n<figcaption class='text-secondary font-weight-bold p-2'>@";
                echo $usuario."</figcaption>\n</figure>\n<div class='col-12 col-md-9 p-0'>\n";
                echo "<div class='row topic-post m-0 p-3 bg-dark shadow text-light'>\n<div class='col-12 p-0 reply-txt'>";
                echo "<h2 class='h6 mb-3 text-white'>".$data."</h2>\n<p class='m-0'>".$topictext[rand(0,5)]."</p>\n";
                echo "</div>\n</div>\n<div class='row mt-3 text-light'>\n<div class='col-3 col-md-2 pr-md-0'>\n";
                echo "<a href='#' class='p-3 text-white font-weight-bold d-block text-center bg-dark shadow'>\n<i class='fas fa-thumbs-up'>";
                echo "</i>\n</a>\n</div>\n<div class='col-3 col-md-2 pr-md-0'>\n";
                echo "<p class='p-3 text-white m-0 font-weight-bold d-block text-center bg-dark shadow'>".rand(2,12)."</p>\n</div>\n";
                echo "<div class='col-3 col-md-2 pr-md-0'>\n";
                echo "<a href='#' class='p-3 text-white font-weight-bold d-block text-center bg-dark shadow'>\n<i class='fas fa-thumbs-down'>";
                echo "</i>\n</a>\n</div>\n<div class='col-3 col-md-2 pr-md-0'>\n";
                echo "<p class='p-3 text-white m-0 font-weight-bold d-block text-center bg-dark shadow'>".rand(0,3)."</p>\n</div>\n";
                echo "<div class='col-12 mt-3 mt-md-0 col-md-4'>";
                echo "<a class='p-3 h5 text-white font-weight-bold d-block text-center bg-dark shadow' ";
                echo "data-toggle='collapse' data-target='#collapseReply".$i."' href='#collapseReply".$i."' ";
                echo "aria-expanded='false' aria-controls='collapseReply".$i."'>".$responder[$lang]."</a>\n</div>\n</div>";
                echo "<div class='row mt-3 collapse' id='collapseReply".$i."' data-parent='#topicos'>\n<div class='col-12'>\n"; 
                echo "<form class='form'>\n<fieldset disabled>\n<div class='form-group row mx-3 mx-md-0'>";
                echo "<textarea class='form-control col-12 rounded-0 shadow' name='message' placeholder='".$resposta[$lang];
                echo "' rows='4'></textarea>\n</div>\n<div class='form-group row mx-3 mx-md-0'>\n";
                echo "<button type='submit' class='disabled btn btn-info btn-lg rounded-0 font-weight-bold shadow'>".$enviar[$lang];
                echo "</button>\n<p class='small my-auto ml-3 text-secondary'>".$logged[$lang]."</p>";
                echo "\n</div>\n</fieldset>\n</form>\n</div>\n</div>\n</div>\n</section>";
            }
            ?>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>