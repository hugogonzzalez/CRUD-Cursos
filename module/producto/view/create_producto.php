<?php
$error_nombre_producto = $error_descripcion = $error_categoria =  $error_color =  $error_fecha_inic = $error_fecha_fin = $error_precio = "";
?>
<div id="contenido">
    <form autocomplete="on" method="post" name="alta_producto" id="alta_producto"> 
        <div class="progress-bar top"></div>
        <div class="progress-bar bottom"></div>
        <div class="progress-bar left"></div>
        <div class="progress-bar right"></div>

        <input type="hidden" id="hola" name="hola" value="hola">

        <h1>Producto Nuevo</h1>
        <table border='0'>
            <tr>
                <td>Nombre del Producto: </td>
                <td><input type="text" id="nombre_producto" name="nombre_producto" placeholder="Nombre del producto" value=""/></td>
                <td><font color="red">
                    <span id="error_nombre_producto" class="error">
                        <?php
                            echo "$error_nombre_producto";
                        ?>
                    </span>
                </font></td>
            </tr>
        
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" value=""/></td>
                <td><font color="red">
                    <span id="error_descripcion" class="error">
                        <?php
                            echo "$error_descripcion";
                        ?>
                    </span>
                </font></td>
            </tr>
            
            <tr>
                <td>Categoria: </td>
                <td>
                    <input type="checkbox" name="categoria[]" value="futbolsala">Futbol Sala<br>
                    <input type="checkbox" name="categoria[]" value="futbol11">Futbol 11<br>
                    <input type="checkbox" name="categoria[]" value="entrenamiento">Entrenamiento<br>
                </td>
                <td><font color="red">
                    <span id="error_categoria" class="error">
                        <?php
                            echo "$error_categoria";
                        ?>
                    </span>
                </font></td>
            </tr>
            
            <tr>
                <td>Color: </td>
                <td>
                    <input type="radio" id="color" name="color" placeholder="color" value="azul"/>Azul</input>
                    <input type="radio" id="color" name="color" placeholder="color" value="blanco"/>Blanco</input>
                    <input type="radio" id="color" name="color" placeholder="color" value="rojo"/>Rojo</input>
                </td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            echo "$error_color";
                        ?>
                    </span>
                </font></td>
            </tr>
            
            <tr>
            <td>Fecha de Inicio: </td>
            <td><input id="fecha_inic" class='fecha' type="text" name="fecha_inic" placeholder="Fecha de Inicio" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha_inic" class="error">
                        <?php
                            echo "$error_fecha_inic";
                        ?>
                    </span>
                </font></td>
            </tr>
            
            <tr>
            <td>Fecha Fin: </td>
            <td><input id="fecha_fin" class='fecha' type="text" name="fecha_fin" placeholder="Fecha Final" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha_fin" class="error">
                        <?php
                            echo "$error_fecha_fin";
                        ?>
                    </span>
                </font></td>
            </tr>
            
            <tr>
                <td>Precio: </td>
                <td>
                    <select multiple size="2" id="precio[]" name="precio[]" placeholder="precio">
                    <option value="150">150€</option>
                    <option value="250">250€</option>
                    <option value="350">350€</option>
                    <option value="450">450€</option>
                    </select>
                </td>
                <td><font color="red">
                    <span id="error_precio" class="error">
                        <?php
                            echo "$error_precio";
                        ?>
                    </span>
                </font></td>
                
            </tr>
            
            <tr>
                <td><br><input name="Submit" type="button" onclick="validate('create')" value="Crear"/></td>
                <td align="right"><a href="index.php">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
