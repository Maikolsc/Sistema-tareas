//crear variable
var contador=1;
//fin
var listar_usuarios= function(){
    $.fn.dataTable.ext.errMode = 'throw';
    table = $('#myTable').DataTable({
        retrieve: true,
        "scrollX": true,
        "destroy": true,
        "language":idioma_esp ,
        "ajax":{
                      "method":"POST",
                      "url":"../controlador/listar_usuarios.php"
        },
        "columns":[
            //implementar   
            { "data": "id",
            "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html(contador);
                    contador++;
            }
            },
            //fin
           
            {"data":"nombre"},
            {"data":"apellido_p"},
            {"data":"apellido_m"},
            {"data":"ci"},
           
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
        
        //alert( 'You clicked on '+data[7]+'\'s row' );
      
        $('#nombre').val(data[1]);
        $('#id').val(data[0]);  
        
        $('#apellido_p').val(data[2]);
        
        
        $('#apellido_m').val(data[3]);
        
        
        $('#ci').val(data[4]);
    
        $('#password').val(data[5]);
        
        $('#estado').val(data[6]);

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

        

