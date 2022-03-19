<?php 
session_start();

if(isset($_POST['sub'])){

	if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['phone']) || empty($_POST['mail']) || empty($_POST['message'])){
		$errors = 'tous les champs doivent etre remplis' ;
	}else{
		$email = $_POST['mail'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			$errors = 'mail non valide' ; 
		}
		$tel = $_POST['phone'] ;
	
		if(empty($errors)){
			$nom = $_POST['nom'] ; 
			$email = $_POST['mail'] ; 

			$header="MIME-Version: 1.0\r\n";
			$header.="From: " . $nom . "<". $email .">\r\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';

			$message='
	
					<html>
				<body>
		<p>Nom : '.$_POST['nom'].'</p>
		<p>Prenom : '.$_POST['prenom'].'</p>
		<p>Numéro de téléphone : '.$_POST['phone'].'</p>

		<br>
		<br>
		<p>Message<p>
		<p>'.$_POST['message'].'</p>
				</body>
			</html>
			
			';
			mail("djameltliba@gmail.com","Message",$message,$header) ;

		}
	}


 ?>











<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
	<meta charset="utf-8" lang="fr">
	<title>Clé Minute</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta content="clé minute tliba Strasbourg reproduction de tous les marques des clé voiture">
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
				<a href="mailto:mmazenezerguine@gmail.com">djameltliba@gmail.com</a>
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

<main>
	<div class="title">
		<h1 style="font-family: sriracha;">Contactez-nous</h1>
	</div>
	<div class="contatce">
		
		<form method="post">
			<p style="color:red; margin-left:10%">

		<?php  
		if (!empty($errors)) {
			echo $errors ;
		}
		 ?>
		</p>
			<div class="container">
				<div class="row">
					<div class="formulaire co-lg-6 col-md-6 col-sm-12">
			<div class="inpute">
			<div class="i_container">
				<i class="fas fa-user-circle"></i>
			</div>
			<input type="text" name="nom" placeholder="Votre nom">

</div>
</div>
	<div class="formulaire co-lg-6 col-md-6 col-sm-12">

			<div class="inpute">
			<div class="i_container">
				<i class="fas fa-user-circle"></i>
			</div>
			<input type="text" name="prenom" placeholder="Votre prénom">

</div>
</div>
	<div class="formulaire co-lg-6 col-md-6 col-sm-12">
			<div class="inpute">
			<div class="i_container">
				<i class="far fa-envelope"></i>
			</div>
			<input type="text" name="mail" placeholder="Votre adresse e-mail">

</div>
</div>
	<div class="formulaire co-lg-6 col-md-6 col-sm-12">
			
			<div class="inpute">
			<div class="i_container">
				<i class="fas fa-phone"></i>
			</div>
			<input type="text" name="phone" placeholder="Votre numéro téléphone">

</div>
</div>
<div class="sujet co-lg-12 col-md-12 col-sm-12">
	<div class="text_container">
			<p>Message</p>
	</div>
	<textarea name="message"></textarea>
	</div>
</div>

</div>
<input id="sub" type="submit" name="sub" value="Envoyer">
</div>

		</form>
		
	</div>

	
</main>

<footer style="margin-top: 120px;">
		<div>
	<p> 2021 - 
		<?php echo date('Y'); ?> |
		Clé-Minute Tliba | Service de reproduction des clé | Strasbour
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
