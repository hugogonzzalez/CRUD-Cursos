<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/CRUD2.1 Mejoras';
	include($path . "/model/connect.php");
    
	class DAOProducto{
		function insert_producto($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');

        	$nombre_producto=$datos['nombre_producto'];
			$precio = '';
        	foreach ($datos['precio'] as $indice) {
        	    $precio=$precio."$indice:";
        	}
        	$descripcion=$datos['descripcion'];
        	$fecha_inic=$datos['fecha_inic'];
        	$fecha_fin=$datos['fecha_fin'];
			$categoria = '';
        	foreach ($datos['categoria'] as $indice) {
        	    $categoria=$categoria."$indice:";
        	}
			$color=$datos['color'];

        	$sql = "INSERT INTO productos (nombre_producto, precio, descripcion, fecha_inic, fecha_fin, categoria, color)"
        		. "VALUES ('$nombre_producto', '$precio', '$descripcion', '$fecha_inic', '$fecha_fin', '$categoria', '$color')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_producto(){
			// $data = 'hola DAO select_all_producto';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM productos ORDER BY id_producto ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_producto($producto){
			// $data = 'hola DAO select_producto';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM productos WHERE id_producto='$producto'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_producto($datos){
			//die('<script>console.log('.json_encode( $datos ) .');</script>');
        	$id_producto=$datos['id_producto'];
			$nombre_producto=$datos['nombre_producto'];
			$precio = '';
        	foreach ($datos['precio'] as $indice) {
        	    $precio=$precio."$indice:";
        	}
        	$descripcion=$datos['descripcion'];
        	$fecha_inic=$datos['fecha_inic'];
        	$fecha_fin=$datos['fecha_fin'];
			$categoria = '';
        	foreach ($datos['categoria'] as $indice) {
        	    $categoria=$categoria."$indice:";
        	}
			$color=$datos['color'];
        	
        	$sql = " UPDATE productos SET nombre_producto='$nombre_producto' , precio='$precio', descripcion='$descripcion', fecha_inic='$fecha_inic', fecha_fin='$fecha_fin', categoria='$categoria', color='$color'"
        		. "WHERE id_producto='$id_producto'";
            
			//die('<script>console.log('.json_encode( $sql ) .');</script>');

            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		// function delete_producto($id_producto){
		// 	$sql = "DELETE FROM cursos WHERE id_curso='$id_curso'";
			
		// 	$conexion = connect::con();
        //     $res = mysqli_query($conexion, $sql);
        //     connect::close($conexion);
        //     return $res;
		// }

		// function delete_all_curso(){
		// 	$sql = "DELETE FROM cursos";
			
		// 	$conexion = connect::con();
        //     $res = mysqli_query($conexion, $sql);
        //     connect::close($conexion);

        //     return $res;
		// }

		// function dummies_curso(){
		// 	$sql = "DELETE FROM cursos;";

		// 	$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
		// 	." VALUES ('Curso 1', 'Desarrollo Web', 'Informatica', 'Principiante', '10/10/2024', '12/10/2024', '150');";
		
		// 	$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
		// 	." VALUES ('Curso 2', 'Desplegamiento Web', 'Informatica', 'Intermedio', '10/10/2024', '12/10/2024', '250');";

		// 	$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
		// 	." VALUES ('Curso 3', 'Desenvolupamiento Web', 'Informatica', 'Experto', '10/10/2024', '12/10/2024', '350');";

		// 	$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
		// 	." VALUES ('Curso 4', 'Modulo de Cocina', 'Cocina', 'Experto', '10/10/2024', '12/10/2024', '350');";

		// 	$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
		// 	." VALUES ('Curso 5', 'Modulo de Marketing', 'Marketing', 'Intermedio', '10/10/2024', '12/10/2024', '250');";
			
		// 	$conexion = connect::con();
        //     $res = mysqli_multi_query($conexion, $sql);
        //     connect::close($conexion);

        //     return $res;
		// }
	}