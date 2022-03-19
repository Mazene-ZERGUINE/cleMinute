<?php 
session_start() ; 
?>

<?php 
include 'includes/config.php';
if(isset($_POST['submit'])){
	$key = $_POST['key'] ; 
	$marque = $_POST['marque'] ; 
	$prix = $_POST['prix'].' '.'€' ; 

	 $path = 'uploads';
        $filename = $_FILES['image']['name'];
        $destination = $path . '/' . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        $req = $bdd->prepare('INSERT INTO products (clé,prix,marque,photo) VALUES (?,?,?,?)') ; 
        $succ = $req->execute([$key,$marque,$prix,$filename]) ; 
        if($succ){
        	$msg = 'clé ajouter' ; 
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
       	<a href="admin.php">MON COMPTE</a> 
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
			
		</div>
		



	</header>

	<main>

		<div class="title">
		<h1>Ajouter un article</h1>
	</div>

	<div class="container">
		<p style="color:green; margin-left:10%">

		<?php  
		if (!empty($succ)) {
			echo $msg ;
		}
		 ?>
		</p>
				<div style="position: relative; left: 17%;" class="row">
					<form method="post" enctype="multipart/form-data">
					<div class="formulaire co-lg-12 col-md-12 col-sm-12">
					
			<div class="inpute">
			<div style="width:120px;" class="i_container">
				<p style="padding:px;text-align: center; color:white; margin-top: 3px;">Clé</p>
			</div>
			<input style="width:60%" type="text" name="key">

</div>
</div>
	<div class="formulaire co-lg-12 col-md-12 col-sm-12">
					
			<div class="inpute">
			<div style="width: 120px;" class="i_container">
				<p style="padding:px;text-align: center; color:white; margin-top: 3px;">Marque</p>
			</div>
			<input style="width:60%" type="text" name="marque">

</div>
</div>
<div class="formulaire co-lg-12 col-md-12 col-sm-12">
					
			<div class="inpute">
			<div style="width:120px;" class="i_container">
				<p style="padding:px;text-align: center; color:white; margin-top: 3px;">Prix</p>
			</div>
			<input style="width:60%" type="text" name="prix">

</div>
</div>
<div class="formulaire co-lg-12 col-md-12 col-sm-12">
					
			
			
			<input style="width:60%" type="file" name="image">


</div>
<input style="position:relative; left:24%" id="sub" type="submit" name="submit" value="Ajouter">

</div>
</form>
<br><br>
<div class="title"> 
<h1>List des article</h1>
</div>
<br>

<table style="margin-left:35px;">

			<thead>
				<th>Clé</th>
				<th>Marque</th>
				<th>Prix</th>
				<th>Options</th>
			</thead>
			<tbody>
				<?php
				include 'includes/config.php';
				$q = 'SELECT * FROM products' ;
				$req = $bdd->query($q) ;
				while ($data = $req->fetch()) {
					# code...
				?>
				
				<tr>
					<td><?php echo $data['clé'];  ?></td>
					<td><?php echo $data['prix'];  ?></td>
					<td><?php echo $data['marque'];  ?></td>
						<td><?php
						$id = $data['id'] ; 
						echo "
						<a id='delete' href='includes/delete.php?id=$id'>supprimer</a>
						<a id='edit' href='includes/edite.php?id=$id'>modifier</a>
						";

						?>
					</td>
					
				</tr>


			</tbody>
			<?php
			}
			?>
		</table>
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