<style type="text/css">
    body{
      margin-top:0px;
      margin-bottom: 0px;
      background-color: #ebebeb;
      background-size: 100%;
      background-attachment: fixed;
      border-radius: 100px;
      overflow-x: hidden;
    }

    .navbar-inverse{
      border: none;
      margin-bottom: 0px;
      font-size: 13px;
      padding: 0 28px;
      background: linear-gradient(135deg, #274d13 0%, #3f6f1d 52%, #6a942d 100%);
      color: #ffffff;
      box-shadow: 0 14px 28px rgba(23, 38, 12, 0.22);
      position: relative;
      z-index: 20;
    }

    .navbar-inverse:before{
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      height: 4px;
      background: linear-gradient(90deg, rgba(255,255,255,0.55) 0%, rgba(216, 232, 180, 0.55) 100%);
    }

    .navbar-brand{
      height: auto;
      padding: 14px 0;
      margin-right: 24px;
    }

    .navbar-brand:hover,
    .navbar-brand:focus{
      text-decoration: none;
    }

    .nav-brand-wrap{
      display: flex;
      align-items: center;
      gap: 12px;
      color: #ffffff;
    }

    .nav-brand-logo{
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.12);
      padding: 6px;
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.16);
    }

    .nav-brand-text{
      line-height: 1.1;
    }

    .nav-brand-title{
      display: block;
      font-size: 22px;
      font-weight: bold;
      letter-spacing: 0.08em;
    }

    .nav-brand-subtitle{
      display: block;
      font-size: 11px;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.85);
      margin-top: 3px;
    }

    .navbar-inverse .navbar-toggle{
      margin-top: 22px;
      border: 1px solid rgba(255,255,255,0.28);
      background-color: rgba(255,255,255,0.08);
    }

    .navbar-inverse .navbar-toggle:hover,
    .navbar-inverse .navbar-toggle:focus{
      background-color: rgba(255,255,255,0.18);
    }

    .navbar-inverse .navbar-collapse{
      border-color: rgba(255,255,255,0.12);
    }

    .navbar-inverse .navbar-nav{
      margin-top: 16px;
      margin-bottom: 16px;
    }

    .navbar-inverse .navbar-nav>li{
      margin: 0 4px;
    }

    .navbar-inverse .navbar-nav>li>a{
      color: #fffdfd;
      font-weight: bold;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      padding: 12px 15px;
      border-radius: 999px;
      transition: background-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
    }

    .navbar-inverse .navbar-nav>li>a:hover,
    .navbar-inverse .navbar-nav>li>a:focus,
    .navbar-inverse .navbar-nav>.open>a,
    .navbar-inverse .navbar-nav>.open>a:focus,
    .navbar-inverse .navbar-nav>.open>a:hover{
      color: #ffffff;
      background-color: rgba(255,255,255,0.14);
      box-shadow: inset 0 0 0 1px rgba(255,255,255,0.16);
    }

    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:focus,
    .navbar-inverse .navbar-nav>.active>a:hover{
      color: #294214;
      background: linear-gradient(135deg, #dceab8 0%, #f0f6df 100%);
      box-shadow: 0 10px 18px rgba(24, 44, 11, 0.18);
    }

    .navbar-inverse .dropdown-menu{
      border: none;
      border-radius: 16px;
      padding: 10px;
      margin-top: 10px;
      background: rgba(255,255,255,0.98);
      box-shadow: 0 18px 34px rgba(21, 33, 11, 0.18);
      min-width: 220px;
    }

    .navbar-inverse .dropdown-menu>li>a{
      color: #31511a;
      font-weight: bold;
      padding: 10px 14px;
      border-radius: 10px;
      white-space: normal;
    }

    .navbar-inverse .dropdown-menu>li>a:hover,
    .navbar-inverse .dropdown-menu>li>a:focus{
      color: #244012;
      background: #edf4de;
    }

    .nav-icon{
      margin-left: 6px;
      font-size: 10px;
      top: 0;
    }

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
      margin-top: 120px;
    }

    @media (min-width: 768px){
      .navbar-header{
        float: none;
        display: inline-block;
      }

      .navbar-inverse .navbar-collapse{
        display: inline-block !important;
        vertical-align: top;
        padding-left: 18px;
      }
    }

    @media (max-width: 991px){
      .navbar-inverse{
        padding: 0 15px;
      }

      .nav-brand-title{
        font-size: 19px;
      }

      .nav-brand-subtitle{
        letter-spacing: 0.11em;
      }

      .navbar-inverse .navbar-nav>li>a{
        padding: 11px 13px;
      }
    }

    @media (max-width: 767px){
      .navbar-brand{
        max-width: calc(100% - 70px);
      }

      .nav-brand-logo{
        width: 44px;
        height: 44px;
      }

      .nav-brand-title{
        font-size: 17px;
      }

      .nav-brand-subtitle{
        font-size: 10px;
      }

      .navbar-inverse .navbar-nav{
        margin-top: 8px;
      }

      .navbar-inverse .navbar-nav>li{
        margin: 2px 0;
      }

      .navbar-inverse .navbar-nav>li>a{
        border-radius: 12px;
      }

      .navbar-inverse .dropdown-menu{
        background: rgba(255,255,255,0.10);
        box-shadow: none;
        padding: 6px 0 6px 12px;
      }

      .navbar-inverse .dropdown-menu>li>a{
        color: #ffffff;
      }

      .navbar-inverse .dropdown-menu>li>a:hover,
      .navbar-inverse .dropdown-menu>li>a:focus{
        color: #ffffff;
        background: rgba(255,255,255,0.14);
      }

      .firstRow{
        margin-top: 90px;
      }
    }
  </style>
