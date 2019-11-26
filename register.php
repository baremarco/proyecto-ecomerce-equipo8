<!DOCTYPE html>
<html lang="en">
<head>

<?php include("head.php"); ?>

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
  <?php include("footer.php")?>
   <!-- FOOTER -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

