<?php
session_start();
if (@$_SESSION['a'])
{
mysql_connect('croiseslordaeron.sql.free.fr','croiseslordaeron','benjamin');
mysql_select_db('croiseslordaeron');
$nom=RTRIM($_POST["nom"]);
$nom2=RTRIM($_POST["nom2"]);
if ($nom==$nom2)
{
mysql_query("delete from suivi where pseudo='$nom'") or die (mysql_error());
$sql= mysql_query("delete from membre where pseudo='$nom'") or die (mysql_error());

if ($sql)
echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbd.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
else echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
}
else echo "<html><body bgcolor='#aaaaff'><a href='conf.php'>Retour au panneau d'admin</a><br><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;

}
else echo "<html><body bgcolor='#aaaaff'><a href='index.php'>Retour à l'accueil</a><SCRIPT LANGUAGE='JavaScript'>window.open ('messbdfx.htm', 'Message', config='height=250, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
?>