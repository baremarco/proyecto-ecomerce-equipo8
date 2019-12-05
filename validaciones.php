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
        $errores[] = 'El mail es incorrecto <br>';
    }

    if($_POST['nombre'] == " " ){
        $errores[] = 'Debe escribir un nombre válido <br>';
        $validado = false;
    }

    if(count($_POST['nombre']) < 2 ){
        $errores[] = 'El nombre debe contener al menos 2 caracteres <br>';
        $validado = false;
    }

    if(strlen($_POST['pass']) < 4 ){
        $errores[] = 'La contraseña debe contener al menos 4 caracteres <br>';
        $validado = false;
    }

    if($_POST['pass'] != $_POST['repass']){
        $errores[] = 'Las contraseñas no coinciden <br>';
        $validado = false;
    }


}
?>