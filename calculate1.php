<?php
$num1 = $_POST['land'];
$num2 = $_POST['improvement'];
$operations = $_POST['operations'];

if($operations == 'Developed Residential Properties')
{
	$land = 1.29;
	$impro = 0.21;
	$a1 = $num1 * $land/100;
	$a2 = $num2 * $impro/100;
	$answer = $a1 + $a2;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'> 
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Your Developed Residential Properties</h1><br></td></tr>
	<tr><td> <h3>Rates for your Land  is  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E:  $a1</td></tr>
	<tr><td><h3>Rates for your Improvements excluding Land   E: $a2</td></tr>  
	<tr><td><b><h3>Your Rates Sum-up To 					 E: $answer</td></tr> 
	<tr><td>Note! Excluding refuse collection</td></tr></table>";
}

if($operations == 'Developed Commercial Properties')
{
	$land = 2.53;
	$impro = 0.70;
	$a1 = $num1 * $land/100;
	$a2 = $num2 * $impro/100;
	$answer = $a1 + $a2;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Your Developed Commercial Properties </td></tr>
	<tr><td><h3>Rates for your Land  is   E:  $a1</td></tr>
	<tr><td><h3>Rates for your Improvements excluding Land    E: $a2</td></tr>  
	<tr><td><h3>Your Rates Sum-up To  E: $answer</td></tr>
	<tr><td>Note! Excluding refuse collection</td></tr></table>";
}
if($operations == 'Undeveloped Properties Residential')
{
	$res = 1.51;
	$a1 = $num1 * $res/100;
	
	$answer = $a1;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Your Undeveloped Residential Properties<br></td></tr>  
	<tr><td><h3>Your Rates Sum-up To   E: $answer</td></tr></table>";
}
if($operations == 'Undeveloped Properties Commercial')
{
	$com = 2.22;
	$a1 = $num1 * $com/100;
	
	$answer = $a1;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Your Undeveloped Residential Properties<br></td></tr> 
	<tr><td><h3>Your Rates Sum-up To   E: $answer </td></tr></table>";
}
if($operations == 'Government Properties (Developed Land + improvements)')
{
	$land = 1.82;
	$impro = 1.82;
	$a1 = $num1 * $land/100;
	$a2 = $num2 * $impro/100;
	$answer = $a1 + $a2;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Government Properties (Developed Land + Improved)<br></td></tr>
	<tr><td><h3>Rates for your Land  is    E: $a1</td></tr>
	<tr><td><h3>Rates for your Improvements excluding Land   E:  $a2</td></tr>  
	<tr><td><h3>Your Rates Sum-up To  E: $answer </td></tr></table>";
}
if($operations == 'Government Properties (Vacant Land)')
{
	$vland = 1.82;
	$a1 = $num1 * $vland/100;
	
	$answer = $a1;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Government Vacant Land<br></td></tr>  
	<tr><td><h3>Rates Sum-up To   E: $answer</td></tr></table>";
}
if($operations == 'Public Open Spaces')
{
	$opens = 1.82;
	$a1 = $num1 * $opens/100;
	
	$answer = $a1;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Public Open Space<br></td></tr>  
	<tr><td><h3>Rates Sum-up To   E: $answer</td></tr>";
}
if($operations == 'Residential Special Consent')
{
	$land = 1.55;
	$impro = 0.38;
	$a1 = $num1 * $land/100;
	$a2 = $num2 * $impro/100;
	$answer = $a1 + $a2;
	echo " <p><center><a href='calculate.php'><h1>Go Back</h1></a></p> </center><table  border='2' align='center'>
	<tr><td align='center'><img src='index_htm_files/123456.png' alt='' title='' style='padding-right:15px; float:center; padding-left:5px;' width='115' height='140' /></td></tr>
	<tr><td><h2>Rates For Residential Special Consent<br></td></tr>
	<tr><td><h3>Rates for your Land  is    E: $a1</td></tr>
	<tr><td><h3>Rates for your Improvements excluding Land    E: $a2</td></tr>  
	<tr><td><h3>Rates Sum-up To  E: $answer</td></tr></table>";
}
?>
