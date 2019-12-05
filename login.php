<?php include('validaciones.php'); ?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>

<?php include("head.php"); ?>
   <title>Login</title>
</head>

<body class="h-100">
   
   <!-- NAV BAR -->
   <?php include("header.php"); ?>
   <!-- NAV BAR -->

   <div class="container d-flex flex-column h-100">

      <form action="login.php" method="POST">
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
         <button type="submit" class="btn btn-secondary mx-5 col-sm-2 col-md-1 col-lg-1  mt-5">Iniciar</button>
      </form>
       <!-- VALIDACIONES -->
   <ul style="color:red">
  <?php foreach($errores as $error): ?>
      <?= "<li>" . $error ."</li>" ?>
      <?php endforeach ?>
    </ul>
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