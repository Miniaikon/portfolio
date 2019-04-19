<?php 
	$ultima_linea = system('git pull origin master', $retval);
	print_r($retval);
 ?>