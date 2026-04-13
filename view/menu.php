<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Simpósio de Gestão do Agronegócio">
  <meta name="keywords" content="SGAgro, Agronegócios, Faculdade de Ciências Agrárias e Veterinárias, Universidade Estadual Paulista (FCAV/UNESP), FCAV, UNESP, Gestão do Agronegócio,Simpósio em Gestão do Agronegócio, Simpósio, UNESP: Câmpus de Jaboticabal, Jaboticabal, Trabalhos em PDF, Artigos">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link rel="shortcut icon" href="../webroot/images/SGAGRO_LOGO.ico" type="image/x-icon"/>
  <link href="../webroot/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../webroot/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../webroot/js/bootstrap.min.js"></script>
  <title>SGAgro</title>
  <style type="text/css">
    body{
      margin-top:0px;
      margin-bottom: 0px;
      /* background-image: url('../webroot/images/backgroundSgagro2022.jpg'); */
      background-color: #ebebeb;
      background-size: 100%;
      background-attachment: fixed;
      border-radius: 100px;
      overflow-x: hidden;
      
    }
    /*.container-fluid{background-color: white; min-height: 700px;}*/
    .navbar-inverse{
      /*background-color: transparent;*/
      border: none;
      margin-bottom: 0px;
      font-size:13px;
      padding-bottom: 0px;
      padding-right: 100px;
      background-color: #1b644c;
      color: white;

    }

    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
      color: #fff;
      background-color: #409378;
    }

    .navbar-inverse .navbar-nav>li>a {
      color: #fffdfd;
    }

    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
      color: #fff;
      background-color: #409378;
    }

    /* .active{color: white; text-decoration:none; background-color: #31a17d;}
    a{font-weight: bolder; color: white;}
    .div{background-color: #fff } */

    #rodape{

      background-color: #A8C660;
      min-height: 150px;
      font-weight: bold;
      margin-right: 0px;
      padding-right: 0px;
      width: 100%
    }
    table{background-color: white}

    .firstRow{
      margin-top: 100px;
    }
  </style>
</head>
<div class="row">
  <nav id="nav-main" class="navbar navbar-inverse">
    
      <!-- Brand and toggle get grouped for better mobile display -->
      <!-- <div class="navbar-brand">
        <a href="home.php">
          <img src="../webroot/images/SGAGRO_LOGO.png" width="8%">
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="true">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav">

          <li id="home" class="nav-item"><a class="nav-link" href="home.php?id=home">HOME</a></li>
          <li id="sobre" class="nav-item"><a class="nav-link" href="sobre.php?id=sobre">SOBRE</a></li>
          <li id="datas" class="nav-item"><a class="nav-link" href="datasimportantes.php?id=datas">DATAS IMPORTANTES</a></li>
          <li id="submissao" class="nav-item"><a class="nav-link" href="submissao.php?id=submissao">SUBMISSÃO</a></li>
          <li id="resultado" class="nav-item"><a class="nav-link" href="http://sistema.sgagro.org/resultado/evento" target="_blank" >RESULTADOS</a></li>
          

          <li class="dropdown" id="evento">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              EVENTO <span class="glyphicon glyphicon-menu-down"></span>
              <ul class="dropdown-menu">
                <li id="apresentacao" class="nav-item"><a class="nav-link" href="apresentacao.php?id=apresentacao">APRESENTAÇÃO</a></li>
                <li id="programacao" class="nav-item"><a class="nav-link" href="programacao.php?id=programacao">PROGRAMAÇÃO</a></li>
                <!-- <li id="expediente" class="nav-item"><a class="nav-link" href="expediente.php?id=evento">EXPEDIENTE</a></li> -->
                <li id="expediente" class="nav-item"><a class="nav-link" href="expediente.php?id=expediente">ÁREAS TEMÁTICAS</a></li>
                <li id="comissao" class="nav-item"><a class="nav-link" href="comissao.php?id=comissao">COMISSÃO</a></li>
              </ul>
            </a>
          </li>
          <li id="resumo" class="nav-item"><a class="nav-link" href="ResumoTrabalhos.php?id=resumo">RESUMO DOS TRABALHOS</a></li>
          <li class="dropdown" id="edicoes">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              EDIÇÕES <span class="glyphicon glyphicon-menu-down"></span>
              <ul class="dropdown-menu">
			  <li class="nav-item"><a class="nav-link" href="edit2025.php">EDIÇÃO 2025</a></li>
              <li class="nav-item"><a class="nav-link" href="edit2024.php">EDIÇÃO 2024</a></li>
               <li class="nav-item"><a class="nav-link" href="edit2023.php">EDIÇÃO 2023</a></li>
              <li class="nav-item"><a class="nav-link" href="edit2022.php">EDIÇÃO 2022</a></li>
              <li class="nav-item"><a class="nav-link" href="edit2021.php">EDIÇÃO 2021</a></li>
                <li class="nav-item"><a class="nav-link" href="edit2020.php">EDIÇÃO 2020</a></li>
                <li class="nav-item"><a class="nav-link" href="edit2019.php">EDIÇÃO 2019</a></li>
                <li class="nav-item"><a class="nav-link" href="edit2018.php">EDIÇÃO 2018</a></li>
                <li class="nav-item"><a class="nav-link" href="anais.php?id=edicoes">EDIÇÃO 2017</a></li>
                <li class="nav-item"><a class="nav-link" href="edicaoant.php?id=edicoes">EDIÇÃO 2016</a></li> 
              </ul>
            </a>
          </li>

          <li id="inscricao" class="nav-item"><a class="nav-link" href="inscricao.php?id=inscricao">INSCRIÇÃO</a></li>
          <li id="apresentacoes" class="nav-item"><a class="nav-link" href="apresentacoes.php?id=apresentacoes">APRESENTAÇÕES</a></li> 
          <li id="contato" class="nav-item"><a class="nav-link" href="contato.php?id=contato">CONTATO</a></li>
          <li id=" login" class="nav-item"><a class="nav-link" HREF="http://sistema.sgagro.org" TARGET="_blank">LOGIN</a></li>

        </ul>
      </div>
    </nav>
  </div> 
 
  <script type="text/javascript">
  $(document).ready(function(){
    var status = "<?php echo $_GET['id']; ?>";
    console.log(status);
    $('#'+status).addClass('active');


  });
</script>

<body>
<a style="display: none" href='https://br.freepik.com/fotos/flor'>Flor foto criado por wirestock - br.freepik.com</a>