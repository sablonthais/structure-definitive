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

    <h4>Foire aux Questions</h4>

        <div>
            <form method="post" action="formulaire.php">

                <div>
                    <label for="name">Your Name : </label>
                    <input type="text" name="name">
                </div>
                </br>
                
                <div>
                    <label for="question">Your Question : </label>
                    <input type="text" name="question">
                </div>
                </br>

                <input type="submit" value="Send">
                <input type="reset" value="Reset">


            </form>
        </div>
        <?php

            

        ?>
    



    <!-- Footer -->
    
    
    <p>Frontend Dev - Interface3 - 2022</p>

    <p>
        <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
    </p>

</body>
</html>
