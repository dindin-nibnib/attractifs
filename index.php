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

		<form action="./checkout" method="post" id="coupe">
			<input type="text" name="type" style="display:none" id="type">
			<input type="text" name="temps" style="display:none" id="temps">
			<div class="enfant">
				<button type="button" class="enfant derouler" onclick="showMenu(this)" formnovalidate>
					ENFANT
					<img src="assets/images/icons/arrow.png" alt="Derouler le menu">
				</button>
				<div class="container-derouler">
					<div onclick="selectOption(this)" id="5-ans-courts">
						<div>
							<h2>
								Coupe jusqu'à 5 ans sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">14.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="5-ans-longs">
						<div>
							<h2>
								Coupe jusqu'à 5 ans sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">21.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="5-15-ans-courts">
						<div>
							<h2>
								Coupe de 5 à 15 ans sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">22.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="5-15-ans-longs">
						<div>
							<h2>
								Coupe de 5 à 15 ans sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">29.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="tresse">
						<div>
							<h2>
								Tresse
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">20.00 CHF</p>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="femme">
				<button type="button" formnovalidate class="femme derouler" onclick="showMenu(this)">
					FEMME
					<img src="assets/images/icons/arrow.png" alt="Derouler le menu">
				</button>
				<div class="container-derouler">
					<div onclick="selectOption(this)" id="f-simple-courts">
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
					</div>

					<div onclick="selectOption(this)" id="f-simple-longs">
						<div>
							<h2>
								Coupe simple sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">39.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-coupe-brushing-courts">
						<div>
							<h2>
								Coupe brushing sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">50 min</p>
							<p class="meta">53.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-coupe-brushing-longs">
						<div>
							<h2>
								Coupe brushing sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h 30min</p>
							<p class="meta">62.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-coupe-séchage-courts">
						<div>
							<h2>
								Coupe et séchage simple sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">47.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-coupe-séchage-longs">
						<div>
							<h2>
								Coupe et séchage simple sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h 15min</p>
							<p class="meta">55.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-brushing-courts">
						<div>
							<h2>
								Brushing sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">20 min</p>
							<p class="meta">35.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-brushing-longs">
						<div>
							<h2>
								Brushing sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">45.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-plis-courts">
						<div>
							<h2>
								Mise en plis sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h</p>
							<p class="meta">40.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-plis-longs">
						<div>
							<h2>
								Mise en plis sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h 45min</p>
							<p class="meta">50.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-séchage-courts">
						<div>
							<h2>
								Séchage simple sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">20 min</p>
							<p class="meta">28.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-séchage-longs">
						<div>
							<h2>
								Séchage simple sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">40 min</p>
							<p class="meta">35.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-perm-courts">
						<div>
							<h2>
								Permanente sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h</p>
							<p class="meta">64.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-perm-longs">
						<div>
							<h2>
								Permanente sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h 30min</p>
							<p class="meta">80.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-perm-part-courts">
						<div>
							<h2>
								Permanente partielle sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">51.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-coloration-courts">
						<div>
							<h2>
								Coloration sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h</p>
							<p class="meta">46.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-coloration-longs">
						<div>
							<h2>
								Coloration sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h 30min</p>
							<p class="meta">54.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-shampoing-colorant-courts">
						<div>
							<h2>
								Shampoing colorant sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">39.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-shampoing-colorant-longs">
						<div>
							<h2>
								Shampoing colorant sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h</p>
							<p class="meta">49.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-mèches-courts">
						<div>
							<h2>
								Mèches sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">1h 30min</p>
							<p class="meta">50.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-mèches-longs">
						<div>
							<h2>
								Mèches sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">2h</p>
							<p class="meta">65.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-décol-courts">
						<div>
							<h2>
								Décoloration sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">2h</p>
							<p class="meta">120.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-décol-longs">
						<div>
							<h2>
								Décoloration sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">3h</p>
							<p class="meta">150.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="f-chignon">
						<div>
							<h2>
								Chignon sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">35.00 CHF</p>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="homme">
				<button type="button" class="homme derouler" onclick="showMenu(this)" formnovalidate>
					HOMME
					<img src="assets/images/icons/arrow.png" alt="Derouler le menu">
				</button>
				<div class="container-derouler">
					<div onclick="selectOption(this)" id="m-shampoing-coupe-séchage-courts">
						<div>
							<h2>
								Shampoing coupe séchage sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">34.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-shampoing-coupe-séchage-longs">
						<div>
							<h2>
								Shampoing coupe séchage sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">45 min</p>
							<p class="meta">44.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-coupe-courts">
						<div>
							<h2>
								Coupe simple sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">20 min</p>
							<p class="meta">27.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-coupe-longs">
						<div>
							<h2>
								Coupe simple sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">30 min</p>
							<p class="meta">37.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-couronne">
						<div>
							<h2>
								Coupe couronne
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">15 min</p>
							<p class="meta">22.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-shampoing-couronne-courts">
						<div>
							<h2>
								Shampoing et coupe couronne sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">25 min</p>
							<p class="meta">27.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-shampoing-séchage-courts">
						<div>
							<h2>
								Shampoing et séchage sur cheveux courts
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">15 min</p>
							<p class="meta">18.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-shampoing-séchage-longs">
						<div>
							<h2>
								Shampoing et séchage sur cheveux longs
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">20 min</p>
							<p class="meta">28.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-tondeuse">
						<div>
							<h2>
								Coupe tondeuse
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">15 min</p>
							<p class="meta">20.00 CHF</p>
						</div>
					</div>

					<div onclick="selectOption(this)" id="m-barbe-moustache-oreilles">
						<div>
							<h2>
								Taille de la barbe, de la moustache et des contours d'oreilles
							</h2>
							<img src="assets/images/icons/checkbox-mt.png" alt="Sélectionner l'option">
						</div>

						<div class="meta">
							<p class="meta">10 min</p>
							<p class="meta">15.00 CHF</p>
						</div>
					</div>
				</div>
			</div>
		</form>


		<hr>

		<h2>Localisation</h2>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d675.8095995036854!2d7.4547345!3d47.3487434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791dcbf2fc69585%3A0xfd8aadd6d983bfa8!2sCoiffure%20Attrac&#39;tifs!5e0!3m2!1sen!2sch!4v1641407898761!5m2!1sen!2sch"
			width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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