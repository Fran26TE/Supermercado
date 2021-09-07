<!----- Conexión con el servidor ----->
<?php
	$servidor = "byk4010oj2lpus7am89y-mysql.services.clever-cloud.com";
	$usuario = "u3mwaqkoqafvaxb7";
	$clave = "QXxoad2QANKRgL85OfDm";
	$baseDatos = "byk4010oj2lpus7am89y";
	
	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
?>

<?php
	if(isset($_POST['enviar'])){

		$cod = rand(0001,9999);
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		
		$insertarDatos = "INSERT INTO formulario VALUES('$cod',
														'$nombre',
														'$email')";
	
		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="estilos.css"/>	

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
       
        <link rel="shortcut icon" href="../img/logoU.png"/>
        <title>Umbrella - Supermercado</title>
        <style>
            body {
                background-image: url("../img/fondo.jpg");
            }
            #fondo{
                background-color: rgba(255, 255, 255, 0.9);
            }
            a {
                text-decoration:none;
                color:inherit;            }
        </style>
    </head>
    <body>


        <br>
        
        <!-- Contenido -->
        <div class="container-md">

<div id="fondo" class="row m-0 justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h3>Usuario registrado</h3>
        <form action="registro.php" method="post">
        <div class="w-100">
            <button type="submit" id="entrar" name="entrar" class="btn btn-danger">Click para entrar</button>
        </form>
    </div>
</div>
</div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    if(isset($_POST['entrar'])){
        $miCookie = 'miCookie';
        if(!isset($_COOKIE['cookieProyecto'])){
            setcookie('cookieProyecto', $miCookie, 0);
        }
        $nombreAr = "temporal.php";
        $archivo = fopen($nombreAr, 'w+');
        
        header('location:perfil.php');

        fwrite($archivo,'
        
        ');
    }
?>
