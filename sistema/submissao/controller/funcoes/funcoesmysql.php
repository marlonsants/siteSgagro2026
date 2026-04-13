<?php
function updatemysql($campos, $tabela, $condicao,$falha = 1) 
{
	//arquivo de conexão mysql
	include "conexao.php";
	//verifica se a inserção é de valores ou de uma consulta
	if ($condicao){
		$sql = "UPDATE ".$tabela." SET ".$campos." WHERE (".$condicao.")";
	}
	else{
		$sql = "UPDATE ".$tabela." SET ".$campos;
	}
	//executa a inserção dos valores na tabela indicada
   if (!mysqli_query($conect,$sql)) 
   {
        echo "Erro na SQL.";
		echo ($sql);
		exit;
   }
   return 1; 
 }

 function deletemysql($tabela, $condicao,$falha = 1) 
{
	//arquivo de conexão mysql
	include "conexao.php";
	//verifica se a inserção é de valores ou de uma consulta
	if ($condicao){
		$sql = "DELETE FROM ".$tabela." WHERE (".$condicao.")";
	}
	else{
		$sql = "DELETE FROM ".$tabela;
	}
	//executa a inserção dos valores na tabela indicada
   if (!mysqli_query($conect,$sql)) 
   {
        echo "Erro na SQL.";
        echo ($sql);
		exit;
   }
   return 1; 
 }


//Função de Inserção ###########################################################

function insert($tabela, $campos, $argumentos){
    include "conexao.php";
//date_default_timezone_set('America/Sao_Paulo');
   // $created = date("d/m/Y"). " " . date("h:i:sa"); 
    $query = 'INSERT INTO '. $tabela.'('.$campos.') VALUES ('.$argumentos.')';
    // echo $query;  // Descomentar a linha para debbugar;
   if(empty($query) OR !($conect))
  {
       return 0; //Erro com a conexão e ou consulta SQL   
    }
   if (!($res = mysqli_query($conect,$query)))
   {
       echo "Erro na SQL.";
     echo ($query);
      exit;
   }
    return $res;
    
}
// @connect - Variavel de conexão;
// @tabela - Nome da tabela onde será feita inserção;
// @campos - Nomes dos campos que serão inseridos;
// @argumentos - Valores que serão inseridos nos campos;


//Função de Exibição ############################################################
// ~~~~~Editar esta parte Adicionar condições como parametro e testar se existe ou não condição.
function select($campos,$tabela,$condicao){
    include "conexao.php";
    $infobanco = array();
    if(isset($condicao)){
    $query = "SELECT ".$campos." FROM ".$tabela." WHERE ".$condicao;
    }else{
      $query = "SELECT ".$campos." FROM ".$tabela." ";
    }
    $sql = mysqli_query($conect,$query);
    if($sql){
        while ($resposta = mysqli_fetch_assoc($sql)) {
            array_push($infobanco,$resposta);
        }
        return $infobanco;
    }
    else{
        $msg = mysql_error();
        echo $msg;
        echo $query;
    }
}
// @connect - Variavel de conexão;
// @tabela - Nome da tabela onde será feita inserção;
// @argumentos - Valores que serão inseridos nos campos;
// @condicao - Possiveis condicoes das querys ex: ( where (nome = "teste");


 ?>