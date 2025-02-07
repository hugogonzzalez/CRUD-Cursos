<div id="contenido">
    <form autocomplete="on" method="post" name="delete_curso" id="delete_curso" action="index.php?page=controller_curso&op=delete&id=<?php echo $_GET['id']; ?>">

        <div class="progress-bar top"></div>
        <div class="progress-bar bottom"></div>
        <div class="progress-bar left"></div>
        <div class="progress-bar right"></div>
        
    <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>"/>
        
    <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Esta seguro de que quiere borrar el siguiente curso?<br></h3><h4><?php echo $curso['nombre_curso'];?><br> Descripcion: <?php echo $curso['descripcion'];?><br> Categoria: <?php echo $curso['categoria'];?><br> Nivel: <?php echo $curso['nivel'];?><br> Fecha de Inicio: <?php echo $curso['fecha_inic'];?><br> Fecha Final: <?php echo $curso['fecha_fin'];?><br> Precio: <?php echo $curso['precio'];?><br></h4></td>            
                
            </tr>
            <tr>
            <td width=680 align="center"><input name="Submit" type="button" class="Button_green" onclick="operations_curso('delete')" value="Aceptar"/></td>
            <td width=680 align="center"><a class="Button_red" href="index.php?page=controller_curso&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>