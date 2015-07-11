/**
 * Created by jr on 20/06/2015.
 */
function getCiudades(id_departamentos,id_ciudades)
{
    var departamento= document.getElementById(id_departamentos);
    var selectCiudad= document.getElementById(id_ciudades);

    if(departamento && selectCiudad){
        departamento = departamento.value;
        selectCiudad.innerHTML='<option value="" disabled selected>Seleccione</option>';
        $.post("/whatido/ajax/getCiudadesDepartamento/"+departamento,
            function(respuesta)
            {
                for(i in respuesta) {
                    selectCiudad.innerHTML+=  '<option value="'+respuesta[i]["id_ciudad"]+'">'+respuesta[i]["nombre"]+'</option>';
                }
                $(document).ready(function() {
                    $('select').material_select();
                });
            },"json"
        );
    }
}

function saveIndexSelect(name_hiden,id_select){
    document.getElementsByName(name_hiden)[0].value = document.getElementById(id_select).selectedIndex;
}


function parceIndexSelect(name_hiden,id_select){

    document.getElementById(id_select).selectedIndex = document.getElementsByName(name_hiden)[0].value;
}


