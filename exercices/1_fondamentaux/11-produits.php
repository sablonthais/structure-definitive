<?php

    $produit = [
        "nomProduit" => "Raisin",
        "prix" => 10.2
    ]; 


    /**
     * Afficher le nom du produit
     */  
    /**
     * Afficher le prix 
     */
    /**
     * Afficher le prix majoré de 10% 
     */
    foreach($produit as $key => $value){
        
        if($key == "nomProduit"){
            echo "le nom du produit : $value <br/>";
        }
        if($key == "prix"){
            echo "le prix du produit : $value <br/>";
        }
        if($key == "prix"){
            echo "le prix majoré de 10% est de". $value+(10*10.2/100). "<br/>";
        }
    }
        
   
     


     /**
      * Parcourez les clé-valeurs, avec une boucle foreach
      */


     /**
     * Afficher une nouvelle entrée: unité : (sachet, pièce, kilo) 
     */


     
     /**
      * Créer une tableau indexé, composé de 3 fournisseurs, dont vous choisirez les valeurs de votre choix. 
      *    Voir exemple dans "fournisseurs.php" 
      */


    /**
       * Parcourez ce tableau indexé avec un boucle for en affichant la liste des produits
    */




?>
