<?php

if (@$_SESSION['b'])
{
$sQuery = 'SELECT pseudo FROM membre;';
$rReq = mysql_query ($sQuery) or die (mysql_error());

echo '<html>';
echo '<script language="JavaScript1.2" type="text/javascript">
if (screen.width==800||screen.height==600)
document.write(\'<body background="aaa800.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1024||screen.height==768)
document.write(\'<body background="aaa2.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1280||screen.height==1024)
document.write(\'<body background="aaa1280.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1600||screen.height==1200)
document.write(\'<body background="aaa1920.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1440||screen.height==900)
document.write(\'<body background="aaa1600.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1920||screen.height==1080)
document.write(\'<body background="aaa1920.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else
document.write(\'<body background="aaa2.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');
</script>';
echo '<font size="5"><br><br><br><center><b>ADMINISTRATION DU SITE DKP</b></center>';

echo '<b><br><font size="1"><br></font><font size="5">Modifier les points</font></b><font size="1"><br></font><br>

<table>
<form method="post" action="test.php">
<select name="pseu">';
while ($aRes = mysql_fetch_assoc ($rReq)) 
{
 echo "<option value=";
 echo "{$aRes['pseudo']}>{$aRes['pseudo']}";
}
echo '</select><br></td></tr>

<tr><td><b>modif points</b></td><td><input type="text" name="mvtpt"><td><font size="2">(mettre - si negatif)</font></tr>
<tr><td><b>commentaire</b></td><td><input type="text" name="com" size="50"></tr>
<tr><td><input type="submit" value="envoyer"></td><td>
</form>
</table>
<table>
<tr><td rowspan=8>
<font color=blue size="2">

2 points par heure.<br><br>

Naxxramas  25 :<br>
aile araignée : 3X4=12 <br>
aile des dk : 3x4=12 <br>
aile de la peste : 3x4=12 <br>
aile des abominations: 3x4+1x5=12+5=17 <br>
Sapphiron : 5 points<br>
KT : 7 points<br><br>

Sartharion 25: 5 +1Add: 9 points<br><br>

Malygos 25 : 10 points<br><br>

Ulduar 25<br>
Léviathan: 10 points <br>
Tranchécaille: 20 points<br>
Déchqueteur:25 points<br>



</td>

<td rowspan=8>

<font color=green size="2">
Nax25<br>
T7:60 points<br>
Plastron,Heaume,Jambieres,Epaulettes:40 points<br>
Gants,Ceinture,Poignets,Cape,Collier: 30 points<br>
Bijoux,Anneaux: 40 Points <br><br>


ULDUAR<br>
Tout Les T8 Valent 130 Pts<br><br>
Plastron -> 100 points<br>
Heaume -> 100 points<br>
Jambières -> 100 points<br>
Epaulettes -> 100 points<br>
Bottes -> 80 points<br>
Gants -> 80 points<br>
Ceinture -> 60 points<br>
Poignets -> 60 points<br>
Cape -> 60 points<br>
Bijou -> 80 points<br>
Collier -> 80 points<br>
Bague -> 80 points<br>

Armes 1M -> 100 points<br>
Main gauche -> 60 points<br>
Armes 2M -> 150 points<br>
Baguette -> 70 points<br>
Arc -> 70 points<br>
Bouclier -> 60 points
</font>
</td>
</tr>
</form>
</table><br>';


echo '<b><font size="5">Ajouter un raider</font></b>
<br>
<table>
<form method="POST" action="nvadh2.php">

<tr><td><b>Pseudo</b></td><td><input type="text" name="nom"></tr>
<tr><td><b>Points Actuels</b></td><td><input type="text" name="Pts_actu"></tr>
<tr><td><b>Points Dépensés</b></td><td><input type="text" name="Pts_dep"></tr>
<tr><td><b>Points totaux</b></td><td><input type="text" name="Pts_ttx"></tr>
<tr><td><b>Mail</b></td><td><input type="text" name="mail"></tr>

<tr><td></td><td><input type="submit" name="submit" value="Valider"></td></tr>
</form>
</table>
</html>';
}
else include "fauxlog.htm";
?>