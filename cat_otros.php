<?php 
include_once("validaciones.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

   <?php include("head.php"); ?>
   
   <title>Otros + Servicios</title>
</head>

<body>
   <!-- NAV BAR -->
   <?php include("header.php"); ?>
   <!-- NAV BAR -->
   
   <!-- CARDS -->
   
   <div class="container container-fluid">
      
      <div class="tittle">
         <h1>Otros + Servicios</h1>
      </div>
      <a href="index.php" class="btn btn-link">Volver a principal</a>
      
      <div class="row  mt-4 mb-4 d-flex justify-content-lg-around justify-content-md-end ">
         <div class="col-lg-3 col-sm-12 col-md-6 mb-4">
            <div class="card" style="width: 18rem;">
               <img src="productos/otros_01.png" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Licenciado en Psicología cognitiva</h5>
                  <p class="card-text">Tratamiento Breve De Activación Conductual Para Depresión</p>
                  <p><b>$700 x hora</b></p>
                  <a href="#" class="btn btn-primary">+info</a>
               </div>
            </div>
         </div>
         
         <div class="col-lg-3 col-sm-12 col-md-6 mb-4">
            <div class="card" style="width: 18rem;">
               <img src="productos/otros_02.png" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Alquiler de casa en San Bernardo</h5>
                  <p class="card-text">Superficie total  120 m² Superficie cubierta 100 m²</p>
                  <p>Ambientes 4</p>
                  <p><b>$25.000 x quincena</b></p>
                  <a href="#" class="btn btn-primary">+info</a>
               </div>
            </div>
         </div>
         
      </div>
   </div>
   <!-- CARDS -->
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>
<!-- FOOTER -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>