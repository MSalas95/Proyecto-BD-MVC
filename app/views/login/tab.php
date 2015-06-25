<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
	<title>Prueba tabla</title>
	<base href="http://localhost/proyectobd/">
	<link href="app/res/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="app/res/css/awesome-bootstrap-checkbox.css"         rel="stylesheet">
	<link href="app/res/css/bootstrap-table.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="app/res/js/jquery.min.js"></script>
	<script src="app/res/js/bootstrap.min.js"></script>
	<script src="app/res/js/bootstrap-table.js"></script>
	<script src="app/res/js/bootstrap-table-es-SP.js"></script>
</head>
<body>

	<div class="alert alert-success" id="eventsResult">
    	Here is the result of event.
	</div>

	<div id="toolbar" class="btn-group">
	    <button type="button" class="btn btn-default">
	        <i class="glyphicon glyphicon-plus"></i>
	    </button>
	    <button type="button" class="btn btn-default">
	        <i class="glyphicon glyphicon-heart"></i>
	    </button>
	    <button type="button" class="btn btn-default">
	        <i class="glyphicon glyphicon-trash"></i>
	    </button>
	</div>


	<div class="container" style="margin-top:200px;">
		<table  id="eventsTable" 
				class="table table-hover" 
				data-toggle="table" 
				data-url="app/res/data/data1.json"
				data-height="0"
				data-show-columns="true"
				data-click-to-select="true"
				data-search="true"
				data-pagination="true"
				data-show-refresh="true"
				data-toolbar="#toolbar"
				data-query-params="queryParams"
				data-locale="es-SP">
		    <thead>
		        <tr>
		        	<th data-field="state" data-checkbox="true"></th>
		            <th data-field="id" data-sortable="true" data-align="center">Item ID</th>
		            <th data-field="name" data-sortable="true" data-align="center">Item Name</th>
		            <th data-field="price" data-align="center" data-formatter="starsFormatter">Item Price</th>
		            <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
		        </tr>
		    </thead>
		</table>
	</div>
	
	<script type="text/javascript">

		function starsFormatter(value) {
    		return '<i class="glyphicon glyphicon-star"></i> ' + value;
		}
		function runningFormatter(value, row, index) {
    		return index;
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
		        '<a class="like" href="javascript:void(0)" title="Like">',
		        '<i class="glyphicon glyphicon-heart"></i>',
		        '</a>',
		        '<a class="edit" style="margin-left:10px; margin-right:10px;" style href="javascript:void(0)" title="Edit">',
		        '<i class="glyphicon glyphicon-edit"></i>',
		        '</a>',
		        '<a class="remove " href="javascript:void(0)" title="Remove">',
		        '<i class="glyphicon glyphicon-remove"></i>',
		        '</a>'
		    ].join('');
		}

		window.actionEvents = {
		    'click .like': function (e, value, row, index) {
		        alert('You click like icon, row: ' + JSON.stringify(row));
		        console.log(value, row, index);
		    },
		    'click .edit': function (e, value, row, index) {
		        	$('#eventsTable').bootstrapTable('refresh'); //actualiza la tabla
		    },
		    'click .remove': function (e, value, row, index) {
		        alert('You click remove icon, row: ' + JSON.stringify(row));
		        console.log(value, row, index);
		    }
		};

		$(function () {
		    var $result = $('#eventsResult');

		    $('#eventsTable').on('all.bs.table', function (e, name, args) {
		        console.log('Event:', name, ', data:', args);
		    })
		    .on('click-row.bs.table', function (e, row, $element) {
		        $result.text('Event: click-row.bs.table');
		    })
		    .on('dbl-click-row.bs.table', function (e, row, $element) {
		        $result.text('Event: dbl-click-row.bs.table');
		    })
		    .on('sort.bs.table', function (e, name, order) {
		        $result.text('Event: sort.bs.table');
		    })
		    .on('check.bs.table', function (e, row) {
		        $result.text('Event: check.bs.table');
		    })
		    .on('uncheck.bs.table', function (e, row) {
		        $result.text('Event: uncheck.bs.table');
		    })
		    .on('check-all.bs.table', function (e) {
		        $result.text('Event: check-all.bs.table');
		    })
		    .on('uncheck-all.bs.table', function (e) {
		        $result.text('Event: uncheck-all.bs.table');
		    })
		    .on('load-success.bs.table', function (e, data) {
		        $result.text('Event: load-success.bs.table');
		    })
		    .on('load-error.bs.table', function (e, status) {
		        $result.text('Event: load-error.bs.table');
		    })
		    .on('column-switch.bs.table', function (e, field, checked) {
		        $result.text('Event: column-switch.bs.table');
		    })
		    .on('page-change.bs.table', function (e, number, size) {
		        $result.text('Event: page-change.bs.table');
		    })
		    .on('search.bs.table', function (e, text) {
		        $result.text('Event: search.bs.table');
		    });
		});

	</script>

</body>
</html>