<div class="card mt-5">
    <div class="card-header">
        Agregar Producto
    </div>
    <div class="card-body">

        <form action="" method="post" id="crearProd" name="crearProd">
            <div class="mb-3">
                <label class="form-label" for="codigo">Código:</label>
                <input class="form-control" type="text" id="codigo" name="codigo" required placeholder="Ingrese el código">
            </div>

            <div class="mb-3">
                <label class="form-label" for="producto">Producto:</label>
                <input class="form-control" type="text" id="producto" name="producto" required placeholder="Ingrese el nombre del producto">
            </div>

            <div class="mb-3">
                <label class="form-label" for="pcompra">Precio de Compra:</label>
                <input class="form-control" type="text" id="pcompra" name="pcompra" placeholder="Ingrese el precio de compra">
            </div>

            <div class="mb-3">
                <label class="form-label" for="pventa">Precio de venta:</label>
                <input class="form-control" type="text" id="pventa" name="pventa" placeholder="Ingrese el precio de venta">
            </div>

            <input type="submit" id="btnAgregar" name="btnAgregar" class="btn btn-success" value="Guardar">
            <a class="btn btn-danger" href="?controller=products&action=lista">Cancelar</a>
        </form>
    </div>

</div>

<script>
    $(document).ready(function() {
        $("#crearProd").validate({
                messages : {
                    codigo: {
                        required: "Ingrese el Código"
                    },
                    producto: {
                        required: "Ingrese el nombre del Producto"
                    }
                }
        });
    });
</script>