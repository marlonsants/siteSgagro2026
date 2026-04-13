<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>
<div class="container-fluid">
	<?php include_once("menu.php"); ?>
	
	<div class="col-md-5 col-sm-5 col-xs-12 firstRow" style="font-weight: bold; color: black; font-size: 14px;">
		<div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		    	<div class="row" style="background-color: white; margin-bottom: 20px; padding: 10px; border-radius: 15px; width: 400px">
		    		<p class="destacado">UNESP</p>
			      <p class="text-contato">Faculdade de Ciências Agrárias e Veterinárias</p>
			      <p class="text-contato">Via de acesso Prof. Paulo Donato Castellane, Km 5</p>
			      <p class="text-contato">Jaboticabal SP</p>	
		    	</div>
		      
			      <div class="row">
			      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238154.49844992146!2d-48.64412545749241!3d-21.14586920609135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b96cf14429f10f%3A0x273739b4a524c4d5!2sFaculdade+de+Ci%C3%AAncias+Agr%C3%A1rias+e+Veterin%C3%A1rias!5e0!3m2!1spt-BR!2sbr!4v1461156631233" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			     </div>
			</div>     
	    </div>
	</div>    
	    <div class="col-md-offset-1 col-md-6 col-sm-6 col-xs-12 firstRow" style="font-weight: bold; color: black; font-size: 14px;">
	    	<form action="emailcontato.php" method="post">		
		      <div class="row">
		      	
		        <div class="col-sm-12 form-group">
	              <label>Dados para contato </label>
		          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
		        </div>
		      </div>

		      <div class="row">
		        <div class="col-sm-12 form-group">

	                  
		          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
		        </div>
		      </div>
	      
		      <div class="row">
		        <div class="col-sm-12 form-group">
	              <label> Qual o motivo do contato ? </label>
                  <select class="form-control" name="duvidas">
	                   <option value="Simposio">Duvidas sobre o Simpósio</option>
	                   <option value="Sistema">Erros no Sistema de submissão</option>
                  </select>
		      	</div>
	          </div>

			  <div class="row">
			       <div class="col-sm-12 form-group">
			         <input class="form-control" id="assunto" name="assunto" placeholder="Assunto" type="text" required>
			       </div>
		      </div>
	      	  <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5"></textarea><br>
		      <div class="row">
			      <div class="col-sm-12 form-group">
			        <input type="submit" class="btn btn-default pull-right btn btn-primary" value="Enviar">
		          </div>
	      	  </div>
	        </form>

	    </div>
	    <?php require_once('rodape2019.php'); ?> 
	  </div>
	  
	  
	</div>

	

</div>