<?php
include 'contador.php';

if (isset($_COOKIE['counte'])) {
  $counte = $_COOKIE['counte'] + 1;
} else {
  $counte = 1;
  $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>

<style type="text/css">
  .bannerHome{
    padding: 0px;
    margin-left: -15px;
    margin-right: -15px;
    width: auto;
    overflow: hidden;
    height: calc(100vh - 50px);
    background-color: transparent;
  }
  .bannerHome a{
    text-align: center;
    display: block;
    width: 100%;
    height: 100%;
    line-height: 0;
  }
  .bannerHome img{
    display: block;
    width: auto;
    height: 100%;
    max-width: none;
    margin: 0 auto;
  }
  #widgets{
    margin-top: 50px;
    padding: 34px 15px 48px;
    background:
      radial-gradient(circle at top left, rgba(181, 207, 121, 0.35), transparent 36%),
      linear-gradient(180deg, #f2efe2 0%, #faf8f2 100%);
  }

  #widgets .widgets-panel{
    max-width: 1180px;
    margin: 0 auto;
    padding: 28px;
    border-radius: 32px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.96) 0%, rgba(246, 250, 239, 0.97) 100%);
    box-shadow: 0 24px 60px rgba(60, 79, 30, 0.14);
    position: relative;
    overflow: hidden;
  }

  #widgets .widgets-panel:before{
    content: '';
    position: absolute;
    top: -60px;
    right: -40px;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: rgba(181, 207, 121, 0.18);
  }

  #widgets .widgets-panel:after{
    content: '';
    position: absolute;
    left: 36px;
    right: 36px;
    top: 0;
    height: 5px;
    border-radius: 0 0 20px 20px;
    background: linear-gradient(90deg, #7d9f39 0%, #b5cf79 50%, #4c7722 100%);
  }

  #widgets .widget-intro{
    position: relative;
    z-index: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: end;
    justify-content: space-between;
    gap: 12px 24px;
    margin-bottom: 28px;
  }

  #widgets .widget-kicker{
    display: inline-block;
    margin-bottom: 8px;
    padding: 7px 14px;
    border-radius: 999px;
    background-color: rgba(76, 119, 34, 0.12);
    color: #4c7722;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1.2px;
    text-transform: uppercase;
  }

  #widgets .widgets-heading{
    margin: 0;
    max-width: 620px;
    color: #294116;
    font-size: 33px;
    line-height: 1.2;
    font-weight: bold;
  }

  #widgets .widgets-subtitle{
    margin: 10px 0 0;
    max-width: 620px;
    color: #5a5a5a;
    font-size: 16px;
    line-height: 1.7;
  }

  #widgets .widget-badge{
    position: relative;
    z-index: 1;
    padding: 14px 18px;
    min-width: 185px;
    border-radius: 18px;
    background-color: #fff;
    box-shadow: 0 14px 30px rgba(66, 94, 32, 0.12);
    border: 1px solid rgba(57, 93, 37, 0.08);
    text-align: left;
  }

  #widgets .widget-badge-label{
    display: block;
    margin-bottom: 4px;
    color: #6c7a57;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  #widgets .widget-badge-value{
    display: block;
    color: #2f8a2f;
    font-size: 32px;
    line-height: 1;
    font-weight: bold;
  }

  #widgets .widget-row{
    position: relative;
    z-index: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    margin-left: -15px;
    margin-right: -15px;
  }

  #widgets .widget-col{
    margin-bottom: 0;
  }

  #widgets .widget-card{
    position: relative;
    background-color: #ffffff;
    border-radius: 24px;
    border: 1px solid rgba(57, 93, 37, 0.08);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
    padding: 24px;
    height: 100%;
    overflow: hidden;
  }

  #widgets .widget-card:before{
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(181, 207, 121, 0.08) 0%, rgba(255, 255, 255, 0) 30%);
    pointer-events: none;
  }

  #widgets .widget-instagram{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 18px;
  }

  #widgets .widget-card-head{
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    margin-bottom: 8px;
  }

  #widgets .widget-label{
    display: block;
    margin-bottom: 6px;
    color: #71913c;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  #widgets .widget-card-title{
    margin: 0;
    color: #294116;
    font-size: 25px;
    line-height: 1.25;
    font-weight: bold;
  }

  #widgets .widget-chip{
    display: inline-block;
    padding: 7px 12px;
    border-radius: 999px;
    background-color: rgba(181, 207, 121, 0.18);
    color: #4c7722;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    white-space: nowrap;
  }

  #widgets .widget-embed{
    position: relative;
    z-index: 1;
    padding: 18px;
    border-radius: 20px;
    background: linear-gradient(180deg, #f9faf5 0%, #ffffff 100%);
    box-shadow: inset 0 0 0 1px rgba(57, 93, 37, 0.08);
    text-align: center;
    overflow-x: auto;
    overflow-y: visible;
  }

  #widgets .widget-embed blockquote.instagram-media{
    margin: 0 auto !important;
    width: 100% !important;
    max-width: 540px !important;
    min-width: 0 !important;
  }

  #widgets .widget-info{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: linear-gradient(160deg, #ffffff 0%, #f2f7e8 100%);
  }

  #widgets .widget-title{
    position: relative;
    z-index: 1;
    margin: 0 0 14px;
    font-size: 28px;
    line-height: 1.25;
    font-weight: bold;
    color: #2f4f1f;
  }

  #widgets .widget-text{
    position: relative;
    z-index: 1;
    margin: 0;
    font-size: 17px;
    line-height: 1.75;
    color: #3f3f3f;
  }

  #widgets .widget-stat{
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
    margin: 20px 0 16px;
    padding: 18px 20px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.88);
    box-shadow: inset 0 0 0 1px rgba(57, 93, 37, 0.08);
  }

  #widgets .widget-text .text,
  #widgets .widget-stat .text{
    color: #2f8a2f;
    font-size: 42px;
    line-height: 1;
    font-weight: bold;
    display: inline-block;
  }

  #widgets .widget-stat-label{
    color: #55614a;
    font-size: 14px;
    line-height: 1.5;
  }

  #widgets .widget-highlights{
    position: relative;
    z-index: 1;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 22px 0;
  }

  #widgets .widget-highlights span{
    display: inline-block;
    padding: 9px 14px;
    border-radius: 999px;
    background-color: rgba(76, 119, 34, 0.09);
    color: #446322;
    font-size: 13px;
    font-weight: bold;
  }

  #widgets .widget-actions{
    position: relative;
    z-index: 1;
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 10px;
  }

  #widgets .widget-btn{
    display: inline-block;
    padding: 12px 18px;
    border-radius: 999px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.2s ease;
  }

  #widgets .widget-btn-primary{
    background-color: #4c7722;
    color: #fff;
    box-shadow: 0 12px 24px rgba(76, 119, 34, 0.2);
  }

  #widgets .widget-btn-primary:hover,
  #widgets .widget-btn-primary:focus{
    color: #fff;
    background-color: #3f651c;
    text-decoration: none;
  }

  #widgets .widget-btn-secondary{
    background-color: rgba(76, 119, 34, 0.08);
    color: #446322;
  }

  #widgets .widget-btn-secondary:hover,
  #widgets .widget-btn-secondary:focus{
    color: #2f4f1f;
    background-color: rgba(76, 119, 34, 0.14);
    text-decoration: none;
  }

  @media (min-width: 992px) {
    #widgets .widget-col-instagram,
    #widgets .widget-col-info{
      float: none;
    }

    #widgets .widget-col-instagram{
      width: 58.33333333%;
    }

    #widgets .widget-col-info{
      width: 41.66666667%;
    }
  }

  @media (max-width: 991px) {
    #widgets{
      padding: 26px 15px 36px;
    }

    #widgets .widgets-panel{
      padding: 22px;
      border-radius: 24px;
    }

    #widgets .widget-intro{
      margin-bottom: 22px;
    }

    #widgets .widgets-heading{
      font-size: 28px;
    }

    #widgets .widget-card,
    #widgets .widget-embed{
      padding: 18px;
    }

    #widgets .widget-col{
      margin-bottom: 20px;
    }

    #widgets .widget-col:last-child{
      margin-bottom: 0;
    }

    #widgets .widget-title{
      font-size: 24px;
    }
  }

  @media (max-width: 767px) {
    #widgets{
      margin-top: 30px;
      padding-bottom: 30px;
    }

    #widgets .widgets-panel{
      padding: 18px;
      border-radius: 22px;
    }

    #widgets .widgets-panel:after{
      left: 18px;
      right: 18px;
    }

    #widgets .widgets-heading{
      font-size: 24px;
    }

    #widgets .widgets-subtitle,
    #widgets .widget-text{
      font-size: 15px;
      line-height: 1.65;
    }

    #widgets .widget-card-head{
      flex-direction: column;
      align-items: flex-start;
    }

    #widgets .widget-card-title,
    #widgets .widget-title{
      font-size: 21px;
    }

    #widgets .widget-stat{
      gap: 6px;
      padding: 16px;
    }

    #widgets .widget-text .text,
    #widgets .widget-stat .text,
    #widgets .widget-badge-value{
      font-size: 34px;
    }

    #widgets .widget-embed{
      padding: 12px;
    }

    #widgets .widget-embed blockquote.instagram-media{
      min-width: 0 !important;
    }
  }

  #bannerHome{
    display: block;
    width: 100%;
    height: 100%;
    margin: 0;
  }

  
