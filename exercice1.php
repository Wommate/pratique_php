<h3 class="h6 mt-5">
     Exercie 1</h3>
<p>
     Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive
</p>

<div class="row">
     <div class="col border ">
          <div class="h6 text-bold">Explication</div>
          <p>
               Pour résoudre cet exercice, nous allons utiliser une méthode appelée "récursivité" 😄. La récursivité est un concept de programmation où une fonction s'appelle elle-même.
               Dans notre cas, nous allons créer une fonction qui s'appelle "afficherNombres"
               Cette fonction prendra un argument, "nombre", qui représente le nombre actuel à afficher. (10 dans notre cas)
               À l'intérieur de la fonction, nous aurons une condition qui vérifie si le "nombre" est supérieur à 1. Si c'est le cas, nous affichons le nombre actuel en utilisant une fonction d'affichage (comme "echo")
               et ensuite, nous appelons à nouveau la fonction "afficherNombres" avec le nombre décrémenté de 1. (nombre - 1)
          </p>
     </div>
     <div class="col border ">
          <div class="h6 text-bold">Solution</div>

          <p>
               <a class="btn btn-primary" data-bs-toggle="collapse" href="#exo1" role="button" aria-expanded="false" aria-controls="exo1">
                    Afficher la solution
               </a>
               <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#exo1" aria-expanded="false" aria-controls="exo1">
                    Caché la solution
               </button>
          </p>
          <div class="collapse" id="exo1">
               <div class="card card-body">
                    <pre class="text-start bg-dark">
                         <code class="text-white">
     function afficherNombres($n){ 
     if($n > 0 ){
     echo "$n \n";
     }
     afficherNombres(--$n);
     }
     afficherNombres(10);
                         </code>
                    </pre>
               </div>
          </div>
     </div>