<nav class="container p-0 px-lg-4">
    <ol class="breadcrumb border-0 rounded-0 bg-white m-0">
        <?php
            foreach ($trail as $item) {
                foreach ($nav as $area => $pagina) {
                    if (str_replace(' ','_',strtolower(pato($area)))==$item) {
                        $crumb = $area;
                    } // Se um elemento da matriz for semelhante ao item, $crumb recebe o nome do elemento
                    foreach ($nav[$area] as $pagina) {
                        if (str_replace(' ','_',strtolower(pato($pagina)))==$item) {
                            $crumb = $pagina;
                        } // Se um elemento pertencente a um certo índice da matriz for semelhante ao item, $crumb recebe o nome do elemento
                    }
                } // Vasculha a matriz $nav em busca de um elemento correspondente ao $item
                if (isset($crumb)) {
                    echo "<li class='breadcrumb-item";
                    if (isset($nome)) {
                        echo (end($trail)==$item)?" active'>$nome.":"'><a class='font-weight-bold' href='" #1
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".$crumb."</a>";
                    } // Se $nome estiver preenchido, o nome da página dentro do menu recebe o conteúdo de $nome
                    else {
                        echo (end($trail)==$item)?" active'>$crumb.":"'><a class='font-weight-bold' href='" #1
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".$crumb."</a>";
                    } // Se $nome não estiver preenchido, o nome da página segue com o conteúdo de $crumb
                } // Se $crumb estiver preenchido, o nome da página dentro do menu recebe o conteúdo de $crumb ou de $nome
                else {
                    echo "<li class='breadcrumb-item";
                    if (isset($nome)) {
                        echo (end($trail)==$item)?" active'>$nome.":"'><a class='font-weight-bold' href='" #1
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".ucfirst($item)."</a>";
                    } // Se $nome estiver preenchido, o nome da página dentro do menu recebe o conteúdo de $nome
                    else {
                        echo (end($trail)==$item)?" active'>Página atual.":"'><a class='font-weight-bold' href='" #1
                            .$corredor.substr($caminho,0,strpos($caminho,$item."/"))
                            .$item."/'>".ucfirst($item)."</a>";
                    } // Se $nome não estiver preenchido, o nome da página segue com o conteúdo de $item
                } // Se $crumb não estiver preenchido, o nome da página dentro do menu recebe o conteúdo de $nome ou de $item
                unset($crumb); 
            } // Transforma o conteúdo do caminho da página em um menu breadcrumb, verificando a relação de cada item com os elementos da matriz de navegação
/* #1 - Decide, com base na relação de $item com o último elemento de $trail, se o item da lista recebe o atributo de classe 'active' ou uma âncora em seu interior com o nome do item do menu */
        ?>
    </ol>
</nav>