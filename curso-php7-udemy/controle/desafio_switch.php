<div class="titulo">Desafio Switch</div>

<!-- Efetuar as conversões conforme solicitado pelo usuário -->

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.5rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ;
const FATOR_CEL_FAH = 1.8;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia KM(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM(s) = $distancia Metro(s)";
        break;
    case 'celsius-fahrenheit':
        $temperatura = $param * FATOR_CEL_FAH + 32;
        $mensagem = "$param °C = $temperatura °F";
        break;
    case 'fahrenheit-celsius':
        $temperatura = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "$param °F = $temperatura °C";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
} 

echo "<p>$mensagem</p>";

