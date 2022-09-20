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


    <h4>Exercices Taleaux Associatifs</h4>

        <ul>

            <li> pets= ["john" => "cat", "sophia" => "dog", "Nathalie" = "turtle",  "Nicolas"=> "dog" ];  
             Afficher l'animal de compagnie de Nathalie
            </li>
            
            <li>Afficher les noms de personnes qui ont un chien en utilisant une boucle
            </li>
            
            <li>$maxTempPerYear= array("2018" => 25, "2019" => 30, "2020 => 31,         "2021"=> 32);

             Afficher les années où la température a dépassé 30, à l'aide d'une boucle
            </li>

        </ul>
    
     <h4>Réponses</h4>

        <ul>

        <li>
            <?php

                $pets= ["john" => "cat", "sophia" => "dog", "Nathalie" => "turtle",  "Nicolas"=> "dog" ];
                echo $pets["Nathalie"];

            ?>
        </li>
        
        <li>
            <?php
                
               

                    foreach($pets as $key => $value){
                        if($value == "dog"){
                            echo $key."</br>";
                        }
                    }    
                    /*ARRAY_KEYS*/

                
            ?>
        </li>
        
        <li>
            <?php

                $maxTempPerYear= array("2018" => 25, "2019" => 30, "2020" => 31,    "2021"=> 32);

                foreach($maxTempPerYear as $key => $value){
                    if($value>30){
                        echo $key."</br>";
                    }
                }
            ?>
        </li>
        </ul>

    



    <!-- Footer -->
    
    
    <p>Frontend Dev - Interface3 - 2022</p>

    <p>
        <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
    </p>

</body>
</html>
