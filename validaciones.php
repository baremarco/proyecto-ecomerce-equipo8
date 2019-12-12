<?php

$nombre = "";
$apellido = "";
$email = "";
$pass = "";


if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}

if(isset($_POST['apellido'])){
    $apellido = $_POST['apellido'];
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['pass'])){
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
}
if(isset($_POST['repass'])){
    $pass = password_hash($_POST['repass'], PASSWORD_DEFAULT);
}


$errores = [
    /* 
    acá van los errores
 */
];

if($_POST){
    $validado = true;

    if(!filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){
        $errores['email'] = 'Email inválido <br>';
        $validado = false;
    }

    if(isset($_POST['nombre']) && $_POST['nombre'] == " "){
        $errores['nombre'] = 'Debe escribir un nombre válido <br>';
        $validado = false;
    }

    if(isset($_POST['nombre']) && strlen($_POST['nombre']) < 2 ){
        $errores['nombre2'] = 'El nombre debe contener al menos 2 caracteres <br>';
        $validado = false;
    }

    if(isset($_POST['pass']) && strlen($_POST['pass']) < 4 ){
        $errores['pass'] = 'La contraseña debe contener al menos 4 caracteres <br>';
        $validado = false;
    }

    if(isset($_POST['repass']) && $_POST['pass'] != $_POST['repass']){
        $errores['repass'] = 'Las contraseñas no coinciden <br>';
        $validado = false;
    }
    if(isset($_FILES['avatar'])){
        if($_FILES['avatar']['error']){
            $errores['avatar'] = 'Debes subir una foto de perfil';
            $validado = false;
        }else{
            //OBTENEMOS LA EXTENCION DEL ARCHIVO SUBIDO
            $ext = pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
            if(strtolower($ext) != 'jpg' && strtolower($ext) != 'jpeg' && strtolower($ext) != 'png') {
                $errores['avatar'] = "La extensión del archivo debe ser jpg, png ó jpeg";
                $validado = false;
            }
        }
    }
   
}

function persistir($valor){
    if($_POST && !isset($errores["$valor"])){
    echo $_POST["$valor"];
    }
}

function guardarAvatar() {
    // me guardo la extensión del archivo
    $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

    // me guardo la carpeta temporal en la que se encuentra
    $directorioTemporal = $_FILES['avatar']['tmp_name'];

    // armo el nombre con el que voy a guardar la imagen. La función uniqid() puede recibir un string, que será el prefijo del id aleatorio generado
    $nombreImagen = uniqid('img_') . '.' . $ext;
    
    // armo la ruta final de la imagen, concatenando al final el nombre que creé
    $carpetaFinal = dirname(__FILE__) . '/avatars/' . $nombreImagen;
    
    // muevo el archivo a la carpeta avatars
    move_uploaded_file($directorioTemporal, $carpetaFinal);
    
    // devuelvo el nombre de la imagen que armé, para guardarlo en el array del usuario
    return $nombreImagen;
}

?>