<?php 
	$titulo = "Reportes";
	$position = 6;	
	require_once '../app/res/templates/header.php';
    $url= "public/reportes/showr2/".$data[0]."/".$data[1]."/".$data[2];
    
?>


<div class="container" style="margin-top:40px;">
    <table  id="table"
            class="table table-hover table-bordered"
            data-url="<?php echo $url; ?>"
            data-toggle="table"
            data-height="0"
            data-page-size = "10"
            data-page-list = "[0]"
            data-show-columns="true"
            data-search="true"
            data-pagination="true"
            data-show-refresh="true"
            data-toolbar="#toolbar"
            data-query-params="queryParams"
            data-advanced-search="true"
            data-locale="es-SP">
        <thead>
        <tr>
            <th data-field="imei"  data-sortable="true" data-align="center">IMEI</th>
            <th data-field="fecha_recibido" data-sortable="true" data-align="center">Fecha Recibido</th>
            <th data-field="descripcion" data-align="center" data-visible="false">Descripción</th>            
            <th data-field="observacion" data-align="center" data-visible="false">Observación</th>
             <th data-field="historia" data-align="center" data-visible="false">Historia</th>
            <th data-field="cedula_tecnico" data-sortable="true" data-align="center">Cedula del Técnico</th>
            <th data-field="estado" data-sortable="true" data-align="center">Estado</th>
            
        </tr>
        </thead>
    </table>
</div>

<script type="text/javascript">

    function formatAdvancedSearch(){
        return 'Busqueda avanzada';
    }

    function queryParams() {
        return {
            type: 'owner',
            sort: 'updated',
            direction: 'desc',
            per_page: 100,
            page: 1
        };
    }

    function actionFormatter(value, row, index) {
        return [
            '<a class="edit" data-toggle="modal" data-target="#modificarModal" style="margin-left:10px; margin-right:10px;" style href="javascript:void(0)" title="Editar">',
            '<i class="glyphicon glyphicon-edit"></i>',
            '</a>',
            /*'<a class="remove " href="javascript:void(0)" title="Eliminar">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'*/
        ].join('');
    }

    window.actionEvents = {

        'click .edit': function (e, value, row, index) {

            $("#inputImei2").val(row.imei);
            $("#inputMarca2").val(row.marca);
            $("#inputModelo2").val(row.modelo);
            $("#inputDescrip2").val(row.descripcion);
            $("#inputCedulaCli2").val(row.ced_cli);

            $('#eventsTable').bootstrapTable('refresh'); //actualiza la tabla
        }
    };
</script>

</body>
</html>

