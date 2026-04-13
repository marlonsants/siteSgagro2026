<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91044140-1', 'auto');
    ga('send', 'pageview');

</script>
<?php
     //require_once ("../config/conexao.php");
     require_once ("../config/conexaoant.php");
     require_once ("../config/funcoesmysql.php");?>
	
     <style type="text/css">
               #dadosTrab{
                    text-transform: uppercase;
               }
               #tituloTrab{
                    text-transform: uppercase;
               }
               .panel-success>.panel-heading{
                    background-color: rgb(168, 198, 96);
                    color: white;
               }
               .btn-success{
                    background-color: rgb(168, 198, 96);
                    color: white;
                    border: 1px solid rgb(168, 198, 96);
               }
               .row{background-color: white}
               .col-md-12{background-color: white}
     </style>
     <meta charset="utf-8">

     <div class="container-fluid">
     	<!--center><h1>2016</h1></center-->
          <?php include_once("menu.php"); ?>

     	<br>
          <!--Select edição-->
                   <!--  <div class="row">
                         <div class="col-md-12">
                              <label>Selecione a edição:</label>
                              <select id="selEdicao" class="form-control">
                                   <option>Edição Completa - 2016</option>
                              </select>
                         </div>
                    </div><br> -->
          <!--Select edição-->
          <center><h4 id=nEdicao>Edição de 2016 </h4></center>
     
     	<div class="col-md-8 col-md-offset-2">
               <center><b>Pesquise aqui por nome do autor, cooautor, titulo, ou palavras chave</b></center><br>
     		<form>
                    <div class="col-md-12">
                         <div class="input-group">
                              <input type="text" name="pesquisa" class="form-control" id="pesquisa" placeholder="Digite aqui o que deseja pesquisar e clique na lupa.">
                              <span class="input-group-btn">
                                   <button type="button" class="btn btn-success glyphicon glyphicon-search" id="buscar">
                                   </button>
                              </span>
                         </div>
                    </div>
     		</form><br><br><br>

               <div id="formularioBuca" class="col-md-12">
                    <center><b>Aqui é possivel ver todos os artigos deste ano organizados por edição, categoria e área. Basta selecionalos e clicar em Buscar</b></center><br>
          		<form>
          		
          		

          		<div class="row">
          			<div class="col-md-12">
          				<label>Selecione a categoria:</label>
          				<select class="form-control" id="selectCat">
                                   <option>Todas</option>
                                   <option>Artigo Completo</option>
                                   <option>Relato Técnico</option>
                                   <option>Resumo Expandido</option>
                              </select>
          			</div>
          		</div><br>

          		<div class="row">
          			<div class="col-md-12">
          				<label>Selecione a Área:</label>
                              
                             <select class="form-control" id="selectArea">
                                   <option>Todas</option>
                                   <option>Desenvolvimento e Gestão</option>
                                   <option>Economia e Finanças</option>
                                   <option>Empreendedorismo, Inovação e Tecnologia</option>
                                   <option>Estratégia, Planejamento e Governança</option>
                                   <option>Gestão de Pessoas e Estudos Organizacionais</option>
                                   <option>Marketing e Mercados</option>
                                   <option>Logísticas e Operações</option>
                                   <option>Sustentabilidade e Responsabilidade Sócio Ambiental</option>
                              </select>
          			</div>
          		</div><br>

          		<div class="row">
          			<button type="button" id="buscaForm" class= "btn btn-success col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
          				Buscar
          			</button>

          			
          		</div>
          		</form>
                    <center><h4>ISSN 2525-3603</h4></center>
               </div>
     	</div>
          
    <br><br><br>
    <hr></hr>
    <?php require_once('rodape2016.php'); ?>
    </div>


    <script type="text/javascript">
          $(document).ready(function(){ 
               $(document).on("click","#buscar",function(){
                    function buscaTrabAnais(){     
                         var env = {}
                              env.parametro = $("#pesquisa").val(); 
                              if(env.parametro == ''){
                                   alert("Informe um valor antes de buscar !");
                                   return;
                              }                    
                         $.ajax({
                           type: "POST",
                           url: "../controller/buscaTrabalhos.php",
                           data: env,
                           dataType : 'json',
                           success: function(data){
                              
                              $("#formularioBuca").html(' ');
                              var bt = '<div class="row>'; 
                                     bt +='<div class="col-md-offset-6 col-md-2> <button type="button" style="float:center" class="btn btn-success voltar">Voltar</button></div>'; 
                                  bt+='</div><br>';

                               $("#formularioBuca").append(bt);

                              $.each(data,function(key,val){
                                   if(data[key]['autor_1'] == null){
                                        data[key]['autor_1'] = ' ';
                                   }
                                   if(data[key]['autor_2'] == null){
                                        data[key]['autor_2'] = ' ';
                                   }
                                   if(data[key]['autor_3'] == null){
                                        data[key]['autor_3'] = ' ';
                                   }
                                   if(data[key]['autor_4'] == null){
                                        data[key]['autor_4'] = ' ';
                                   }
                                   if(data[key]['autor_5'] == null){
                                        data[key]['autor_5'] = ' ';
                                   }
                              
                                   var linha =      '<div>';
                                        linha +=       '<div class="panel panel-success">';
                                             linha +=       '<div id="tituloTrab" class="panel-heading" style="font-size:18px">'+data[key]['titulo']+'</div>';
                                                  linha +=       '<div class="panel-body">';
                                                       
                                                            linha +=       '<div id="dadosTrab" class="row" style="font-size:16px;margin-left:10px"><b>Autores:</b> '+data[key]['autor_1']+', '+data[key]['autor_2']+ ', '+data[key]['autor_3']+', '+data[key]['autor_4']+', ' +data[key]['autor_5']+'  <br> <b>Categoria:</b> '+data[key]['categoria'] +' <br> <b>Subárea:</b> '+data[key]['area'] +' <br> <b>Instituição:</b> '+data[key]['instituicao'] +'<br><br><b>Resumo:</b>'+data[key]['resumo']+'<br> <button class="btn btn-success visuTrab" type="button" id="'+data[key]['idartigo']+'">Visualizar trabalho </button></div>';
                                                       linha +=    '</div>';
                                                       linha+=        '</div>';
                                                  linha+=   '</div>';                                    

                                            $("#formularioBuca").append(linha);
                                            
                                           

                                   });      


                              },error: function(data){
                                   console.log("erro");
                                   console.log(data);
                                   

                                   $("#formularioBuca").prepend("<div class='alert alert-danger'>Não foram encontrados trabalhos relacionados a informação digitada</div>");

                              }
                         });
                         
                    }
                         buscaTrabAnais();
                         // $('#buscar').keypress(function (e) {
                         //      console.log(e);
                         //      if (e.which == 13) { buscaTrabAnais(); 
                         //      } 
                         // });  
                    });           
               });

                 
