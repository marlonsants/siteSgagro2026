    	<?php
		include ('../controller/funcoes/conexao.php');
		include ('../controller/funcoes/funcoesmysql.php');

		if(isset($_POST)){
			$email = $_GET['email'];
			$emailcod = base64_decode($email);
			$key = sha1("sigma");
			$emaildecod = str_replace($key,'', $emailcod);
			
			// exibir($conect,$emaildecod);
			$infobanco = select('*','sl_cadusu',"email = '".$emaildecod."' ");
						
			foreach($infobanco as $resposta){$result = $resposta;}

			if(empty($result)==false){
				
				updatemysql('emailverificado = 1','sl_cadusu',"email = '".$emaildecod."' ");

				echo '<script>location.href="http://www.sgagro.org/sitesgagro/sistema/submissao";</script>';
				
			}

			else{
				echo "<center><h2>Erro, este email não está cadastrado no sistema</h2></center>";
				
			}
		}
		?>
	


