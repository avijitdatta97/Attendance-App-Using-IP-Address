<?php

session_start();

require_once("bdconnect.php");

if(isset($_REQUEST["admin_id"]) && isset($_REQUEST["admin_pass"]))
	{
		$admin_user_id = $_REQUEST["admin_id"];
		$admin_user_password = $_REQUEST["admin_pass"];
		

		$admin_log = "select * from admin_account where admin_id='$admin_user_id' && admin_pass='$admin_user_password'";
		$admin_log_result = mysqli_query($connect,$admin_log);
		$admin_log_num = mysqli_num_rows($admin_log_result);
		
		if($admin_log_num == 1){
			$_SESSION['admin_id'] = $admin_user_id;
			while($row = mysqli_fetch_assoc($admin_log_result))
			$_SESSION['admin_name'] = $row['admin_name'];
			
			header('location:search_data.php');
		}
		else
		{
			echo"<script>
					alert('Invalid ID or Password. Please try again..!');
					window.location = 'admin.php';
				</script>";
		}	
	}
	else{
		echo "INSERT data first!!";
	}
?>