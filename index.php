<form method="post"action="calcular.php">

Peso: <input type="text" size="20" name="peso">

Altura: <input type="text" size="20" name="altura">

<input type="submit" value="Calcular">

</form>

<?php

$peso = $_GET['peso'];
$altura = $_GET['altura'];

$altura = bcpow($altura, 2, 2);

$conta1 = $altura*$altura;
$conta2 = $peso/$conta1;

$massa= number_format($conta2);

$massa = round($massa);

if($massa < 20) {

$mensagem = "Você está magro.";

}elseif(($massa > 20) && ($massa < 25)){

$mensagem = "Você está no peso ideal.";

}else{

$mensagem = "Você está acima do peso.";

}

echo "Sua massa corporal é: <b>$massa</b> <br>";

echo "Estado atual: <b>$mensagem</b>"

?>
