<?php //Start session
	session_start();
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
<div id="logo"><h1><font color="#FFFFFF">Municipal Council of Mbabane Compliment System</h1><br /><small>"The City of Mbabane will be the prefered destination in Southern Africa offering quality life"</small>
</div>
<div id="header">

    <div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="image/header.jpg" alt="" />
                <img src="image/header2.jpg" alt=""/>
                <img src="image/header3.jpg" alt="" />
				<img src="image/header4.jpg" alt="" />
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
			<li class="first"><a href="index.htm"  title="">Home</a></li>
            <li><a href="comp.php" title="">Complaint</a></li>
			<li><a href="suggestion.php" title="">Suggestion</a></li>
			<li><a href="fault.php" title="">Fault Reporting</a></li>
            <li><a href="compliment.php" title="">Compliment</a></li>
		</ul>
</div>
<!-- header ends -->
<!-- content begins -->
<div id="content_bg">
  <div id="content">
	<div id="right"><table width="240" bgcolor="#e77a19" border="2" ><tr><td>
		<h2>Reach the World Below</h2>
			<ul>

				  <li><a href="https://www.google.com/maps/place/Mbabane+City+Council/@-26.32636,31.144594,3a,75y,160.69h,90t/data=!3m4!1e1!3m2!1sXV-WfIrelje5vHoJ7sHymQ!2e0!4m2!3m1!1s0x1ee8cee8f04b171f:0xb9ba85fec7b48151!6m1!1e1">Mbabane City</a></li>
				  <li><a href="http://www.google.com"><img src="image/170034.png" alt="Search Engine Google" /></li>
                  <li><a href="http://www.facebook.com/MunicipalCouncilOfMbabane?fref=ts"><img src="image/170029.png" alt="Hello Facebook" /></li>
                  <li><a href="http://www.twitter.com"><img src="image/170028.png" alt="Hello twitter" /></li>
			</ul><a href="https://www.google.com/maps/place/Mbabane+City+Council/@-26.32636,31.144594,3a,75y,160.69h,90t/data=!3m4!1e1!3m2!1sXV-WfIrelje5vHoJ7sHymQ!2e0!4m2!3m1!1s0x1ee8cee8f04b171f:0xb9ba85fec7b48151!6m1!1e1"><img src="image/170031.gif" alt="" title="" style="padding-right:15px; float:left; padding-left:5px;" width="245" height="280" /></a></td></tr></table>
	</div>
          	<div id="left">
			<h1>Please feed your Compliments below</h1>
		<div id="text">
		<img src="image/17006.png" alt="" title="" style="padding-right:15px; float:left; padding-left:5px;" width="130" height="140" /><fieldset>
        <h3>What is a Compliment?</h3><br /><p><ol ice:repeatinggroup="*">
        <li>It is a mark (or act) expessing phraise and admiration
        <li>Your compliment can be about roads, traffic lights, health, environment, risk, quality, services etc within the city
        </ol></p><br /><h2>Fill your Compliment here</h2><br />
         <?php
	if( isset($_SESSION['ERRMSG_ARR1']) && is_array($_SESSION['ERRMSG_ARR1']) && count($_SESSION['ERRMSG_ARR1']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR1'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR1']);
	}
?> 
                <p>
                 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#form10").validate();
});
</script>
              
            <form id="form10" name="form10" method="post" action="complimentregister.php"><fieldset spellcheck="true">
  <table width="500" bordercolor="#FF0000" align="left" cellpadding="1" cellspacing="0" style="color: #FFF">
    <tr>
     <td>
     
				   <tr><td width="200">  <label for="name" id="name">Your name:</label></td>
				     
				     <td width="200"><input name="name" type="text" class="required" id="name"  class="required"/></td></tr>
			     
                  <tr><td width="200">  <label for="surname" id="surname">Your surname:</label></td>
				     
				     <td width="200"><input name="surname" type="text" class="required" id="surname"  class="required"/></td></tr>
                    
				  <tr><td width="200"> 
				     <label for="phsicalad" id="phsicalad">Physical Address:</label></td><td>
				     <input type="text" name="phsicalad" id="phsicalad" class="required"/>
				   </td></tr>
				   <tr><td width="200">
				     <label for="contactno" id="contactno">Contact No:</label></td><td>
				     
				     <input type="text" name="contactno" id="contactno" class="required"/>
				   </td></tr>
				   <tr><td>
				     <label for="sugd" id="sugd">Compliment details:</label></td><td><textarea name="sugd" class="required" id="sugd"></textarea>
        </td></tr>
				   
				  <tr><td> 
				     <label for="age" id="age">&nbsp;    </label></td><td>
				     <input type="submit" name="bperson" id="bperson" value="Submit your compliment"></td></tr>
				   </td>
    </tr>
    </table></fieldset>
</form>
			
		  </td>
		  <td width="17"><a href="admin.php"><img src="image/17008.png" /></a></td>
		</tr>
		<tr> 
		  <td width="9">&nbsp;</td>
		  
		  
		</tr>
	  </table></p>
                </fieldset><br /><br />
			<div class="hrd"></div><br />
<h1>"Responsive Quality Service on Time"</h1>

</div>

	</div>
    </div>
</div>
<!-- content ends -->
<!-- footer begins -->
<div id="footer">
  <p>Copyright (c) 2014 - 2022. | <a href="http://www.facebook.com/muzi.mhlongo1?ref_component=mbasic_home_header&ref_page=%2Fwap%2Fprofile_tribe.php&refid=18">Privacy Policy</a></p>
<p><!-- Do not remove --><a href="http://www.facebook.com/muzi.mhlongo1?ref_component=mbasic_home_header&ref_page=%2Fwap%2Fprofile_tribe.php&refid=18">Website Design</a>&nbsp;&nbsp;<a href="mailto:tnt501muzinjomane@gmail.com" style="color:#FFFFFF">For More Information</a><!-- end --></p></div>
<!-- footer ends -->
</div>
</div>
</body>
</html>
