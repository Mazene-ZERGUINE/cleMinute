<?php 	
ob_start();
session_start() ; 


include 'includes/config.php' ;

if(isset($_POST['submit'])){
	ob_start();
	if(!empty($_POST['username']) AND !empty($_POST['password'])){
	$req = $bdd->prepare('SELECT * FROM admins WHERE adminName = ? AND password = ?') ; 
		$adinName = $_POST['username'] ; 
		$password = sha1($_POST['password']) ; 
		$req->execute([$adinName,$password]); 
		$admin = $req->fetch();
		if(empty($admin)){
		$errors = 'utilisateur non trouvé' ; 
		}else{
			$_SESSION['adminName'] = $admin['adminName'] ; 
			header('location:https://cleminute-67.fr/admin.php');
		
}
} else{
	$errors = 'tous les champs doivent etre remplis' ;
}
}
ob_end_flush();
 ?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="fr">
	<title>Clé Minute</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta content="clé minute reproduction de tous les marques des clé voiture">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/f943009bf6.js" crossorigin="anonymous"></script>

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
				<a href="mailto:mmazenezerguine@gmail.com">djameltliba@gmail.com/a>
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
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
			
		</div>
		



	</header>


<body>

<main>

		<div class="title">
		<h1>Se connecter</h1>
	</div>

	<div class="container">
		<p style="color:red; margin-left:10%">

		<?php  
		if (!empty($errors)) {
			echo $errors ;
		}
		 ?>
		</p>
				<div style="position: relative; left: 17%;" class="row">
					<div class="formulaire co-lg-12 col-md-12 col-sm-12">
						<form method="post">
			<div class="inpute">
			<div class="i_container">
				<i class="fas fa-user-circle"></i>
			</div>
			<input style="width:60%" type="text" name="username" placeholder="Nom d'utilisateur">

</div>
</div>
	<div  class="formulaire co-lg-12 col-md-12 col-sm-12">

			<div class="inpute">
			<div class="i_container">
				<i class="fas fa-lock"></i>


			</div>
			<input style="width:60%" type="password" name="password" placeholder="Mot de passe">

</div>
</div>
<input style="position:relative; left:24%" id="sub" type="submit" name="submit" value="Se connecter">

</div>
</form>
</div>
</div>
</div>



</main>

<footer style="margin-top: 50px;">
	<div>
	<p> 2021 - 
		<?php echo date('Y'); ?> |
		Clé-Minute Tliba | Service de reproduction des clé | Strastbourge
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