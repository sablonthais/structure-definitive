<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <h2>Exercices Variables, Opérations - Bonus</h2>

        <h4>Variable valide</h4>
        <?php
            /**
             * Parmi les variables suivantes, lesquelles sont valides en PHP ? 
             * 
             * $uneVar, $_uneVar, $ma_var, $HELLO, $var!, $1var et $var1
             */
            $uneVar; //valide
            $_uneVar; //valide
            $ma_var; //valide
            $HELLO; //valide
            // $var! pas valide
            // $1var; pas valide
            $var1; // valide

        ?>

        <h4>Somme</h4>

        <?php
            $prixFarine = 15;
            $prixCourgette = 12;
            $prixBanane = 9;
            $somme = $prixBanane + $prixCourgette + $prixFarine; //modifier pour calculer la somme
            echo ' La somme est de '.$somme;
        ?>

        <h4>Capacité train</h4>
        

        <?php
           
            $nombrePassagersParWagon = 20;
            $nombreWagons = 4;
            $totalPassagers = $nombrePassagersParWagon * $nombreWagons; //modifier pour calculer le prix nombreWagons 
            echo 'Le total des passagers est de '.$totalPassagers.' personnes ';
         ?>
        

    
</body>
</html>


