<!-- Optional JavaScript -->
<script src="<?php echo $corredor; ?>js/fontawesome.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo $corredor; ?>js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo $corredor; ?>js/bootstrap.min.js"></script>

<footer class="bg-dark mt-3 footer">
    <div class="container bg-dark">
        <div class="row d-flex flex-row float-right p-3">
            <ul class="list-inline m-0">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/">
                        <i class="footer-text fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/">
                        <i class="footer-text fab fa-instagram"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.twitter.com/">
                        <i class="footer-text fab fa-twitter-square"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.youtube.com/">
                        <i class="footer-text fab fa-youtube-square"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row mx-auto w-100 justify-content-center">
            <a class="footer-link" href="#navigation">
                <h3 class="footer-text h3 indie-brand mb-3">INDIE PLANET</h3>
            </a>
        </div>
        <div class="row d-flex flex-row justify-content-center pb-3">
            <div class="d-flex align-items-start flex-column col pr-0">
                <p class="footer-text m-0 h6">Copyright &copy; 2018 GP'65.</p>
                <p class="footer-text m-0 h6">All rights reserved.</p>
            </div>
            <div class="d-flex align-items-end flex-column col justify-content-right pl-0">
                <a class="footer-link float-right" href="<?php echo $corredor."norman/index.php"; ?>"><?php echo $norman[$lang]; ?></a>
                <a class="footer-link float-right" href="<?php echo $corredor."mapa/index.php"; ?>"><?php echo $mapa[$lang]; ?></a>
            </div>
        </div>
    </div>
</footer>
