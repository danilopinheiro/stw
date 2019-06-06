
<?php 
	echo "Loja: ".$_GET['store'];
	echo "<br>";
	echo "Data: ".date("d/m/Y");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Store Web List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
	<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
	    </div>
	</div>
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Primeiro</th>
	      <th scope="col">Último</th>
	      <th scope="col">Nickname</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Mark</td>
	      <td>Otto</td>
	      <td>@mdo</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td colspan="2">Larry the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>
</body>
</html>