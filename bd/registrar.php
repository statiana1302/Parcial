<?php
$db_host="localhost";
$db_user="nombre_de_usuario";
$db_password="contraseña";
$parcialf="parcialf";
$paciente="paciente";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['idPaciente']);
$subs_last = utf8_decode($_POST['nomPaciente']);
$subs_email = utf8_decode($_POST['edadPaciente']);
$subs_email = utf8_decode($_POST['numCitas']);
 
 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: Fail.html');
 
} else {
 
 $insert_value = 'INSERT INTO `' . $parcialf . '`.`'.$paciente.'` (`idPaciente` , `nomPaciente` , `edadPaciente` , `numCitas`) VALUES ("' . $idPaciente . '", "' . $nomPaciente . '", "' . edadPaciente. '" , "' . numCitas. '")';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
 
header('Location: Success.html');
}
 
mysql_close($db_connection);
 
?>
