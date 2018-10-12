<?php
/* Divide as informações recebidas previamente do conteúdo do carrossel em elementos da matriz $carousel */
    $carousel['titles']=explode('||',$titles);
    $carousel['texts']=explode('||',$texts);
    $carousel['images']=explode('||',$images);
    $carousel['links']=explode('||',$links);
    $carousel['dates']=explode('||',$dates);
?>

<div class="container bg-dark">
        <div id="carouselIndicators" class="carousel slide row" data-ride="carousel">
            <div class="col col-lg-8 p-0">
                <div class="carousel-inner">

                        <?php 
                            for ($i=0;$i<$slides;$i++) {
                                echo "<div class='card bg-dark text-white carousel-item border-0";
                                echo ($i==0)?" active'>":"'>";
                                echo "<img class='card-img rounded-0' src='".$corredor."img/".$carousel['images'][$i]."' alt='Card image'>";
                                echo "<div class='card-img-overlay h-100 d-flex flex-column justify-content-end pb-5'>";
                                echo "<a class='carousel-link' href='".$corredor.$carousel['links'][$i]."'>";
                                echo "<h5 class='card-title h4 font-weight-bold mb-0 mb-md-3'>".$carousel['titles'][$i]."</h5>";
                                echo "<p class='d-none d-md-block card-text mb-0 mb-md-3'>".$carousel['texts'][$i]."</p>";
                                echo "<div class='card-text d-flex flex-row float-left'><i class='far fa-clock mb-auto mt-auto ml-0 mr-2'></i><p class='m-auto'>".$carousel['dates'][$i]."</p></div></a></div></div>";
                            } // Gera os slides do carrossel usando como parâmetros os elementos da matriz $carousel
                        ?>              
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="d-none d-lg-block col desk-indicators">
                <ol class="d-flex flex-column list-group carousel-indicators m-0 w-100 h-auto position-relative">
                    <?php
                        for ($i=0;$i<$slides;$i++) {
                            echo "<li data-target='#carouselIndicators' data-slide-to='$i' class='m-0 p-2 border-0 w-100 list-group-item rounded-0 bg-dark";
                            echo ($i==0)?" active'>":"'>";
                            echo "<h5 class='h6 font-weight-bold mb-0 text-white'>".$carousel['titles'][$i]."</h5>";
                            echo "<p class='card-text text-white'>".$carousel['dates'][$i]."</p></li>";
                        } // Indicadores para desktop, com título e hora da postagem
                    ?>
                </ol>
            </div>
        </div>
</div>