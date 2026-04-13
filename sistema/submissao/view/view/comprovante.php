<?php
  include("../controller/funcoes/funcoesmysql.php");
  
  $idartigo = $_GET['id'];
  $busca2 = select("titulo,categoria,area","sl_artigo",'id_artigo = '.$idartigo.' ');
  $trabalho = $busca2[0];
  include('../mpdf60/mpdf.php');
  $mpdf=new mPDF();
  $mpdf->WriteHTML($nome['nome']."<br> Dados do artigo".$trabalho['titulo']."<br>".$trabalho['categoria']."<br>".$trabalho['area']."<br>");
  $mpdf->Output();
  exit();