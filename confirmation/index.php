<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Odin Beuchat">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Checkout</title>

	<link href="../assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
	<link href="../assets/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="../assets/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link href="../assets/favicon/site.webmanifest" rel="manifest">

	<link rel="stylesheet" href="https://unpkg.com/@csstools/normalize.css">
	<link rel="stylesheet" href="./css/main.css">
</head>

<body>
	<header>
		<h1>Coiffure Attrac'tifs</h1>
		<div class="menus">
			<a href="https://bit.ly/3sQRw3d">Route Principale 25, 2825 Courchapoix</a>
		</div>
	</header>

	<main>
		<?php
		ini_set('display_errors', 1);
		error_reporting(E_ALL);

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		function prepared_query($mysqli, $sql, $params, $types = "")
		{
			$types = $types ?: str_repeat("s", count($params));
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param($types, ...$params);
			$stmt->execute();
			return $stmt;
		}

		$servername = "g61ai.myd.infomaniak.com";
		$username = "g61ai_beucodi";
		$password = "Odin2006#SQL";

		$day = $_POST["jour"];
		$month = $_POST["mois"];
		$year = $_POST["annee"];
		$cut = $_POST["type"];
		$duration = $_POST["temps"];
		$hourSlices = $_POST["periodes"];
		$surname = $_POST["nom"];
		$fname = $_POST["prenom"];
		$email = $_POST["email"];
		$phone = $_POST["telephone"];
		$hour = $_POST["heure"];

		$conn = new mysqli();
		$conn->connect($servername, $username, $password, "g61ai_attractifs", 3306);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$cuts = [];
		$cutExploded = explode("; ", $cut);
		array_pop($cutExploded);
		foreach ($cutExploded as $cutIdentifier) {
			$sql = "SELECT id FROM coupe WHERE identifiant LIKE ?";
			$stmt = prepared_query($conn, $sql, [$cutIdentifier]);
			$result = $stmt->get_result()->fetch_assoc()["id"];
			array_push($cuts, $result);
		};

		$sql = "SELECT count(id) FROM horaire WHERE date = ? AND heure = ?";
		$stmt = prepared_query($conn, $sql, [$year . "-" . $month . "-" . $day, $hour . ":00"]);
		$result = $stmt->get_result();
		if ($result->fetch_assoc()["count(id)"] > 0) {
			$sql = "SELECT id FROM horaire WHERE date = ? AND heure = ?";
			$stmt = prepared_query($conn, $sql, [$year . "-" . $month . "-" . $day, $hour . ":00"]);
			$result = $stmt->get_result()->fetch_assoc()["id"];
			$sql = "SELECT count(rdv.id) from rendezvous rdv WHERE fk_horaire = ?";
			$stmt = prepared_query($conn, $sql, [$result]);
			if ($stmt->get_result()->fetch_assoc()["count(rdv.id)"] > 0) {
				header('Location: ../index.php');
				die();
			}
		}

		$sql = "SELECT id FROM client WHERE nom = ? AND prenom = ? AND (mail = ? OR telephone = ?);";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssss", $surname, $fname, $email, $phone);
		$stmt->execute();
		$client_id = 0;

		$result = $stmt->get_result()->fetch_assoc();

		if (count($result) == 0) {
			$sql = "INSERT INTO client (nom, prenom, mail, telephone) values (?, ?, ?, ?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssss", $surname, $fname, $email, $phone);
			$stmt->execute();

			$sql = "SELECT id FROM client WHERE nom = ? AND prenom = ? AND mail = ? AND telephone = ?;";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssss", $surname, $fname, $email, $phone);
			$stmt->execute();
			$result = $stmt->get_result()->fetch_assoc();

			$client_id = $result["id"];
		} else {
			$client_id = $result["id"];
		}

		$sql = "SELECT count(id) FROM horaire WHERE date = ? AND heure = ?;";
		$stmt = prepared_query($conn, $sql, [$year . "-" . $month . "-" . $day, $hour . ":00"]);
		$result = $stmt->get_result()->fetch_assoc()["count(id)"];
		$horaireId = 0;

		if ($result == 0) {
			$sql = "INSERT INTO horaire (date, heure) VALUES (?, ?);";
			$stmt = prepared_query($conn, $sql, [$year . "-" . $month . "-" . $day, $hour . ":00"]);

			$sql = "SELECT id FROM horaire WHERE date = ? AND heure = ?;";
			$stmt = prepared_query($conn, $sql, [$year . "-" . $month . "-" . $day, $hour . ":00"]);
			$horaireId = $stmt->get_result()->fetch_assoc()["id"];
		} else {
			$horaireId = $result["id"];
		}

		$sql = "INSERT INTO rendezvous (fk_client, fk_horaire) VALUES (?, ?);";
		$stmt = prepared_query($conn, $sql, [$client_id, $horaireId]);

		$sql = "SELECT id FROM rendezvous WHERE fk_client = ? AND fk_horaire = ?;";
		$stmt = prepared_query($conn, $sql, [$client_id, $horaireId]);
		$rdvId = $stmt->get_result()->fetch_assoc()["id"];

		foreach ($cuts as $cut) {
			$sql = "INSERT INTO effectuer VALUES (?, ?)";
			$stmt = prepared_query($conn, $sql, [$cut, $rdvId]);
		}

		$conn->close();
		print "<h2>Merci de votre visite!</h2> <span>Vous allez bientôt reçevoir un e-mail de confirmation.<span>";
		mail($email, "Reservation Coiffure attrac'tifs", "Bonjour.\nNous avons bien reçu votre demande de rendez-vous au salon de coiffure attractifs, le " . $day . "." . $month . "." . $year . ".\nNous nous réjouissons de vous retrouver!\n\nCeci est un message automatique. Il est inutile d'y répondre.", "From: Coiffure attractifs <odinbeuchat.ob@ikmail.com>");
		?>
	</main>

	<footer>
		Contact:
		<div id="contact">
			<div id="dindin">
				Créateur du site:
				<ul>
					<li>
						<a href="mailto:odinbeuchat.ob@ikmail.com">
							<img src="../assets/images/icons/mail.png" alt="Envoyer un e-mail">
							Mail
						</a>
					</li>
					<li>
						<a href="tel:0798442928">
							<img src="../assets/images/icons/phone.png" alt="Appeler">
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
							<img src="../assets/images/icons/mail.png" alt="envoyer un e-mail">
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
							<img src="../assets/images/icons/mail.png" alt="Envoyer un e-mail">
							Mail
						</a>
					</li>
					<li>
						<a href="tel:0787290139">
							<img src="../assets/images/icons/phone.png" alt="Appeler">
							Téléphone
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div id="copyright">
			<p>
				©dindin|nibnib 2022 <br>
				Some images are not from me. No copyright infringement intended. Icons come from
				<a href="https://flaticon.io">flaticon.io</a>
			</p>
		</div>
	</footer>
</body>

</html>