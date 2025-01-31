<div id="contenido">
    <form autocomplete="on" method="post" name="dummies_curso" id="dummies_curso">
        
        <div class="progress-bar top"></div>
        <div class="progress-bar bottom"></div>
        <div class="progress-bar left"></div>
        <div class="progress-bar right"></div>
        
        <table border='0'>
            <tr>
                <th width=1200><h3>¿Quieres cargar los datos de los cursos?</h3></td>
                <input type="hidden" id="id" name="id" placeholder="id" value="hola"/>
            </tr>
        </table>
        <table border='0'>
            <tr>
                <td width=680 align="center"><input name="Submit" type="button" class="Button_green" onclick="operations_curso('dummies')" value="Aceptar"/></td>
                <td width=680 align="center"><a class="Button_red" href="index.php?page=controller_curso&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>