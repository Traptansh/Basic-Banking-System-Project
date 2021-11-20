<html>
<head>
<title> Banking System </title>
</head>
<style>
body{
	font-size: 20px;
	
}
table{
	font-size: 20px;
	
}
</style>

<script language=javascript>
function validate()
{
		//alert("testing");
	var x=document.form1.text1.value;
	if(isNaN(x)||x.length!=10)
	{
		alert("Please enter 10 digit number for Account Number");
		return false;
	}
	
	x=document.form1.text2.value;
	if(x.length<4)
	{
		alert("Please enter atleast 4 characters for password");
		return false;
	}
	
	var y=document.form1.text3.value;
	if(x!=y)
	{
		alert("Password mismatch, try again!");
		return false;
	}
	
	x=document.form1.text4.value;
	if(x.length<3)
	{
		alert("Please enter atleast 3 characters for name");
		return false;
	}
	
	x=document.form1.text6.value;
	if(isNaN(x)||x.length!=10)
	{
		alert("Please enter 10 digit Mobile Number");
		return false;
	}
	
	x=document.form1.text7.value;
	var atpos1 = x.indexOf("@");
	var atpos2 = x.indexOf(".");
	if(x.length<5||atpos1 < 3||atpos2 < 5)
	{
		alert("Please enter correct Email ID");
		return false;
	}
	
	
}

</script>






<body bgcolor=lightblue>
<img src="images/head1.png"> <br><br>
<?php
include("connfile.php");
session_start();
$res="";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//echo("working");
	$v1 = $_POST['text1'];
	$v2 = $_POST['text2'];
	$v3 = $_POST['text4'];
	$v4 = $_POST['text5'];
	$v5 = $_POST['text6'];
	$v6 = $_POST['text7'];
	
	$v7 = $_SESSION['actype'];
	//echo $v7." ".$v7;
	$sqlvar = "insert into CustAcTab values($v1,'$v2','$v3','$v4',$v5,'$v6','$v7','N')";
	//echo($sqlvar);
	$result = $conn -> query($sqlvar);
	if($result)
	{
		$res = "Record Inserted";
		
	}
	else
	{
		
		$res = "Record Not Inserted, Some Problem";
	}
	
	
}
else
{
	
	$_SESSION['actype'] = $_GET['actype'];
}
?>

<form name = form1 method = "post" action = "custsignup.php">

<table width=80% border = 1 cellspacing = 5 cellpadding = 5 align=center>
<tr> <td colspan=2> Customer Signup </td> </tr>
<tr> <td > AcNo (10digit) </td> <td> <input type = text name = text1> </td> </tr>
<tr> <td > Password </td> <td> <input type = password name = text2> </td> </tr>
<tr> <td > Retype Password </td> <td> <input type = password name = text3> </td> </tr>
<tr> <td > Person Name </td> <td> <input type = text name = text4> </td> </tr>
<tr> <td > Address </td> <td> <textarea name = text5 rows=4> </textarea> </td> </tr>
<tr> <td > MobileNo </td> <td> <input type = text name = text6> </td> </tr>
<tr> <td > Email ID </td> <td> <input type = text name = text7> </td> </tr>


<tr> <td > <a href=mainpage.php> Back </a> </td> <td> <input type=submit name=Login style = "height:45px; width:150px" onclick="return validate()"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>

</form>

<table width = 100%>
<tr height = 200> <td> </td> </tr>
</table>
<img src="images/head2.png">
</body>
</html>