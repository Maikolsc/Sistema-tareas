function ajax_modificar_usuario(){
    $.ajax({

type : 'POST', 


url : '../controlador/controlador_modificar_usuario.php', 


dataType : 'json',


data: {

id:$('#id').val(),

nombre:$('#nombre').val(),


apellido_p:$('#apellido_p').val(),


apellido_m:$('#apellido_m').val(),


ci:$('#ci').val(),

password:$('#password').val(),

password2:$('#password2').val()



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
	
// codigo limpia campos
actualizar_tabla();

ajax_limpiar_eliminar_usuarios();


			  }
	}, //finaliza succes
	
	error : function(XMLHttpRequest, textStatus, errorThrown) { 
	
	
	
    }
    
    });


}


function ajax_notificacion_eliminar_usuario(){

    var nombre=$('#nombre').val()+" "+$('#apellido_p').val()+" "+$('#apellido_m').val()+" con CI: "+$('#ci').val();
    $("#nombrenotificacion").text(nombre);

    }
    function ajax_limpiar_usuario(){

        $('#id').val("");

        $('#ci').val("");
        
        
        $('#nombre').val("");
        
        
        $('#apellido_p').val("");
        
        
        $('#apellido_m').val("");
        
        
        $('#ci').val("");
        
        
        $('#password').val("");
        
        $('#password2').val("");
        
        
        $('#btnregistrar').attr("disabled", false);
        $('#btnmodificar').attr("disabled", true);
        $('#btneliminar').attr("disabled", true);
        }


    function ajax_eliminar_usuario(){

        $.ajax({ 
        
        
        type : 'POST', 
        
        
        url : '../controlador/controlador_eliminar_usuario.php', 
        
        
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
            
        // codigo limpia campos
        actualizar_tabla();
                ajax_limpiar_usuario();
                $('#exampleModal').modal('hide');
        
                      }
            }, //finaliza succes
            
            error : function(XMLHttpRequest, textStatus, errorThrown) { 
            
            
            
            } 
            
            }); 
            
            }