$(document).ready(function(){
    
   
    
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
//       document.getElementById("departamentos2").onchange = function(){
//          getCiudades(this.id,'ciudades2');
//          saveIndexSelect('index_dpto2',this.id);
//      };
      
//     document.getElementById("ciudades2").onchange = function(){
//         saveIndexSelect('index_ciudad2',this.id);
//     };
     

     parceIndexSelect('index_dpto','departamentos');
//     parceIndexSelect('index_dpto2','departamentos2');
  parceIndexSelect('index_naturaleza','naturaleza');
     
     if(document.getElementById("departamentos").selectedIndex > 0){
        document.getElementById("departamentos").onchange(); 
     }
//     if(document.getElementById("departamentos2").selectedIndex > 0){
//        document.getElementById("departamentos2").onchange(); 
//     }
     setTimeout(function(){
         parceIndexSelect("index_ciudad","ciudades");
       //  parceIndexSelect("index_ciudad2","ciudades2");
         $('select').material_select();
     },1000);
       
    

});