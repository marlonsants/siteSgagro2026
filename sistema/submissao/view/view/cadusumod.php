<html>
<head>
    
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tooltip.js"></script>
   <script type="text/javascript" src="../plugin/mask/jquery.mask.js"></script>
    <script src="../plugin/jquery-validate/jquery.validate.min.js"></script>
    <title>Tela de Cadastro</title>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
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
<div class="container">

    <!--Banner-->
    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
            <div class="col-md-12 col-xs-12 col-lg-12">
                <div class="col-md-4 col-xs-4 col-lg-4">
                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6">
                    <center><h1><i style="font-family: 'Plantagenet Cherokee';"><b>��rea de Cadastro</b></i></center></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Banner-->

    <center class=><h4>Os campos marcados com (*) S�o campos de preenchimento obrigatorio</h4></center>

    </br>

    <form id="formcad" method="post" action="confirma_cadastro.php" class="col-md-12 col-xs-12 col-lg-12">
        
        <!-- painel Login de cadastro -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login de Acesso</b></div>
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <label>E-Mail*</label></br>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Confirmar E-mail*</label></br>
                            <input type="email" id="confirmar_email" name="confirmar_email" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Senha*</label></br>
                            <input type="password" id="senha" name="senha" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Confirmar Senha*</label></br>
                            <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control" >
                        </div>

                        <div class="col-md-2">
                            <label>Cadastrar como*</label></br>
                            <input type="checkbox" id="autor" class="checkboxcad" value="Autor"> Autor </input><br>
                            <input type="checkbox" id="avaliador"  class="checkboxcad" value="Avaliador"> Avaliador </input>
                            <input type="hidden" id="tipocadastro" name="tipocadastro"> </input>
                        </div>
                    </div>
                    <div class="row" id="rowarea">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim painel de cadastro -->

        <!-- painel de dados pessoais -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Dados Pessoais</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Nome*</label></br>
                            <input type="text" id="nome" name="nome" class="form-control" >
                        </div>

                        <div class="col-md-4">
                            <label>Sobrenome*</label></br>
                            <input type="text" id="sobrenome" name="sobrenome" class="form-control" >
                        </div>

                        <div class="col-md-3">
                            <label>Data de nascimento*</label>
                            <input type="text" id="nascimento" name="nascimento" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <label>Sexo*</label></br>
                            <select id="sexo" name="sexo" class="form-control">
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>

                    </div>

                    </br>

                    <div class="row">
                        <div class="col-md-3">
                            <label>CPF*</label></br>
                            <input type="text" id="cpf" name="cpf" class="form-control">
                        </div> 

                        <div class="col-md-3">
                            <label>Endere�o*</label></br>
                            <input type="text" id="endereco" name="endereco" class="form-control">
                        </div>

                        <div class="col-md-1">
                            <label>N�mero*</label></br>
                            <input type="text" id="numero" name="numero" class="form-control">
                        </div>

                        <div class="col-md-3">
                                <label>Complemento</label></br>
                                <input type="text" id="complemento" name="complemento" class="form-control">
                            </div>

                        <div class="col-md-2">
                            <label>Estado*</label></br>
                            <select id="estado" name="estado" class="form-control">
                                
                                <option>AC</option>
                                <option>AL</option> 
                                <option>AP</option>
                                <option>BA</option>            
                                <option>AM</option> 
                                <option>CE</option> 
                                <option>DF</option> 
                                <option>ES</option> 
                                <option>GO</option> 
                                <option>MA</option> 
                                <option>MT</option> 
                                <option>MS</option> 
                                <option>MG</option> 
                                <option>PA</option> 
                                <option>PB</option> 
                                <option>PR</option> 
                                <option>PE</option> 
                                <option>PI</option> 
                                <option>RJ</option> 
                                <option>RN</option> 
                                <option>RS</option> 
                                <option>RO</option> 
                                <option>RR</option>
                                <option>SC</option>
                                <option selected>SP</option> 
                                <option>SE</option> 
                                <option>TO</option>
                            </select>
                        </div>
                        
                    </div>

                    </br>

                    <div class="row">
                        
                            <div class="col-md-4">
                                <label>Cidade*</label></br>
                                <input type="text" id="cidade" name="cidade" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>CEP*</label></br>
                                <input type="text" id="cep" name="cep" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label>Bairro*</label></br>
                                <input type="text" id="bairro" name="bairro" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <label class=>Pa�s*</label></br>
                                <select id="pais" name="pais" class="form-control">
                                    <option>Afeganist�o</option>
                                    <option>�frica do Sul</option>
                                    <option>Akrotiri</option>
                                    <option>Alb�nia</option>
                                    <option>Alemanha</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguila</option>
                                    <option>Ant�rctida</option>
                                    <option>Ant�gua e Barbuda</option>
                                    <option>Antilhas Neerlandesas</option>
                                    <option>Ar�bia Saudita</option>
                                    <option>Arctic Ocean</option>
                                    <option>Arg�lia</option>
                                    <option>Argentina</option>
                                    <option>Arm�nia</option>
                                    <option>Aruba</option>
                                    <option>Ashmore and Cartier Islands</option>
                                    <option>Atlantic Ocean</option>
                                    <option>Austr�lia</option>
                                    <option>�ustria</option>
                                    <option>Azerbaij�o</option>
                                    <option>Baamas</option>
                                    <option>Bangladeche</option>
                                    <option>Barbados</option>
                                    <option>Bar�m</option>
                                    <option>B�lgica</option>
                                    <option>Belize</option>
                                    <option>Benim</option>
                                    <option>Bermudas</option>
                                    <option>Bielorr�ssia</option>
                                    <option>Birm�nia</option>
                                    <option>Bol�via</option>
                                    <option>B�snia e Herzegovina</option>
                                    <option>Botsuana</option>
                                    <option selected>Brasil</option>
                                    <option>Brunei</option>
                                    <option>Bulg�ria</option>
                                    <option>Burquina Faso</option>
                                    <option>Bur�ndi</option>
                                    <option>But�o</option>
                                    <option>Cabo Verde</option>
                                    <option>Camar�es</option>
                                    <option>Camboja</option>
                                    <option>Canad�</option>
                                    <option>Catar</option>
                                    <option>Cazaquist�o</option>
                                    <option>Chade</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Chipre</option>
                                    <option>Clipperton Island</option>
                                    <option>Col�mbia</option>
                                    <option>Comores</option>
                                    <option>Congo-Brazzaville</option>
                                    <option>Congo-Kinshasa</option>
                                    <option>Coral Sea Islands</option>
                                    <option>Coreia do Norte</option>
                                    <option>Coreia do Sul</option>
                                    <option>Costa do Marfim</option>
                                    <option>Costa Rica</option>
                                    <option>Cro�cia</option>
                                    <option>Cuba</option>
                                    <option>Dhekelia</option>
                                    <option>Dinamarca</option>
                                    <option>Dom�nica</option>
                                    <option>Egipto</option>
                                    <option>Emiratos �rabes Unidos</option>
                                    <option>Equador</option>
                                    <option>Eritreia</option>
                                    <option>Eslov�quia</option>
                                    <option>Eslov�nia</option>
                                    <option>Espanha</option>
                                    <option>Estados Unidos</option>
                                    <option>Est�nia</option>
                                    <option>Eti�pia</option>
                                    <option>Faro�</option>
                                    <option>Fiji</option>
                                    <option>Filipinas</option>
                                    <option>Finl�ndia</option>
                                    <option>Fran�a</option>
                                    <option>Gab�o</option>
                                    <option>G�mbia</option>
                                    <option>Gana</option>
                                    <option>Gaza Strip</option>
                                    <option>Ge�rgia</option>
                                    <option>Ge�rgia do Sul e Sandwich do Sul</option>
                                    <option>Gibraltar</option>
                                    <option>Granada</option>
                                    <option>Gr�cia</option>
                                    <option>Gronel�ndia</option>
                                    <option>Guame</option>
                                    <option>Guatemala</option>
                                    <option>Guernsey</option>
                                    <option>Guiana</option>
                                    <option>Guin�</option>
                                    <option>Guin� Equatorial</option>
                                    <option>Guin�-Bissau</option>
                                    <option>Haiti</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong</option>
                                    <option>Hungria</option>
                                    <option>I�men</option>
                                    <option>Ilha Bouvet</option>
                                    <option>Ilha do Natal</option>
                                    <option>Ilha Norfolk</option>
                                    <option>Ilhas Caim�o</option>
                                    <option>Ilhas Cook</option>
                                    <option>Ilhas dos Cocos</option>
                                    <option>Ilhas Falkland</option>
                                    <option>Ilhas Heard e McDonald</option>
                                    <option>Ilhas Marshall</option>
                                    <option>Ilhas Salom�o</option>
                                    <option>Ilhas Turcas e Caicos</option>
                                    <option>Ilhas Virgens Americanas</option>
                                    <option>Ilhas Virgens Brit�nicas</option>
                                    <option>�ndia</option>
                                    <option>Indian Ocean</option>
                                    <option>Indon�sia</option>
                                    <option>Ir�o</option>
                                    <option>Iraque</option>
                                    <option>Irlanda</option>
                                    <option>Isl�ndia</option>
                                    <option>Israel</option>
                                    <option>It�lia</option>
                                    <option>Jamaica</option>
                                    <option>Jan Mayen</option>
                                    <option>Jap�o</option>
                                    <option>Jersey</option>
                                    <option>Jibuti</option>
                                    <option>Jord�nia</option>
                                    <option>Kuwait</option>
                                    <option>Laos</option>
                                    <option>Lesoto</option>
                                    <option>Let�nia</option>
                                    <option>L�bano</option>
                                    <option>Lib�ria</option>
                                    <option>L�bia</option>
                                    <option>Listenstaine</option>
                                    <option>Litu�nia</option>
                                    <option>Luxemburgo</option>
                                    <option>Macau</option>
                                    <option>Maced�nia</option>
                                    <option>Madag�scar</option>
                                    <option>Mal�sia</option>
                                    <option>Mal�vi</option>
                                    <option>Maldivas</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Man, Isle of</option>
                                    <option>Marianas do Norte</option>
                                    <option>Marrocos</option>
                                    <option>Maur�cia</option>
                                    <option>Maurit�nia</option>
                                    <option>Mayotte</option>
                                    <option>M�xico</option>
                                    <option>Micron�sia</option>
                                    <option>Mo�ambique</option>
                                    <option>Mold�via</option>
                                    <option>M�naco</option>
                                    <option>Mong�lia</option>
                                    <option>Monserrate</option>
                                    <option>Montenegro</option>
                                    <option>Mundo</option>
                                    <option>Nam�bia</option>
                                    <option>Nauru</option>
                                    <option>Navassa Island</option>
                                    <option>Nepal</option>
                                    <option>Nicar�gua</option>
                                    <option>N�ger</option>
                                    <option>Nig�ria</option>
                                    <option>Niue</option>
                                    <option>Noruega</option>
                                    <option>Nova Caled�nia</option>
                                    <option>Nova Zel�ndia</option>
                                    <option>Om�</option>
                                    <option>Pacific Ocean</option>
                                    <option>Pa�ses Baixos</option>
                                    <option>Palau</option>
                                    <option>Panam�</option>
                                    <option>Papua-Nova Guin�</option>
                                    <option>Paquist�o</option>
                                    <option>Paracel Islands</option>
                                    <option>Paraguai</option>
                                    <option>Peru</option>
                                    <option>Pitcairn</option>
                                    <option>Polin�sia Francesa</option>
                                    <option>Pol�nia</option>
                                    <option>Porto Rico</option>
                                    <option>Portugal</option>
                                    <option>Qu�nia</option>
                                    <option>Quirguizist�o</option>
                                    <option>Quirib�ti</option>
                                    <option>Reino Unido</option>
                                    <option>Rep�blica Centro-Africana</option>
                                    <option>Rep�blica Checa</option>
                                    <option>Rep�blica Dominicana</option>
                                    <option>Rom�nia</option>
                                    <option>Ruanda</option>
                                    <option>R�ssia</option>
                                    <option>Salvador</option>
                                    <option>Samoa</option>
                                    <option>Samoa Americana</option>
                                    <option>Santa Helena</option>
                                    <option>Santa L�cia</option>
                                    <option>S�o Crist�v�o e Neves</option>
                                    <option>S�o Marinho</option>
                                    <option>S�o Pedro e Miquelon</option>
                                    <option>S�o Tom� e Pr�ncipe</option>
                                    <option>S�o Vicente e Granadinas</option>
                                    <option>Sara Ocidental</option>
                                    <option>Seicheles</option>
                                    <option>Senegal</option>
                                    <option>Serra Leoa</option>
                                    <option>S�rvia</option>
                                    <option>Singapura</option>
                                    <option>S�ria</option>
                                    <option>Som�lia</option>
                                    <option>Southern Ocean</option>
                                    <option>Spratly Islands</option>
                                    <option>Sri Lanca</option>
                                    <option>Suazil�ndia</option>
                                    <option>Sud�o</option>
                                    <option>Su�cia</option>
                                    <option>Su��a</option>
                                    <option>Suriname</option>
                                    <option>Svalbard e Jan Mayen</option>
                                    <option>Tail�ndia</option>
                                    <option>Taiwan</option>
                                    <option>Tajiquist�o</option>
                                    <option>Tanz�nia</option>
                                    <option>Territ�rio Brit�nico do Oceano �ndico</option>
                                    <option>Territ�rios Austrais Franceses</option>
                                    <option>Timor Leste</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                                    <option>Trindade e Tobago</option>
                                    <option>Tun�sia</option>
                                    <option>Turquemenist�o</option>
                                    <option>Turquia</option>
                                    <option>Tuvalu</option>
                                    <option>Ucr�nia</option>
                                    <option>Uganda</option>
                                    <option>Uni�o Europeia</option>
                                    <option>Uruguai</option>
                                    <option>Usbequist�o</option>
                                    <option>Vanuatu</option>
                                    <option>Vaticano</option>
                                    <option>Venezuela</option>
                                    <option>Vietname</option>
                                    <option>Wake Island</option>
                                    <option>Wallis e Futuna</option>
                                    <option>West Bank</option>
                                    <option>Z�mbia</option>
                                    <option>Zimbabu�</option>
                                </select>
                            </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- fim do painel de dados pessoais -->

        <!-- painel de contato -->
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Contato</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Institui��o/Afilia��o*</label></br>
                            <input type="text" id="instituicao" name="instituicao" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Fun��o na Institui��o</label></br>
                            <input type="text" id="cargo" name="cargo" class="form-control">
                        </div>

                         <div class="col-md-3">
                            <label>Telefone/Celular*</label></br>
                            <input type="text" id="telefone" name="telefone" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label>Telefone contato</label></br>
                            <input type="text" id="contato" name="contato" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- fim do painel de contato -->

        <div class="row">
            <button type="button" id="salvar" name="salvar" class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4 btn btn-primary">
                Confirmar
            </button>
        </div>

        </br>

    </form>
