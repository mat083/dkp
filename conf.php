<?php
session_start();
if ( isset($_POST['login']) && (!empty($_POST['login'])))
{
$_SESSION['login']=RTRIM($_POST['login']);
$_SESSION['pwd']=RTRIM($_POST['pwd']);
}
mysql_connect('localhost','croiseslordaeron','benjamin');
mysql_select_db('croiseslordaeron');
$req=mysql_query("SELECT login, pwd FROM adminsite WHERE login='".$_SESSION['login']."' and pwd='".$_SESSION['pwd']."'");

$data = mysql_num_rows($req) ;

  if($data == 0)
  {
    include "fauxlog.htm";
    
    
  }
  else 
  {
	if ($_SESSION['login'] == 'admin' )
    {
		$_SESSION['a']=1;
		include 'admin.php';
	}
	else
	{
		if ($_SESSION['login'] == 'officier' )
		{
			$_SESSION['b']=1;
			include 'espace.php';
		}
	}
    
  }    

?>