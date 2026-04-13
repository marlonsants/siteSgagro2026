
        $(document).ready(function(){
            
            $(document).on('click','#continuar1',function(){

                env = {};
                env.titulo = <?php echo "'$titulo'"; ?> ;
                env.resumo = <?php echo "'$resumo'"; ?> ;
                env.area = <?php echo "'$area'"; ?> ;
                env.coautor = <?php echo "'$coautor'"; ?> ;
                env.apresentacao = <?php echo "'$apresentacao'"; ?> ;
                env.orientador = <?php echo "'$orientador'"; ?> ;
                env.descricao = <?php echo "'$descricao'"; ?> ;
                env.categoria = <?php echo "'$categoria'"; ?> ;

                env.nomecoautor1 = <?php echo "'$nomecoautor1'"; ?> ;
                env.snomecoautor1 = <?php echo "'$snomecoautor1'"; ?> ;
                env.cpfcoautor1 = <?php echo "'$cpfcoautor1'"; ?> ;

                env.nomecoautor2 = <?php echo "'$nomecoautor2'"; ?> ;
                env.snomecoautor2 = <?php echo "'$snomecoautor2'"; ?> ;
                env.cpfcoautor2 = <?php echo "'$cpfcoautor2'"; ?> ;

                env.nomecoautor3 = <?php echo "'$nomecoautor3'"; ?> ;
                env.snomecoautor3 = <?php echo "'$snomecoautor3'"; ?> ;
                env.cpfcoautor3 = <?php echo "'$cpfcoautor3'"; ?> ;
                env.nomecoautor4 = <?php echo "'$nomecoautor4'"; ?> ;
                env.snomecoautor4 = <?php echo "'$snomecoautor4'"; ?> ;
                env.cpfcoautor4 = <?php echo "'$cpfcoautor4'"; ?> ;
              
                
                
               $.ajax({
                        type: "POST",
                        url: "../controller/ACAO/sl-ACAOcadartigo.php",
                        data: env,
                        dataType : 'html',
                        success: function(data){
                            console.log('sucesso'+data)
                            //$('#erros').html('<img src="data:image/png;base64,'+data+'"/>');
                        }, error: function(data) {
                            console.log(data);
                            alert("Erro, Houve uma falha ao salvar o registro!");
                        }
                        });

                        var form = {};
                        form.titulo = $('#titulo').val();
                                        
                         location.href="fim.php";   


            
            });

        });             