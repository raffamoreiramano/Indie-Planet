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



    <article class="container">
        <div class="row news-header">
            <h1 class="mx-0 h4 font-weight-bold my-4 text-body">
                <?php
                        switch ($lang) {
                            case "en":
                                echo "Top 10 Comics";
                                break;
                            case "es":
                                echo "Top 10 Quadrinetos";
                                break;
                            case "pt":
                                echo "Top 10 Quadrinhos";
                                break;
                        }
                        ?>
            </h1>
        </div>


        <!-- TOP 1/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">


            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa%20rei..jpeg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">1
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>

        <!-- TOP 2/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa4.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">2
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 3/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



            -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa5.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">3
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 4/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->



        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa%20pow.jpeg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">3
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>



        <!-- TOP 5/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa7.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">5
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <th scope="row">
                        <div class="row">
                            <p>
                                <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                            </p>
                        </div>
                    </th>
                    <td>Gui Oliveira</td>

                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>



        <!-- TOP 6/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->



        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/Capa%20olh.jpeg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">6
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 7/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa8.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">7
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 8/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa9.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">8
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 9/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->


        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa10.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">9
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- TOP 10/10 



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->

        <section class="row justify-content-between mb-5">

            <div class="p-0 col-12 col-md-6 col-lg-3">

                <div class="card-bg-dark text-white border-0">

                    <img alt="imagemquadrino1" src="../../img/capa6.jpg" class="img-fluid card-img">

                    <div class="card-img-overlay p-0" style="pointer-events: none;">
                        <h5 class="card-header border-0 rounded-0 font-weight-bold justify-content-center px-4 py-3 text-center d-inline-block my-auto" style="background-color: #DE813A;">10
                        </h5>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-8 mb-5">
                <table class="table">
                    <tr>
                        <h1>OLHARES</h1>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                           case "en":
                                echo "Author";
                                break;
                            case "es":
                                echo "Autor";
                                break;
                            case "pt":
                                echo "Autor";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Gui Oliveira</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Date";
                                break;
                            case "es":
                                echo "Fecha";
                                break;
                            case "pt":
                                echo "Data";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>01/12/2012</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="row">
                                <p>
                                    <?php
                        switch ($lang) {
                            case "en":
                                echo "Synopsis:";
                                break;
                            case "es":
                                echo "Sinopsis:";
                                break;
                            case "pt":
                                echo "Sinopse:";
                                break;
                        }
                        ?>
                                </p>
                            </div>
                        </th>
                        <td>Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. Mauris at feugiat arcu. Nunc vitae. Morbi sed mollis erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In convallis iaculis augue eget lacinia. </td>
                    </tr>
                </table>
            </div>
        </section>


        <!-- FIM DOS QUADRINHOS



            PARA DESTACAR MESMO A DIVISÃO ENTRE OS BOOKS



                                -->



    </article>

    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
