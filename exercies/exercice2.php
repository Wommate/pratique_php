<h3 class="h6 mt-5">
     Exercie 2</h3>
<p>
     Écrivez un programme pour afficher le triangle d’etoile suivant en utilisant une boucle for.
     *<br>
     ***<br>
     *****<br>
     *******<br>
     *********<br>
     ***********<br>
     *************<br>
</p>

<div class="row">
     <div class="col border ">
          <div class="h6 text-bold">Explication</div>
          <p>
               ✨✨la logique consiste à utiliser des boucles pour afficher les étoiles et créer un triangle. La première boucle gère le nombre de lignes du triangle, tandis que la deuxième boucle contrôle le nombre d'étoiles à afficher sur chaque ligne.

               Dans le premier code, chaque itération de la deuxième boucle affiche une étoile unique si c'est la première étoile de la ligne, sinon elle affiche deux étoiles. Ainsi, le triangle grandit progressivement avec plus d'étoiles sur chaque ligne.
          </p>
     </div>
     <div class="col border ">
          <div class="h6 text-bold">Solution</div>

          <p>
               <a class="btn btn-primary" data-bs-toggle="collapse" href="#exo2" role="button" aria-expanded="false" aria-controls="exo2">
                    Afficher la solution
               </a>
               <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#exo2" aria-expanded="false" aria-controls="exo2">
                    Caché la solution
               </button>
          </p>
          <div class="collapse" id="exo2">
               <div class="card card-body">
                    <pre class="text-start bg-dark">
                         <code class="text-white">
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
     
     icherNombres(10);
                         </code>
                    </pre>
               </div>
          </div>
     </div>