function validate_nombre_curso(texto) {

    if (texto.length > 0) {
        var reg = /^[a-zA-Z0-9\s]*$/;
        return reg.test(texto);
    }
    return false;
}


function validate_descripcion(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z\s]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_categoria(array){
    var i;
    for(i=0; i< array.length; i++){
        if(array[i].checked){
           return true;
        }
    }
    return false;
}

function validate_nivel(){
    var i;
    var ok=0;
    for(i=0; i<nivel.length;i++){
        if(nivel[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_fecha_inic(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_fecha_fin(fecha_inic, fecha_fin){
    var empiezaFecha = fecha_inic.split("/");
    var acabaFecha = fecha_fin.split("/");

    var empiezaFecha = new Date(empiezaFecha[2], empiezaFecha[1], empiezaFecha[0]);
    var acabaFecha = new Date(acabaFecha[2], acabaFecha[1], acabaFecha[0]);


    if (empiezaFecha < acabaFecha){
        return true;
    }
    return false;
}

function validate_precio(select) {
    var options = select.options;
    for (var i = 0; i < options.length; i++) {
        if (options[i].selected) {
            return true;
        }
    }
    return false;
}

function validate(op){
     //console.log('hola validate js');
    // return false;
    var check=true;
    
    var v_nombre_curso = document.getElementById('nombre_curso').value;
    // console.log(v_nombre);
    // return false;
    var v_descripcion = document.getElementById('descripcion').value;
    var v_categoria = document.querySelectorAll('input[name="categoria[]"]');
    var v_nivel = document.querySelector('input[name="nivel[]"]');
    var v_fecha_inic = document.getElementById('fecha_inic').value;
    var v_fecha_fin = document.getElementById('fecha_fin').value;
    var v_precio = document.getElementById('precio[]');
    
    var r_nombre_curso = validate_nombre_curso(v_nombre_curso);
    // console.log(r_nombre);
    // return false;
    var r_descripcion = validate_descripcion(v_descripcion);
    var r_categoria = validate_categoria(v_categoria);
    var r_nivel = validate_nivel(v_nivel);
    var r_descripcion = validate_descripcion(v_descripcion);
    var r_fecha_inic = validate_fecha_inic(v_fecha_inic);
    var r_fecha_fin = validate_fecha_fin(v_fecha_inic , v_fecha_fin);
    var r_precio = validate_precio(v_precio);
    
    if(!r_nombre_curso){
        document.getElementById('error_nombre_curso').innerHTML = " * El nombre introducido no es válido";
         //console.log(r_nombre);
         //return false;
        check = false;
    } else {
        document.getElementById('error_nombre_curso').innerHTML = "";
    }

    if(!r_descripcion){
        document.getElementById('error_descripcion').innerHTML = " * La descripción introducida no es válida";
        check = false;
    } else {
        document.getElementById('error_descripcion').innerHTML = "";
    }

    if(!r_categoria){
        document.getElementById('error_categoria').innerHTML = " * Debes seleccionar una categoría";
        check = false;
    } else {
        document.getElementById('error_categoria').innerHTML = "";
    }

    if(!r_nivel){
        document.getElementById('error_nivel').innerHTML = " * Debes seleccionar un nivel";
        check = false;
    } else {
        document.getElementById('error_nivel').innerHTML = "";
    }

    if(!r_fecha_inic){
        document.getElementById('error_fecha_inic').innerHTML = " * Debes introducir una fecha de inicio";
        check = false;
    } else {
        document.getElementById('error_fecha_inic').innerHTML = "";
    }

    if(!r_fecha_fin){
        document.getElementById('error_fecha_fin').innerHTML = " * La fecha final no es correcta";
        check = false;
    } else {
        document.getElementById('error_fecha_fin').innerHTML = "";
    }

    if(!r_precio){
        document.getElementById('error_precio').innerHTML = " * Debes seleccionar un precio";
        check = false;
    } else {
        document.getElementById('error_precio').innerHTML = "";
    }

    //return check;

    if (check){
        if (op == 'create'){
            //console.log('hola validate js');
            //return false;
            document.getElementById('alta_curso').submit();
            document.getElementById('alta_curso').action = "index.php?page=controller_curso&op=create";
        }
        if (op == 'update'){
            document.getElementById('update_curso').submit();
            document.getElementById('update_curso').action = "index.php?page=controller_curso&op=update";
        }
    }
}

function operations_curso(op){
    if (op == 'delete'){
        document.getElementById('delete_curso').submit();
        document.getElementById('delete_curso').action = "index.php?page=controller_curso&op=delete";
    }
    if (op == 'delete_all'){
        document.getElementById('delete_all_curso').submit();
        document.getElementById('delete_all_curso').action = "index.php?page=controller_curso&op=delete_all";
    }
    if (op == 'dummies'){
        document.getElementById('dummies_curso').submit();
        document.getElementById('dummies_curso').action = "index.php?page=controller_curso&op=dummies";
    }
}

function showModal(nombre_curso, id) {
    $("#details_curso").show();
    $("#curso_modal").dialog({
        title: nombre_curso,
        width : 850,
        height: 500,
        resizable: "false",
        position: "down",
        modal: "true",
        hide: "fold",
        show: "fold",
        buttons : {
            Update: function() {
                        window.location.href = 'index.php?page=controller_curso&op=update&id=' + id;
                    },
            Delete: function() {
                        window.location.href = 'index.php?page=controller_curso&op=delete&id=' + id;
                    }
        }
    });
}

function loadContentModal() {
    $('.curso').click(function () {
        //console.log('hola loadContentModal js');
        //return false;
        var id = this.getAttribute('id');
        //console.log('id: ' + id);
        //return false;
        ajaxPromise('module/curso/controller/controller_curso.php?op=read_modal', 'POST', 'JSON', { id: id })
        .then(function(data) {
            //console.log(data);
            //return false;
            //var data = JSON.parse(data);
            $('<div></div>').attr('id', 'details_curso', 'type', 'hidden').appendTo('#curso_modal');
            $('<div></div>').attr('id', 'container').appendTo('#details_curso');
            $('#container').empty();
            $('<div></div>').attr('id', 'curso_content').appendTo('#container');
            $('#curso_content').html(function() {
                var content = "";
                for (row in data) {
                    content += '<br><br><span>' + row + ': <span id =' + row + '>' + data[row] + '</span></span>';
                }
                return content;
                });
                showModal(nombre_curso = data.descripcion + " " + data.nivel, data.id_curso);
        })
        .catch(function() {
            window.location.href = 'index.php?module=errors&op=503&desc=List error';
        });
    });
 }

 $(document).ready(function() {
    loadContentModal();
});