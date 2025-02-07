<div id="contenido">
    <h1>Informacion del Curso</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Id del Curso: </td>
            <td>
                <?php
                    echo $curso['id_curso'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Nombre del Curso: </td>
            <td>
                <?php
                    echo $curso['nombre_curso'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Descripcion: </td>
            <td>
                <?php
                    echo $curso['descripcion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Categoria: </td>
            <td>
                <?php
                    echo $curso['categoria'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Nivel: </td>
            <td>
                <?php
                    echo $curso['nivel'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de Inicio: </td>
            <td>
                <?php
                    echo $curso['fecha_inic'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha Fin: </td>
            <td>
                <?php
                    echo $curso['fecha_fin'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $curso['precio'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_curso&op=list">Volver</a></p>
</div>