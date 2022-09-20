<?php



//Ceci va créer un tuyau de données entre PHP et la BD grâce à l'objet: new PDO;




    try {


        $mysqlClient = new PDO(//la var $mysqlClient contient l'objet "tuyau".

            sprintf('mysql:host=%s;dbname=%s;port=%s', //%s = trou, ceux-ci seront rempli dynamiquement par le PHP.

            "localhost",

            "login-db",

            3306),

            "root",

            "root"

        );

        //Configuration du tuyau avec setAttribut (gestion des érreurs ds un journal):



        $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(Exception $exception) {

        die('Oops, il y a eu problème : '.$exception->getMessage());

    }



////////////////////////////////////////////////////////////////////////////////////



?>