<html>
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


    <!--Formulario de registro-->
<div class="row justify-content-center">
    <div class="box">
        <div class="col-auto">
            <div class="register_card">
                <div class="form_container">
                    <!--En method aclaramos que usamos POST, mientras que en Action señalamos dónde está la lógica que usaremos-->
                    <form action="controlador/registroLogica.php" method="POST">
                        <div class="form-row">
                            <div class="input-group mb-3 col-12">
                                <h1>Registrarse</h1>
                            </div>
                        </div>
                        <div class="form-row">
                             <div class="input-group mb-3 col-6">
                                <input type="text" name="nombre" class="form-control input_user" placeholder="Nombre">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <input type="text" name="apellido" class="form-control input_pass" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3 col-12">
                                <input type="email" name="email" class="form-control input_user" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3 col-6">
                                <input type="text" name="usuario" class="form-control input_user" placeholder="Usuario">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <input type="password" name="contrasena" class="form-control input_pass" placeholder="contraseña">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit">Registrarse</button>
                        </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </body>
</html>