<?php
$sujet=RTRIM($_POST['sujet']);
$mess=RTRIM($_POST['mess']);
$adr=RTRIM($_POST['adr']);
$ok=mail("mat083@hotmail.fr",$sujet,$mess,"From:$adr");
if($ok)
echo "<html><body bgcolor='#aaaaff'><SCRIPT LANGUAGE='JavaScript'>window.open ('mess.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>" ;
else echo "<html><body bgcolor='#aaaaff'><SCRIPT LANGUAGE='JavaScript'>window.open ('messfx.htm', 'Message', config='height=150, width=250, toolbar=no, menubar=no, scrollbars=no, resizable=yes, location=no, directories=no, status=no')</SCRIPT>"
?>

