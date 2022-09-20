<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
     <!-- Header -->

  <img src="img/logo-if3.png" alt="Logo Interface 3">
    <h1>Mon petit Tuto PHP</h1>


    <!-- Navigation menu -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="variables.php">Variables</a></li>
            <li><a href="conditions.php">Structures Conditionnelles</a></li>
            <li><a href="boucles.php">Boucles</a></li>
            <li><a href="tableauxnum.php">Tableaux Numérotés</a></li>
            <li><a href="tableauxass.php">Tableaux Associatifs </a></li>
            <li><a href="formulaire.php">Formulaire</a></li>
            <li><a href="question.php">Questions</a></li>
            <!-- continue here... -->

        </ul> 
    </nav>

    <h4>Exercices Boucles </h4>

    <ul>
        <li>Remplissez les 3 petits points de sorte qu'on affiche le contenu 
        de la variable $i tant que $i est strictement inférieur à 7 
            $i = 1;

            ...($i ... 7){
                echo $i;
                ...
            }
        </li>
        
        <li>Ecrivez une boucle "while" qui permet de compter jusqu'à 45.</li>

        <li> Remplissez les 3 petits points pour créer une boucle qui compte jusque 20
            ... ($i = 0; $i < 20; ...) { 
                echo $i;
            }
        </li>

        <li>Remplissez les 3 petits points pour parcourir le tableau de fruits
    
        $fruits = ["banana", "grenade", "blueberry", "mango"]; 

        ...($fruits ... $aFruit) {
                echo $aFruit;
            }
        </li>
    </ul>

    <h4>Réponses</h4>
    
    <ul>
        <li>
            <?php

            for($i=0 ; $i<=7 ; $i++){
            echo $i;
            }
            ?>
        </li>
        
        <li>
            <?php
            $number = 1;
            while ($number <= 45){
                echo $number;
                $number++;
            }
            ?>
        </li>
        
        <li>
            <?php
            for ($index = 0 ; $index < 20 ; $index++){
                echo $index +1; 
            }
            ?>
        </li>
        
        <li>
            <?php

                $fruits = ["banana", "grenade", "blueberry", "mango"];
                
                foreach ($fruits as $aFruit){
                    echo $aFruit."</br>";
                }

            ?>
        </li>
    </ul>
    
</body>
</html>