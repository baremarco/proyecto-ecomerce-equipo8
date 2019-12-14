<?php 

include('validaciones.php'); 
//INICIO LA VAR GLOBAL SESSION
session_start();

if($_POST){
$archivoSinDec = file_get_contents("usuarios.json");    
$archivoDecodi = json_decode($archivoSinDec, true);

if(is_array($archivoDecodi)){
foreach($archivoDecodi as $usuarios => $usuario){
   //PARA CONTROLAR SI EL MAIL ESTÁ REGISTRADO O NO
   
   foreach($usuario as $detalle){
      //COMPARO SI EL EMAIL CORRESPONDE Y A LA VEZ SI LA PASS ES CORRECTA
      if($_POST['email'] == $detalle['email'] && password_verify($_POST['pass'], $detalle['password'])){
         //si el mail y la password están buenas, LOGEO AL USUARIO
         $_SESSION['nombre'] = $detalle['nombre'];
         $_SESSION['email'] = $detalle['email'];
         $_SESSION['avatar']= $detalle['avatar'];
         //REDIRIGO AL USUARIO A LA PAG DE PERFIL
         header('Location:perfil.php');
         $existeUsuario = true;
         //ECHO AYUDA
         $mensajeUsu = "El usuario corresponde a " . $detalle['nombre'] . ", bienvenido!";
         $errores['login'] = null;
         
         //SI NO SON CORRECTAS, MUESTRO UN MENSAJE DE ERROR
      }
      if($_POST['email'] == $detalle['email'] && !password_verify($_POST['pass'], $detalle['password'])){
          $existeUsuario = true;
         $errores['login'] = "Contraseña inválida, intente nuevamente";
        
      }
      
   }
   if(!$existeUsuario){
      //SI NO EXISTE EL MAIL, REDIRIJO AL USUARIO DESPUÉS DE 3 SEGUNDOS ALA PÁGINA DE REGISTRO
      $errores['login'] = "No existe ningún registro asociado a éste mail, " . $_POST['email'] . ", por favor regístrese." ;
      header('refresh:3;url=register.php');
     
   }
}

//$existeUsuario = false;
}

}
/* var_dump($existeUsuario);
var_dump($_SESSION); */
?>

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

      <form  action="login.php" method="POST">
      <div class=" my-3 col-sm-11 col-md-11 col-lg-11 col-form-label">
         <h2><Strong>Inicie Sesión</Strong></h2>
       </div>
         <div class="form-group row">
           
            <label for="staticEmail" class="col-sm-2 col-form-label mt-10">Email</label>
            <div class="col-sm-8 col-md-8">
               <input type="email" class="form-control" id="staticEmail" name="email" placeholder="correo@ejemplo.com" value="<?php persistir('email')?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-8 col-md-8">
               <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Escriba su contraseña aquí">
            </div>
         </div>
         <button type="submit" class="btn btn-secondary mx-5 col-sm-2 col-md-1 col-lg-1  mt-5">Iniciar</button>
      </form>
       <!-- VALIDACIONES -->
      <ul style="color:red">
         <?php foreach($errores as $error): ?><br>
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