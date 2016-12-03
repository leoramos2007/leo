<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$erro = 0;
?>
<html>
head>
<title>Calcula IMC</title>
</head>

<body>
<?php

if(empty($peso))
{echo " Possui campo em branco.<br>"; $erro=1;}
if(empty($altura))
{echo " Possui campo em branco.<br>"; $erro=1;}
if($erro == 1)
{echo "Favor digitar os dados corretamente.";
echo"<center><br><a href=index.php><img src=voltar.jpg border=0></a></center>";
exit();}
if ($erro == 0)
$altura = bcpow($altura, 2, 2);
$massa = $peso / $altura;
$massa = round($massa);
if($massa < 20) {
$mensagem = "Você está magro.";
}elseif(($massa > 20) && ($massa < 25)) {
$mensagem = "Você está no peso ideal.";
}else{
$mensagem = "Você está acima do peso.";
}
echo "Sua massa corporal é: <b>$massa</b> <br>";
echo "Estado atual: <b>$mensagem</b>"
?>
</body>
</html>
