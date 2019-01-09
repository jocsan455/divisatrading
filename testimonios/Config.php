<?php
// simple conexion a la base de datos
 /*function connect(){
	return new mysqli("localhost","u216945970_globa","12345678","u216945970_globa");
}
 $link=mysql_connect("localhost","u216945970_globa","12345678")
  or die ("no se ha podido conectar");
  
  mysql_select_db("u216945970_globa",$link)
  or die("error al tratar de seleccionar esta base de datos");
  $Link="http://tuprogramador.com.ve/globalitika"

*/
  function connect(){
	return new mysqli("localhost","root","","globalitika");
}
@$link=mysql_connect("localhost","root","")
  or die ("no se ha podido conectar");
  
  mysql_select_db("divisa",$link)
  or die("error al tratar de seleccionar esta base de datos");
  $Link="http://127.0.0.1/globalitika"
 
?>

