<?php
  include('../MPDF60/mpdf.php');

  include ("../controller/funcoes/funcoesmysql.php");

  $idartigo = $_GET['id'];
  $campos = "t.coautor,t.titulo,t.area,t.categoria,g.id_usuario1, g.id_usuario2, g.id_usuario3, g.id_usuario4,g.id_usuario5,
  (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario1) as nome1,
  (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario2) as nome2,
  (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario3) as nome3,
  (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario4) as nome4,
  (SELECT CONCAT(nome,' ',sobrenome) FROM sl_cadusu WHERE id_usuario = g.id_usuario5) as nome5,
  (SELECT cpf FROM sl_cadusu WHERE id_usuario = g.id_usuario1) as cpf1,
  (SELECT cpf FROM sl_cadusu WHERE id_usuario = g.id_usuario2) as cpf2,
  (SELECT cpf FROM sl_cadusu WHERE id_usuario = g.id_usuario3) as cpf3,
  (SELECT cpf FROM sl_cadusu WHERE id_usuario = g.id_usuario4) as cpf4,
  (SELECT cpf FROM sl_cadusu WHERE id_usuario = g.id_usuario5) as cpf5,
  (SELECT instituicao FROM sl_cadusu WHERE id_usuario = g.id_usuario1) as inst1,
  (SELECT instituicao FROM sl_cadusu WHERE id_usuario = g.id_usuario2) as inst2,
  (SELECT instituicao FROM sl_cadusu WHERE id_usuario = g.id_usuario3) as inst3,
  (SELECT instituicao FROM sl_cadusu WHERE id_usuario = g.id_usuario4) as inst4,
  (SELECT instituicao FROM sl_cadusu WHERE id_usuario = g.id_usuario5) as inst5";
  $tabela = "sl_artigo as t INNER JOIN sl_cadusu as c ON t.email = c.email INNER JOIN sl_grupo as g ON g.id_artigo = t.id_artigo";
  $condicao = "t.id_artigo = ".$idartigo." AND t.status = 1 AND t.avaliacao_concluida1 = 1 AND avaliacao_concluida2 = 1 ORDER BY t.titulo";
  $trabalhos = select($campos,$tabela,$condicao);



  
  $nomeartigo = $trabalhos[0]['titulo'];
  $categoria = $trabalhos[0]['categoria'];
  $area = $trabalhos[0]['area'];

  $nome1 = $trabalhos[0]['nome1'];
  $cpf1 = $trabalhos[0]['cpf1'];
  $filiacao1 = $trabalhos[0]['inst1'];

  $nome2 = $trabalhos[0]['nome2'];
  $cpf2 = $trabalhos[0]['cpf2'];
  $filiacao2 = $trabalhos[0]['inst2'];

  $nome3 = $trabalhos[0]['nome3'];
  $cpf3 = $trabalhos[0]['cpf3'];
  $filiacao3 = $trabalhos[0]['inst3'];

  $nome4 = $trabalhos[0]['nome4'];
  $cpf4 = $trabalhos[0]['cpf4'];
  $filiacao4 = $trabalhos[0]['inst4'];

  $nome5 = $trabalhos[0]['nome5'];
  $cpf5 = $trabalhos[0]['cpf5'];
  $filiacao5 = $trabalhos[0]['inst5'];

  $qtdcoautores = $trabalhos[0]['coautor'];

  $opc1 ="
  <div><b>Coautor 1: </b>".$nome2."</div>
  <div><b>CPF: </b>".$cpf2."</div>
  <div><b>Filiação: </b>".$filiacao2."</div>
  <br/>
  ";

  $opc2 ="
  <div><b>Coautor 2: </b>".$nome3."</div>
  <div><b>CPF: </b>".$cpf3."</div>
  <div><b>Filiação: </b>".$filiacao3."</div>
  <br/>
  ";

  $opc3 ="
  <div><b>Coautor 3: </b>".$nome4."</div>
  <div><b>CPF: </b>".$cpf4."</div>
  <div><b>Filiação: </b>".$filiacao4."</div>
  <br/>
  ";

  $opc4 ="
  <div><b>Coautor 4: </b>".$nome5."<b></div>
  <div><b>CPF: </b>".$cpf5."</div>
  <div><b>Filiação: </b>".$filiacao5."</div>
  <br/>
  ";

  $htmlinicio="
  <html>
  <head>
    <meta charset='utf-8'>
    <style>
      b {color: green;}
    </style>
  </head>
  <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-91044140-1', 'auto');
ga('send', 'pageview');

</script>
  <body>
    
    <div style='border: 1px solid green; border-radius: 1%;'>
      <div style='margin: 2%;'>
        <img src='../images/SGAGRO LOGO.png' style='width: 10%; height: 10%;'>
        <img src='../images/unesp.jpg' style='width: 10%; height: 10%;'>
        <h2 style='margin-left: 25%; margin-top: -7%; color: green;'>Aceite de Artigo para Apresentação</h2>
      </div>
    </div><br/>

    <div style='border: 1px solid green; border-radius: 1%;'>
      <div style='margin: 2%;'>
        <div><b>Titulo do Artigo: </b>".$nomeartigo."</div>
        <div><b>Categoria: </b>".$categoria."</div>
        <div><b>Area: </b>".$area."</div>
        <div><b>Situação: </b>Aprovado</div>
        <div><b>Data do Evento: </b>08 a 10 de junho de 2016</div>
        <div><b>Local: </b>UNESP FCAV - Jaboticabal-SP</div>
      </div>
    </div><br/>

    <div style='border: 1px solid green; border-radius: 1%;'>
      <div style='margin: 2%;'>
      <div><b>Autor: </b>".$nome1."</div>
      <div><b>CPF: </b>".$cpf1."</div>
      <div><b>Filiação: </b>".$filiacao1."</div>
      <br/>
  ";

  $htmlmeio = "<b>Erro</b>";

  $htmlfim ="           
    </div>
    
  </body>
  </html>
  ";

  if ($qtdcoautores == 0) {$htmlmeio = "<b>Não há coautores cadastrados.</b>";}
  if ($qtdcoautores == 1) {$htmlmeio = $opc1;}
  if ($qtdcoautores == 2) {$htmlmeio = $opc1.$opc2;}
  if ($qtdcoautores == 3) {$htmlmeio = $opc1.$opc2.$opc3;}
  if ($qtdcoautores == 4) {$htmlmeio = $opc1.$opc2.$opc3.$opc4;}

  $mpdf = new mPDF();
  $mpdf->WriteHTML($htmlinicio.$htmlmeio.$htmlfim);
  $mpdf->Output();
  exit();
?>