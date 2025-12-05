<?php
	require 'vendor/autoload.php';
	use Laminas\Escaper\Escaper;
	$escaper = new Escaper('utf-8');
	require "modeles/ModeleSBProduits.php" ;
	ModeleSBProduits::enregistrerAvis( $escaper ->escapeJs($_POST[ 'commentaire' ]) , $_SESSION[ 'id' ] , $idProduit ) ;
	
	header( "Location: /produits/$idProduit" ) ;

?>
