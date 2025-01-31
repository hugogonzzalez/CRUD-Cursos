<?php
function validate_nombre($nombre_curso) {
    $sql = "SELECT * FROM cursos WHERE nombre_curso='$nombre_curso'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql)->fetch_object();
    connect::close($conexion);
    return $res;
}

function validate() {
    //$data = 'hola validate php';
    //die('<script>console.log('.json_encode( $data ) .');</script>');
    $check = true;

    $nombre_curso = $_POST['nombre_curso'];
    $curso_existente = validate_nombre($nombre_curso);

    if ($curso_existente !== null) {
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

    $nombre_curso = $_POST['nombre_curso'];
    $nombre_curso = validate_nombre($nombre_curso);

    if ($nombre_curso !== null) {
        if ($nombre_curso->nombre_curso !== $_POST['nombre_curso_old']) {
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El nombre no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }
    }

    return $check;
}