<?php
    include '../global/config.php';
 	include '../global/conexion.php';
    include '../carrito.php';
    include '../template/cabecera.php';
?>

<br>
<?php if($mensaje!=""){ ?>
<div class="alert alert-danger">
    <?php echo $mensaje; ?>
    <a href="mostrarCarrito.php" class="badge badge-danger">Ver carrito</a>
</div>
<?php } ?>
<div id="fondo" class=p-5>
<h3>Productos de limpieza</h3>
<div class="row">
    <?php
        $sentencia=$pdo->prepare("SELECT * FROM `productos` WHERE Tipo = 'limpieza'");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($listaProductos as $producto){ ?>
        <div class="col-12 col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="card">
            <img 
                title="<?php echo $producto['Nombre'] ?>" 
                alt="<?php echo $producto['Nombre'] ?>" 
                class="card-img-top" 
                src="<?php echo $producto['Imagen'] ?>"
            >
            <div class="card-body">
                <span><?php echo $producto['Nombre'] ?></span>
                <h5 class="class-title"><?php echo $producto['Precio'] ?> €</h5>
                <p class="card-text"><?php echo $producto['Descripcion'] ?></p>

                <form action="" method="post">

                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">

                    <button 
                        class="btn btn-danger" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit">
                            Añadir
                    </button>
                </form>
            </div>
            <br>
        </div>
    </div>
    <?php } ?>  
</div>
</div>
<?php
    include '../template/pie.php';
?>
