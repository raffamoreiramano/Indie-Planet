<?php
    $carousel['titles']=explode('||',$titles);
    $carousel['texts']=explode('||',$texts);
    $carousel['images']=explode('||',$images);
    $carousel['links']=explode('||',$links);
    $carousel['dates']=explode('||',$dates);
?>

<div class="container bg-dark">
    <div class="row">
        <div id="carouselIndicators" class="carousel slide col col-lg-8 p-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    for ($i=0;$i<$slides;$i++) {
                        echo "<li data-target='#carouselIndicators' data-slide-to='$i'";
                        if ($i==0) echo "class='active'";
                        echo "></li>";
                    }
                ?>
            </ol>
            <div class="carousel-inner">
                
                    <?php 
                        for ($i=0;$i<$slides;$i++) {
                            echo "<div class='card bg-dark text-white carousel-item border-0";
                            if ($i==0) echo " active";
                            echo "'>";
                            echo "<img class='card-img rounded-0' src='".$corredor."img/".$carousel['images'][$i]."' alt='Card image'>";
                            echo "<div class='card-img-overlay h-100 d-flex flex-column justify-content-end pb-5'>";
                            echo "<a class='carousel-link' href='".$corredor.$carousel['links'][$i]."'>";
                            echo "<h5 class='card-title h4 font-weight-bold mb-0 mb-md-3'>".$carousel['titles'][$i]."</h5>";
                            echo  "<p class='card-text mb-0 mb-md-3'>".$carousel['texts'][$i]."</p>";
                            echo "<p class='card-text'>".$carousel['dates'][$i]."</p></a></div></div>";
                        }
                    ?>              
            </div>
        </div>
        <div class="nav d-none d-lg-block col desk-indicators" id="carouselIndicators" data-ride="carousel">
            <ul class="d-flex flex-column list-group">
                <?php
                    for ($i=0;$i<$slides;$i++) {
                        echo "<li class='list-group-item rounded-0 bg-dark'>";
                        echo "<a class='nav-link carousel-link' data-target='#carouselIndicators' data-slide-to='$i' href='#list-home'>";
                        echo "<h5 class='h5 font-weight-bold mb-0 text-white'>".$carousel['titles'][$i]."</h5>";
                        echo "<p class='card-text'>".$carousel['dates'][$i]."</p></a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>