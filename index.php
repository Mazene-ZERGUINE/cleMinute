<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" lang="fr">
	<meta content="clé minute Strastbourge">
	<title>Clé Minute</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta content="clé minute reproduction de tous les marques des clé voiture">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/f943009bf6.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

</head>
	
<body>
	<header>
		<div class="head_top">
			<div class="contacts">
			<div class="phone">
				<i class="fas fa-phone"></i>
				<a href="tel:">07 68 57 11 72</a>
			</div>
			<div class="email">
				<i class="far fa-envelope"></i>
				<a href="mailto:djameltliba@gmail.com">djameltliba@gmail.com</a>
			</div>
			<div style="margin-left:25px">
				<i class="far fa-user"></i>
				<a href="connexion.php">Se loguer</a>
			</div>
		</div>
		<div class="media">
			<a href="https://www.facebook.com/jamel.fafa.3" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/reparationclevoiture/" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-snapchat"></i></a>	
		</div>

			
		</div>
		<div class="head_mid">
			<div class="logo">
				<img src="image/logo.png" alt="clé minute" height="90px" width="90px">
				<p style="color: white;">Clé-Minute Tliba</p>
			</div>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a href="index.php"><i class="fas fa-home"></i></a>
        <a href="tarifs.php">NOS TARIFES</a>
        <a href="contacte.php">CONTACT</a>
        <a href="avis.php">AVIS</a>
        <?php 
        if(isset($_SESSION['adminName']) || !empty($_SESSION['adminName'])){
        	echo '<a href="admin.php">MON COMPTE</a> ' ;
        }
         ?>
        
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
			
		</div>
		<div class="header_bottom">
			<div class="text1">
			<h1>REPRODUCTION RAPIDE DE TOUTES MARQUES DE CLES</h1>
			</div>
		</div>



	</header>

	<main>

		<div class="presentation">
			<br>
			<br>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-8 col-md-6">
					<h1 >Qui sommes-Nous</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
					<img class="col-sm-12 col-lg-4 col-md-6" src="image/img1.png">
				</div>
				<br>
				<br>		
				
			</div>
			<br><br>
			<div class="container">
			<div class="row">
					<img class="col-sm-12 col-lg-4 col-md-6" src="image/img2.png">
					
				<div class="col-sm-12 col-lg-8 col-md-6">
				<h1 id="t_2" style="font-size: 25px;">REPARATION ET PRPGRAMMATION DE CLES ET CARTES AUTOMOBILES</h1>
				<p>Vos clés de voiture sont cassées ?</p>
				<p>Besoin de réparer une clé de voiture?</p>
				<p>Clé Minute chez tliba répare vos clé quelque soit le probleme quelque soit la marque de</p>
				</div>
			</div>
			</div>
			<br><br><br>
			<div class="container">
			<div class="row">
					
					
				<div class="col-sm-12 col-lg-8 col-md-6">
				<h1 id="t_2" style="font-size: 25px;">Double clé maison</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<img class="col-sm-12 col-lg-4 col-md-6" src="image/img3.png">
			</div>
			</div>


			<br><br><br>
			
				<div class="marques">	
						<h1 id="t_3" style="text-align: center; font-size: 25px;">Double clé de toutes marques de voiture</h1>
						<br><br>

						<div class="container">
						<div class="row" style="margin-left: 20px;">
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/audi.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/benz.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/bmw.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/citroen.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/fiat.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/seat.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/ford.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/jag.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/toyota.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/kia.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<img src="image/vol.png" alt="seat">
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6-">
								<img src="image/porche.png" alt="seat">
							</div>
							
						</div>	


						</div>

				</div>
				<br><br>

				<hr>

				<div class="container">
					<div class="row">
				<div class="types col-lg-3 col-md-3 col-sm-6">
				<img src="image/nike.png" alt="">
				<p style="font-size:17px;">Clés plate</p>	
				</div>
				<div class="types col-lg-3 col-md-3 col-sm-6">
				<img src="image/nike.png" alt="">
				<p style="font-size:17px;">Clés à gorge</p>	
				</div>
				<div class="types col-lg-3 col-md-3 col-sm-6">
				<img src="image/nike.png" alt="">
				<p style="font-size: 17px;">Clés de sécurité</p>	
				</div>
				<div class="types col-lg-3 col-md-3 col-sm-6">
				<img src="image/nike.png" alt="">
				<p style="font-size:17px">Badge et télécommande</p>	
				</div>
			</div>
		</div>
		<hr>
		<br>


		</div>
		<div style="height: auto; width: 100%; background-color: rgb(18, 114, 199);">
			<p style="padding: 5px; text-align:center; font-size:18px;color: white; font-family: sriracha;">Besoin d’un double de Clé ou Badge d’entrée avant qu’il ne soit trop tard !!</p>
		</div>
		<div class="suivi">
			<p>Suivez nous sur les les réseaux sociaux</p>
			<div class="media">
			<a href="https://www.facebook.com/jamel.fafa.3"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/reparationclevoiture/"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-snapchat"></i></a>	
		</div>

		</div>
		
	</main>

	<footer>
		<div>
	<p> 2021 - 
		<?php echo date('Y'); ?> |
		Clé-Minute Tliba | Service de reproduction des clé | Strasbourg
	</p>	
</div>
	</footer>

	 <script type="text/javascript">
    //javascript for navigation bar effect on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle('sticky', window.scrollY > 0);
    });

    //javascript for responsive navigation sidebar menu
    var menu = document.querySelector('.menu');
    var menuBtn = document.querySelector('.menu-btn');
    var closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener("click", () => {
      menu.classList.add('active');
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove('active');
    });
    </script>
</body>



</html>