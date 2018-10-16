<?php
    $news['titles']=explode('||',$titles);
    $news['images']=explode('||',$images);
    $news['links']=explode('||',$links);
    $news['dates']=explode('||',$dates);
    $news['areas']=explode('||',$areas);
?>
    <div class="row news-header">
        <h4 class="mx-0 my-4 text-body">Novidades</h4>
    </div>
    <?php
        $c=0;
        for ($i=0;$i<$newsNumber;$i++) {
            $c++;
            if ($c==$highlight) {
                echo "<div class='container-fluid p-0 mb-4'>\n<div class='row'>\n";
                echo "<article class='card col-12 w-100 h-auto p-0 border-0'>\n";
                echo "<a href='".$news['links'][$i]."?t=".str_replace(' ','+',$news['titles'][$i])."&img=".$news['images'][$i]."&dt=".str_replace(' ','+',$news['dates'][$i]);
                echo "' class='text-white'>\n<img class='card-img rounded img-fluid'";
                echo " alt='".$news['titles'][$i]."' src='".$corredor."img/".$news['images'][$i]."'/>\n";
                echo "<div class='card-img-overlay h-100 d-flex flex-column justify-content-end mx-lg-4'>\n";
                echo "<p class='small mt-auto mb-1 text-right'>".$news['dates'][$i]."</p>\n";
                echo "<h3 class='card-title my-0 text-right news-title-link-b h5 font-weight-bold mb-0 mb-md-3'>";
                echo $news['titles'][$i]."</h3>\n<p class='text-uppercase small my-1 text-right'>".$news['areas'][$i];
                echo "</p>\n</div>\n</a>\n</article>\n</div>\n</div>";
                $c=0;
            }
            else {
                echo "<article class='container-fluid pr-0 pl-lg-0 mb-4'>\n<div class='row'>\n";
                echo "<a href='".$news['links'][$i]."?t=".str_replace(' ','+',$news['titles'][$i])."&img=".$news['images'][$i]."&dt=".str_replace(' ','+',$news['dates'][$i]);
                echo "' class='col-4 d-block my-auto p-0 pr-md-3'>\n";
                echo "<picture>\n<img class='rounded img-fluid' alt='".$news['titles'][$i]."' src='".$corredor."img/".$news['images'][$i]."'/>";
                echo "\n</picture>\n</a>\n<div class='col-8 h-auto d-flex flex-column pl-2 pr-0'>\n";
                echo "<p class='small mt-2 mb-auto text-body'>".$news['dates'][$i]."</p><div class='mt-0 mb-auto'>";
                echo "<a href='".$news['links'][$i]."?t=".str_replace(' ','+',$news['titles'][$i])."&img=".$news['images'][$i]."&dt=".str_replace(' ','+',$news['dates'][$i]);
                echo "' class='text-body'>\n<h3 class='h5 d-inline news-title-link font-weight-bold'>";
                echo $news['titles'][$i]."</h3>\n</a>\n</div>\n<div class='mt-auto mb-2'>\n";
                echo "<a href='".$corredor.strtolower(pato($news['areas'][$i]))."/index.php' class='small text-uppercase text-body'>";
                echo $news['areas'][$i]."</a>\n</div>\n</div>\n</div>\n</article>";
            }
        }
    ?>