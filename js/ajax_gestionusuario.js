function ajax_registrar_usuario(){

    $.ajax({ 
    
    
    type : 'POST', 
    
    
    url : '../controlador/controlador_usuario.php', 
    
    
    dataType : 'json',
    
    
    data: {
    
 
    
    
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
        
    //codigo limpia campos
    
    actualizar_tabla();
    
    
    $('#nombre').val("");
    
    
    $('#apellido_p').val("");
    
    
    $('#apellido_m').val("");
    
    $('#ci').val("");
    
    
    $('#password').val("");
   
    $('#password2').val("");
    
    
                  }
        }, //finaliza succes
        
        error : function(XMLHttpRequest, textStatus, errorThrown) { 
        
        
        
        } 
        
        }); 
        
        }
    
    