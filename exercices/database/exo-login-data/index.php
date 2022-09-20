<?php 
    include_once 'src/db-interface3.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/reset.css">
    <link rel="stylesheet" href="./asset/css/style.css">

    <title>Exo-database-login-interface</title>
</head>
<body>

    <h1>Log In Interface 3 </h1>

    <?php 

        $isFound = false;
        $loginAttempt = 0;
        $connectedUser;

        if(isset($_POST['email'] , $_POST['password'])){

            $loginAttempt++;

            $e_mail = $_POST['email'];
            $pass_word = $_POST['password'];

            $sqlQuery = "
            select *
            from members
            where email = :param_email and password = :param_password
            ";

            $statement = $mysqlClient->prepare($sqlQuery); 
            $statement->execute(array("param_email" => $e_mail, "param_password" => $pass_word));
            $result = $statement->fetchAll(); 

            if($result){
                $isFound = true;
                $connectedUser = $result[0]['lastName'];
                $email = $result[0]['email'];
            }

        }

        if($isFound){
            echo "Bienvenue sur page d'accueil ! $connectedUser ($email)";
        }else {


            
            include_once('views/login.php');


            if(!$isFound && $loginAttempt >=1 ){
                echo "Username and password incorrect! ";
                $loginAttempt = 0;
            }
            
        }



        
    
    
    
    
    ?>

    
    
</body>
</html>