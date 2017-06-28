<?php

session_start();
if (@$_SESSION['a'] ||@$_SESSION['b'])
{
mysql_connect('localhost','croiseslordaeron','benjamin');
mysql_select_db('croiseslordaeron');
$nom=RTRIM($_POST["nom"]);
$Pts_actu=RTRIM($_POST["Pts_actu"]);
$Pts_dep=RTRIM($_POST["Pts_dep"]);
$Pts_ttx=RTRIM($_POST["Pts_ttx"]);
$mail=RTRIM($_POST["mail"]);

$sql=mysql_query("insert into membre(pseudo, Pt_actu, Pt_dep, Pt_ttx, mail) values ('$nom','$Pts_actu','$Pts_dep','$Pts_ttx','$mail')")or die(mysql_error());
if ($sql)
echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbd.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
else echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
}
else echo "<html><body bgcolor='#aaaaff'><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=250, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
?>