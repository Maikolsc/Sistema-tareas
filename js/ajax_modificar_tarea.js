function ajax_modificar_tarea(){
    $.ajax({

type : 'POST', 


url : '../controlador/controlador_modificar_tarea.php', 


dataType : 'json',


data: {

id:$('#id').val(),

titulo:$('#titulo').val(),

descripcion:$('#descripcion').val(),

fechalimite:$('#fechalimite').val(),

estadotarea:$('#estadotarea').val(),


}, 


success : function(data){
	
	conf_toast();
	if(data.error === false){

		toastr["success"](data.msg);

	} 
	if(data.error === true){ 
	
		toastr["warning"](data.msg);

 
	} 
	
	if(data.god==true)  {
	

actualizar_tabla();

ajax_limpiar_tarea();


			  }
	}, //finaliza succes
	
	error : function(XMLHttpRequest, textStatus, errorThrown) { 
	
	
	
    }
    
    });


}


function ajax_limpiar_tarea(){

    $('#id').val(""); 
    $('#titulo').val("");
    $('#descripcion').val("");
    $('#fechalimite').val("");
    $('#tipoestado').val("");
 

   $('#btnregistrar').attr("disabled", false);
   $('#btnmodificar').attr("disabled", true);
   $('#btneliminar').attr("disabled", true);
   }


function ajax_eliminar_tarea(){

    $.ajax({ 
        
        
        type : 'POST', 
        
        
        url : '../controlador/controlador_eliminar_tarea.php', 
        
        
        dataType : 'json',
        
        
        data: {
        
        id:$('#id').val()
        
        }, 
        
        
        success : function(data){
            
            conf_toast();
            if(data.error === false){
        
                toastr["success"](data.msg);
        
            } 
            if(data.error === true){ 
            
                toastr["warning"](data.msg);
        
         
            } 
            
            if(data.god==true)  {
            
       
        actualizar_tabla();
        ajax_limpiar_tarea();
        $('#exampleModal').modal('hide');
        
                      }
            }, //finaliza succes
            
            error : function(XMLHttpRequest, textStatus, errorThrown) { 
            
            
            
            } 
            
            }); 

}

