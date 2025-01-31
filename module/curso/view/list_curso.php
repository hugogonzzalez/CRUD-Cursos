<div id="contenido">
    <div class="container">
        <br><br><br><br>
	<table>
            <tr>
                <th width=150>
                    <div class="action-box-1">
                        <h3 data-tr="Añadir">Crear Curso</h3>
                        <p><a href="index.php?page=controller_curso&op=create"><img src="view/img/anadir.png"></a></p>
                    </div>
                </th>
                <th width=150>
                    <div class="action-box-2">
                        <h3 data-tr="Dummies">Dummies</h3>
                        <p><a href="index.php?page=controller_curso&op=dummies"><img src="view/img/dummies.png"></a></p>
                    </div>
                </th>
                <th width=150>
                    <div class="action-box-3">
                        <h3 data-tr="Borrar todo">Borrar todo</h3>
                        <p><a href="index.php?page=controller_curso&op=delete_all"><img src="view/img/delete.png"></a></p>
                    </div>
                </th>
            </tr>
            </tr>
        </table>
    	<div class="row">
    			<h3>LISTA DE CURSOS</h3>
    	</div>
    	<div class="row">
    		
    		<table>
                <tr>
                    <td width=254><b>Nombre Curso</b></th>
					<td width=254><b>Categoria</b></th>
					<td width=254><b>Nivel</b></th>
					<td width=254><b>Precio</b></th>
					<td width=254><b>Fecha Inicio</b></th>
					<td width=254><b>Fecha Fin</b></th>



                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN CURSO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=254>'. $row['nombre_curso'] . '</td>';
							echo '<td width=254>'. $row['categoria'] . '</td>';
							echo '<td width=254>'. $row['nivel'] . '</td>';
							echo '<td width=254>'. $row['precio'] . '</td>';
							echo '<td width=254>'. $row['fecha_inic'] . '</td>';
							echo '<td width=254>'. $row['fecha_fin'] . '</td>';
                    	   	echo '<td width=350>';
                            
                            //print ("<div class='curso' id='".$row['id_curso']."'>Leer</div>");
                            //echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

                            echo '<a class="Button_blue curso" id="'.$row['id_curso'].'">Leer</a>';
                            echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_curso&op=update&id='.$row['id_curso'].'">Actualizar</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_curso&op=delete&id='.$row['id_curso'].'">Eliminar</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>

<!-- Ventana modal -->
<section id="curso_modal">
</section>