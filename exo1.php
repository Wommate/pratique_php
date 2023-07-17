<?php

function afficherNombres($n) {
    
     if($n > 0 ){
          echo "$n \n";
     }

     afficherNombres(--$n);

}


afficherNombres(10);

