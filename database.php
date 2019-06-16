<?php

	function DBExecute($query){
	
		$link = DBConnect();
		$result = mysqli_query($link,$query) or die(mysqli_error());
		DBclose($link);
		return $result; 
	}

?>