</style>
<!DOCTYPE html>
<html>

<body>

  <div class="container-fluid">

    <?php include_once("menu.php"); ?>


    <!-- <p id="tamanhoTela"></p> -->
    <div class="row bannerHome" >
      
        <a href="submissao.php">  <img class="img-responsive" id="bannerHome" src="../webroot/images/imagemFundoHomeSgagro.png"> </a>
      
    </div>

    <div class="row" id="widgets">

      <div class="widgets-panel">

        <div class="widget-intro">
          <div>
            <span class="widget-kicker">Conexao SGAgro</span>
            <h2 class="widgets-heading">Conteudo social e comunidade reunidos em uma unica experiencia.</h2>
            <p class="widgets-subtitle">Acompanhe os destaques mais recentes do evento e veja como a audiencia do SGAgro continua crescendo a cada nova edicao.</p>
          </div>
        </div>

        <div class="widget-row">

      <!-- <div class="col-md-4 col-xs-12" style="border-radius: 15px">
        <div class="col-md-12">
                  
          <div class="row">
            <div class="fb-page" data-href="https://www.facebook.com/sgagrounesp/" data-tabs="timeline" data-width="400" data-height="607" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sgagrounesp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sgagrounesp/">SGAgro</a></blockquote></div>
          </div>

          <div class="row" style="background-color:white; width: 400px; border-radius: 0px 0px 5px 5px ">
            <div class="fb-comments" data-href="https://www.facebook.com/SGAgro-164350053919134/?fref=ts" data-numposts="2"></div>  
          </div>

        </div>
        
      </div>   -->

      <div class="col-md-6 col-xs-12 widget-col widget-col-instagram">
        <div class="widget-card widget-instagram">
          <div class="widget-card-head">
            <div>
              <span class="widget-label">Instagram oficial</span>
              <h3 class="widget-card-title">Veja o que esta movimentando o SGAgro agora.</h3>
            </div>
          </div>
          <div class="widget-embed">
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DXE5EwgEZKM/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DXE5EwgEZKM/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DXE5EwgEZKM/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Um post compartilhado por SGAgro - Evento Científico (@sgagrounesp)</a></p></div></blockquote>
          <script async src="//www.instagram.com/embed.js"></script>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xs-12 widget-col widget-col-info">
        <div class="widget-card widget-info">
          <?php
          echo "<div>
                  <span class='widget-label'>Comunidade em crescimento</span>
                  <h2 class='widget-title'>Cada visita reforça a presenca do SGAgro no ambiente academico e profissional.</h2>
                  <p class='widget-text'>O interesse pelo evento segue aumentando e a pagina inicial se torna um ponto de encontro para quem acompanha novidades, programacao e oportunidades de submissao.</p>
                  <div class='widget-stat'>
                    <span class='widget-stat-label'>Acessos registrados nesta experiência digital</span>
                    <span class='text'>$a</span>
                  </div>
                  <div class='widget-highlights'/>
                  <div class='widget-actions'>
                    <a class='widget-btn widget-btn-primary' href='submissao.php'>Submeter trabalho</a>
                    <a class='widget-btn widget-btn-secondary' href='https://www.instagram.com/sgagrounesp/' target='_blank'>Seguir no Instagram</a>
                  </div>
                </div>";
          ?>
          
        </div>
      </div>
        </div>
      </div>

   <?php require_once('rodape2019.php'); ?>
 </body>
 </html>

 <style>
   th{background-color: #337AB7; color:#fff;}
   th{text-align: center}
   span{font-weight: bold;}
 </style>

  <script>
  function ajustarAlturaBanner() {
    var menu = document.getElementById('nav-main');
    var banner = document.querySelector('.bannerHome');

    if (!banner) {
      return;
    }

    var alturaMenu = menu ? menu.offsetHeight : 50;
    var alturaJanela = window.innerHeight || document.documentElement.clientHeight || screen.height;
    var alturaBanner = alturaJanela - alturaMenu;

    if (alturaBanner > 0) {
      banner.style.height = alturaBanner + 'px';
    }
  }

  function obterTamanhoTela() {
    const largura = window.innerWidth || document.documentElement.clientWidth || screen.width;
    const altura = window.innerHeight || document.documentElement.clientHeight || screen.height;
    return { largura, altura };
  }

  window.addEventListener('load', ajustarAlturaBanner);
  window.addEventListener('resize', ajustarAlturaBanner);

  // const tamanhoTela = obterTamanhoTela();
  // console.log(`Largura: ${tamanhoTela.largura}px, Altura: ${tamanhoTela.altura}px`);

  // let info = document.getElementById('tamanhoTela');
  // info.innerText  = `Largura: ${tamanhoTela.largura}px, Altura: ${tamanhoTela.altura}px`;

 </script>
