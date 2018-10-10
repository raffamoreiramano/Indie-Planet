<?php
    $trail = explode(' ',$pastaAtual);
?>
<nav class="container p-0">
    <ol class="breadcrumb border-0 rounded-0 bg-white m-0">
        <?php
            foreach ($trail as $item) {
                foreach ($nav as $area => $pagina) {
                    if (str_replace(' ','_',strtolower(pato($area)))==$item) {
                        $crumb = $area;
                    }
                    foreach ($nav[$area] as $pagina) {
                        if (str_replace(' ','_',strtolower(pato($pagina)))==$item) {
                            $crumb = $pagina;
                        }
                    }
                }
                if (isset($crumb)) {
                    echo "<li class='breadcrumb-item";
                    if (isset($nome)) {
                        echo (end($trail)==$item)?" active'>$nome.":"'><a class='font-weight-bold' href='"
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".$crumb."</a>";
                    }
                    else {
                        echo (end($trail)==$item)?" active'>$crumb.":"'><a class='font-weight-bold' href='"
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".$crumb."</a>";
                    } 
                }
                else {
                    echo "<li class='breadcrumb-item";
                    if (isset($nome)) {
                        echo (end($trail)==$item)?" active'>$nome.":"'><a class='font-weight-bold' href='"
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".ucfirst($item)."</a>";
                    }
                    else {
                        echo (end($trail)==$item)?" active'>".ucfirst($item).".":"'><a class='font-weight-bold' href='"
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".ucfirst($item)."</a>";
                    } 
                }
                unset($crumb); 
            }
        ?>
    </ol>
</nav>