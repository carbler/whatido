
var nav;
var myVideo;
var e;

$(document).ready(function() {

    /*Elementos Dom*/
    myVideo = document.getElementById("video");
    nav = document.getElementById('navBar');
    e=document.getElementById('agregarEvento');

    /*Rutanas Y Procedimientos*/
    if (item == 'inicio' && nav) {
        nav.classList.add('transparent');
        nav.style.boxShadow = 'none';
    }

    if(item!='inicio' && item!= 'ingreso' &&myVideo){
        myVideo.style.display = 'none';
    }

    document.onscroll = function(){
        if(e) {
            e.style.top = (window.innerHeight + window.scrollY - e.offsetHeight * 1.25) + 'px';
            e.style.left = (window.innerWidth - e.offsetWidth - 35) + "px";
        }

        if (item == 'inicio'){

            if (myVideo){
                if(window.scrollY/100 >= Math.floor(myVideo.offsetHeight/100)){
                    nav.classList.remove('transparent');
                }
                else{
                    nav.classList.add('transparent');
                    nav.style.boxShadow='none';
                }
            }

        }
    };
    /*Inicializacion Eventos*/
    if(myVideo){
        myVideo.ondblclick = playPause;
    }
    eventosDelDia();
});


function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}

function eventosDelDia()
{
	$.post("/whatido/ajax/getEventosDelDia",
		function(respuesta)
		{
		
			for(i in respuesta)
			{
                            //Guardamos los datos 
				var nombre = respuesta[i]["nombre"];
				var lugar = respuesta[i]["lugar"];
				var categoria = respuesta[i]["categoria"];
                                var fecha_ini = respuesta[i]["fecha_ini"];
                                var id = respuesta[i]["id_evento"];
                                //sacamos año, Mes y día por aparte
                                var año = fecha_ini.substr(0, 4);
                                var m = parseInt(fecha_ini.substr(5, 2));//convertimos a entero, para el mes
                                var dia = fecha_ini.substr(8, 2);
                                var mes = meses();
	                        //agregamos el nuevo evento
				$("#eventosdia").append("\
                               <li class='collection-item'>\n\
                                   <div class='row'>\n\
                                   <h5 style='color: #FFAB00;'>"+nombre+"</h5>\n\
                                   <div class='col l8'>\n\
                                       <p>\n\
                                            "+dia+" de "+mes[m]+" del "+año+"<br>\n\
                                            <strong style='color: #FFD786'>Lugar: </strong>"+lugar+"<br>\n\
                                            <strong style='color: #FFD786'>Categoria: </strong>"+categoria+"<br>\n\
                                       </p>\n\
                                   </div>\n\
                                   <div class='col l4'>\n\
                                   <a href='#' class='secondary-content'><i class='mdi-action-thumb-up'></i>Asistiré</a>\n\
                                   <a href='/whatido/eventos/buscarEvento/info/"+id+"' class='secondary-content'><i class='mdi-action-visibility '></i> Ver Mas</a>\n\
                                   </div>\n\
                                   </div>\n\
                               </li>");
				
			}
		},"json"
	);	
}
function eventosBusqueda()
{       
       //capturamos y verificamos fecha
        var fecha;
        var f = $("#fecha_busqueda").val();
        if(f==""){
            fecha ="false";
        }else{
            fecha =f;
        }
        
        //capturamos y verificamos categoria
        var categoria;
        var c = $("#categoria_busqueda").val();
        if(c==""){
             categoria ="false";
        }else{
            categoria =c;
        }
        
        
        //capturamos y verificamos ciudad
         var ciudad;
        var ci = $("#ciudades_busqueda").val();
        if(ci==null){
             ciudad ="false";
        }else{
            ciudad =ci;
        }
        
        
       
        //capturamos y verificamos gratis
       
        var elemento = document.getElementById("gratis_busqueda");
        var gratis;
         if( !elemento.checked ) {
                gratis=0;
                                }
                 else{
                         gratis=1;           
                                }
      
 	$.post("/whatido/ajax/getEventosIndex",{fecha:fecha,categoria:categoria,ciudad:ciudad,gratis:gratis},
		function(respuesta)
		{
            var c = document.getElementById('response-event');

            if(c){
                c.innerHTML = '<h3 class="title col s12 m10 l10 offset-l1 offset-m1">Resultados de la busqueda </h3>' +
                '<ul class="collapsible popout col l10 offset-l1" data-collapsible="accordion" id="eventobusqueda"></ul>'
            }

            var e = document.getElementById('eventobusqueda');
            if(e) {
                e.innerHTML ='';
        
                for(i in respuesta)
                {
                   //Guardamos los datos
                    var id = respuesta[i]["id_evento"];
                    var nombre = respuesta[i]["nombre"];
                    var lugar = respuesta[i]["lugar"];
                    var categoria = respuesta[i]["categoria"];
                    var fecha_ini = respuesta[i]["fecha_ini"];
                    var descripcion = respuesta[i]["descripcion"];

                    //sacamos año, Mes y día por aparte
                    var año = fecha_ini.substr(0, 4);
                    var m = parseInt(fecha_ini.substr(5, 2));//convertimos a entero, para el mes
                    var dia = fecha_ini.substr(8, 2);
                    var mes = meses();

                    //agregamos el nuevo evento
                    e.innerHTML +=
                        '<li> \
                            <div class="collapsible-header row" style="color: rgb(47, 118, 124)"> \
                            <h5 class="title">'+nombre+'</h5> \
                            <div class="col l10"> \
                                <div> \
                                    '+dia+' de '+mes[m]+' de '+año+' \
                                </div> \
                                \
                                <div>\
                                    <strong style="color: #2C3E50">Lugar: </strong> '+lugar+' \
                                </div> \
                                \
                                <div> \
                                    <strong style="color: #2C3E50;">Categoria: </strong> '+categoria+'\
                                </div> \
                            </div> \
                            \
                            <div class="col l2"> \
                                <a href="#" class="secondary-content"><i class="mdi-action-assignment-ind"></i> Asistiré</a> \
                                <a href="/whatido/eventos/buscarEvento/info/'+id+'" class="secondary-content"><i class="mdi-action-assignment"></i> Ver Mas</a> \
                            </div> \
                            \
                            </div>\
                            \
                            <div class="collapsible-body">\
                                <p style="color: #2C3E50">'+descripcion+'</p>\
                            </div>\
                    </li>'



                }
                if (e.innerHTML==''){
                    e.innerHTML= '<div>La Busqueda No Ha Provocado Resultados</div>'
                }
                e.innerHTML+= '<a href="#index" class="btn right">Realizar Nueva Busqueda </a>'
            }
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
		},"json"
	);
}



function meses(){
    var meses = new Array (" ","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    return meses;
}


