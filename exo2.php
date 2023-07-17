<?php

//solution 1

for ($i = 1; $i <= 7; $i++) {
     for ($j = 1; $j <= $i; $j++) {
          if ($j == 1) {
               echo '*';
          } elseif ($j > 1) {
               echo '**';
          }
     }
     echo "\n";
}

//solution 2
for ($i = 1; $i <= 7; $i++) {
     $etoiles = ($i == 1)
          ? str_repeat("*", $i)
          : str_repeat("**", $i);
     
     echo $etoiles;
     echo "\n";
}
