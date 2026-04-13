<?php
//Estados do SUl
$buscaPR = select("count(id_usuario) as total","sl_cadusu","estado = 'PR'" );
$PR = $buscaPR[0]['total'];

$buscaSC = select("count(id_usuario) as total","sl_cadusu","estado = 'SC'" );
$SC = $buscaSC[0]['total'];

$buscaRS= select("count(id_usuario) as total","sl_cadusu","estado = 'RS   '" );
$RS = $buscaRS [0]['total'];


$sul = $PR + $SC + $RS;

//Estados do SUDESTE
$buscaSP = select("count(id_usuario) as total","sl_cadusu","estado = 'SP'" );
$SP = $buscaSP[0]['total'];
$buscaES = select("count(id_usuario) as total","sl_cadusu","estado = 'ES'" );
$ES = $buscaES[0]['total'];
$buscaMG = select("count(id_usuario) as total","sl_cadusu","estado = 'MG'" );
$MG = $buscaMG[0]['total'];
$buscaRJ = select("count(id_usuario) as total","sl_cadusu","estado = 'RJ'" );
$RJ = $buscaRJ[0]['total'];

$sudeste = $SP + $ES + $MG + $RJ;

//Estados do Centro Oeste
$buscaDF = select("count(id_usuario) as total","sl_cadusu","estado = 'DF'" );
$DF = $buscaDF[0]['total'];
$buscaGO = select("count(id_usuario) as total","sl_cadusu","estado = 'GO'" );
$GO = $buscaGO[0]['total'];
$buscaMT = select("count(id_usuario) as total","sl_cadusu","estado = 'MT'" );
$MT = $buscaMT[0]['total'];
$buscaMS = select("count(id_usuario) as total","sl_cadusu","estado = 'MS'" );
$MS = $buscaMS[0]['total'];

$centrooeste = $DF + $GO + $MT + $MS;

//Estados do Norte
$buscaAC = select("count(id_usuario) as total","sl_cadusu","estado = 'AC'" );
$AC = $buscaAC[0]['total'];
$buscaAP = select("count(id_usuario) as total","sl_cadusu","estado = 'AP'" );
$AP = $buscaAP[0]['total'];
$buscaAM = select("count(id_usuario) as total","sl_cadusu","estado = 'AM'" );
$AM = $buscaAM[0]['total'];
$buscaPA = select("count(id_usuario) as total","sl_cadusu","estado = 'PA'" );
$PA = $buscaPA[0]['total'];
$buscaRO = select("count(id_usuario) as total","sl_cadusu","estado = 'RO'" );
$RO = $buscaRO[0]['total'];
$buscaRR = select("count(id_usuario) as total","sl_cadusu","estado = 'RR'" );
$RR = $buscaRR[0]['total'];
$buscaTO = select("count(id_usuario) as total","sl_cadusu","estado = 'TO'" );
$TO = $buscaTO[0]['total'];

$norte = $AC + $AP + $AM + $PA + $RO + $RR + $TO;

//Estados do Nordeste
$buscaAL = select("count(id_usuario) as total","sl_cadusu","estado = 'AL'" );
$AL = $buscaAL[0]['total'];
$buscaBA = select("count(id_usuario) as total","sl_cadusu","estado = 'BA'" );
$BA = $buscaBA[0]['total'];
$buscaCE = select("count(id_usuario) as total","sl_cadusu","estado = 'CE'" );
$CE = $buscaCE[0]['total'];
$buscaMA = select("count(id_usuario) as total","sl_cadusu","estado = 'MA'" );
$MA = $buscaMA[0]['total'];
$buscaPB = select("count(id_usuario) as total","sl_cadusu","estado = 'PB'" );
$PB = $buscaPB[0]['total'];
$buscaPE = select("count(id_usuario) as total","sl_cadusu","estado = 'PE'" );
$PE = $buscaPE[0]['total'];
$buscaPI = select("count(id_usuario) as total","sl_cadusu","estado = 'PI'" );
$PI = $buscaPI[0]['total'];
$buscaRN = select("count(id_usuario) as total","sl_cadusu","estado = 'RN'" );
$RN = $buscaRN[0]['total'];
$buscaSE = select("count(id_usuario) as total","sl_cadusu","estado = 'SE'" );
$SE = $buscaSE[0]['total'];

