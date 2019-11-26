<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/style.css">
   <script src="https://kit.fontawesome.com/20d3506334.js" crossorigin="anonymous"></script>
   
   <title>Contact</title>
</head>
<body>
   
<?php include("header.php"); ?>
   <!-- Material form contact -->
   <div class="card ">
      
      <div class="container col-md-4 mt-4 mb-3">
         
         <div class=" my-3 col-sm-11 col-md-11 col-lg-11 col-form-label">
            <h2><strong>Contactanos</strong></h2>
         </div>
         
         <!--Card content-->
         <div class="card-body px-lg-5 pt-0">
            
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!">
               
               <!-- Name -->
               <div class="md-form mt-3">
                  <input type="text" id="materialContactFormName" class="form-control">
                  <label for="materialContactFormName">Name</label>
               </div>
               
               <!-- E-mail -->
               <div class="md-form">
                  <input type="email" id="materialContactFormEmail" class="form-control">
                  <label for="materialContactFormEmail">E-mail</label>
               </div>
               
               <!-- Subject -->
               
               
               <!--Message-->
               <div class="md-form">
                  <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                  <label for="materialContactFormMessage">Mensaje</label>
               </div>
               
               
               
            </div>
            
            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>
            
         </form>
         <!-- Form -->
         
      </div>
      
   </div>
</div>
<!-- Material form contact -->






<!-- FOOTER -->
<footer class="page-footer font-small blue pt-4">
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
                  <i class="far fa-envelope" > xxxxxxx@gmail.com</i>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>