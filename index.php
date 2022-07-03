<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Attrac'tifs - Accueil</title>

	<link href="./assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
	<link href="./assets/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="./assets/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link href="./assets/favicon/site.webmanifest" rel="manifest">

	<link rel="stylesheet" href="https://unpkg.com/@csstools/normalize.css">
	<link href="./css/main.css" rel="stylesheet">
	<script src="./main.js"></script>
	<?php ini_set('display_errors',1);
		error_reporting(E_ALL);
		
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		
		function prepared_query($mysqli, $sql, $params=[], $types = "")
		{
			$types = $types ?: str_repeat("s", count($params));
			$stmt = $mysqli->prepare($sql);
			if ($params != [])
				$stmt->bind_param($types, ...$params);
			$stmt->execute();
			return $stmt;
		}?>
</head>

<body>
	<noscript>
		<img src="assets/images/icons/warning.png" alt="Attention!">
		<p>
			Veuillez activer JavaScript afin d'assurer le fonctionnement correct de cette page.
		</p>
	</noscript>

	<header>
		<h1>Coiffure Attrac'tifs</h1>
		<div class="menus">
			<a href="https://bit.ly/3sQRw3d">Route Principale 25, 2825 Courchapoix</a>
		</div>
	</header>


	<main>
		<h1>
			Bienvenue!
		</h1>

		<h2>Faites votre choix:</h2>

		<form action="./checkout/index.php" method="post" id="coupe">
			<input type="text" name="type" style="display:none" id="type">
			<input type="text" name="temps" style="display:none" id="temps">
			<div class="enfant">
				<button type="button" class="enfant derouler" onclick="showMenu(this)" formnovalidate>
					ENFANT
					<img src="assets/images/icons/arrow.png" alt="Derouler le menu">
				</button>
				<div class="container-derouler"><?php
					$servername = "g61ai.myd.infomaniak.com";
					$username = "g61ai_beucodi";
					$password = "Odin2006#SQL";
					$conn = new mysqli();
					$conn->connect($servername, $username, $password, "g61ai_attractifs", 3306);

					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT co.nom, co.identifiant, co.duree, co.prix FROM coupe co INNER JOIN categorie ca ON (co.fk_categorie = ca.id) where ca.nom LIKE 'enfant';";
					$stmt = $conn->query($sql);

					$rows[] = array();
					while ( $row = mysqli_fetch_assoc($stmt) ) {
						echo "name: ". $row["nom"] . "<br>";
						echo "id: ". $row["identifiant"] . "<br>";
						echo "duration: ". $row["duree"] . "<br>";
						echo "price: ". $row["prix"] . "<br>";
						echo "<br>";
					}
					?></div>
			</div>

			<hr>

			<div class="femme">
				<button type="button" formnovalidate class="femme derouler" onclick="showMenu(this)">
					FEMME
					<img src="assets/images/icons/arrow.png" alt="Derouler le menu">
				</button>
				<!--div onclick="selectOption(this)" id="f-simple-courts">
						<div>
							<h2>
								Coupe simple sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">33.00 CHF</p>
						</div>
					</div-->
				<div class="container-derouler"><?php
					$servername = "g61ai.myd.infomaniak.com";
					$username = "g61ai_beucodi";
					$password = "Odin2006#SQL";
					$conn = new mysqli();
					$conn->connect($servername, $username, $password, "g61ai_attractifs", 3306);

					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT co.nom, co.identifiant, co.duree, co.prix FROM coupe co INNER JOIN categorie ca ON (co.fk_categorie = ca.id) where ca.nom LIKE 'femme';";
					$stmt = $conn->query($sql);

					$rows[] = array();
					while ( $row = mysqli_fetch_assoc($stmt) ) {
						echo "name: ". $row["nom"] . "<br>";
						echo "id: ". $row["identifiant"] . "<br>";
						echo "duration: ". $row["duree"] . "<br>";
						echo "price: ". $row["prix"] . "<br>";
						echo "<br>";
					}?></div>
			</div>

			<hr>

			<div class="homme">
				<button type="button" class="homme derouler" onclick="showMenu(this)" formnovalidate>
					HOMME
					<img src="assets/images/icons/arrow.png" alt="Derouler le menu">
				</button>
				<div class="container-derouler"><?php
					$servername = "g61ai.myd.infomaniak.com";
					$username = "g61ai_beucodi";
					$password = "Odin2006#SQL";
					$conn = new mysqli();
					$conn->connect($servername, $username, $password, "g61ai_attractifs", 3306);

					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT co.nom, co.identifiant, co.duree, co.prix FROM coupe co INNER JOIN categorie ca ON (co.fk_categorie = ca.id) where ca.nom LIKE 'homme';";
					$stmt = $conn->query($sql);

					$rows[] = array();
					while ( $row = mysqli_fetch_assoc($stmt) ) {
						echo "name: ". $row["nom"] . "<br>";
						echo "id: ". $row["identifiant"] . "<br>";
						echo "duration: ". $row["duree"] . "<br>";
						echo "price: ". $row["prix"] . "<br>";
						echo "<br>";
					}
					?></div>
			</div>
		</form>


		<hr>

		<h2>Localisation</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d675.8095995036854!2d7.4547345!3d47.3487434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791dcbf2fc69585%3A0xfd8aadd6d983bfa8!2sCoiffure%20Attrac&#39;tifs!5e0!3m2!1sen!2sch!4v1641407898761!5m2!1sen!2sch" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

		<div class="checkout-prompt" hidden>
			<p>Vous avez terminé ? Passez à la suite!</p>
			<button form="coupe">Suivant</button>
		</div>
	</main>


	<footer>
		Contact:
		<div id="contact">
			<div id="dindin">
				Créateur du site:
				<ul>
					<li>
						<a href="mailto:odinbeuchat.ob@ikmail.com">
							<img src="assets/images/icons/mail.png" alt="Envoyer un e-mail">
							Mail
						</a>
					</li>
					<li>
						<a href="tel:0798442928">
							<img src="assets/images/icons/phone.png" alt="Appeler">
							Téléphone
						</a>
					</li>
				</ul>
			</div>

			<div id="attractifs">
				Attrac'tifs:
				<ul>
					<li>
						<a href="mailto:coiffureattractifs@bluewin.ch">
							<img src="assets/images/icons/mail.png" alt="envoyer un e-mail">
							Mail
						</a>
					</li>
				</ul>
			</div>

			<div id="carole">
				Carole Bron:
				<ul>
					<li>
						<a href="mailto:fragle@hotmail.ch">
							<img src="assets/images/icons/mail.png" alt="Envoyer un e-mail">
							Mail
						</a>
					</li>
					<li>
						<a href="tel:0787290139">
							<img src="assets/images/icons/phone.png" alt="Appeler">
							Téléphone
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div id="copyright">
			<p>
				©dindin|nibnib 2022 <br>
				Some images are not from me. No copyright infringement intended. Icons are from
				<a href="https://flaticon.io">flaticon.io</a>
			</p>
		</div>
	</footer>
</body>

</html>