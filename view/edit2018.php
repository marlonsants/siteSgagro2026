<!DOCTYPE html>
<html>
<?php include_once("page_head.php"); ?>
<body>
<meta charset="utf-8">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91044140-1', 'auto');
    ga('send', 'pageview');

</script>

<style type="text/css">
	iframe{width: 100%;height: 2120px; border-radius: 7px;}
	/* heights diferentes para tamanhos de telas diferentes do iframe*/
	@media only screen and (max-width: 1200px) {iframe{height: 2400px;}}
	@media only screen and (max-width: 1000px) {iframe{height: 2600px;}}
	@media only screen and (max-width: 800px) {iframe{height: 2700px;}}
	@media only screen and (max-width: 700px) {iframe{height: 2900px;}}
	@media only screen and (max-width: 600px) {iframe{height: 3250px;}}
	@media only screen and (max-width: 500px) {iframe{height: 3450px;}}
	@media only screen and (max-width: 450px) {iframe{height: 3700px;}}
	@media only screen and (max-width: 400px) {iframe{height: 4200px;}}
	/* fim heights diferentes */
</style>

<div class="container-fluid">
	
<?php include_once("menu.php"); ?>

<div class="row text-center text firstRow" style="color: black; background-color: white; margin-left: 30px; margin-right: 30px"><h2><b>Anais do Sgagro edição de 2018</b></h2></div><br>

<!--div class="alert alert-success"><center><h3>Os trabalhos serão publicados posteriormente a realização do evento</h3></center></div-->

<iframe src="https://sistema.sgagro.org/anais/1"></iframe>
<center><h4>ISSN 2525-3603</h4></center>

<?php require_once('rodape2018.php'); ?>

</div>

