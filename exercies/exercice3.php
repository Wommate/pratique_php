<h3 class="h6 mt-5">
     Exercie 3</h3>
<p>
     Ecrire un programme PHP qui affiche les multiples de 3 compris entre deux autres entiers 1 et
     1034
</p>

<div class="row">
     <div class="col border ">
          <div class="h6 text-bold">Explication</div>
          <p>
               Un multiple de 3 est un nombre qui, lorsqu'on le divise par 3,
               ne laisse aucun reste. En programmation, on a la chance d'utiliser
               un opérateur magique appelé modulo (%), qui nous donne automatiquement
               le reste d'une division.😍 <br>
               Par exemple, prenons le nombre 15. Si on le divise par 3, on obtient 5,
               sans aucun reste. Si on utilise l'opérateur modulo (%) en écrivant 15 % 3,
               le résultat sera 0. C'est un signe évident que 15 est bien un multiple de 3 ! <br>
               Alors, grâce à cet opérateur modulo (%), on peut facilement et amusamment vérifier
               si un nombre est un multiple de 3. C'est comme un superpouvoir de la programmation
               qui nous permet de résoudre rapidement ce genre de question mathématique."

          </p>
     </div>
     <div class="col border ">
          <div class="h6 text-bold">Solution</div>

          <p>
               <a class="btn btn-primary" data-bs-toggle="collapse" href="#exo3" role="button" aria-expanded="false" aria-controls="exo3">
                    Afficher la solution
               </a>
               <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#exo3" aria-expanded="false" aria-controls="exo3">
                    Caché la solution
               </button>
          </p>
          <div class="collapse" id="exo3">
               <div class="card card-body">
                    <pre class="text-start bg-dark">
                         <code class="text-white">
     for( $i = 1034; $i >= 1; $i--){
          if($i % 3 === 0){
               echo $i . "est un multiple de 3";
          }
          echo "\n";
     }
                         </code>
                    </pre>
               </div>
          </div>
     </div>