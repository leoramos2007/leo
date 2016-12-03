<?php

//Código em html para montar o form.

echo "
<html>
<head>
<title>IMC</title>
</head>
<body>
   Cálculo do Índice de Massa Corporal.<p>
  <form action=\"imc2.php\" method=\"post\" name=\"f1\">
 Peso:<input name=\"peso\" type=\"text\" size=\"10\" maxlength=\"50\" /><p>
 Altura:<input name=\"altura\" type=\"text\" size=\"10\" maxlength=\"50\" /><p>
 <input name=\"enviar\" type=\"submit\" value=\"OK\" />
 </form>

</body>
</html>";
?>

Crie o arquivo imc2.php com o código abaixo:

<?php

// Obtém as variáveis vindas do formulário.

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc=$peso/($altura*$altura);

echo "
<html>
<head>
<title>IMC</title>
</head>
<body>
$imc<p>";
 
  if ($imc<18.5){ 
 echo " Peso abaixo do Normal !"; 
  } else if (($imc > 18.5) && ($imc < 24.49)){
 echo " Peso Normal !";  
  } else if (($imc > 24.5) && ($imc < 29.9)){
 echo " Pré-Obesidade !";  
  } else if (($imc > 30) && ($imc < 34.9)){
 echo " Obesidade classe I !";  
  } else if (($imc > 35) && ($imc < 39.9)){
 echo " Obesidade classe II !";   
 } else if ($imc > 40){
 echo " Obesidade classe III !";   
 }
  echo "
</body>
</html>";
?>
