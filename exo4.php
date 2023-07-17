<?php 

//Afficher les nombre impaire  compris entre 11 et 2343

//Même principe un nombre paire est un nombre divisible par deux , donc le reste sera 0
//le contraire pour nombre impaire

for($i = 2343; $i >= 11; $i--){

     if($i % 2 !== 0){
          echo $i . " est nu nombre impaire";
     }

     echo "\n";
}