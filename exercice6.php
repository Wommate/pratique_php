<h3 class="h6 mt-5">
     Exercie 6</h3>
<p>
     Faire un programme pour calculer le factoriel du nombre 15. Par exemple : X ! = 1 x 2 x 3 x ….
     (X-1) x
</p>

<div class="row">
     <div class="col border ">
          <div class="h6 text-bold">Explication</div>
          <p>

               Nous allons utiliser une boucle "for" pour calculer le factoriel du nombre 15. Le factoriel d'un nombre est le produit de tous les entiers positifs inférieurs ou égaux à ce nombre.

               Nous commencerons par initialiser une variable "$factoriel" à 1, car tout nombre multiplié par 1 reste inchangé. Ensuite, nous utilisons la boucle "for" pour itérer de 15 jusqu'à 2, en décrémentant le compteur $i à chaque itération.

               À chaque itération de la boucle, nous multiplions la valeur courante de "$factoriel" par ($i - 1). Cela signifie que nous multiplions le factoriel précédent par le nombre précédent à chaque étape.

          </p>
     </div>
     <div class="col border ">
          <div class="h6 text-bold">Solution</div>

          <p>
               <a class="btn btn-primary" data-bs-toggle="collapse" href="#exo6" role="button" aria-expanded="false" aria-controls="exo6">
                    Afficher la solution
               </a>
               <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#exo6" aria-expanded="false" aria-controls="exo6">
                    Caché la solution
               </button>
          </p>
          <div class="collapse" id="exo6">
               <div class="card card-body">
                    <pre class="text-start bg-dark">
                         <code class="text-white">
     
     $factoriel = 15;

     for ($i = 15; $i >= 2; $i--){

          $factoriel *=  ($i-1);

     }
     echo $factoriel;
                         </code>
                    </pre>
               </div>
          </div>
     </div>