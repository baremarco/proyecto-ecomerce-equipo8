<?php

session_start();

function addInfo($dato){
if($_SESSION){
return $_SESSION["$dato"];
  }
}

if($_POST){
  if($_POST['session'] == "destroy"){
    session_destroy();
  }
  var_dump($_POST['session']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include("head.php"); ?>

    <title>Perfil</title>
</head>
<body>
<?php include("header.php"); ?>
     
     <div class="mx-auto" style="width: 200px;">
      <h2 class="mt-5 ">Perfil</h2>
     <div class="card mb-5 " style="width: 18rem ">
         <img src="img/Forrest-Gump.jpg" class="card-img-top rounded-circle" alt="...">
         <div class="card-body">
           <h5 class="card-title"><Strong>USUARIO</Strong></h5>
           <p class="card-text"><?=addInfo('nombre');?></p>
         </div>
         <ul class="list-group list-group-flush">
           <li class="list-group-item"><?=addInfo('email');?></li>
           <li class="list-group-item">Direccion</li>
           <li class="list-group-item">Dni</li>
                
         </ul>
         <form action="perfil.php" method="POST" >
        <button  type="submit"  class="btn btn-danger col-sm-12 col-md-12 col-lg-12" name="session" value="destroy"><Strong>Salir</Strong></button>
        </form>

       </div>
       </div>


    
    <!-- FOOTER -->
    <?php include("footer.php"); ?>
     <!-- FOOTER -->

       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>