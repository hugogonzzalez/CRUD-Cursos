<div id="contenido">
    <form autocomplete="on" method="post" name="delete_all_curso" id="delete_all_curso">
        
        <div class="progress-bar top"></div>
        <div class="progress-bar bottom"></div>
        <div class="progress-bar left"></div>
        <div class="progress-bar right"></div>
        
    <input type="hidden" id="id" name="id" value="<?php echo isset($_GET['id']); ?>"/>
        <table border='0'>
            <tr>
                <th width=1500><h3>¿Estás seguro de que quieres eliminar toda la lista de cursos?</h3></th>
            </tr>
        </table>
        <table border='0'>
            <tr>
                <td width=680 align="center"><input name="Submit" type="button" class="Button_green" onclick="operations_curso('delete_all')" value="Aceptar"/></td>
                <td width=680 align="center"><a class="Button_red" href="index.php?page=controller_curso&op=list">Cancelar</a></td>
            </tr>
        </table>
        <br>
        <br>
    </form>
</div>