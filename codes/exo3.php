<?php 

//Multiples de 3 compris entre 1 et 1034

/**
 * Un mutiple de 3 est un nombre qui, si on le divise par 3 
 * le reste donne zero. 
 * 
 * Alors que en programmation y a un oppérateur simple qu'on appelle modulo (%) qui permet de trouver automatiquement le reste d'une division.
 * grace à cette opérateur on peut vérifier facilement si le nombre est un multiple de 3
 */

 for( $i = 1034; $i >= 1; $i--){
     if($i % 3 === 0){
          echo $i . "est un multiple de 3";
     }
     echo "\n";
 }