$nordeste = $AL + $BA + $CE + $MA + $PB + $PE + $PI + $RN + $SE;


?>

<script type="text/javascript"> 
var options = {
        responsive:true
    };
//Pesquisa por Estado do Sul
    var PR = <?php echo "'$PR'"; ?>;
    var SC = <?php echo "'$SC'"; ?>;
    var RS = <?php echo "'$RS'"; ?>;

//Pesquisa por Estado do Sudeste
    var SP = <?php echo "'$SP'"; ?>;
    var ES = <?php echo "'$ES'"; ?>;
    var MG = <?php echo "'$MG'"; ?>;
    var RJ = <?php echo "'$RJ'"; ?>;

//Pesquisa por Estado do Centro Oeste
    var DF = <?php echo "'$DF'"; ?>;
    var GO = <?php echo "'$GO'"; ?>;
    var MT = <?php echo "'$MT'"; ?>;
    var MS = <?php echo "'$MS'"; ?>;

//Pesquisa por Estado do Norte
    var AC = <?php echo "'$AC'"; ?>;
    var AP = <?php echo "'$AP'"; ?>;
    var AM = <?php echo "'$AM'"; ?>;
    var PA = <?php echo "'$PA'"; ?>;
    var RO = <?php echo "'$RO'"; ?>;
    var RR = <?php echo "'$RR'"; ?>;
    var TO = <?php echo "'$TO'"; ?>;

    //Pesquisa por Estado do Nordeste
    var AL = <?php echo "'$AL'"; ?>;
    var BA = <?php echo "'$BA'"; ?>;
    var CE = <?php echo "'$CE'"; ?>;
    var MA = <?php echo "'$MA'"; ?>;
    var PB = <?php echo "'$PB'"; ?>;
    var PE = <?php echo "'$PE'"; ?>;
    var PI = <?php echo "'$PI'"; ?>;
    var RN = <?php echo "'$RN'"; ?>;
    var SE = <?php echo "'$SE'"; ?>;

 //Pesquisa por Região 
    var sul = <?php echo "'$sul'"; ?>;
    var sudeste = <?php echo "'$sudeste'"; ?>;
    var centrooeste = <?php echo "'$centrooeste'"; ?>;
    var norte = <?php echo "'$norte'"; ?>;
    var nordeste = <?php echo "'$nordeste'"; ?>;


    var databarra = {
        labels: ["Sul","Sudeste", "Centro oeste", "Norte","Nordeste"],
        datasets: [
            {
                label: "Dados primários",
                fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(151,187,205,0.75)",
                    highlightStroke: "rgba(151,187,205,1)",
                data: [sul,sudeste,centrooeste,norte,nordeste]
            }
            
        ]
    }
        var databarra2 = {
            labels: ["Paraná", "Santa Catarina", "Rio Grande do Sul", "São Paulo","Rio de Janeiro","Minas Gerais","Espírito Santo", "Distrito Federal", "Goiás","Mato Grosso", "Mato Grosso do Sul", "Acre", "Amapá", "Amazonas", "Pará", "Rondônia", "Roraima", "Tocantins", "Alagoas", "Bahia", "Ceará", "Maranhão", "Paraíba", "Pernambuco", "Piauí", "Rio Grande do Norte", "Sergipe"],
            datasets: [
                {
                    label: "Dados primários",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(151,187,205,0.75)",
                    highlightStroke: "rgba(151,187,205,1)",
                    data: [PR, SC, RS, SP, RJ, MG, ES, DF, GO, MT, MS, AC, AP, AM, PA, RO, RR, TO, AL, BA, CE, MA, PB, PE, PI, RN, SE]
                }
            ]
        };                
</script>