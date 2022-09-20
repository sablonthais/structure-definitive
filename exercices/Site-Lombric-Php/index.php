<?php include_once 'src/tryblock.php'  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/reset.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Lombric</title>
</head>

<body>
    <div class="container">
        <header class="hero">

            <img src="./asset/img/lombric-logo.jpg" alt="Logo Lombric">

        </header>

        <section class="card">


            <h1 class="menu">Menu</h1>


            <div class="corp-menu">
                <article>
                    <h2>Les Entrées (àpt de 17:30)</h2>
                    <ul>
                        <li>Houmous de Haricots Blanc, Poivrons, Paprika Fumé</li>
                        <li>Crème de Betterave, Chèvre, Tahini</li>
                        <li>Houmous</li>
                        <li>Assiette de Fromages Affinés</li>
                    </ul>
                </article>

                <article>
                    <h2>Les Plats à Partager (àpt de 19:30)</h2>
                    <ul>
                        <li>Radis Roses, Beurre, Fleur de Sel</li>
                        <li>Figues, Chèvre Frais, Miel, Noisettes</li>
                        <li>Poivrons, Fêta, Basilic</li>
                        <li>Blettes, Anchois, Parmesan</li>
                        <li>Aubergines, Miel, Miso</li>
                        <li>Haricots verts, Pommes de Terres, Pleurottes, Lard Fumé, Oeuf Poché </li>
                        <li>Poulet, Abricots, Amamndes, Citrons Confits, Semoule </li>
                        <li>Tomates Coeur de Boeuf, Nectarines, Romaine, Burrata, Basilic, Noix </li>
                    </ul>
                </article>

                <article>
                    <h2>Les Desserts</h2>
                    <ul>
                        <li>Gâteau Abricots-Noisettes</li>
                        <li>Panna cotta Vanille-Coulis de Rhubarbe </li>
                    </ul>
                </article>
            </div>

        </section>

        <section class="form">

            <h3 class="titre-form">S'inscrire</h3>

            <?php

            $isFound=false;
                
                if(isset($_POST['username'], $_POST['password'])){

                    $usrName = $_POST['username'];
                    $pwd = $_POST['password']; //on a reçu les valeur des input rempli par l'utilisateur

                    $sqlQuery = "
                    select * 
                    from membre
                    where username = :param_username and password = :param_password 
                    ";


                    $statement = $mysqlClient->prepare($sqlQuery);
                    $statement->execute(array("param_username" => $usrName , "param_password" => $pwd));
                    $result = $statement -> fetchAll();

                    if($result){
                        $isFound = true;
                        $connectedUser = $result[0]['username'];
                        $db_passwd = $result[0]['password'];

                    }
                }
                
                
                
                
                

                if($isFound){
                    echo "Bienvenue sur la page du Lombric";
                }else{
                    include_once('./views/login.php');
                }





            ?>

        </section>



    </div>
</body>

</html>