<?php
    
    $client = [
        "nom" => "Alfreds Futterkiste", 
        "adresse" => "Obere Str.",
        "pays" => "Allemagne",
        "ville" => "Berlin"
    ]; 


    /**
     * Afficher le nom 
     */

     echo $client["nom"]. "<br/>" ;


     /**
     * Afficher l'adresse 
     */
    echo $client["adresse"]. "<br/>" ;

     /**
      * Parcourez les clé-valeurs, avec une boucle foreach
      */
    foreach($client as $key => $value){
        echo "<h3>$key :</h3>";
        echo "<p>$value </p>";
    }


     /**
     * Ajouter code postal client 
     */
    $client['codePostal'] = 1170;

     /**
     * Afficher la date de naissance. La date sera de format textuelle : jj-mm-aaaa
     */
    $client['dateDeNaissance'] = "05-07-2022";
    echo $client['dateDeNaissance'];
     


     /**
      * Créer une tableau indexé, composé de 3 clients, dont vous choisirez les valeurs de votre choix. 
      *    Voir exemple dans "fournisseurs.php" */ 
      

        /**
       * Parcourez ce tableau indexé avec un boucle for en affichant la liste des clients
       */
        $clients = [ 
         [
            "nom" => "Princess Consuela bananahammok",
            "addresse" => "Rue du Livourne",
            "ville" => "Bruxelles",
            "pays" => "Belgique"
         ],  
        
            [
            "nom" => "Chaïmae Badass",
            "addresse" => "Rue du Bailli",
            "ville" => "Bruxelles",
            "pays" => "Belgique"
         ],  
        
         [
            "nom" => "Ellie Jolie",
            "addresse" => "Place du Sablon",
            "ville" => "Bruxelles",
            "pays" => "Belgique"
         ]
         ];

    $nombreClients = count($clients);
    echo "Nombre de Clients = $nombreClients </br>";

    for($i=0 ; $i<$nombreClients ; $i++){
        echo ("<h3>Client : </h3> <p>".$clients[$i]['nom']."</p>");
        echo ("<h3>Adresse : </h3> <p>".$clients[$i]['addresse']."</p>");
        
    }
    




?> 