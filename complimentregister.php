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
	$physicaladdress = clean($_POST['phsicalad']);
	$contact = clean($_POST['contactno']);
	$compliment = clean($_POST['sugd']);
	
	
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
	if($compliment == '') {
		$errmsg_arr[] = 'Compliment details missing';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the compliment form
	if($errflag) {
		$_SESSION['ERRMSG_ARR1'] = $errmsg_arr;
		session_write_close();
		
		header("location: compliment.php");
		
		exit();
	}
	$from ='publicsuggestions@gmail.com';
$email = 'vusidl@mbacity.org.sz';
$subject = 'Public suggestion';
$message = 'There is a new suggestion to improve the City of Mbabane. Please follow the link: http://www.mbabane.org.sz/admin.php ';

mail($email, $subject, $message,"From: ".$from);

	//Create INSERT query
$qry = "INSERT INTO compliment(name, surname,physicaladdress, contact, compliment,dateRaised ) 
VALUES('$name','$surname','$physicaladdress','$contact','$compliment',NOW())";



	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		
		header("location: register_success4.html");
		exit();
	}else {
		die("Failed to submit your compliment");
	}
?>