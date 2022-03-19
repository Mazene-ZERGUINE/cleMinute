<?php 
session_start() ; 
 ?>

 <?php
 ob_start();
if(isset($_SESSION['adminName']) || !empty($_SESSION['adminName'])){
	$id = $_SESSION['id'] ;

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
       	<a href="admin.php">MON COMPTE</a> 
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
			
		</div>
		



	</header>

	<main>
		<div class="admin_content"> 
		<div class="container">
			<div class="row">
			<div class="board col-lg-4 col-sm-12 col-md-4">
				<ul>
					<li><a href="add_article.php">List des article</a></li>
					<li><a href="list_avis.php">List des avis</a></li>
					<li><a href="add_admin.php">Ajouter un admin</a></li>
					<?php
					$id = $_SESSION['adminName'];
					 echo"
					<li><a href='edit_compte.php?id=$id'>Modifier mon compte</a></li>
					" ;
					?>	
					<li><a href="deconnexion.php">Deconnexion</a></li>
				</ul>
				
			</div>
			<div class="welcom col-lg-8 col-md-8 col-sm-12">
				<p>Bonjour <?php echo $_SESSION['adminName']; ?></p>
				<p>vous pouvez gérer votre site web a partir de cet interface d'administrateur</p>
			</div>
</div>
</div>
</div>

	</main>
	<footer>
		
	</footer>
	<?php 
}else{
	header('location:index.php') ; 
	ob_end_flush();
}

 ?>
</body>
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

 </html>