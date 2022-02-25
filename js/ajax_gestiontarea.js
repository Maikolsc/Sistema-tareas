function ajax_registrar_tarea(){

    $.ajax({ 
    
    
    type : 'POST', 
    
    
    url : '../controlador/controlador_gestiontarea.php', 
    
    
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
        
    //codigo limpia campos
    
    actualizar_tabla();
    
    
    $('#titulo').val("");
    
    $('#descripcion').val("");
    
    $('#fechalimite').val("");
    
    $('#estadotarea').val("");
    
                  }
        }, //finaliza succes
        
        error : function(XMLHttpRequest, textStatus, errorThrown) { 
        
        
        
        } 
        
        }); 
        
        }
    
    