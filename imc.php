<HTML>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#0000FF" VLINK="#800080">


      <p align="center"><b><font face="Arial" color="#000080" size="4">Cálculo
      do índice de massa corpórea (IMC)</font></b></p>


<?php

// Script que calcula o índice de massa corpórea (IMC) de acordo com o peso e a altura
// Autor: Juliano Niederauer
// http://www.niederauer.com.br

// É proibída a distribuição ou reprodução deste script sem a autorização do autor

if($calcular!="S")
{
?>

      <p align="center"><font face="Arial" size="2">Preencha os dados abaixo e
      clique em &quot;Calcular IMC&quot;, e logo<br>
      após&nbsp;verifique o resultado na tabela.</font></p>
      <div align="center">
        <center>
        <table border="0" cellpadding="2" cellspacing="1" width="33%" bgcolor="#FFF3E8" height="148">
          <tr>
            <td width="100%" bgcolor="#FF9900" height="18">
              <p align="center"><b><font face="Arial" color="#FFFFFF" size="2">Digite
              seu peso e altura</font></b></td>
          </tr>
          <tr>
            <td width="100%" height="118">
              <form method="POST" action="<?echo $PHP_SELF; ?>">
                <p align="center">&nbsp;&nbsp;&nbsp;<br><input type="hidden" name="calcular" value="S">
                <font face="Arial" size="2">Peso:</font> <input type="text" name="peso" size="6" maxlength="10">
                <font face="Arial" size="2">kg</font></p>
                <p align="center"><font size="2" face="Arial">Altura:</font> <input type="text" name="altura" size="6" maxlength="10">
                <font face="Arial" size="2">m</font><br><br><font face="Arial" size="1">Obs: use o ponto para separar<br> as casas decimais</font></p>
                <p align="center"><input type="submit" value="Calcular IMC" name="calcula"></p>
              </form>
            </td>
          </tr>
        </table>
        </center>
      </div>
      <p align="center">&nbsp;</p>

<?php
}
else
{

 if(strlen($peso)==0 || strlen($altura)==0 || $peso<1 || $peso>500 || $altura<=0 || $altura>3)
 {
   echo "<p align=\"center\"><font face=\"Arial\" size=\"2\" color=\"#000080\"><b>Valores inválidos!</b></font></p>";
 }

 else
 {
   $peso = str_replace (" ", "", $peso);
   $peso = str_replace ("kg", "", $peso);
   $peso = str_replace ("Kg", "", $peso);
   $peso = str_replace (",", ".", $peso);
   $altura = str_replace (" ", "", $altura);
   $altura = str_replace ("m", "", $altura);
   $altura = str_replace (",", ".", $altura);

   $imc = $peso / ($altura * $altura);
   $imc = substr ($imc,0,4);

   echo "<p align=\"center\"><font face=\"Arial\" size=\"2\" color=\"#000080\">Seu índice de massa corpórea (IMC) é <b>$imc</b></font></p>";
?>
      <p align="center"><font face="Arial" size="2">Verifique o seu índice na
      tabela</font></p>
      <div align="center">
        <center>
        <table border="0" cellpadding="2" width="85%" bgcolor="#F7F7F7">
          <tr>
            <td width="33%" bgcolor="#C0C0C0"><font face="Arial" size="2" color="#000080"><b>IMC</b></font></td>
            <td width="33%" bgcolor="#C0C0C0"><font face="Arial" size="2" color="#000080"><b>Classificação</b></font></td>
            <td width="34%" bgcolor="#C0C0C0"><font face="Arial" size="2" color="#000080"><b>Risco
              de doença</b></font></td>
          </tr>
          <tr>
            <td width="33%" <?php if ($imc<18.5) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Menos de 18,5</font></td>
            <td width="33%" <?php if ($imc<18.5) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Magreza</font></td>
            <td width="34%" <?php if ($imc<18.5) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Elevado</font></td>
          </tr>
          <tr>
            <td width="33%" <?php if ($imc>=18.5 && $imc<25) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Entre
              18,5 e 24,9</font></td>
            <td width="33%" <?php if ($imc>=18.5 && $imc<25) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Normal</font></td>
            <td width="34%" <?php if ($imc>=18.5 && $imc<25) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">---------</font></td>
          </tr>
          <tr>
            <td width="33%" <?php if ($imc>=25 && $imc<30) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Entre 25 e 29,9</font></td>
            <td width="33%" <?php if ($imc>=25 && $imc<30) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Sobrepeso</font></td>
            <td width="34%" <?php if ($imc>=25 && $imc<30) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Elevado</font></td>
          </tr>
          <tr>
            <td width="33%" <?php if ($imc>=30 && $imc<40) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Entre 30 e 39,9</font></td>
            <td width="33%" <?php if ($imc>=30 && $imc<40) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Obesidade</font></td>
            <td width="34%" <?php if ($imc>=30 && $imc<40) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Muito elevado</font></td>
          </tr>
          <tr>
            <td width="33%" <?php if ($imc>=40) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Igual ou maior de 40</font></td>
            <td width="33%" <?php if ($imc>=40) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Obesidade grave</font></td>
            <td width="34%" <?php if ($imc>=40) {echo "bgcolor=\"#FFFF99\"";} ?>><font face="Arial" size="2">Muitíssimo elevado</font></td>
          </tr>
        </table>
        </center>
      </div>
      <p align="center">&nbsp;</p>
      <p align="center"><a style="font-family: Arial; font-size: 12 pt; font-weight: bold" href="<?php echo $PHP_SELF; ?>">Calcular
      outro índice</a></p>

<?php
}}
?>


</BODY>
</HTML>
