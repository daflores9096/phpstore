<div class="card mt-5">
    <div class="card-header">
        Agregar Producto
    </div>
    <div class="card-body">

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="codigo">Código:</label>
                <input class="form-control" type="text" id="codigo" name="codigo" value="<?php echo $producto->codigo ?>" placeholder="Ingrese el código">
            </div>

            <div class="mb-3">
                <label class="form-label" for="producto">Producto:</label>
                <input class="form-control" type="text" id="producto" name="producto" value="<?php echo $producto->producto ?>" placeholder="Ingrese el nombre del producto">
            </div>

            <div class="mb-3">
                <label class="form-label" for="pcompra">Precio de Compra:</label>
                <input class="form-control" type="text" id="pcompra" name="pcompra" value="<?php echo $producto->pcompra ?>" placeholder="Ingrese el precio de compra">
            </div>

            <div class="mb-3">
                <label class="form-label" for="pventa">Precio de venta:</label>
                <input class="form-control" type="text" id="pventa" name="pventa" value="<?php echo $producto->pventa ?>" placeholder="Ingrese el precio de venta">
            </div>

            <input type="submit" id="btnAgregar" name="btnAgregar" class="btn btn-success" value="Guardar cambios">
        </form>
    </div>

</div>