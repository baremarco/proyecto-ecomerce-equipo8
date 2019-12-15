<?php 
include_once("validaciones.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php include("head.php"); ?>
   <title>FAQ</title>
</head>



<body>
   <!-- NAV BAR -->
   <?php include("header.php"); ?>
   <!-- NAV BAR -->
   <div class=" my-3 col-sm-11 col-md-11 col-lg-11 col-form-label">
         <h2><strong>Preguntas frecuentes</strong></h2>
      </div>
   <section class="faq row d-flex justify-content-around">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Cualquiera puede ver los productos?
            </h5>
            
            <p class="card-text">Solo los usuarios que estén registrados en el sitio pueden ingresar, ver y subir productos.</p> 
         </div>
      </div>
      
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Como hago para registrarme?
            </h5>
            <p class="card-text">En la barra de navegación que se encuentra en la parte superior derecha hay una sección de menú que lo llevará a un formulario de registro, complete los datos y un administrador verifica estos datos y habilitará el ingreso.</p>          
         </div>
      </div>
      
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Qué productos puedo publicar?</h5>
            
            <p class="card-text">Cualquier producto legal y que no sea ofensivo para otros colaboradores. El administrador puede dar de baja cualquier publicación que considere que no cumple los requisitos éticos del sitio sin previo aviso.</p>
         </div>
      </div>
      
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Formas de pago?</h5>
            
            <p class="card-text">Las formas de pago son consensuadas entre comprador vendedor.</p>
         </div>
      </div>
      
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Lugar de entrega?</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">El lugar de entrega es consensuada entre comprador vendedor.
            </p>
         </div>
      </div>
      
      <!-- <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Cualquiera puede ver los productos?
            </h5>
            
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
      </div> -->
      
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">¿Devoluciones?</h5>
            <p class="card-text">Son consensuadas entre comprador vendedor</p>
            
         </div>
      </div>
   </section>
   
   
   <!-- FOOTER -->
   <?php include("footer.php"); ?>
   <!-- FOOTER -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>