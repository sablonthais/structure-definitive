<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulaires</title>
</head>
<body>
    
</body>
</html>
    <!--
     *
     * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire. 
     * 
     * Afficher l'addition de ces nombres
     * 
     */ -->
    <form method="POST" action="./traitement.php" >
        
        <h3>Addition</h3>

        <div>
            <label for="firstNumber">Nombre 1 : </label>
            <input type="number" name="fisrtNumber">
        </div>
        
        </br>

        <div>
            <label for="secondNumber">Nombre 2 : </label>
            <input type="number" name="secondNumber">
        </div>
        
        </br>
        
        <div>
            <input type="submit" name="btnAdd" value="Add">
        </div>
        
        <?php

        if(isset($_POST['firstNumber']) && !empty($_POST['firstNumber'])){
            
          

            

        }


        ?>
        
        

    </form>

   













    <!--
     *
     * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire.
     * Elle reçoit aussi un type d'opération : + ou - ou * ou /  
     * 
     * Afficher le calcul de l'opération entrée
     * 
     */ -->









    <!--/**
     *
     * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire. 
     * 
     * Afficher la division de ces nombres
     * 
     */-->











    <!--/**
     *
     * Ecrivez une page qui reçoit un nombre au moyen l'âge d'une personne 
     * au moyen d'un  formulaire. 
     * 
     * Déterminer si la personne est majeure ou mineure
     * 
     */-->









     <!-- /**
     *
     * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire. 
     * 
     * Afficher la multiplication de ces nombres
     * 
     */-->










    <!-- /**
     *
     * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire. 
     * 
     * Afficher la soustraction de ces nombres
     * 
     */-->




