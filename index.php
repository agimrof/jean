<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Estudo</title>
    <meta charset="latin1">
  </head>
  <body>
	<?php
	   require 'config.php';
	   require 'connection.php';
	   require 'database.php';	  

	   $query = "INSERT INTO clientes ( nome ) VALUES ( 'Caio' )";
	   echo $query;
	   var_dump(DBExecute($query));	   
		   
	?>
  </body>
</html>
