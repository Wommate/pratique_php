<?php

/**
 * ecrire un programme capavle de résoudre une équation du second degrée
 * f(x) = 4x² +Bx + 8
 */

/**
 * ETAPE DE RESOLUTION 

  Identifiez les valeurs de a, b et c dans votre équation.
Calculez le discriminant Δ = b^2 - 4ac.
Si Δ > 0, l'équation a deux solutions réelles distinctes.
Si Δ = 0, l'équation a une solution réelle unique.
Si Δ < 0, l'équation n'a pas de solutions réelles.
Utilisez la formule quadratique pour trouver les valeurs de x :
Si Δ > 0, utilisez x = (-b + √Δ) / (2a) et x = (-b - √Δ) / (2a).
Si Δ = 0, utilisez x = -b / (2a).
Si Δ < 0, il n'y a pas de solutions réelles.

 */


 echo "l'équation à résoudre est:" . $function =  "4x² + Bx + 8"; //chaine de caractère 


 echo "\n";

 $b = 1;
 //calcule de delta 

$delta = ($b ** 2) - (4 * 4 * 8);

while($delta < 0 || $delta == 0 || $delta <= 6){
     $b = $b + 1;
     $delta = ($b  ** 2) - (4 * 4 * 8);

}

$x1 = (-$b + sqrt($delta)) / (2 * 4);

$x2 = (-$b - sqrt($delta)) / (2 * 4);

echo " x1 =" .$x1;
echo "\n";  // slash n permet d'aller à la ligne
echo " x2 =" .  $x2;


 