</script>

<script type="text/javascript">
     $(document).ready(function(){ 
          $(document).on("click","#buscaForm",function(){

               var env = {}
                         env.form = 1;
                         env.categoria = $("#selectCat option:selected").val();
                         env.area = $("#selectArea option:selected").val(); 
                        console.log(env);                  
                    $.ajax({
                      type: "POST",
                      url: "../controller/buscaTrabalhos.php",
                      data: env,
                      dataType : 'json',
                      success: function(data){
                         $("#formularioBuca").html(' ');

                         var bt = '<div class="row>'; 
                                bt +='<div class="col-md-offset-6 col-md-2> <button type="button" style="float:center" class="btn btn-success voltar">Voltar</button></div>'; 
                             bt+='</div><br>';

                          $("#formularioBuca").append(bt);

                         $.each(data,function(key,val){
                              if(data[key]['autor_1'] == null){
                                   data[key]['autor_1'] = ' ';
                              }
                              if(data[key]['autor_2'] == null){
                                   data[key]['autor_2'] = ' ';
                              }
                              if(data[key]['autor_3'] == null){
                                   data[key]['autor_3'] = ' ';
                              }
                              if(data[key]['autor_4'] == null){
                                   data[key]['autor_4'] = ' ';
                              }
                              if(data[key]['autor_5'] == null){
                                   data[key]['autor_5'] = ' ';
                              }
                         
                              var linha =      '<div>';
                                   linha +=       '<div class="panel panel-success">';
                                        linha +=       '<div id="tituloTrab" class="panel-heading" style="font-size:18px">'+data[key]['titulo']+'</div>';
                                             linha +=       '<div class="panel-body">';
                                                  
                                                       linha +=       '<div id="dadosTrab" class="row" style="font-size:16px;margin-left:10px"><b>Autores:</b> '+data[key]['autor_1']+', '+data[key]['autor_2']+ ', '+data[key]['autor_3']+', '+data[key]['autor_4']+', ' +data[key]['autor_5']+'  <br> <b>Categoria:</b> '+data[key]['categoria'] +' <br> <b>Subárea:</b> '+data[key]['area'] +' <br> <b>Instituição:</b> '+data[key]['instituicao'] +'<br><br><b>Resumo:</b>'+data[key]['resumo']+'<br> <button class="btn btn-success visuTrab" type="button" id="'+data[key]['idartigo']+'">Visualizar trabalho </button></div>';
                                                  linha +=    '</div>';
                                                  linha+=        '</div>';
                                             linha+=   '</div>';                                    

                                       $("#formularioBuca").append(linha);
                                       
                                      

                              });      


                         },error: function(data){
                              console.log("erro");
                              console.log(data);
                              $("#formularioBuca").prepend("<div class='alert alert-danger'>Não foram encontrados trabalho para os filtros selecionados, altere os filtros e tente novamente</div>");

                         }
                    });            

          });
     });
