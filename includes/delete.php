<?php
ob_start();
include 'config.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'] ;
	$q = 'DELETE  FROM products WHERE id = ?' ;
	$req = $bdd->prepare($q) ;
	$req->execute([$id]) ;
	header('location:../add_article.php') ; 
ob_end_flush();
}
