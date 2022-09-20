<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/style.css">
    
    <title>Menu Toukoul</title>
</head>
<body>
    <header id="header">

        <h1>Toukoul</h1>

    </header>
    
    <div>
    
        <?php
        
            echo "<h3>Menu Toukoul</h3>"; 

            $menu= [ "Doro Wot(épicé) : Pilon de poulet fermier et 
                    son oeuf dur à base de berberé.",

                 "Doro Wot Alicha : Pilon de poulet fermier et son oeufs dur à base de curcuma.",

                 "Key Wot (épicé) : Dés de boeuf dans une sauce aux épices et berberé.",

                 "Minchet Alicha : Haché de boeuf au curcuma.",

                 "Minchet Key (épicé) : haché de boeuf au berberé;",

                 "Tickel Gomen Be Sega : Dés de boeuf, chou blanc, carottes, oignons et pommes de terre.",

                 "Gomen Be Sega : Ragoût de oeuf aux épinards.",

                 "Alicha Bere Wot : Dés de boeuf et pommes de terre au curcuma.",

                 "Asa Wot : Cabillaud cuit dans une sauce berberé.",

                ]; 

            $index = 0 ;

            for ( $index = 0 ; $index < 8 ; $index++) {
            echo $menu [$index]."<br/>" ;
         }
        
       
        
        
        ?>
    </div>
    <div>
        <h2>Formulaire</h2>
<!-- théorie > 2-dev-web > formulaire > traitement-fiche.php */
/************************************************************/ -->
       <form method="post">
            <div>   
                <label for="input-firstName">Your First Name : </label>
                <input type="text">

            </div>

            <div>

                <label for="input-lastName">Your Last Name : </label>
                <input type="text">
            </div>
            
            <div>   
                
                <label for="textarea">Your message : </label>
                <input type="textarea">
            
            </div>
            

            <input type="submit" value="Send">
            <input type="reset" value="Reset">

       </form> 
        




    </div>
    





</body>
</html>