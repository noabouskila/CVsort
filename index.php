<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="img/logohead.png" />
		<link rel="stylesheet" href="css/pageAccueil.css">
		
	</head>

	<style>
		.bg-img{
			background-image : url("img/bg-test1920.png");
			background-repeat : no-repeat;
			background-position : center;
			background-size: cover;
		}
	</style>

	<body>
		<?php
		include "header.php"
		?>

		<main id="main">
			<div class="container1 position-relative bg-img">
				<div class="d-flex flex-row justify-content-center align-items-center position-relative">
					<div class="col-md-5 z-3">
						<div>
							<h1 class="text-center text-white fw-semibold mt-5 mx-5 mx-md-0 mt-md-0 mb-5">Triez vos <span class="fw-bold">CV</span> comme vous le désirez !</h1>
							<div class="text-center d-flex justify-content-evenly">
								<button type="button" class=" z-2 btn btn-light text-white bg-primary rounded-pill border-0 p-3 fw-semibold shadow-lg ">
									<a href="demandeDemo.php" class="nav-link">Voir la Démo</a>
								</button>

								<button type="button" class=" z-2 btn btn-light bg-white text-primary shadow-lg rounded-pill p-3 fw-semibold border-0 ">
									<a href="souscrire.php" class=" nav-link"> Je  veux Souscrire</a>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-5 z-2 position-img-3">
						<img src="img/3.svg" class="w-100">
					</div>

				</div>
				
			</div>
			
			<div id="services">
				<h2 class="fs-2 fw-bold text-center text-primary pt-5">Nos services</h2>
				<h3 class="fs-5 fw-bold mt-2 text-center fst-italic">Découvrez Tout ce qui est inclus dans CvSort</h3>
			
			</div>
			<div class=" text-center py-5">
				<div class=" col-md-12 col-10 m-auto  m-md-0 d-flex flex-column flex-md-row justify-content-around">
					<div class=" col  col-md-3 shadow-lg border-0 border-success px-3 pt-4 pb-2 mb-3 mb-md-0 rounded bg-info">

						<div class="d-flex">
							<img class="w-25 my-1" src="img/4.svg" alt="fonctionnalité 1 tri cv">
						</div>
						
						<h4 class="text-white text-start fs-5">Tri de CV avec mots-clés</h4>
						<p class="fs-6 text-start"> 
							Avec CvSort, il suffit simplement de taper le mot-clé dans la barre de recherche pour que CvSort affiche seulement les candidats qui possedent cette compétence.
						</p>
					</div>
					<div class=" col col-md-3 shadow-lg border-0 border-success  px-3 pt-4 pb-2 mb-3 mb-md-0  rounded bg-primary">
						
					    <div class="d-flex">
							<img  class="w-25  my-1" src="img/5.svg" alt="fonctionnalité 2 tri cv">
						</div>
						
						
						<h4 class="text-white text-start fs-5">Affichage conditionné</h4>
						<p class="fs-6 text-start">
							Les CV de vos candidats ont trop d'informations qui ne vous correspondent pas ? Affichez uniquement le contenu que vous désirez dans chaque CV.
						</p>
					</div>
					<div class=" col col-md-3 shadow-lg border-0 border-success   px-3 pt-4 pb-2 mb-3 mb-md-0 rounded bg-info">
					
					 	<div class="d-flex">
							<img class="w-25  my-1" src="img/6.svg" alt="fonctionnalité 3 tri cv">
						</div>
			
						<h4 class="text-white  text-start fs-5">Système de filtrage</h4>
						<p class="fs-6 text-start">Avec CvSort , vous pouvez également filtrer les cv de vos candidats en imposant un ou meme plusieurs filtres/exigences à la fois .
						</p>
					</div>
				</div>
			</div>
			<div class="container1 d-flex justify-content-center p-5 mb-2 mb-lg-5" style="background: linear-gradient(to right, #34E1DF, #0876D9);"> 
				<div class="col-md-11 col-lg-9 ">
					<h2 class="fs-2 fw-bold text-center text-white pb-3">Qu'est-ce que l'analyse de CV?</h2>
					<p class="fs-4 text-center text-white">L'analyse de CV  est une  nouvelle fonctionnalité mis en place par PSM Consulting , qui permet aux DRH / recruteurs d'obtenir une vision plus ciblée de leurs candidatures afin de rendre la décision du recrutement plus exacte et rapide. 
					<br> 
					Effectivement , CvSort permet de visualiser d'un coup d'oeil l'ensemble des CV de vos candidats en fonction des besoins que vous recherchez ! 
					</p>
				</div>
			</div>
			<div class="container1 d-flex justify-content-center p-3 mb-2 mb-lg-5"> 
				<div class="col-md-10 border border-2 border-primary rounded p-3">
					<h2 class="fs-2 fw-bold text-center text-primary pb-3">Les avantages d'utiliser CV Sort</h2>
					<p class="fs-4 text-center text-black">
						CvSort a pour avantage de vous faire économiser tout le temps du tri, de l'analyse et du choix de vos candidatures ! 
						<br> 
						De plus, la prise en main du logiciel est facile et rapide. Le logiciel est disponible en ligne.
					</p>
					<div class="center-button py-3">
							<button type="button" class="btn btn-info text-white rounded-pill fs-5 p-3 shadow-lg">
							<a href="demandeDemo.php" class="text-decoration-none">Voir la Démo >></a>
							</button>
						</div>
				</div>
			</div>
		
			<div id="tarifications" class=" py-5 ">

				<h2 class="fs-2 fw-bold text-center mb-5 text-primary">Nos tarifs</h2>
				
				<div class="d-flex justify-content-around">

					<div class="d-none d-md-flex col-4"><img src="img/2.svg" class="w-100">
					</div>
					
					<div class="d-flex flex-column justify-content-between align-items-center h-75 border-1 rounded shadow-lg text-center col-lg-4">
						
						<h4 class="mt-5 m-2">Le service CvSort comprenant: </h4>
						<ul class="lh-lg fst-italic  py-4">
							<li>Tri des CV par mots-clés</li>
							<li>Affichage conditionné de contenu</li>
							<li>Capacité jusqu'a 500 cv.</li>
							<li>Accès pendant 1 an renouvlable</li>
						</ul>
						
						<a href="souscrire.php"  class="d-flex justify-content-center w-100 bg-primary text-white  fs-5 p-3 text-decoration-none rounded-bottom"> Souscrire >> </a>
						
					</div>
				</div>
			</div>
			
			<div style="background: linear-gradient(to right, #34E1DF, #0876D9);">
				<div  class="container py-3 py-md-5">
					<div class="row justify-content-center align-items-center ">
						<div id="contacts" class="col-md-7 col-lg-5 ">
							<h2 class="fs-2 fw-bold text-center text-white mb-3">Nous contacter</h2>
							<p class="fs-5 text-center text-white">Nous vous recontereons dans les meilleurs délais</p>

							
							<form method="POST" action="traitement-formulaire.php" class="bg-white p-4 rounded shadow-lg">

								<div class="mb-2">
									<label for="nom" class="form-label fw-semibold ">Nom</label>
									<input type="text" class="form-control" id="nom" name="nom" required>
								</div>
								<div class="mb-2">
									<label for="prenom" class="form-label fw-semibold">Prénom</label>
									<input type="text" class="form-control" id="prenom" name="prenom" required>
								</div>
								<div class="mb-2">
									<label for="email" class="form-label fw-semibold">Adresse Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
								</div>
								<div class="mb-2">
									<label for="message" class="form-label fw-semibold">Message</label>
									<textarea class="form-control" id="message" name="message" rows="3" required></textarea>
								</div>
								<div class="text-center mt-3 ">
									<button type="submit" class="btn btn-info text text-white fw-bold rounded-pill px-3 py-2 shadow-lg">envoyer </button>
								</div>
								<p id="confirmation-message">
								</p>
                    		</form>
						</div>
						<div class="col-5 mt-4 mt-lg-0 d-none d-md-flex"><img src="img/7.svg"  alt="image de contact" class="w-100"></div>
					</div>
				</div>
			</div>

		</main>
		
		<footer id="footer">
			<div class="d-flex flex-column flex-md-row justify-content-around w-90 m-auto  py-5 px-5" >
				<ul class="list-unstyled">
					<li><img src="img/logo.png" alt="logo cvSort" class="w-25 mb-3 mb-md-0"></li>
					<li> <a href="#" class="text-decoration-none text-black"> Mentions légales </a> </li>
					<li> <a href="#" class="text-decoration-none text-black"> Politique de confidentialité </a> </li>
					<li> <a href="#" class="text-decoration-none text-black"> Politique des Cookies </a> </li>
				</ul>
				
				<ul class="list-unstyled mt-3 mt-md-0">
					<li><h5 class="text-primary">CVSORT COMPANY</h5></li>
					<li class="mb-3">92 Quai de la Loire, 75019 Paris</li>

					<li> <h6 class="text-primary">Adresse email</h6></li>
					<li class="mb-3">
						<a href="mailto:contact@cvsort.com" class="text-decoration-none text-black" >contact@cvsort.com
						</a>
					</li>

					<li><h6 class="text-primary">Téléphone </h6></li>
					<li>00 00 00 00 00</li>
				</ul>
			</div>
			
		</footer>

		<script src="js/header.js"></script>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<script src="js/formulaireContact.js"></script>

	</body>
</html>

