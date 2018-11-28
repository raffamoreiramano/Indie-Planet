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

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
				<div class="row news-header">
					<h4 class="mx-0 my-4 text-body">
						<?php
						switch ($lang) {
                            case "en":
                                echo "Upcoming games";
                                break;
                            case "es":
                                echo "Próximos juegos";
                                break;
                            case "pt":
                                echo "Lançamentos";
                                break;
                        }
						?>
					</h4>
				</div>

				<h5>
					<?php
						switch ($lang) {
                            case "en":
                                echo "Stay tuned!";
                                break;
                            case "es":
                                echo "¡Manténganse al tanto!";
                                break;
                            case "pt":
                                echo "Fique Ligado!";
                                break;
                        }
						?>
				</h5>
				<p>
					<?php
						switch ($lang) {
                            case "en":
                                echo "Check out a list of releases of the upcoming indie games this year!";
                                break;
                            case "es":
                                echo "¡Echa un vistazo a la lista de lanzamientos de los próximos juegos independientes este año!";
                                break;
                            case "pt":
                                echo "Confira uma lista de lançamentos dos proximos jogos indie desse ano!";
                                break;
                        }
						?>
				</p>

				<div class="row">
					<table class="table table-responsive">
						<thead class="thead-dark">
							<tr>
								<th scope="row">
									<?php
                        		switch ($lang) {
                            case "en":
                                echo "Name";
                                break;
                            case "es":
                                echo "Nombre";
                                break;
                            case "pt":
                                echo "Nome";
                                break;}?>
								</th>

								<th scope="row">
									<?php
								switch ($lang) {
							case "en":
								echo "Studio";
								break;
							case "es":
								echo "Estudio";
								break;
							case "pt":
								echo "Estúdio";
								break;
								}?>
								</th>
								<th scope="row">
									<?php
								switch ($lang) {
							case "en":
								echo "Platform";
								break;
							case "es":
								echo "Plataforma";
								break;
							case "pt":
								echo "Plataforma";
								break;
								}?>
								</th>
								<th scope="row">
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
								}?>
								</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th scope="row">The Last Night</th>
								<td>Odd Tales</td>
								<td>Xbox One/Microsoft Windows/Linux/Mac OS Classic</td>
								<td>2019</td>
							</tr>
							<tr>
								<th scope="row">Ooblets</th>
								<td>Double Fine</td>
								<td>Xbox One/Microsoft Windows</td>
								<td>2018</td>
							</tr>
							<tr>
								<th scope="row">We Happy Feel</th>
								<td>Compulsion Games, Gearbox Software</td>
								<td>PlayStation 4/Xbox One/Microsoft Windows/Linux/Mac OS Classic</td>
								<td>10/08/2018</td>
							</tr>
							<tr>
								<th scope="row">Super Meat Boy Forever</th>
								<td>Team Meatr</td>
								<td>PlayStation 4/Xbox One/Nintendo Switch/Android/iOS/Microsoft Windows/Linux</td>
								<td>2018</td>
							</tr>
							<tr>
								<th scope="row">Light Fall</th>
								<td>Bishop Games</td>
								<td>Microsoft Windows/PlayStation 4/Nintendo Switch/Xbox One/Mac OS Classic</td>
								<td>26/04/2018</td>
							</tr>
							<tr>
								<th scope="row">My Time At Portia</th>
								<td>Team17</td>
								<td>PC</td>
								<td>23/01/2018</td>
							</tr>
							<tr>
								<th scope="row">PLANET ALPHA</th>
								<td>Team17</td>
								<td>PlayStation 4/Xbox One/Nintendo Switch/Microsoft Windows</td>
								<td>04/09/2018</td>
							</tr>
							<tr>
								<th scope="row">My Memory of Us</th>
								<td>IMGN.PRO</td>
								<td>PlayStation 4/Xbox One/Nintendo Switch/Microsoft Windows</td>
								<td>09/10/2018</td>
							</tr>
							<tr>
								<th scope="row">Guacamelee! 2</th>
								<td>DrinkBox Studios</td>
								<td> PlayStation 4/Nintendo Switch/Microsoft Windows</td>
								<td>21/08/2018</td>
							</tr>
							<tr>
								<th scope="row">Celeste</th>
								<td>MiniBoss</td>
								<td>PlayStation 4/Nintendo Switch/Xbox One/Microsoft Windows/Linux/Mac OS Classic</td>
								<td>25/01/2018</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>










	<?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
