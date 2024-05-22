<?php
session_start();
require_once("bdconnect.php");
require('UserInfo.php');

// User Name & ID
$user_id = $_SESSION['userid'];
$user_name = $_SESSION['username'];
// OS
$OS = UserInfo::get_os();
// Browser
$browser = UserInfo::get_browser();
// Device
$device = UserInfo::get_device();
// IP
$ip = UserInfo::get_ip();

date_default_timezone_set('Asia/Dhaka');
// Month
$month = date('m');
// Year
$year = date('Y');
// Date
$date = date('d/m/Y');

// Time
$hour = date('h');
$ampm = date('a');
$time = date('h:ia');

	
	//Verification IP
	$get_ip = "select * from user_account where id='$user_id'";
	$get_ip_result = mysqli_query($connect,$get_ip);
	
	while($row = mysqli_fetch_assoc($get_ip_result)){
		$result_ip = $row['ip'];
	}
	
	if($hour<10 && $ampm=='am'){
		if($ip == $result_ip){
			$status = 'Present';
		}
		else{
			$status = 'Present (C)';
		}
	}
	else{
		if($ip == $result_ip){
			$status = 'Late';
		}
		else{
			$status = 'Late (C)';
		}
	}
	
	// Verification Date
	$no_attendance = "select * from attendance_report where date='$date' and id='$user_id'";
	$no_attendance_result = mysqli_query($connect,$no_attendance);
	$no_attendance_num = mysqli_num_rows($no_attendance_result);	
	
	if($no_attendance_num >= 1){
		$_SESSION['comments'] = 'Sorry!';
		$_SESSION['message'] = 'Your Attendance Allready Taken...';
		header('location:result.php');		
	}
	else{
		$squ="INSERT INTO attendance_report(name,id,os,browser,device,ip,month,year,date,time,status) VALUES ('$user_name','$user_id','$OS','$browser','$device','$ip','$month','$year','$date','$time','$status')";
		
		$srunQuery = mysqli_query($connect,$squ);
			
		if($srunQuery == true){
			$_SESSION['comments'] = 'Success!';
			$_SESSION['message'] = 'Your Attendance Taken Completed...';
			header('location:result.php');
				
		}
		else{
			echo "Data Not Inserted!!";
		}				
	}

?>