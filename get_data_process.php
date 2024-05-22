<?php
session_start();
require_once("bdconnect.php");
require('UserInfo.php');

if(isset($_REQUEST["getname"])){
	$get_name = $_REQUEST['getname'];

	// OS
	$OS = UserInfo::get_os();
	// Browser
	$browser = UserInfo::get_browser();
	// Device
	$device = UserInfo::get_device();
	// IP
	$ip = UserInfo::get_ip();
	
	$get_data="INSERT INTO gether_data(name,os,browser,device,ip) VALUES ('$get_name','$OS','$browser','$device','$ip')";
		
	$get_data_result = mysqli_query($connect,$get_data);
			
	if($get_data_result == true){
		echo "Task Successfully Done...";			
		}
		else{
			echo "Data Not Inserted!!";
		}				
}

?>