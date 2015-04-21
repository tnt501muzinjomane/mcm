<?php
	//Start session
	session_start();
	require_once('auth.php');
	$url1 = $_SERVER['REQUEST_URl'];
	header("Refresh: 30; URL = $url1");
	
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
	$refNum = ucwords(clean($_POST['refNum']));
	
	//Create query
	$qry="SELECT * FROM comp where reported ='YES' order by refNum DESC";
	$result=mysql_query($qry);
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Municipal Council of Mbabane Systems</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Quintessential' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onload="MM_preloadImages('images/LogoBack1.png')">
<div id="mainbg">
<div id="main">
<!-- header begins -->
<div id="logo">
  <h1><font color="#FFFFFF">Municipal Council of Mbabane Complaint System</h1><br /><small>"The City of Mbabane will be the prefered destination in Southern Africa offering quality life"</small>
</div>
<div id="header">

    <div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/header.jpg" alt="" />
                <img src="images/header2.jpg" alt=""/>
                <img src="images/header3.jpg" alt="" />
				<img src="images/header4.jpg" alt="" />
            </div>        
  </div>

<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</div>
	<div id="buttons">
		<ul>
			<li class="first"><a href="compdetails.php"  title="">Complaint</a></li>
			<li><a href="suggdetails.php" title="">Suggestion</a></li>
			<li><a href="faultdetail.php" title="">Fault Reporting</a></li>
            <li><a href="complimentDetails.php" title="">Compliment</a></li>
            <li><a href="logout.php" title="">Logout</a></li>
		</ul>
</div>
<!-- header ends -->
<!-- content begins -->
<center><div id="content_bg">
  <div id="content">
	
          	<div id="left">
			<h1>MCM Complaint Workplace</h1>
		<div id="text">
		<hr />
        <p>     
     <fieldset>       
  <table width="600"  border="0" align="left" cellpadding="#" cellspacing="0" >
    <tr>
     <td><center><h2>ALL REPORTED MORE THAN ONCE COMPLAINTS</h2></center>
     <?php 

  while ($member = mysql_fetch_array ($result)) {
			//Successful
			
		echo " <form> <table  border='2' >
			
				<tr><td width='700'><h2>COMPLAINTS DETAILS</h2></td></tr>
		     <tr><td width='120'><font color='#FFFFFF'>Ref No :{$member['refNum']}</td></tr>
			  <tr><td width='120'><font color='#FFFFFF'>Reported before :{$member['reported']}</td></tr>
			  <tr><td width='120'><font color='#FFFFFF'>Name :{$member['name']}</td></tr>
			  <tr><td width='120'><font color='#FFFFFF'>Surname :{$member['surname']}</td></tr>
			  <tr><td width='120'><font color='#FFFFFF'>From :{$member['physicaladdress']}</td></tr>
			  <tr><td width='120'><font color='#FFFFFF'>Contact :{$member['contact']}</td></tr>
			   <tr><td width='120'><font color='#FFFFFF'>Email :{$member['emaila']}</td></tr>
			    <tr><td width='120'><font color='#FFFFFF'>Comp/Compliment :{$member['compDetail']}</td></tr>
				<tr><td width='120'><font color='#FFFFFF'>Date raised:{$member['dateRaised']}</td></tr>
		        <tr><td width='120'><font color='#FFFFFF'>Attended :{$member['checked']}</td></tr>
				<hr>
			</table> </form>";
          }
		  ?>
     
     </td>
    </tr>
		<br />
	 </table></p>
                </fieldset> 	
	</div>
    </div>
</div>
<!-- content ends -->
<!-- footer begins -->
<div id="footer">
  <p>Copyright (c) 2014 - 2022. | <a href="http://www.facebook.com/muzi.mhlongo1?ref_component=mbasic_home_header&ref_page=%2Fwap%2Fprofile_tribe.php&refid=18">Privacy Policy</a></p>
<p><!-- Do not remove --> <a href="http://www.facebook.com/muzi.mhlongo1?ref_component=mbasic_home_header&ref_page=%2Fwap%2Fprofile_tribe.php&refid=18">Website Design</a>&nbsp;&nbsp;<a href="mailto:tnt501muzinjomane@gmail.com" style="color:#FFFFFF">For More Information</a><!-- end --></p></div>
<!-- footer ends -->
</div>
</div>
</body>
</html>
