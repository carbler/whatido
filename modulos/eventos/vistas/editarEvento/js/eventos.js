/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 $(window).ready(function(){
     document.getElementById("categoria").onchange = function(){
         saveIndexSelect('index_categoria',this.id);
     };

    document.getElementById("departamentos").onchange = function(){
         getCiudades(this.id,'ciudades');
         saveIndexSelect('index_dpto',this.id);
     };

     document.getElementById("ciudades").onchange = function(){
         saveIndexSelect('index_ciudad',this.id);
     };

     parceIndexSelect('index_categoria','categoria');
     parceIndexSelect('index_dpto','departamentos');
     
     if(document.getElementById("departamentos").selectedIndex > 0){
        document.getElementById("departamentos").onchange(); 
     }
     
     
     
     setTimeout(function(){
         parceIndexSelect("index_ciudad","ciudades");
         $('select').material_select();
     },1000);
 });
 
