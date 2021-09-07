<!----- Conexión con el servidor ----->
<?php
	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$baseDatos = "proyecto_final";
	
	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <link rel="shortcut icon" href="img/logoU.png"/>
        <title>Login</title>
        <style>
            body {
                background-image: url("img/fondo.jpg");
            }
            .bg{
                background-image: url(img/fondoMercado.jpg);
                background-position: center center;
            }
            #colForm {
                background-color: rgba(255, 255, 255, 0.9);
                padding:20px;
                
            }
            #contenedor{
                box-shadow: 0 0 20px black;
            }
        </style>
        <script>
            function validar(){
                var datos=true;
                var error="";
                var exp = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
                if(document.getElementById("nombre").value==""){
                    datos=false;
                    alert("Campo -nombre- vacío");
                }else if(!exp.test(document.getElementById("email").value)){
                    datos=false;
                    alert("Campo -email- incorrecto");
                }
                return datos;
	        }
        </script>
    </head>
    <body>
        <div id="contenedor" class="container w-75 mt-5">
            <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-4 col-lg-4 col-xl-5">
            
            </div>
            <div class="col" id="colForm">
                <div class="text-end">
                    <img src="img/logoU.png" class="img-fluid rounded mx-auto d-block" width="100px" alt="Logo Umbrella">
                </div>
                <h2 class="fw-bold text-center pt-5 mb-5">Supermercado</h2>

                <!-- Login -->
                <form action="index/registro.php" method="post" onsubmit="return validar()">
                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Entrar</button>
                    </div>
                    <div class="my-3">
                        <span><a href="#">Recuperar contraseña</a></sp<n>
                    </div>
                </form>
                <div class="container w-100 my-5">
                    <div class="row">
                        <div class="col-12">Iniciar sesión</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button id="rrss" class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/face32.png" alt="Logo Facebook">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button id="rrss" class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/google32.png" alt="Logo Google">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Google
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>

