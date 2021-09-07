<?php
    include '../global/config.php';
    include '../carrito.php';
    include '../template/cabecera.php';
?>
<div class="p-5" id="carritoF">
    <h3>Carrito de la compra</h3>
    <?php if(!empty($_SESSION['CARRITO'])){ ?>
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width="40%">Descripción</th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="20%" class="text-center">Total</th>
                <th width="5%"></th>
            </tr>
            <?php $total=0; ?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
            <tr>
                <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
                <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                <td width="20%" class="text-center"><?php echo $producto['PRECIO'] ?></td>
                <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
                
                <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                    <td width="5%">
                        <button 
                            class="bn btn-danger" 
                            type="submit"
                            name="btnAccion"
                            value="Eliminar"
                        >
                            Eliminar
                        </button>
                    </td>
                </form>
            </tr>
            <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
            <?php } ?>
            <tr>
                <td colspan="3" style="text-align:right"><h3>Total</h3></td>
                <td style="text-align:right"><h3><?php echo number_format($total,2); ?> €</h3></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5">
                    <form action="pago.php" method="post">
                        <div class="alert alert-danger">
                            <div class="form-group">
                                <label for="nCuenta">Número de cuenta:</label>
                                <input type="text" name="nCuenta" id="Ncuenta" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo de contacto:</label>
                                <input type="email" name="email" id="email" class="form-control" type="text" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">
                                La información del pedido se enviará a este correo.
                            </small>
                        </div>
                        <div class="d-grid">
                        <button class="btn btn-danger" name="btnAccion" type="submit" value="proceder">
                        PAGAR >>
                        </button>
                        </div>
                    </form>
                </td>
            </tr>




        </tbody>
    </table>

    <?php }else{ ?>
        <div class="alert alert-danger">
         No hay productos en el carrito.
        </div>
    <?php } ?>

</div>

<br>
<?php include '../template/pie.php'; ?>