<?php
session_start();
if (@$_SESSION['b']||@$_SESSION['a'])
{
mysql_connect('localhost','croiseslordaeron','benjamin');
mysql_select_db('croiseslordaeron');
$pseudo=$_POST['pseu'];
$mvtpt=$_POST['mvtpt'];
$com=$_POST['com'];
$date=date("Y-m-d");

$sql1=mysql_query("insert into suivi(pseudo, date, com, points) values ('$pseudo','$date','$com','$mvtpt')")or die(mysql_error());
if ($mvtpt>=0)
$sql2=mysql_query("UPDATE membre SET Pt_actu=Pt_actu+'$mvtpt', Pt_ttx= Pt_ttx+'$mvtpt' where pseudo='$pseudo'") or die(mysql_error());
else 
{
$result=mysql_query("select Pt_actu from membre where pseudo='$pseudo'") or die(mysql_error());
$nombre= mysql_result($result, 0);
//echo '<br>'.$nombre.'<br>on achete qqch';
if ($nombre>=-$mvtpt)
{
$sql3=mysql_query("UPDATE membre SET Pt_actu=Pt_actu+'$mvtpt', Pt_dep=Pt_dep-'$mvtpt' where pseudo='$pseudo'") or die(mysql_error());
//echo 'on a assez de sous';
}
else
{
//echo 'pas assez'; 
$sql3=mysql_query("UPDATE membre SET Pt_actu=0, Pt_dep=Pt_dep+'$nombre' where pseudo='$pseudo'") or die(mysql_error());
}
//echo $sql3;
}
if ($sql1 && ($sql2||$sql3))
echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbd.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
else echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
}
else echo "<html><body bgcolor='#aaaaff'><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=250, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
?>