   $(document).ready(function(){
        $(document).on('blur','#cpf',function(){
            var env = {};
                env.cpf = $(this).val();
                
                $.ajax({
                    type: 'POST',
                    url: '../controller/ACAO/sl-ACAOverificacpf.php',
                    data: env,
                    dataType: 'json',

                    success: function(data){
                        console.log(data);
                        
                     alert('Este cpf já esta cadastrado no sistema');
                     $('#cpf').val('');                        
                
                    },
                    error: function(data){
                        console.log(data);
                    },
                    cache: false
                });
        });
    });