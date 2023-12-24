<html>
    <?php
        session_start();
        ?>
    <head>
        <!--Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

       <!--Estilo -->
<link href="style/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

       <!--Efecto Burbujas-->
       <link rel="stylesheet" href="style/movingbubbles.css" type="text/css" />
       <script src="style/movingbubbles.js" type="text/javascript"></script>
    </head>
    <body>

<div class="container">
<div class="box">
    <div class="container my-5">
        <div class="row">
        <div class="col-4">
            <!--El cartel chequea que haya una sesión. Si la hay, agregará su nombre de usuario al cartel-->
            <!--isset() se fija que lo que le pasamos exista o se le haya dado algún valor. Siendo una sesión, esto significa que nos estamos fijando que haya una sesión iniciada-->
            <!--$_SESSION guarda la información del usuario en la sesión actual. El segundo campo se chequea algún parametro que queramos ver de nuestro usuario-->
            <h1>Bienvenid@ <?php echo isset($_SESSION["usuario"]["usuario"]) ?  $_SESSION["usuario"]["usuario"] : "" ?> !</h1>
            </div>
        </div>
        <div class="row">
            <!--En este if, chequeamos si el usuario es un admin. En caso de serlo, le enseñaremos los botones de "Cerrar Sesión" y "Página de Admin"-->
            <!--Como ven, queremos chequear el contenido del perfil, asi que hacemos $_SESSION["usuario"]["perfil], y lo comparamos con "admin" a ver si pone eso ahí-->
            <?php  
            if(isset($_SESSION["usuario"]["usuario"]) && $_SESSION["usuario"]["perfil"] == "admin"): ?>
        <div class="col-6">
        <a href="controlador/logoutLogica.php" class="w3-bar-item w3-button w3-hover-blue  ">Cerrar Sesión</a>
        </div>
        <div class="col-6">
        <a href="paginaAdmin.php" class="w3-bar-item w3-button w3-hover-blue  ">Página de Admin</a>
        </div>
        <!--Con este elseif, vemos que si el usuario NO ES un admin, haciendo lo mismo que antes, pero viendo que sea diferente a "admin" esta vez-->
        <!--Solo queremos el botón de cerrar sesión acá-->
        <?php elseif(isset($_SESSION["usuario"]["usuario"]) && $_SESSION["usuario"]["perfil"] != "admin"): ?>
        <div class="col-12">
        <a href="controlador/logoutLogica.php" class="w3-bar-item w3-button w3-hover-blue  ">Cerrar Sesión</a>
        </div>
        <!--Finalmente, aca tenemos el else para cualquier otro caso. En otras palabras, cuando no hay ninguna sesión-->
        <!--Si no hay sesión, nos debe enseñar el botón de Iniciar Sesión, y de Registrarse-->
        <?php else: ?>
        <div class="col-6">
      <a href="login.php" class="w3-bar-item w3-button w3-hover-blue">Iniciar Sesión</a>
      </div>
       <div class="col-6">
      <a href="registro.php" class="w3-bar-item w3-button w3-hover-blue  ">Registrarse</a>
      </div>
      <!--y acá finalizamos el if-->
      <?php endif; ?>
    </div>
    </div>
</div>
</div>
     <!--Como habrán notado, en el botón de "Cerrar Sesión", vamos a logoutLogica directamente. logoutLogica.php es solo eso, lógica. No hay nada para mostrar ahí-->
     <!--Pero en esa lógica termina la sesión y nos devuelve al index, por lo que no notaremos que hayamos ido realmente a ningún lado-->
    </body>
</html>