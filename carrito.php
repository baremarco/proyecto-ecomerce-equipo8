<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/20d3506334.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Carrito</title>
</head>

<body class="h-100">
    
<?php include("header.php"); ?>

<div class="container d-flex flex-column h-100 mt-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Remover</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><img src="./img/tecno_01.png" alt="..." class="img-fluid img-thumbnail" width="80px"></th>
                <td>$5000</td>
                <td>1</td>
                <td><a href="#"><i class="far fa-trash-alt"></i></a></i></td>
            </tr>
            <tr>
                <th scope="row"><img src="./img/ropa_01.png" alt="..." class="img-fluid img-thumbnail" width="80px"></th>
                <td>$2000</td>
                <td>2</td>
                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            <tr>
                <th scope="row"><img src="./img/ropa_4.png" alt="..." class="img-fluid img-thumbnail" width="80px"></th>
                <td >$1000</td>
                <td>3</td>
                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary">Comprar</button>
</div>

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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="register.html">Registro</a>
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
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <i class="far fa-envelope"> xxxxxxx@gmail.com</i>
                        ​
                    </li>
                    <li>
                        <i class="fas fa-phone"> 11-0123-4561</i>
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



</body>

</html>