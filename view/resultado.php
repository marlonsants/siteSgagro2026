<!DOCTYPE html>
<html>
<style type="text/css">
	.panel-success>.panel-heading{background-color: #A8C660; }
</style>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91044140-1', 'auto');
    ga('send', 'pageview');

</script>
<body>
	<div class="container-fluid">
	<?php include_once("menu.php"); ?>
		<div class="row">
			<div class="col-md-12">

        <div class="alert alert-success">
          <center><h3>Os resultados serão divulgados dia 09/04/2018</h3></center>
        </div>

				<!--div class="panel panel-success">
				<div class="panel-heading" style=" background-color: #337AB7; color:#fff; font-weight: bold;"><center>Trabalho aprovados</center></div>
				
				<div class="panel-body"  id="tabAva" style="height:620px;overflow:auto">

					<div style="overflow: auto">
		    			<table class="tabela1 table table-hover">
			    			<tr>
			    				<th> Titulo </th>
			    				<th> Area </th>
			    				<th> Categoria </th>
			    				<th> Autor 1 </th>
			    				<th> Autor 2 </th>
			    				<th> Autor 3 </th>
			    				<th> Autor 4 </th>
			    				<th> Autor 5 </th>
			    				    				
			    			</tr>
			    			<tbody id="trabaprovado">
			    			</tbody>	
		    			</table>
					</div>
		    		
				</div>
			
			</div-->
			</div>
		</div>
    <?php require_once('rodape2018.php') ?> 
	</div>
</body>
</html>

 <!--script type="text/javascript">
    $(document).ready(function(){
      var env = {};
      $.ajax({
                type: "POST",
                url: "../controller/resultadofinal.php",
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
  </script-->