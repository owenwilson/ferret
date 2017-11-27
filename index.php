<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap 4 necesita Tether, por lo que debe incluir tether.min.js antes de incluir -->
        <script src="js/tether.min.js"></script>
        <!-- jQuery (necesario para los complementos de JavaScript de Bootstrap) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>-->
        <!-- Incluye todos los complementos compilados (a continuación) o incluye archivos  individuales según sea necesario -->
        <script src="js/bootstrap.min.js"></script>
        <!--integrando las funciones ajax con php-->
        <script src="js/Login.js"></script>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title>boostrap</title>
    </head>
<body>
<header>
    <nav class="navbar navbar-toggleable-md navbar-inverse" style="background-color: #004280" >
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-    expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">INICIO</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">OFERTAS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">EVENTOS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
</header>
<div class="container">
  <div class="row">
   <div class="col-3 mx-auto">
     <h2>Iniciar Sesion</h2>
     <form>
       <div class="form-group">
         <label for="email">Usuario:</label>
         <input type="text" class="form-control" id="usuario" placeholder="Ingrese su Usuario">
       </div>
       <div class="form-group">
         <label for="pwd">Clave de Usuario:</label>
         <input type="password" class="form-control" id="contrasena" placeholder="Ingrese Clave">
       </div>
       <div class="form-check">
         <label class="form-check-label">
           <input class="form-check-input" type="checkbox"> Recordar Clave
         </label>
       </div>
       <button type="submit" class="btn btn-primary" id="Iniciar">Acceder</button>
     </form>
    </div>
  </div>
</div>
    </body>
</html>
