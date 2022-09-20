<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>

    <form action="calculatrice.php" method="POST">

            
        <p>    
            <label for="myFirstNum">Number 1 </label>
            <input type="number" name="firstNum" id="myFirstNum">
        </p>
        
        <p>
            <label for="mySecondNum">Number2</label>
            <input type="number" name="secondNum" id="mySecondNum">
        </p>
        
        <p>
            <label for="myOperation">Operation</label>
            <input type="text" name="operation" id="myOperation">
        </p>
        

            <input type="submit" value="calculer">

        


    </form>
    <?php
    /**
     *
     * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire.
     * Elle reçoit aussi un type d'opération : + ou - ou * ou /  
     * 
     * Afficher le calcul de l'opération entrée
     * 
     */

    
    ?>




</body>
</html>




