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
   
}

function persistir($valor){
    if($_POST && !isset($errores["$valor"])){
    echo $_POST["$valor"];
    }
}


?>