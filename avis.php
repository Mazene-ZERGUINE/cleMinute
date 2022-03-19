<?php  
session_start() ;
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
<body>
	
	<main>
		<div class="title">
			<h1 style="font-family: sriracha;">Vos avis nous intéresse</h1>
			<br>
		</div>
		<?php if(isset($_SESSION['adminName'])){ 
		 echo '<div style="text-align:center; margin-top:20px;">
		<a href="addAvis.php" style="border: 1px solid rgb(18, 114, 199); border-radius:10px;background-color: rgb(18, 114, 199); color: white; padding: 10px; width: 200px; text-decoration: none;">Laissez un avis</a>' ;
			
			}
			?>
			<div class="container">
		 	<div class="row">
			<?php 
		include 'includes/config.php' ; 

		$req = $bdd->prepare('SELECT * FROM oppinion') ; 
		$req->execute() ; 
		while($data = $req->fetch()){

		
		 ?>
		
		 <div class="avis_container col-lg-4 col-md-12 col-sm-12">
		 	<div class="name_container">
		 		<p><?php echo $data['name']; ?></p>
		 	</div>
		 	<div class="message_container">
		 		<p><?php echo $data['message']; ?></p>
		 	</div>
		 </div>
	
		 <?php 
}
		 ?>
		 	</div>
	</div>
		</div>
	
			<style type="text/css">
		
	.avis_container{
		margin-top: 30px;
		display: flex;
		flex-direction: column;
		margin-bottom: 15px;
		height: auto;
		width: 50%;

	
	}
	.name_container{
		border: solid rgb(18, 114, 199) 2px;
		background-color: rgb(18, 114, 199);
		height: auto;
		width: auto;
		
	}
	.name_container p{
		text-align: center;
		color: white;
		padding: 5px;
	
	}
	.message_container{
		border: rgb(18, 114, 199) 2px solid;
		height: auto;
		width: auto;
	}

	</style>
			
	

	</main>
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

</body>