<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://kit.fontawesome.com/20d3506334.js" crossorigin="anonymous"></script>

  <title>Registro</title>
</head>
<body>
  
<?php include("header.php"); ?>
  
  <div class="container">
    
    <form>  
      <div class=" my-3 col-sm-11 col-md-11 col-lg-11 col-form-label">
        <h2><strong>Nuevo Registro</strong></h2>
      </div>
      
      <div class="form-group row my-5">
        <div class="col col-sm-5 col-md-5 col-lg-5">
          <input type="text" class="form-control col-sm-10 col-md-10" placeholder="Nombre*" name="nombre" required>
        </div>
        <div class="col col-sm-5 col-md-5">
          <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="Apellido*" required name="apellido">
        </div>
      </div>
      
      <div class="form-group row my-5">
        <div class="col col-sm-5 col-md-5 col-lg-5">
          <input type="text" class="form-control col-sm-10 col-md-10" placeholder="Teléfono" name="telefono">
        </div>
        <div class="col col-sm-5 col-md-5">
          <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="Email*" name="email">
        </div>
      </div>
      
      <div class="form-group row my-5">
        <div class="col col-sm-5 col-md-5 col-lg-5">
          <input type="text" class="form-control col-sm-10 col-md-10" placeholder=" Nueva contraseña*" name="password" required>
        </div>
        <div class="col col-sm-5 col-md-5">
          <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="Confirme contraseña*" name="confirmPassword">
        </div>
      </div>
      
      <div class="form-group col">
        <span>(*) Campos obligatorios</span>
      </div>
      
      <div class="form-group row">
        <button type="submit" class="btn btn-secondary mx-5 col-sm-2 col-md-2 col-lg-2 mt-4">Registrar</button>
      </div>
      
    </form>
  </div>
  <!-- FOOTER -->
  <footer class="page-footer font-small blue pt-4">
      
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
         
         <!-- Grid row -->
         <div class="row">
            
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
               
               <!-- Content -->
               <h5 class="text-uppercase">intertienda</h5>
               
            </div>
            <!-- Grid column -->
            
            <hr class="clearfix w-100 d-md-none pb-3">
            
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
               
               <!-- Links -->
               <h5 class="text-uppercase">mapa sitio</h5>
               
               <ul class="list-unstyled">
                  <li>
                     <a href="#">Home</a>
                  </li>
                  <li>
                     <a href="#!">FAQ</a>
                  </li>
                  <li>
                     <a href="#!">Login</a>
                  </li>
                  <li>
                     <a href="#!">Registro</a>
                  </li>
               </ul>
               
            </div>
            <!-- Grid column -->
            
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
               
               <!-- Links -->
               <h5 class="text-uppercase">Contacto</h5>
               
               <ul class="list-unstyled">
                  <li>
                     <a href="#!"><i class="fab fa-facebook-f" ></i></a>
                  </li>
                  <li> 
                     <a href="#!"><i class="fab fa-instagram" ></i></a>
                  </li>
                  <li>
                     <i class="far fa-envelope" > xxxxxxx@gmail.com</i>
                     
                  </li>
                  <li>
                     <i class="fas fa-phone" > 11-0123-4561</i>
                  </li>
               </ul>
               
            </div>
            <!-- Grid column -->
            
         </div>
         <!-- Grid row -->
         
      </div>
      <!-- Footer Links -->
      
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright Equipo 8 Digital House:
         
      </div>
      <!-- Copyright -->
      
   </footer>
   <!-- FOOTER -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
