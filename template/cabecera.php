<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
       
        <link rel="shortcut icon" href="../img/logoU.png"/>
        <title>Umbrella - Supermercado</title>
        <style>
            body {
                background-image: url("../img/fondo.jpg");
            }
            #carritoF, #fondo, #pago{
                background-color: rgba(255, 255, 255, 0.9);
            }
            
            
        </style>
    </head>
    <body>
        <!-- Navegador -->
        <nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index/productos.php">
                    <img src="../img/logoU.png" width="32px">
                    <b>Umbrella</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="perfil.php">Perfil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="productosA.php">Alimentos</a></li>
                                <li><a class="dropdown-item" href="productosL.php">Limpieza</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="productos.php">Todos los productos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../index/mostrarCarrito.php" tabindex="-1" aria-disabled="true">
                                Carrito de la compra(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']) ?>)
                            </a>
                        </li>
                    </ul>
                    <form action="buscador.php" method="get" class="d-flex">
                        <input class="form-control me-2" type="search" name="palabra"  placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit" id="buscador" name="buscador" value="Buscar">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>

        <br>
        
        <!-- Contenido -->
        <div class="container-md">