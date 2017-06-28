<?php
mysql_connect('clocalhost','croiseslordaeron','benjamin');
$test=$_GET['pseudo']; 

function affiche($lign)
{
	if ($lign<0)
	return '<td><font color="red">'.$lign.'</font></td>';
	else return '<td><font color="green">'.$lign.'</font></td>';
}

echo'<html><script language="JavaScript1.2" type="text/javascript">
if (screen.width==800||screen.height==600)
document.write(\'<body background="scr800.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1024||screen.height==768)
document.write(\'<body background="scr2.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1280||screen.height==1024)
document.write(\'<body background="scr1280.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1600||screen.height==1200)
document.write(\'<body background="scr1920.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1440||screen.height==900)
document.write(\'<body background="scr1600.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else if (screen.width==1920||screen.height==1080)
document.write(\'<body background="scr1920.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');

else
document.write(\'<body background="scr2.jpg" LINK="red" ALINK="limegreen" vlink="blue">\');
</script>
<b><center><br><br><br><br><font size="6" color="burlywood"> SYSTÈME DKP DES CROISÉS DE LORDAERON</font><br><font face="courier">Conçu et réalisé par <a href="mail.htm">Judah</a></font></center></b>
<br><br><center><table border="3">
<caption><big><b>'.$test.'</b></big></caption>
<tr>
<th width="200">Date</th>
<th width="200">Commentaire</th>
<th width="200">Points</th></tr>';
mysql_select_db('croiseslordaeron');
$requete="select date, com, points from suivi where pseudo = '$test';";
$ligne=mysql_query($requete) or die('Erreur SQL!'.mysql_error());
while($li=mysql_fetch_array($ligne))
{
	echo '<td><b>'.$li[0].'</b></td>';
	echo '<td><font color="blue"><b>'.$li[1].'</b></font></td>';
	echo affiche($li[2]);
	echo '</tr>';
}
echo '</table></center><br><br><a href="index.php">Retour</a>';


?>
