/**
 * Created by jr on 20/06/2015.
 */

$(document).ready(function(){
    document.getElementById('departamentos').onchange = function(){
         getCiudades(this.id,'ciudades');
    }
    
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
     
     //empresa 
     

       document.getElementById("naturaleza").onchange = function(){
          saveIndexSelect('index_naturaleza',this.id);
        
      };
       document.getElementById("departamentos2").onchange = function(){
          getCiudades(this.id,'ciudades2');
          saveIndexSelect('index_dpto2',this.id);
      };
      
     document.getElementById("ciudades2").onchange = function(){
         saveIndexSelect('index_ciudad2',this.id);
     };
     
    
     
     
        parceIndexSelect('index_dpto2','departamentos2');
        parceIndexSelect('index_naturaleza','naturaleza');
        parceIndexSelect('index_ocupacion','ocupacion');
        parceIndexSelect('index_dpto','departamentos');
        parceIndexSelect('index_genero','genero');
         document.getElementById("departamentos").onchange();
         document.getElementById("departamentos2").onchange();

     setTimeout(function(){
         parceIndexSelect("index_ciudad","ciudades");
          parceIndexSelect("index_ciudad2","ciudades2");
         $('select').material_select();
     },1000);


     
});

