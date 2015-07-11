/**
 * Created by jr on 20/06/2015.
 */

$(document).ready(function(){
    
      document.getElementById("ocupacion").onchange = function(){
          saveIndexSelect('index_ocupacion',this.id);
      };
      
      document.getElementById("genero").onchange = function(){
          saveIndexSelect('index_genero',this.id);
      };
      
        document.getElementById("departamentos").onchange = function(){
          getCiudades(this.id,'ciudades');
          saveIndexSelect('index_dpto',this.id);
      };
      
     document.getElementById("ciudades").onchange = function(){
         saveIndexSelect('index_ciudad',this.id);
     };
     
     

     
     parceIndexSelect('index_ocupacion','ocupacion');
     parceIndexSelect('index_dpto','departamentos');
     parceIndexSelect('index_genero','genero');

     
     if(document.getElementById("departamentos").selectedIndex > 0){
        document.getElementById("departamentos").onchange(); 
     }

     setTimeout(function(){
         parceIndexSelect("index_ciudad","ciudades");
     
         $('select').material_select();
     },1000);
       
    

});

