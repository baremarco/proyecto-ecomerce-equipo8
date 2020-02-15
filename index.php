<?php 
include_once("validaciones.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php include("head.php"); ?>
   <title>Home</title>
</head>

<body>
   <!-- NAV BAR -->
  <?php include("header.php"); ?>
   <!-- NAV BAR -->
   
   <!-- CARRUSEL -->    
   <div class="container-fluid ">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100 " src="img/imagen-inicio_01.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="img/imagen-inicio_02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="img/imagen-inicio_03.jpg" alt="Third slide">
            </div>
         </div>
      </div>
      

      <!-- CARRUSEL -->
      <!--QUIENES SOMOS-->
      <div class="jumbotron">
         <h1 class="display-4">HOME- QUIENES SOMOS</h1>
         
         <hr class="my-4">
         <p>Bienvenidos a la Círculo Privado de Compra  - Venta de Artículos.</p>
         <p>Tenemos algo que vender, quizás mi compañero de oficina o de la oficina de al lado está buscando justo lo mismo, sin gastos de envíos ni comisiones. Conociendo a quien nos lo vende así nace InterTienda, un círculo de transacciones de productos dentro de tu ámbito de trabajo.</p>
         <p>¿Cómo acceder? Sencillo, te registrás y un administrador valida que pertenecés a la empresa, luego de esto te llega el email y ya puedes publicar y ver los productos.</p>

       </div>

      <!--QUIENES SOMOS-->

      <!-- CARDS -->
      <div class="container container-fluid">
         
         
         <div class="row  mt-4 mb-4 d-flex justify-content-lg-around justify-content-md-end ">



            <div class="col-lg-3 col-sm-12 col-md-6 mb-4">
               <div class="card" style="width: 18rem;">
                  <img src="./img/cateroria_tecnologia.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Tecnologia</h5>
                     <p class="card-text">Cualquier equipo tecnologico que quieras comprar</p>
                     <a href="cat_tecno.php" class="btn btn-primary">Ir</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-6 mb-4">
               <div class="card" style="width: 18rem;">
                  <img src="./img/cateroria_vestimenta.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Vestimenta</h5>
                     <p class="card-text">Cualquier ropa o calzado que quieras comprar</p>
                     <a href="cat_vestimenta.php" class="btn btn-primary">Ir</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-6 mb-4">
               <div class="card" style="width: 18rem;">
                  <img src="./img/cateroria_otros.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Otros + Servicios</h5>
                     <p class="card-text">Otros productos mas servicios ofrecidos</p>
                     <a href="cat_otros.php" class="btn btn-primary">Ir</a>
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