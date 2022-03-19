<?php 	

try {
  $bdd = new PDO("mysql:host=HOST;dbname=DATA_BASE_NAME", 'USERNAME', 'PASSWORD');
  
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "impossible de se connecter a la base de donnée: " . $e->getMessage();
}

 ?>

 
