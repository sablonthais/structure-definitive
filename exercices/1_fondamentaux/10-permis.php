<?php

/**
 * Ecrivez un programme PHP de sorte 
 * 2 variables booléennes: drivingLicense, car 
 * 
 * 'drivingLicense':  true ou false - détermine si on a le permis ou pas
 * 'car' : true ou false - détermine si on a une voiture ou pas
 * 
 *  Si on a le permis 
 *       
 *             si on a une voiture 
 *                       écrivez "conduisez à la gare"
*               sinon 
*                       écrivez "vous pouvez louer une voiture pas chère
 *  sinon
 *              si on a une voiture 
 *                      écrivez "hors la loi"
 *              
 *              sinon
 *                      écrivez "prenez un villo"
 *             
 *
 *  
 */ 
$drivingLicence = false;
$car = true;

if ($drivingLicence == true){
    if($car == true){
        echo "To the  Train Station !!!";
    }else{
        echo "You can rent a car for a cheap price";
    }

}else{
    if($car == true){
        echo "SHAME ON YOU, OUTLAW ! ";
    }else{
        echo "You can take a VILLO ;)";
    }

}
/* version CHA <3 
*********************
 $drivingLicense = true;

$car = true;

if($drivingLicense   && $car  ){

    echo "conduisez a la gare";

}

else{

    echo " vous pouvez louer une voiture pas chère";

} */


 ?> 