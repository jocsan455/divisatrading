<?php
// simple conexion a la base de datos
 function connect(){
	return new mysqli("localhost","u698286617_testi","12345678","u698286617_testi");
}
 $link=mysql_connect("localhost","u698286617_testi","testi1234")
  or die ("no se ha podido conectar");
  
  mysql_select_db("u698286617_testi",$link)
  or die("error al tratar de seleccionar esta base de datos");


/*  function connect(){
	return new mysqli("localhost","root","","globalitika");
}
@$link=mysql_connect("localhost","root","")
  or die ("no se ha podido conectar");
  
  mysql_select_db("divisa",$link)
  or die("error al tratar de seleccionar esta base de datos");
  $Link="http://127.0.0.1/globalitika"
 */
?>

