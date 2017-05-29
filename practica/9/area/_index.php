<!DOCTYPE html>
<html lang="es-MX">

<head>

	<title>Práctica 9</title>
	<meta name="author" content="Andrés Herrera" />
	<meta name="description" content="Project Website" />
	<meta name="keywords" content="CBTIS41" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="https://andreszx0.github.io/assets/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="https://andreszx0.github.io/assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="https://andreszx0.github.io/assets/css/w3.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

	<style>
		body {
			background-image: url("https://cdn.suwalls.com/wallpapers/vector/transparent-shapes-15792-1920x1080.jpg");
			background-repeat: no-repeat;
			background-position: top;
			background-attachment: fixed;
			background-size: 100%;
		}
	</style>

</head>

<body>

	<div class="w3-top w3-mobile">
		<div class="w3-bar w3-white w3-wide w3-padding-8 w3-card-2">
			<a href="https://andreszx0.github.io/" class="w3-margin-left w3-bar-item w3-button"><b>A.</b>H.</a>
			<div class="w3-right w3-hide-small w3-dropdown-hover">
				<button class="w3-button">Prácticas<i class="material-icons w3-small">arrow_drop_down</i></button>
				<div id="projects" class="w3-dropdown-content w3-bar-block w3-border">
					<a href="https://andreszx0.github.io/practica/1/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 1</a>
					<a href="https://andreszx0.github.io/practica/2/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 2</a>
					<a href="https://andreszx0.github.io/practica/3/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 3</a>
					<a href="https://andreszx0.github.io/practica/4/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 4</a>
					<a href="https://andreszx0.github.io/practica/5/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 5</a>
					<a href="https://andreszx0.github.io/practica/6/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 6</a>
					<a href="https://andreszx0.github.io/practica/7/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 7</a>
					<a href="https://andreszx0.github.io/practica/8/" class="w3-bar-item w3-button w3-animate-opacity">Práctica 8</a>
					<a href="#" class="w3-bar-item w3-button w3-disabled">Práctica 9</a>
					<a href="https://andreszx0.github.io/practica/10/" class="w3-bar-item w3-button w3-animate-opacity w3-small">Práctica 10</a>
				</div>
			</div>
		</div>
	</div>

	<div class="w3-container w3-green w3-center w3-mobile">
		<h1><br/>Práctica 9</h1>
		<?php
			include 'http://andreszx0.site11.com/9/index.php';
			if ($shape=="circle") {
				$radius=$_GET['radius'];
				$result=M_PI*($radius*$radius);

				echo '<h2>Área del círculo</h2></div>
						<div class="w3-panel w3-center w3-padding-64 w3-mobile" style="text-shadow:1px 1px 0 #444">
						<i class="w3-text-white" style="text-shadow:1px 1px 0 #444">';
				echo "Radio = $radius<br /><br />";
				echo "&#960; * ($radius)<sup>2</sup> = $result";
				echo '</i>';
			} elseif ($shape=="square") {
				$side=$_GET['side'];
				$result=$side*$side;

				echo '<h2>Área del cuadrado</h2></div>
						<div class="w3-panel w3-center w3-padding-64 w3-mobile" style="text-shadow:1px 1px 0 #444">
						<i class="w3-text-white" style="text-shadow:1px 1px 0 #444">';
				echo "Lado = $side<br /><br />";
				echo "($side)<sup>2</sup> = $result";
				echo '</i>';
			} elseif ($shape=="rectangle") {
				$base=$_GET['base'];
				$height=$_GET['height'];
				$result=$base*$height;
				
				echo '<h2>Área del rectángulo</h2></div>
						<div class="w3-panel w3-center w3-padding-64 w3-mobile" style="text-shadow:1px 1px 0 #444">
						<i class="w3-text-white" style="text-shadow:1px 1px 0 #444">';
				echo "Base = $base<br />";
				echo "Altura = $height<br /><br />";
				echo "Área = $base * $height = $result";
				echo '</i>';
			} elseif ($shape=="triangle") {
				$base=$_GET['base'];
				$height=$_GET['height'];
				$result=($base*$height)/2;
				
				echo '<h2>Área del triángulo rectángulo</h2></div>
						<div class="w3-panel w3-center w3-padding-64 w3-mobile" style="text-shadow:1px 1px 0 #444">
						<i class="w3-text-white" style="text-shadow:1px 1px 0 #444">';
				echo "Base = $base<br />";
				echo "Altura = $height<br /><br />";
				echo "Área = ($base * $height) / 2 = $result";
				echo '</i>';
			}
		?>
	</div>

	<div class="w3-container w3-green w3-padding-8 w3-center w3-mobile w3-bottom">
		<br/><a href="https://andreszx0.github.io/"><i class="material-icons">home</i></a>
		<a href="https://andreszx0.github.io/practica/9/"><i class="material-icons">arrow_back</i></a>
		<p>Andrés Herrera @ <a href="https://github.com/andreszx0">GitHub</a></p>
	</div>

</body>

</html>