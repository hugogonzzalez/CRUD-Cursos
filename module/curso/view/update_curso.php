<?php
$error_nombre_curso = $error_descripcion = $error_categoria = $error_nivel = $error_fecha_inic = $error_fecha_fin = $error_precio = "";
?>
<div id="contenido">
    <form autocomplete="on" method="post" name="update_curso" id="update_curso">
        <div class="progress-bar top"></div>
        <div class="progress-bar bottom"></div>
        <div class="progress-bar left"></div>
        <div class="progress-bar right"></div>
        
    <input type="hidden" id="hola" name="hola">
    <input type="hidden" id="id_curso" name="id_curso" value="<?php echo $curso['id_curso']; ?>"/>
    <input type="hidden" id="nombre_curso_old" name="nombre_curso_old" value="<?php echo $curso['nombre_curso']; ?>"/>

        <h1>Modificar Curso</h1>
        <table border='0'>
            <tr>
                <td>Nombre del Curso: </td>
                <td><input type="text" id="nombre_curso" name="nombre_curso" placeholder="Nombre del curso" value="<?php echo $curso['nombre_curso']; ?>" /></td>
                <td><font color="red">
                    <span id="error_nombre_curso" class="error">
                        <?php
                            echo "$error_nombre_curso";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" value="<?php echo $curso['descripcion']; ?>"/></td>
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
                    $categoria=explode(":", $curso['categoria']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("marketing", $categoria);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="marketing" checked/>Marketing
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="marketing"/>Marketing
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("informatica", $categoria);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="informatica" checked/>Informatica
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="informatica"/>Informatica
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("cocina", $categoria);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "categoria[]" name="categoria[]" value="cocina" checked/>Cocina</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "categoria[]" name="categoria[]" value="cocina"/>Cocina</td>
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
                <td>Nivel: </td>
                <td>
                    <input type="radio" id="nivel" name="nivel" value="principiante" <?php if ($curso['nivel'] == "principiante") echo "checked"; ?>>Principiante
                    <input type="radio" id="nivel" name="nivel" value="intermedio" <?php if ($curso['nivel'] == "intermedio") echo "checked"; ?>>Intermedio
                    <input type="radio" id="nivel" name="nivel" value="avanzado" <?php if ($curso['nivel'] == "avanzado") echo "checked"; ?>>Avanzado
                </td>
                <td><font color="red">
                    <span id="error_nivel" class="error">
                        <?php
                            echo "$error_nivel";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de Inicio: </td>
                <td><input id="fecha_inic" class='fecha' type="text" name="fecha_inic" placeholder="Fecha de Inicio" value="<?php echo $curso['fecha_inic']; ?>"/></td>
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
                <td><input id="fecha_fin" class='fecha' type="text" name="fecha_fin" placeholder="Fecha Final" value="<?php echo $curso['fecha_fin']; ?>"/></td>
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
                    $precio=explode(":", $curso['precio']);
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
                <td align="right"><a href="index.php?page=controller_curso&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
