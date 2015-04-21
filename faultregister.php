<?php
	//Start session
	session_start();
	
	
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
	$name = ucwords(clean($_POST['name']));
	$surname = clean($_POST['surname']);
	$physicaladdress = clean($_POST['physicalad']);
	$contact = clean($_POST['contactno']);
	$from = clean($_POST['emailm']);
	$area = clean($_POST['area']);
	$fault = clean($_POST['fault']);
	
	
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
	if($surname == '') {
		$errmsg_arr[] = 'Surname missing';
		$errflag = true;
	}
	if($physicaladdress == '') {
		$errmsg_arr[] = 'Physical Address missing';
		$errflag = true;
	}
	if($contact == '') {
		$errmsg_arr[] = 'Contact number missing';
		$errflag = true;
	}
	if($from == '') {
		$errmsg_arr[] = 'Email details missing';
		$errflag = true;
	}
	if($area == '') {
		$errmsg_arr[] = 'Provide the location where this has happened';
		$errflag = true;
	}
	if($fault == '') {
		$errmsg_arr[] = 'Fault details missing';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the fault form
	if($errflag) {
		$_SESSION['ERRMSG_ARR2'] = $errmsg_arr;
		session_write_close();
		
		header("location: fault.php");
		
		exit();
	}
	
	$email ='vusidl@mbacity.org.sz';
	$email ='muzim@mbacity.org.sz';
	//$email ='gugulethuh@mbacity.org.sz';
	//$email ='gmhlongo@mbacity.org.sz';


$subject ='Fault Reporting Online';
$message = $physicaladdress;
$message = $fault;

mail($email1, $subject, $message,"From: ".$from);

	//Create INSERT query
$qry = "INSERT INTO fault(name, surname,physicaladdress, contact, emaila,whereFault, faultD, dateRaised) 
VALUES('$name','$surname','$physicaladdress','$contact','$from','$area','$fault',NOW())";



	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		
		header("location: register_success2.html");
		exit();
	}else {
		die("Failed to submit your suggestion");
	}
?>