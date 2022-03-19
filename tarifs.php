<?php
session_start() ; 
?>




<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" lang="fr">
	<title>Clé Minute</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta content="clé minute tliba a Strasbourg reproduction de tous les marques des clé voiture">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/f943009bf6.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

</head>
	
<body>
	<style type="text/css">
		body{
			margin-left: -20px;
		}
	</style>
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



	</header>

	<body>
		<main>
			<div class="title">
			<h1 style="font-family: sriracha;">Nos tarifs</h1>
		</div>
		<br>
		<br>
		<br>
	
		<br>
		
			<div class="container">

				<div class="filtre">
					<form method="post">
						<input type="text" name="marque" placeholder="marque">
							<input type="text" name="prix_max" placeholder="prix maximum">
								<input type="text" name="prix_min" placeholder="prix_minimum">
									<input type="submit" name="sub" placeholder="marque" value="filtrer" id="fil">
					</form>
					<div class="row" style="position: relative; left: -100px; width:100%;">					<?php  
		if(isset($_POST['sub'])){
			if(!empty($_POST['prix_max']) || !empty($_POST['prix_min']) || !empty($_POST['marque'])){
				include 'includes/config.php' ; 
				$req = $bdd->prepare('SELECT * FROM products WHERE marque = ? OR prix BETWEEN ? AND ?') ; 
				$marque = $_POST['marque'] ; 
				$prix_max = $_POST['prix_max'] ;
				$prix_min = $_POST['prix_min'] ;

				$req->execute([$marque,$prix_max,$prix_min]) ;
				while($data = $req->fetch()){

				?>
				
				<div class="tarif_c" style="height:auto; width:250px; border: solid 2px black;padding: 5px; border-radius: 15px; margin-left: 40px; margin-bottom: 20px;" class="tarif col-lg-3 col-md-4 col-sm-6">
							<?php 	
							if(empty($data['photo'])){
								echo '<img style="margin-left:17%; margin-top:20px;" src="image/key.png" height="150px" width="150px">';
 							}else{
						echo '<img style="margin-left:17%; margin-top:20px;" src="uploads/' . $data['photo'] . '" alt="" height="150px" width="150px">' ;
							 }
							 ?>	
							 <p style="text-align:center; margin-top: 5px;"><?php echo $data['clé'] ?></p>
							  <p style="text-align:center; margin-top: 5px; margin-top: -15px;"><?php echo $data['prix'] ?></p>
							 <p style="text-align: center; color:red; font-size:24px; margin-top: -15px;"><?php echo $data['marque']; ?></p>
							</div>
						</di>


				<?php
			} 
			echo '
			<br><br><br><hr>
			<p style="text-align:center;color: rgb(18, 114, 199);">Consulter tous nos produits</p>
			<hr><br>

			' ;
			}else{
			   $errors = 'vous devez remplire un champs au minumum' ;
		}
		}

		?>
				</div>
				<div class="row" style="position: relative; left: -100px; width:100%;">
					<?php 
					include 'includes/config.php' ; 
					$req = $bdd->prepare('SELECT * FROM products') ;
					$req->execute(); 
					while ($data = $req->fetch()) {
					?>
					<div class="tarif_c" style="height:auto; width:250px; border: solid 2px black;padding: 5px; border-radius: 15px; margin-left: 40px; margin-bottom: 20px;" class="tarif col-lg-3 col-md-4 col-sm-6">
							<?php 	
							if(empty($data['photo'])){
								echo '<img style="margin-left:17%; margin-top:20px;" src="image/key.png" height="150px" width="150px">';
 							}else{
						echo '<img style="margin-left:17%; margin-top:20px;" src="uploads/' . $data['photo'] . '" alt="" height="150px" width="150px">' ;
							 }
							 ?>	
							 <p style="text-align:center; margin-top: 5px;"><?php echo $data['clé'] ?></p>
							  <p style="text-align:center; margin-top: 5px; margin-top: -15px;"><?php echo $data['prix'] ?></p>
							 <p style="text-align: center; color:red; font-size:24px; margin-top: -15px;"><?php echo $data['marque']; ?></p>
							</div>

					<?php 
				}
					 ?>

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