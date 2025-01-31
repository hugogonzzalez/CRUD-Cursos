<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/CRUD2.1 Mejoras';
	include($path . "/model/connect.php");
    
	class DAOCurso{
		function insert_curso($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');

        	$nombre_curso=$datos['nombre_curso'];
        	$descripcion=$datos['descripcion'];
			$categoria = '';
        	foreach ($datos['categoria'] as $indice) {
        	    $categoria=$categoria."$indice:";
        	}
        	$nivel=$datos['nivel'];
        	$fecha_inic=$datos['fecha_inic'];
        	$fecha_fin=$datos['fecha_fin'];
			$precio = '';
        	foreach ($datos['precio'] as $indice) {
        	    $precio=$precio."$indice:";
        	}

        	$sql = "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)"
        		. "VALUES ('$nombre_curso', '$descripcion', '$categoria', '$nivel', '$fecha_inic', '$fecha_fin', '$precio')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_curso(){
			// $data = 'hola DAO select_all_curso';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM cursos ORDER BY id_curso ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_curso($curso){
			// $data = 'hola DAO select_curso';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM cursos WHERE id_curso='$curso'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_curso($datos){
			//die('<script>console.log('.json_encode( $datos ) .');</script>');
        	$id_curso=$datos['id_curso'];
			$nombre_curso=$datos['nombre_curso'];
        	$descripcion=$datos['descripcion'];
			$categoria = '';
        	foreach ($datos['categoria'] as $indice) {
        	    $categoria=$categoria."$indice:";
        	}
        	$nivel=$datos['nivel'];
        	$fecha_inic=$datos['fecha_inic'];
        	$fecha_fin=$datos['fecha_fin'];
			$precio = '';
        	foreach ($datos['precio'] as $indice) {
        	    $precio=$precio."$indice:";
        	}
        	
        	$sql = " UPDATE cursos SET nombre_curso='$nombre_curso' , descripcion='$descripcion', categoria='$categoria', nivel='$nivel', fecha_inic='$fecha_inic', fecha_fin='$fecha_fin', precio='$precio'"
        		. "WHERE id_curso='$id_curso'";
            
			//die('<script>console.log('.json_encode( $sql ) .');</script>');

            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_curso($id_curso){
			$sql = "DELETE FROM cursos WHERE id_curso='$id_curso'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function delete_all_curso(){
			$sql = "DELETE FROM cursos";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);

            return $res;
		}

		function dummies_curso(){
			$sql = "DELETE FROM cursos;";

			$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
			." VALUES ('Curso 1', 'Desarrollo Web', 'Informatica', 'Principiante', '10/10/2024', '12/10/2024', '150');";
		
			$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
			." VALUES ('Curso 2', 'Desplegamiento Web', 'Informatica', 'Intermedio', '10/10/2024', '12/10/2024', '250');";

			$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
			." VALUES ('Curso 3', 'Desenvolupamiento Web', 'Informatica', 'Experto', '10/10/2024', '12/10/2024', '350');";

			$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
			." VALUES ('Curso 4', 'Modulo de Cocina', 'Cocina', 'Experto', '10/10/2024', '12/10/2024', '350');";

			$sql.= "INSERT INTO cursos (nombre_curso, descripcion, categoria, nivel, fecha_inic, fecha_fin, precio)" 
			." VALUES ('Curso 5', 'Modulo de Marketing', 'Marketing', 'Intermedio', '10/10/2024', '12/10/2024', '250');";
			
			$conexion = connect::con();
            $res = mysqli_multi_query($conexion, $sql);
            connect::close($conexion);

            return $res;
		}
	}