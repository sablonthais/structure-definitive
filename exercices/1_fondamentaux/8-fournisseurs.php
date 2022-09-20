<?php

    $fournisseur = [
        "nom" => "IceBreaker",
        "addresse" => "Rue du Livourne",
        "ville" => "Bruxelles"
    ]; 



    /**
     * Afficher l'adresse du fournisseur 
     */
        echo $fournisseur["addresse"]. "<br/>";

     /**
     * Ajouter le pays : Belgique
     */

    $fournisseur["pays"] = "Belgique";

     /**
     * Afficher le nom 
     */
    echo $fournisseur["nom"]. "<br/>";
     /**
     

    
      * Parcourez les clé-valeurs, avec une boucle foreach
      */

    foreach($fournisseur as $key => $value){
        echo "<p>$key. $value <p>" ;
    }

     /**
      * Créer un tableau indexé, composé de 3 fournisseurs, dont vous choisirez les valeurs de votre choix. 
      * De manière similaire que le fournisseur ci-dessus
      * 
      * Exemple: 
      *    $fournisseurs=  [
      *                         [   
      *                            "nom" => "IceBreaker",
      *                             "addresse" => "Rue du Livourne",
      *                             "ville" => "Bruxelles"  
      *                         ],

      *                          [   
      *                            "nom" => "IceBreaker",
      *                             "addresse" => "Rue du Livourne",
      *                             "ville" => "Bruxelles"  
      *                         ], etc. 
      *                     ];
      */

    $fournisseur = [ 
                        [
                            "nom" => "IceBreaker",
                            "addresse" => "Rue du Livourne",
                            "ville" => "Bruxelles"
                        ],  
                        
                        [
                            "nom" => "Le Framboisier Doré",
                            "addresse" => "Rue du Bailli",
                            "ville" => "Bruxelles"
                        ],  
                        
                        [
                            "nom" => "Coco Donuts",
                            "addresse" => "Place du Sablon",
                            "ville" => "Bruxelles"
                        ],  
    
                    ];


      /**
       * Parcourez ce tableau indexé avec un boucle for en affichant la liste des fournisseurs
       */
      /* Utiliser la fonction count de fçon à éviter les bugs (par ex si on ajout ou enlève un/des éléments au tableau ) */
          for( $index = 0 ; $index < count($fournisseur) ; $index++){

        echo $fournisseur [$index] ['nom']."<br/>";
        echo $fournisseur [$index]['addresse']."<br/>";
        echo $fournisseur [$index]['ville']."<br/>";

    }




?> 