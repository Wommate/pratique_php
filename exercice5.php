<h3 class="h6 mt-5">
     Exercie 5</h3>
<p>
     Ecrire un programme PHP capable de résoudre une équation du second degré dans R. L’opération
     initiale est
     f(x) = 4x² + Bx + 8
     NB : B=1 mais Si Delta est null ou négatif, reprendre l’opération avec un B++ jusqu’à ce que delta soit
     supérieur à 6
</p>

<div class="row">
     <div class="col border ">
          <div class="h6 text-bold">Explication</div>
          <p>
               Pour résoudre une équation du second degré, nous utiliserons la formule du discriminant (delta) pour déterminer le nombre de solutions et leur nature. L'équation donnée est f(x) = 4x² + Bx + 8, avec B initialisé à 1.

               Nous commencerons par créer une boucle while qui s'exécutera jusqu'à ce que le delta soit supérieur à 6. À chaque itération de la boucle, nous vérifierons le delta en utilisant la formule delta = B² - 4ac, où a est le coefficient de x² (dans notre cas, 4), b est le coefficient de x (B) et c est le terme constant (8).

               Si le delta est nul ou négatif, nous incrémenterons la valeur de B en utilisant l'opérateur d'incrémentation ++. Cela signifie que nous augmenterons la valeur de B de 1 à chaque itération. Nous continuerons ce processus jusqu'à ce que le delta soit supérieur à 6. 🔥 <br>


          </p>
     </div>
     <div class="col border ">
          <div class="h6 text-bold">Solution</div>

          <p>
               <a class="btn btn-primary" data-bs-toggle="collapse" href="#exo5" role="button" aria-expanded="false" aria-controls="exo5">
                    Afficher la solution
               </a>
               <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#exo5" aria-expanded="false" aria-controls="exo5">
                    Caché la solution
               </button>
          </p>
          <div class="collapse" id="exo5">
               <div class="card card-body">
                    <pre class="text-start bg-dark">
                         <code class="text-white">
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
                         </code>
                    </pre>
               </div>
          </div>
     </div>