<html>
<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../Chart.js-master/Chart.min.js"> </script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Trabalhos</title>

	<style type="text/css">
        li{
            font-size: 16px;
            font-weight: 700;
        }
        nav{
            margin-top: -5px;
        }
        .panel-success>.panel-heading{
          background-color: #A8C660;
          color: white;
        }


    </style>
</head>
<body>

	
    
<div class="container-fluid">
    <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" style="font-size:28px;color:white">SGAgro</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="estatisticas.php"><span class="glyphicon glyphicon-stats" ></span> Estatisticas</a></li>
              <li><a href="avaliadores_cad.php"><span class="glyphicon glyphicon-education" ></span> Avaliadores </a></li>
              <li><a href="atribuiravaliador.php"><span class="glyphicon glyphicon-star" ></span> Atribuir avaliadores</a></li>
              <li><a href="trabalhos.php"><span class="glyphicon glyphicon-search" ></span> Trabalhos</a></li>
              <li><a href="resultado.php"><span class="glyphicon glyphicon-search" ></span>Resultado</a></li>
              <li><a href="cadadm.php"><span class="glyphicon glyphicon-plus" ></span> Novo Administrador</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right"style="margin-right: 1%">
              
              <li><a href="../sessao/fecharsessao.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            </ul>
    </nav>
   
    <!-- <div class="jumbotron"> -->
    	<div class="panel panel-success">
    		<div class="panel-heading"><h3><b>Trabalhos aprovados</b></h3></div>
    		<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						
						<table class="tabela1 table table-striped table-condensed table-bordered">
							<thead>
								<th>Título</th><th>Área</th><th>Categoria</th><th>Autor 1</th><th>Autor 2</th><th>Autor 3</th><th>Autor 4</th><th>Autor 5</th>
							</thead>
							<tbody id="trabaprovado">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
  <!-- </div> -->

  <script type="text/javascript">
    $(document).ready(function(){
      var env = {};
      $.ajax({
                type: "POST",
                url: "../controller/ACAO/resultadofinal.php",
                data: env,
                dataType : 'json',
                success: function(data){
                    console.log(data);
                    var linha;
                    var count = 0;
                    $.each(data,function(key,val){
                      var nota1 = parseFloat(data[key]['notafinal']);
                      var nota2 = parseFloat(data[key]['nota2']);
                      var media =  nota1 + nota2;
                      media = String(media);
                      media = media.substring(0, 3);
                      linha = "<tr>";

                      $.each(data[key],function(indice,valor){

                        if(indice == "id_usuario1" || indice == "id_usuario2" || indice == "id_usuario3" || indice == "id_usuario4" || indice == "id_usuario5"){
                          
                          return;
                        }

                        if(indice == "nome1" || indice == "nome2" || indice == "nome3" || indice == "nome4" || indice == "nome5"){
                          if(valor != null){
                          var valormauisculo = valor.toUpperCase();
                          linha+="<td>"+valormauisculo+"</td>";
                          }else{
                            linha+="<td>  </td>";
                          }
                          
                          return;
                        }
                        
                        if(indice == "titulo"){
                          var valormauisculo = valor.toUpperCase();
                          linha+="<td>"+valormauisculo+"</td>";
                          return;
                        }
                        
                        linha+="<td>"+valor+"</td>";
                        
                      });


                      linha+="</tr>";

                      $("#trabaprovado").append(linha);

                        
                    
                    });
                 

                }, error: function(data) {
                      console.log(data);
                      $('#trabaprovado').append('<b>nenhum trabalho foi aprovado até o momento </b>');
                  }
        });
    });
  </script>