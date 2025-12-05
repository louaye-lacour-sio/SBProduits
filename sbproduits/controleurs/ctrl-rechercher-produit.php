<?php


	$libelleProduit = htmlspecialchars($_POST[ "libelle" ], ENT_QUOTES, 'UTF-8');
	
	require "modeles/ModeleSBProduits.php" ;
	$produits = ModeleSBProduits::getProduitsByLibelle( $libelleProduit ) ;
	
	require "vues/vue-produits-recherches.php" ;

?>
