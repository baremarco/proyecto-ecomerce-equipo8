<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/style.css">
   <script src="https://kit.fontawesome.com/20d3506334.js" crossorigin="anonymous"></script>

   <title>Login</title>
</head>

<body class="h-100">
   <!-- NAV BAR -->
   <?php include("header.php"); ?>
   <!-- NAV BAR -->

   <div class="container d-flex flex-column h-100">
      <form>
         <div class="form-group row">
            <div class="col-sm-11 col-md-11 col-lg-11 col-form-label">
               <h2>Inicie Sesión</h2>
            </div>
            <label for="staticEmail" class="col-sm-2 col-form-label mt-10">Email</label>
            <div class="col-sm-8 col-md-8">
               <input type="email" class="form-control" id="staticEmail" placeholder="correo@ejemplo.com">
            </div>
         </div>
         <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-8 col-md-8">
               <input type="password" class="form-control" id="inputPassword" placeholder="Escriba su contraseña aquí">
            </div>
         </div>
         <button type="button" class="btn btn-secondary mx-5 col-sm-2 col-md-1 col-lg-1  mt-5">Iniciar</button>
      </form>
   </div>
  
<!-- FOOTER -->
<footer class="page-footer font-small blue mt-auto">
      ​
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
                     <i class="far fa-envelope" > <a href="mailto:mitienda@gmail.com">mitienda@gmail.com</a></i>
                     ​
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

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>