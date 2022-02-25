
var contador=1;

var listar_tarea= function(){
    $.fn.dataTable.ext.errMode = 'throw';
    table = $('#myTable').DataTable({
        retrieve: true,
        "scrollX": true,
        "destroy": true,
        "language":idioma_esp ,
        "ajax":{
                      "method":"POST",
                      "url":"../controlador/listar_tareas.php"
        },
        "columns":[
       
            { "data": "id",
            "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(contador);
                    contador++;
            }
            },
        
           
            {"data":"titulo"},
            {"data":"descripcion"},
            {"data":"fechalimite"},
            {"data":"estadotarea"},
           
            {"data":"estado"}
            
        ],
        columnDefs: [
          {
              targets: [ 0, 1, 2 ],
              className: 'mdl-data-table__cell--non-numeric'
          }
      ]
  
      });
      $('#myTable tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        
      
      
        $('#titulo').val(data[1]);
        $('#id').val(data[0]);  
        
        $('#descripcion').val(data[2]);
        
        
        $('#fechalimite').val(data[3]);
        
        
        $('#estadotarea').val(data[4]);
    
        $('#estado').val(data[5]);
        
 

        $('#btnregistrar').attr("disabled", true);
        $('#btnmodificar').attr("disabled", false);
        $('#btneliminar').attr("disabled", false);
    } );
    
    }
 function actualizar_tabla(){
    contador=1;
	var table = $('#myTable').DataTable();

    table.ajax.reload();

 }

        

