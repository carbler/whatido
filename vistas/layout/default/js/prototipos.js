 $(document).ready(function(){
	/*
	* @var controlEvento   controla si se ha oprimido el boton movible
	* @ver elemento        elemento DOM del boton 
	*/
	var controlEvento = false;
	var elemento = document.getElementById("agregarEvento");
	rederizarElemento(elemento);	
		
	function moverBoton(elEvento) {
		var evento = elEvento || window.event;
		switch(evento.type) {
		  case 'touchstart':
		   	  controlEvento = true;
		  break;
		  case 'touchend': 		   
			if(controlEvento) {
				evento.preventDefault();
				 var  touch = evento.changedTouches [0]
    				renderizarBoton(elemento,touch.clientX, touch.clientY);	
			}
			controlEvento = false;
		  break;
		  case 'mousedown':
			  controlEvento = true;
		  break;
		  case 'mouseup': 		   
			if(controlEvento) {
			 	renderizarBoton(elemento,evento.clientX, evento.clientY);
			}
			controlEvento = false;
		  break;
		}
	}
    
     
	 document.onmouseup    = moverBoton;
	 document.ontouchend   = moverBoton;
     elemento.onmousedown  = moverBoton;
	 elemento.ontouchstart = moverBoton;
	
    /* asignacion de evento, cuando cambie el tamaño de la pantalla se renderiza el objeto para evitar que quede fuera de pantalla*/
    document.body.onresize = function(){rederizarElemento(elemento);}			
  });
  	
	function isTactil(){
		if ("ontouchstart" in document){
			return true;
		}
		return false;
	}
	
	/*
	* renderizarBoton
	*
	* mueve el boton linealmente en le direcion de la pendiente de la recta 
	* @var   elemento       elemento DOM 
	* @var   posicionX    	posicion x del punto donde se quiere ubicar el boton
	* @var   posicionY		posicion y del punto donde se quiere ubicar el boton
	*/	
	function renderizarBoton(elemento, posicionX, posicionY){
		var posicionIniX 		= elemento.offsetLeft;
		var posicionIniY 		= elemento.offsetTop;
		var pendiente 			= calcularPendienteRecta(posicionIniX,posicionIniY,posicionX,posicionY);
		var posicionActualX 	= posicionIniX ;
		var maxAnchoVentana   	=  window.innerWidth - elemento.offsetWidth  - 35;	
		var maxAltoVentana    	=  window.innerHeigth- elemento.offsetHeight - 25;							  
		 
	  if( posicionIniX - posicionX > 0){
		  while (posicionActualX > 22 ){
			  posicionActualX -= 1;
			  
			  var punto = calcularPuntoRectaRespectoX(posicionIniX,posicionIniY,pendiente, posicionActualX);
				  
			  elemento.style.left = punto[0] + "px";
			  elemento.style.top  = punto[1] + "px";
			  
			  if (pendiente > 0 && punto[1] <= 70 || pendiente <0 &&  punto[1]  >= window.innerHeight - 65){
				break;
			  }
		  } 
		  
	  } //Fin If
	  else{	
		  while (posicionActualX < maxAnchoVentana){
			  posicionActualX += 1;
			  
			  var punto = calcularPuntoRectaRespectoX(posicionIniX,posicionIniY,pendiente, posicionActualX);
						  
			  elemento.style.left = punto[0] + "px";
			  elemento.style.top  = punto[1] + "px";
									  
			  if(pendiente> 0 &&  punto[1] >= window.innerHeight - 65 || pendiente < 0 &&  punto[1] <= 70){
				  posicionActualX = maxAnchoVentana
			  }				
		  } 							
	  }//fin else
	}
	
		
	
  	
	
	/*
	* rederizarElemento
	*
	* ubica el elemnto en la posicion inferior decrecha de la pantalla	 
	* @var   elemento        elemento DOM a Renderizar
	*/
	function rederizarElemento(elemento){
		elemento.style.left  = (window.innerWidth - elemento.offsetWidth  - 35) +"px";
    	elemento.style.top 	 = (window.innerHeight- elemento.offsetHeight - 25) +"px";   	
	}

	/*
	* calcularPendienteRecta
	* 
	* @var   abscisaXi        posicion  eje x  inicial de la recta
	* @var   coordenadaYi     posicion  eje y  inicial de la recta
	* @var   abscisaXi		  posicion  eje x  final de la recta
	* @var   coordenadaYi	  posicion  eje y  final de la recta		
	* @return  retorna el valor de la pendiente de la recta
	*/
   function  calcularPendienteRecta(abscisaXi,coordenadaYi, abscisaXf,coordenadaYf){
        if (isNaN(abscisaXi) || isNaN(coordenadaYi) ||isNaN(abscisaXf) ||isNaN(coordenadaYf)){
          throw new Error( "Ha Ingresado Un Valor Invalido (Solo Datos Numericos)" );
       } 
      return ( parseFloat(coordenadaYf) - parseFloat(coordenadaYi) ) / (parseFloat(abscisaXf) - parseFloat(abscisaXi) ); 
    }
	
	/*
	* calcularPuntoRectaRespectoX
	* 
	* @var   abscisa      posicion  eje x de un punto de la recta
	* @var   ordenada     posicion  eje y de un punto de la recta
	* @var   pendiente	  pendiente de la recta
	* @var   puntox   	  posicion en el eje x donde se desea calcular la posicion en el eje y
	* @return  Array retorna el valor del punto en el plano
	*/
    function calcularPuntoRectaRespectoX (abscisa, ordenada, pendiente, puntox){
       if (isNaN(abscisa) || isNaN(ordenada) ||isNaN(pendiente) ||isNaN(puntox)){
          throw new Error( "Ha Ingresado Un Valor Invalido (Solo Datos Numericos)" );
       }
       else{
          var b = ordenada-(abscisa*pendiente);
          var y = (pendiente*puntox) + b;
          return [puntox,y];
      }
    }
	
	/*
	* calcularPuntoRectaRespectoY
	* 
	* @var   abscisa      posicion  eje x de un punto de la recta
	* @var   ordenada     posicion  eje y de un punto de la recta
	* @var   pendiente	  pendiente de la recta
	* @var   puntox   	  posicion en el eje y donde se desea calcular la posicion en el eje x
	* @return  Array retorna el valor del punto en el plano
	*/
     function calcularPuntoRectaRespectoY (abscisa, ordenada, pendiente, puntoy){
       if (isNaN(abscisa) || isNaN(ordenada) ||isNaN(pendiente) ||isNaN(puntoy)){
          throw new Error( "Ha Ingresado Un Valor Invalido (Solo Datos Numericos)" );
       }
       else{
          var b = ordenada-(abscisa*pendiente);
          var x = (puntoy-b)/pendiente;
          return [x,puntoy];
      }
    }