</script> 

<script type="text/javascript">
     $(document).on("click",".voltar",function(){
          $('#formularioBuca').html(' ');       

          var linha = '<center><b>Aqui é possivel ver todos os artigos deste ano organizados por edição, categoria e área. Basta selecionalos e clicar em Buscar</b></center><br>'+
                    '<form>'+
                    
                    /*'<div class="row">'+
                         '<div class="col-md-12">'+
                              '<label>Selecione a edição:</label>'+
                              '<select class="form-control">'+
                                   '<option>Edição Completa - Volume 1.</option>'+
                              '</select>'+
                         '</div>'+
                    '</div><br>'+*/


                    '<div class="row">'+
                         '<div class="col-md-12">'+
                              '<label>Selecione a categoria:</label>'+
                              '<select class="form-control" id="selectCat">'+
                                   ' <option>Todas</option>'+
                                   '<option>Artigo Completo</option>'+
                                   '<option>Relato Técnico</option>'+
                                   '<option>Resumo Expandido</option>'+
                              '</select>'+
                         '</div>'+
                    '</div><br>'+

                    '<div class="row">'+
                         '<div class="col-md-12">'+
                              '<label>Selecione a Área:</label>'+
                              '<select class="form-control" id="selectArea">'+
                                   ' <option>Todas</option>'+
                                   '<option>Desenvolvimento e Gestão</option>'+
                                   '<option>Economia e Finanças</option>'+
                                   '<option>Empreendedorismo, Inovação e Finanças</option>'+
                                   '<option>Estratégia, Planejamento e Governacia</option>'+
                                   '<option>Gestão de Pessoas e Estudos Organizacionais</option>'+
                                   '<option>Marketing e Mercados</option>'+
                                   '<option>Logistica e Operações</option>'+
                                   '<option>Sustentabilidade e Responsabilidade Socio Ambiental</option>'+
                              '</select>'+
                         '</div>'+
                    '</div><br>'+

                    '<div class="row">'+
                         '<button type="button" id="buscaForm" class= "btn btn-success col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">Buscar'+
                         '</button>'+
                         
                    '</div>'+
                    '</form>'+
                    '<center><h4>ISSN 2525-3603</h4></center>';
          $('#formularioBuca').append(linha);          

     });
</script>

<script type="text/javascript">
     $(document).on("click",".visuTrab",function(){
          var id = $(this).attr('id');

          window.open("visualizartrabalho.php?id="+id);
     });
</script>


<!-- <script type="text/javascript">
     $(document).ready(function(){
          var edicao = $('#selEdicao option:selected').val();
         
          var edicao = edicao.replace(/[^0-9]/g,'');
          var nEdicao = parseInt(edicao);
          $('#nEdicao').append(nEdicao);
     });
</script> -->