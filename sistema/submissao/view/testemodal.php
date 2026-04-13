<?php include("verificasessao.php"); ?>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
	<script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Envio do trabalho</title>
</head>
<body>
	<div class="container">
	  <h2>Modal Login Example</h2>
	  <!-- Trigger the modal with a button -->
	  <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 style="color:blue;"><span class="glyphicon glyphicon-info-sign"></span>Informações sobre o avaliador</h4>
	        </div>
	        <div class="modal-body">
	          <div class="row">

	          </div>
	        </div>
	        <div class="modal-footer">
	          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Fechar</button>
	          
	        </div>
	      </div>
	    </div>
	  </div> 
	</div>

	<script type="text/javascript">
		$(document).on('click','#myBtn',function(){ 
			$("#myModal").modal();
		});
	</script>
</body>
</html>