</div>

<script type="text/javascript" src="../js/scripts/confcadcpf.js"></script>
<script type="text/javascript" src="../js/scripts/confcademail.js"></script>
<script type="text/javascript" src="../js/scripts/calculaidade.js"></script>
<script type="text/javascript" src="../js/scripts/enviocadusu.js"></script>


<script type="text/javascript" charset="UTF-8">
    $(document).ready(function(){
        $(document).on('click','#avaliador',function(){
            console.log(this);
            if( $("#avaliador").is(':checked') ){
           
                $('#rowarea').html('');
                $('#rowarea').append('  <div class="col-md-3" id="divarea">'+
                                        '<label>�rea tem�tica que ir� avaliar*</label></br>'+
                                        '<select class="form-control" id="area" name="area">'+
                                            '<option selected>Gest�o de Pessoas e Estudos Organizacionais</option>'+
                                            '<option>Desenvolvimento e Gest�o</option>'+
                                            '<option>Economia e Finan�as</option>'+
                                            '<option>Empreendedorismo, Inova��o e Tecnologia</option>'+
                                            '<option>Estrat�gia, Planejamento e Governan�a</option>'+
                                            '<option>Log�sticas e Opera��es</option>'+
                                            '<option>Marketing e Mercados</option>'+
                                            '<option>Sustentabilidade e Responsabilidade S�cio Ambiental</option>'+
                                        '</select>'+
                                    '</div>');
            }else{
                $('#divarea').html('');
            }
        });
    });
</script>


<script>
    $(document).ready( function(){
        // mascara telefone/contato
        $("#telefone").mask("(99) 99999 - 9999");
        $("#contato").mask("(99) 9999 - 9999");
        // mascara cpf
        $("#cpf").mask("999.999.999-99");  
        // mascara cep
        $("#cep").mask("99.999-999");
        // mascara data nascimento
        $("#nascimento").mask("99/99/9999")
    });
</script>

</body>
</html>