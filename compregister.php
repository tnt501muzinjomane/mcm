<?php
	//Start session
	session_start();
	
	/* subject and email variable*/
$emailSubject = 'Complaint or Compliment';
$webMaster = 'tnt501muzinjomane@gmail.com';
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$reported = ucwords(clean($_POST['decesion']));
	$name = clean($_POST['name']);
	$surname = clean($_POST['surname']);
	$physicalA = clean($_POST['physicalA']);
	$contact = clean($_POST['contact']);
	$email = clean($_POST['emaila']);
	$compdetail = clean($_POST['comp']);
	$checked = 'Not yet!';
	
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
	if($surname == '') {
		$errmsg_arr[] = 'Surname missing';
		$errflag = true;
	}
	if($physicalA == '') {
		$errmsg_arr[] = 'Physical Address missing';
		$errflag = true;
	}
	if($contact == '') {
		$errmsg_arr[] = 'Contact number missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($compdetail == '') {
		$errmsg_arr[] = 'complaint/compliment details missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the complaint form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		
		header("location: comp.php");
		
		exit();
	}
	
	$body = '$reported <br>$name<br>$surname<br>$physicalA<br>$contact<br>$email<br>$compdetail<br>';
$headers = "From: $emailField6\r\n";
$headers = "Content-type:text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);  

	//Create INSERT query
$qry = "INSERT INTO comp(reported, name,surname, physicaladdress, contact, emaila, compDetail, checked, dateRaised) 
VALUES('$reported','$name','$surname','$physicalA','$contact','$email', '$compdetail','$checked',NOW())";



	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		
		header("location: register_success.html");
		exit();
	}else {
		
		die("Failed to submit your complaint");
	}
?>