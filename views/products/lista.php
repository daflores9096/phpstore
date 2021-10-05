<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre Producto</th>
        <th scope="col">Prec. Compra</th>
        <th scope="col">Prec. Venta</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    <br>
    <a href="?controller=products&action=crear" type="button" class="btn btn-success">Agregar Producto</a>
    <br>
    <?php

    $cont = 1;
    foreach ($productos as $row){//$productos viene de productController
    ?>
    <tr>
        <th scope="row"><?php echo $cont ?></th>
        <td><?php echo $row->codigo ?></td>
        <td><?php echo $row->producto ?></td>
        <td><?php echo $row->pcompra ?></td>
        <td><?php echo $row->pventa ?></td>
        <td>
            <div class="btn-group" role="group" aria-label>
                <a href="?controller=products&action=editar&codigo=<?php echo $row->codigo; ?>" type="button" class="btn btn-warning">Editar</a> &nbsp; <a href="javascript:void(0)" onclick="eliminarProducto(<?php echo $row->codigo ?>); return false;" type="button" class="btn btn-danger">Borrar</a>
            </div>
        </td>
    </tr>
    <?php
        $cont++;
    }
    ?>
    </tbody>
</table>

<script>
    function eliminarProducto(id){
        swal("¿Está seguro que desea eliminar el producto?", {
            buttons: {
                cancel: "Cancelar",
                aceptar: true,
            },
        })
            .then((value) => {
                switch (value) {

                    case "aceptar":
                        this.location.href = './?controller=products&action=borrar&codigo='+id;
                        break;

                    default:
                        return false;
                }
            });
    }
</script>