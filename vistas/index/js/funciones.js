$(document).ready(function(){
    document.getElementById("departamentos").onchange = function(){
        getCiudades(this.id,'ciudades_busqueda');
    }
});