<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mineur-Majeur</title>
</head>
<body>

    <form action="mineur-majeur.php" method="POST">

        <p>
            <label for="myAge">Age</label>
            <input type="number" name="age" id="myAge">
        </p>

        <p>
            <input type="submit" value="Test-Majorité">
        </p>


    </form>




    <?php

        if(isset($_POST['age'])){
            $age = $_POST['age'];
            if($age >= 18){
                echo "Vous etes majeur.e";
            }else{
                echo "Vous êtes mineur.e";
            }
        }
    /**
     *
     * Ecrivez une page qui reçoit un nombre au moyen l'âge d'une personne 
     * au moyen d'un  formulaire. 
     * 
     * Déterminer si la personne est majeure ou mineure
     * 
     */

    ?>



    
</body>
</html>

   