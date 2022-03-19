<?php 
session_start() ; 
?>

<?php 
include 'includes/config.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'] ; 
	$password = sha1($_POST['password']) ; 
	 $path = 'uploads';
	 			$id = $_GET['id'] ; 
        $req = $bdd->prepare('UPDATE admins SET adminNname = ? AND password = ? WHERE adminName = ?') ; 
        $succ = $req->execute([$name,$password,$id]) ; 
        if($succ){
        	$msg = 'compte modifier' ; 
        }

}

 ?>


 <?php
if(isset($_SESSION['adminName']) || !empty($_SESSION['adminName'])){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="fr">
	<title>Clé Minute</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta content="clé minute reproduction de tous les marques des clé voiture">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
       	<a href="admin.php">MON COMPTE</a> 
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
			
		</div>
		



	</header>

	<main>

		<div class="title">
		<h1>Modifier mon compte</h1>
	</div>

	<div class="container">
		<p style="color:green; margin-left:10%">

		<?php  
		if (!empty($succ)) {
			echo $msg ;
		}
		 ?>
		</p>
		<form method="post">
		
	<div class="formulaire co-lg-12 col-md-12 col-sm-12">
					
			<div class="inpute">
			<div style="width: 120px;" class="i_container">
				<p style="padding:px;text-align: center; color:white; margin-top: 3px;">Nom</p>
			</div>
			<input style="width:60%" type="text" name="name">

</div>
</div>
<div class="formulaire co-lg-12 col-md-12 col-sm-12">
					
			<div class="inpute">
			<div style="width:120px;" class="i_container">
				<p style="padding:px;text-align: center; color:white; margin-top: 3px;">Mot de passe</p>
			</div>
			<input style="width:60%" type="text" name="mot de passe">

</div>
</div>
<input style="position:relative; left:24%" id="sub" type="submit" name="submit" value="Ajouter">

</div>
</form>
<br><br>

		

</div>
</div>
</div>



</main>
	<footer>
		
	</footer>
	<?php 
}else{
	header('location:index.php') ; 
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