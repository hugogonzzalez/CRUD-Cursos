<?php
$error_nombre_producto = $error_descripcion = $error_categoria =  $error_color =  $error_fecha_inic = $error_fecha_fin = $error_precio = "";
?>
<div id="contenido">
    <form autocomplete="on" method="post" name="update_producto" id="update_producto">
        <div class="progress-bar top"></div>
        <div class="progress-bar bottom"></div>
        <div class="progress-bar left"></div>
        <div class="progress-bar right"></div>
        
    <input type="hidden" id="hola" name="hola">
    <input type="hidden" id="id_producto" name="id_producto" value="<?php echo $producto['id_producto']; ?>"/>
    <input type="hidden" id="nombre_producto_old" name="nombre_producto_old" value="<?php echo $producto['nombre_producto']; ?>"/>

        <h1>Modificar Producto</h1>
        <table border='0'>
            <tr>
                <td>Nombre del Producto: </td>
                <td><input type="text" id="nombre_producto" name="nombre_producto" placeholder="Nombre del producto" value="<?php echo $producto['nombre_producto']; ?>" /></td>
                <td><font color="red">
                    <span id="error_nombre_producto" class="error">
                        <?php
                            echo "$error_nombre_producto";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" value="<?php echo $producto['descripcion']; ?>"/></td>
                <td><font color="red">
                    <span id="error_descripcion" class="error">
                        <?php
                            echo "$error_descripcion";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Categoria: </td>
                <?php
                    $categoria=explode(":", $producto['categoria']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("futbolsala", $categoria);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="futbolsala" checked/>Futbol Sala
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="futbolsala"/>Futbol Sala
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("futbol11", $categoria);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="futbol11" checked/>Futbol 11
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="futbol11"/>Futbol 11
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("entrenamiento", $categoria);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="entrenamiento" checked/>Entrenamiento</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "categoria[]" name="categoria[]" value="entrenamiento"/>Entrenamiento</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_categoria" class="error">
                        <?php
                            echo "$error_categoria";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Color: </td>
                <td>
                    <input type="radio" id="color" name="color" value="azul" <?php if ($producto['color'] == "azul") echo "checked"; ?>>Azul
                    <input type="radio" id="color" name="color" value="blanco" <?php if ($producto['color'] == "blanco") echo "checked"; ?>>Blanco
                    <input type="radio" id="color" name="color" value="rojo" <?php if ($producto['color'] == "rojo") echo "checked"; ?>>Rojo
                </td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            echo "$error_color";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de Inicio: </td>
                <td><input id="fecha_inic" class='fecha' type="text" name="fecha_inic" placeholder="Fecha de Inicio" value="<?php echo $producto['fecha_inic']; ?>"/></td>
                <td><font color="red">
                    <span id="error_fecha_inic" class="error">
                        <?php
                            echo "$error_fecha_inic";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha Fin: </td>
                <td><input id="fecha_fin" class='fecha' type="text" name="fecha_fin" placeholder="Fecha Final" value="<?php echo $producto['fecha_fin']; ?>"/></td>
                <td><font color="red">
                    <span id="error_fecha_fin" class="error">
                        <?php
                            echo "$error_fecha_fin";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
            <td>Precio: </td>
                <?php
                    $precio=explode(":", $producto['precio']);
                ?>
                <td><select multiple size="2" id="precio[]" name="precio[]" placeholder="precio">
                <?php
                        $busca_array=in_array("150", $precio);
                        if($busca_array){
                    ?>
                        <option value="150" selected>150€</option>
                    <?php
                        }else{
                    ?>
                        <option value="150">150€</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("250", $precio);
                        if($busca_array){
                    ?>
                        <option value="250" selected>250€</option>
                    <?php
                        }else{
                    ?>
                        <option value="250">250€</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("350", $precio);
                        if($busca_array){
                    ?>
                        <option value="350" selected>350€</option>
                    <?php
                        }else{
                    ?>
                        <option value="350">350€</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("450", $precio);
                        if($busca_array){
                    ?>
                        <option value="450" selected>450€</option>
                    <?php
                        }else{
                    ?>
                        <option value="450">450€</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_precio" class="error">
                        <?php
                            echo "$error_precio";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><br><input name="Submit" type="button" onclick="validate('update')" value="Modificar"/></td>
                <td align="right"><a href="index.php?page=controller_producto&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
