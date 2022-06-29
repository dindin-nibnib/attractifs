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
	<script src="https://raw.githubusercontent.com/mysqljs/mysql/master/index.js" type="text/js"></script>
	<script src="./calendrier.js"></script>
</head>

<body>
	<header>
		<h1>Coiffure Attrac'tifs</h1>
		<div class="menus">
			<a href="https://bit.ly/3sQRw3d">Route Principale 25, 2825 Courchapoix</a>
		</div>
	</header>

	<main>
		<h2>
			Choisissez votre tranche horaire: 
		</h2>
		<div id="calendrier">
			<div id="mois">
				<a href="#" onclick="previousMonth()">
					<img id="mois-arriere" src="../assets/images/icons/arrow.png" alt="Mois précédent">
				</a>
				<span>## mois</span>
				<a href="#" onclick="nextMonth()">
					<img id="mois-avant" src="../assets/images/icons/arrow.png" alt="Mois suivant">
				</a>
			</div>
			<div id="jours">
				<div id="jours-labels">
					<span>lun.</span>
					<span>mar.</span>
					<span>mer.</span>
					<span>jeu.</span>
					<span>ven.</span>
					<span>sam.</span>
					<span>dim.</span>
				</div>
				<div id="jours-numeros">
				</div>
			</div>
		</div>

		<div id="heures">
		peen
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
