<?php 
include_once('validaciones.php'); 
session_start();
  //PARA GUARDAR CADA USUARIO EN UN ARCHIVO JSON
if($_POST){

  $users = [
      'usrNombre' => $_POST['nombre'],
      'usrEmail' => $_POST['email'],
      'usrPassword' => password_hash($_POST['pass'], PASSWORD_DEFAULT),
      'usrCelular' => $_POST('celular'),
      'usrFechaNacimiento' => $_POST('fecha_nac'),
      'usrEmpresa'=>$_POST('empresa'),
      'usrCuilEmpresa' =>$_POST('cuil_empresa')
  ];
  //obtener contenido del JSON
  $archivoSinDec = file_get_contents("usuarios.json");    
  $archivoDecodi = json_decode($archivoSinDec, true);
      //CONDICIONAL QUE VERIFICA QUE NO EXISTE OTRA CUENTA CON EL MISMO MAIL
  if(is_array($archivoDecodi)){
    foreach($archivoDecodi as $usuarios => $usuario){
       foreach($usuario as $detalle){
         
          //COMPARO SI EL EMAIL CORRESPONDE O NO PARA REGISTRAR
          if($_POST['email'] == $detalle['email']){
            // var_dump($detalle['email']);
            $validado = false;
            $errores['email'] = "este email ya esta registrado";

            $json = json_encode($archivoDecodi);

            file_put_contents("usuarios.json",$json . PHP_EOL);
          }
       }
      }
    }


  //condicional que me dice SI los archivos estan correctos(está en las validaciones.php) LUEGO INCLUYO EL USUARIO EN EL JSON
  if($validado){
            $nombreAvatar = guardarAvatar();
            $users['avatar'] = $nombreAvatar;
            $archivoDecodi["usuarios"][] = $users;
            //codifico mi usuario a un archivo JSON
            $json = json_encode($archivoDecodi);
            file_put_contents("usuarios.json",$json . PHP_EOL);

            $_SESSION['nombre'] = $users['nombre'];
            $_SESSION['email'] = $users['email'];
            $_SESSION['avatar']= $users['avatar'];
            header('Location:perfil.php');
            
  }
 
    }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include("head.php"); ?>

  <title>Registro</title>
</head>
<body>
  
<?php include("header.php"); ?>
  
  <div class="container">
 

    <form action="register.php" method="POST" enctype="multipart/form-data">  
      <div class=" my-3 col-sm-11 col-md-11 col-lg-11 col-form-label">
        <h2><strong>Nuevo Registro</strong></h2>
      </div>
      
      <div class="form-group row my-5">
        <div class="col col-sm-12 col-md-5 col-lg-5">
          <input type="text" class="form-control col-sm-10 col-md-10" placeholder="Nombre" name="nombre" value="<?= persistir("nombre",$errores)?>" required>
        </div>
          <div class="col col-sm-12 col-md-5 col-lg-5">
              <input type="text" class="form-control col-sm-10 col-md-10" placeholder="Apellido" name="apellido" value="<?= persistir("nombre",$errores)?>" required>
          </div>
      </div>
        <div class="form-group row my-5">
            <div class="col col-sm-12 col-md-5 col-lg-5">
                <input type="text" class="form-control col-sm-10 col-md-10" placeholder="Celular" name="celular" value="<?= persistir("nombre",$errores)?>" required>
            </div>
        <div class="col col-sm-12 col-md-5">
            <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="Email*" name="email" value="<?=persistir("email",$errores)?>" required>
        </div>
        </div>
    
      <div class="form-group row my-5">
        <div class="col col-sm-12 col-md-5 col-lg-5">
          <input type="password" class="form-control col-sm-10 col-md-10" placeholder=" Nueva contraseña" name="pass" required>
        </div>
        <div class="col col-sm-12 col-md-5">
          <input type="password" class="col-sm-10 col-md-10 form-control" placeholder="Confirme contraseña" name="repass" required>
        </div>
      </div>
        <div class="form-group row my-5">
            <div class="col col-sm-12 col-md-5" >
                <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="Fecha de nacimiento" name="fecha_nac" required>
            </div>
            <div class="col col-sm-12 col-md-5 col-lg-5">
                <input type="file" class="form-control col-sm-10 col-md-10" name="avatar" required>Foto del perfil
            </div>

        </div>
        <div class="form-group row my-5">
            <div class="col col-sm-12 col-md-5" >
                <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="Empresa donde trabaja" name="empresa" required>
            </div>
            <div class="col col-sm-12 col-md-5" >
                <input type="text" class="col-sm-10 col-md-10 form-control" placeholder="CUIL de la empresa" name="cuil_empresa" required>
            </div>

        </div>

      <div class="form-group col">
        <small>(*) Campos obligatorios</small>
      </div>
       <!-- VALIDACIONES -->
      <ul style="color:red;">
         <?php foreach($errores as $error): ?>
            <?= "<li>" . $error ."</li>" ?>
         <?php endforeach ?>
       </ul>
      <div class="form-group row">
        <button type="submit" class="btn btn-secondary mx-5 col-sm-2 col-md-2 col-lg-2 mt-4">Registrar</button>
      </div>
      
    </form>
    <div style="height:15vh;">
    </div>
  </div>
  <!-- FOOTER -->
  <?php include("footer.php")?>
   <!-- FOOTER -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

