<?php
mysql_connect('localhost','croiseslordaeron','benjamin');
	if (isset($_GET['message']))
	echo ($_GET['message']." </br>");
?>
<html>
<script language="JavaScript1.2" type="text/javascript">
if (screen.width==800||screen.height==600)
document.write('<body background="scr800.jpg" LINK="red" ALINK="limegreen" vlink="blue">');

else if (screen.width==1024||screen.height==768)
document.write('<body background="scr2.jpg" LINK="red" ALINK="limegreen" vlink="blue">');

else if (screen.width==1280||screen.height==1024)
document.write('<body background="scr1280.jpg" LINK="red" ALINK="limegreen" vlink="blue">');

else if (screen.width==1600||screen.height==1200)
document.write('<body background="scr1920.jpg" LINK="red" ALINK="limegreen" vlink="blue">');

else if (screen.width==1440||screen.height==900)
document.write('<body background="scr1600.jpg" LINK="red" ALINK="limegreen" vlink="blue">');

else if (screen.width==1920||screen.height==1080)
document.write('<body background="scr1920.jpg" LINK="red" ALINK="limegreen" vlink="blue">');

else
document.write('<body background="scr2.jpg" LINK="red" ALINK="limegreen" vlink="blue">');
</script>

<b><center><br><br><br><br><font size="6" color="burlywood"> SYSTÈME DKP DES CROISÉS DE LORDAERON</font><br><font face="courier">Conçu et réalisé par <a href="mail.htm">Judah</a></font></center></b>
<form method="POST" action="conf.php">
<tr><td><br>Saisissez votre login <td><input type="text" name="login"></tr>
<tr><td><br>Saisissez votre mot de passe <td><input type="password" name="pwd"></tr>
<tr><td><input type="submit" name="submit" value="Valider"></tr><br>
</table><br><font size="5"><a href="http://croiseslordaeron.free.fr">Retour au portail</a><br>
<table border="3">
<caption><b>Points DKP</b></caption>
<tr>
<th width="200">Nom</th>
<th width="200">Points actuels</th>
<th width="200">Points dépensés</th>
<th width="200">Points totaux</th>
<th width="20">Armu</th>

</tr>
<?php

mysql_select_db('croiseslordaeron');
$req='select pseudo, Pt_actu, Pt_dep,Pt_ttx from membre;';
$res=mysql_query($req) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

while($ress=mysql_fetch_array($res))
{

$armu=rawurlencode(utf8_encode($ress[0]));
echo "<td><center><a href=\"detail.php?pseudo=".$ress[0]."\">".$ress[0]."</a></center></td>";
echo '<td><font color="green"><b><center>'.$ress[1].'</b></center></font></td>';
echo '<td><font color="red"><b><center>'.$ress[2].'</b></center></font></td>';
echo '<td><font color="blue"><b><center>'.$ress[3].'</b></center></font></td>';
echo '<td><a href="http://eu.wowarmory.com/character-sheet.xml?r=Sinstralis&n='.$armu.'" target=_blank><img src="bt.jpg"></a></b></center></font></td>';
echo '</tr>';
}
echo '</table>';


?>

</body>
</html>