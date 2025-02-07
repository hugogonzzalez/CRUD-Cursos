<div id="contenido">
    <div class="container">
        <br><br><br><br>
	
                <tr>
                    <td width=254><b>Nombre Producto</b></th>
					<td width=254><b>Categoria</b></th>
                    <td width=254><b>Descripcion</b></th>
                    <td width=254><b>Color</b></th>
                    <td width=254><b>Precio</b></th>
					<td width=254><b>Fecha Inicio</b></th>
					<td width=254><b>Fecha Fin</b></th>



                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN PRODUCTO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=254>'. $row['nombre_producto'] . '</td>';
							echo '<td width=254>'. $row['categoria'] . '</td>';
							echo '<td width=254>'. $row['descripcion'] . '</td>';
                            echo '<td width=254>'. $row['color'] . '</td>';
							echo '<td width=254>'. $row['precio'] . '</td>';
							echo '<td width=254>'. $row['fecha_inic'] . '</td>';
							echo '<td width=254>'. $row['fecha_fin'] . '</td>';
                    	   	echo '<td width=350>';
                            
                            //print ("<div class='producto' id='".$row['id_producto']."'>Leer</div>");
                            //echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

                            echo '<a class="Button_blue producto" id="'.$row['id_producto'].'">Leer</a>';
                            echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_producto&op=update&id='.$row['id_producto'].'">Actualizar</a>';
                    	   	echo '&nbsp;';
                    	   	//echo '<a class="Button_red" href="index.php?page=controller_producto&op=delete&id='.$row['id_producto'].'">Eliminar</a>';
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
<section id="producto_modal">
</section>