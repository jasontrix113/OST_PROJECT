<?php

 require 'db_connect.php';


	if(!empty ($_POST))
	{
		//account information
		$user_email = $_POST['email'];
		$user_username = $_POST['uname'];
		$user_password = $_POST['pword'];
		$user_passmd5 = md5($user_password);
		//personal information

		$user_fname = ['fname'];
		$user_lname = ['lname'];
		$user_cnum = ['cnum'];
		$user_address = ['address'];
		$user_dob = ['dob'];
		// substring year-month-day
		$year = substr($user_dob, 6, 4);
		$month = substr($user_dob, 0, 2);
		$day  = substr($user_dob, 3, 2);
		//arranged date of birth year-month-day
		$new_user_dob = $year.'-'.$month.'-'.$day;
		$user_city = $_POST['city'];
		$user_region = $_POST['region'];
		$user_zip = $_POST['zip'];
		

		$create_account  = mysqli_query($con, "INSERT INTO `user` (`user-email`,`user-username`,`user-pass`,`user-firstname`,`user-lastname`,`user-contactnum`,`user-address`,`user-date-of-birth`,`user-city`,`user-region`) VALUES ('$user_email','$user_username','$user_passmd5','$user_fname','$user_lname','$user_cnum','$user_address','$new_user_dob','$user_city','$user_region', '$user_zip')");



	} 
?>