<div class="row">
  <nav id="nav-main" class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
          <span class="sr-only">Alternar navegacao</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav">

          <li id="home" class="nav-item"><a class="nav-link" href="home.php?id=home">HOME</a></li>
          <li id="sobre" class="nav-item"><a class="nav-link" href="sobre.php?id=sobre">SOBRE</a></li>
          <li id="institucional" class="nav-item"><a class="nav-link" href="institucional.php?id=institucional">INSTITUCIONAL</a></li>
          <li id="datas" class="nav-item"><a class="nav-link" href="datasimportantes.php?id=datas">DATAS IMPORTANTES</a></li>
          <li id="submissao" class="nav-item"><a class="nav-link" href="submissao.php?id=submissao">SUBMISSÃO</a></li>
          <li id="inscricao" class="nav-item"><a class="nav-link" href="inscricao.php?id=inscricao">INSCRIÇÃO</a></li>
          <li id="resultado" class="nav-item"><a class="nav-link" href="http://sistema.sgagro.org/resultado/evento" target="_blank" >RESULTADOS</a></li>

          <li class="dropdown" id="evento">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTO <span class="glyphicon glyphicon-menu-down nav-icon"></span></a>
            <ul class="dropdown-menu">
              <li id="apresentacao" class="nav-item"><a class="nav-link" href="apresentacao.php?id=apresentacao">APRESENTAÇÃO</a></li>
              <li id="programacao" class="nav-item"><a class="nav-link" href="programacao.php?id=programacao">PROGRAMAÇÃO</a></li>
              <li id="expediente" class="nav-item"><a class="nav-link" href="expediente.php?id=expediente">ÁREAS TEMÁTICAS</a></li>
              <li id="comissao" class="nav-item"><a class="nav-link" href="comissao.php?id=comissao">COMISSÃO</a></li>
            </ul>
          </li>
          <li id="resumo" class="nav-item"><a class="nav-link" href="ResumoTrabalhos.php?id=resumo">RESUMO DOS TRABALHOS</a></li>
          <li class="dropdown" id="edicoes">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EDIÇÕES <span class="glyphicon glyphicon-menu-down nav-icon"></span></a>
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
          </li>
          
          <li id="apresentacoes" class="nav-item"><a class="nav-link" href="apresentacoes.php?id=apresentacoes">APRESENTAÇÕES</a></li> 
          <li id="contato" class="nav-item"><a class="nav-link" href="contato.php?id=contato">CONTATO</a></li>
          <li id="login" class="nav-item"><a class="nav-link" href="http://sistema.sgagro.org" target="_blank">LOGIN</a></li>

        </ul>
      </div>
    </nav>
  </div> 
 
<script type="text/javascript">
  $(document).ready(function(){
    var status = "<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>";
    if(status){
      $('#'+status).addClass('active');
    }


  });
</script>
<a style="display: none" href='https://br.freepik.com/fotos/flor'>Flor foto criado por wirestock - br.freepik.com</a>
