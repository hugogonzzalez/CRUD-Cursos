<?php
function validate_nombre($nombre_producto) {
    $sql = "SELECT * FROM productos WHERE nombre_producto='$nombre_producto'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql)->fetch_object();
    connect::close($conexion);
    return $res;
}

function validate() {
    //$data = 'hola validate php';
    //die('<script>console.log('.json_encode( $data ) .');</script>');
    $check = true;

    $nombre_producto = $_POST['nombre_producto'];
    $producto_existente = validate_nombre($nombre_producto);

    if ($producto_existente !== null) {
        echo '<script language="javascript">setTimeout(() => {
            toastr.error("El nombre no puede estar repetido");
        }, 1000);</script>';
        $check = false;
    }

    return $check;
}

function validate_update() {
     //$data = 'hola validate php';
    //die('<script>console.log('.json_encode( $data ) .');</script>');
    $check = true;

    $nombre_producto = $_POST['nombre_producto'];
    $nombre_producto = validate_nombre($nombre_producto);

    if ($nombre_producto !== null) {
        if ($nombre_producto->nombre_producto !== $_POST['nombre_producto_old']) {
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El nombre no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }
    }

    return $check;
}