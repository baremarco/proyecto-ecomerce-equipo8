<?php 
include_once("validaciones.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
   <?php include("head.php"); ?>
   
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
<?php include("footer.php"); ?>
   <!-- Copyright -->
   
</footer>
<!-- FOOTER -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>