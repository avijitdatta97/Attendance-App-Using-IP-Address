<?php
	$host = "localhost";
	$dbUser = "admin_depo";
	$dbPwd = "IkBH6sUpzB";
	$dbName = "admin_depo";
	
	$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);
	
	if($connect == false ){
		echo "DataBase Not Connected!!";
	}

?>