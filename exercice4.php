<h3 class="h6 mt-5">
     Exercie 4</h3>
<p>
     Ecrire un programme PHP qui affiche les nombres impairs compris entre 11 et 2343.
</p>

<div class="row">
     <div class="col border ">
          <div class="h6 text-bold">Explication</div>
          <p>
               "Pour afficher les nombres impairs compris entre 11 et 2343,
               le principe est simple 😍 : un nombre impair est un nombre qui ne peut
               pas être divisé de manière égale par 2, laissant un reste de 1 lorsqu'il
               est divisé par 2.<br>
               Nous allons utiliser une boucle pour parcourir tous les nombres entre 11 et 2343.
               À chaque itération de la boucle, nous allons vérifier si le nombre est impair en
               utilisant l'opérateur modulo (%). Si le reste de la division par 2 est égal à 1,
               alors le nombre est impair et nous l'affichons. 🔥 <br>


          </p>
     </div>
     <div class="col border ">
          <div class="h6 text-bold">Solution</div>

          <p>
               <a class="btn btn-primary" data-bs-toggle="collapse" href="#exo4" role="button" aria-expanded="false" aria-controls="exo4">
                    Afficher la solution
               </a>
               <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#exo4" aria-expanded="false" aria-controls="exo4">
                    Caché la solution
               </button>
          </p>
          <div class="collapse" id="exo4">
               <div class="card card-body">
                    <pre class="text-start bg-dark">
                         <code class="text-white">
    for($i = 2343; $i >= 11; $i--){

          if($i % 2 !== 0){
               echo $i . " est nu nombre impaire";
          }

          echo "\n";
     }
                         </code>
                    </pre>
               </div>
          </div>
     </div>