<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
     <title>TP PHP MiO 3</title>
</head>

<body>
     <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
               <a class="navbar-brand" href="#">
                    <img src="./mio.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
               </a>
               <h1 class="text-center mx-auto h1">
                    TP Sites web dynamiques</h1>
          </div>

     </nav>

     <main>
          <div class="container w-75">
               <h2 class="text-center h2 mt-5">
                    Premier serie bases et notions algorithmiques</h2>

               <?php
               require('exercice1.php');
               ?>
               <hr class="border border-danger border-2 opacity-50 mt-5">
               <?php
               require('exercice2.php')
               ?>
               <hr class="border border-success border-2 opacity-50 mt-5">
               <?php
               require('exercice3.php')
               ?>
               <hr class="border border-info border-2 opacity-50 mt-5">
               <?php
               require('exercice4.php')
               ?>
               <hr class="border border-warning border-2 opacity-50 mt-5">
               <?php
               require('exercice5.php')
               ?>
               <hr class="border border-black border-2 opacity-50 mt-5">
               <?php
               require('exercice6.php')
               ?>

          </div>
          </div>
     </main>

     
          <footer class=" d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
               <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                         <svg class="bi" width="30" height="24">
                              <use xlink:href="#bootstrap" />
                         </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Lib'scode, powered with 💟 </span>
               </div>
          </footer>
     

</body>

</html>