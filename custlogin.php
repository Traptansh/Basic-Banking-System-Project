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

<body bgcolor=lightblue>
<img src="images/head1.png"> <br><br>
<?php
include("connfile.php");
session_start();
$_SESSION['acno']=00;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//echo("working");
	$v1 = $_POST['text1'];
	$v2 = $_POST['text2'];
	//echo $v1." ".$v2;
	$sqlvar = "select * from CustAcTab where acno = $v1 and pword = '$v2' and custapp='Y'";
	$result = $conn -> query($sqlvar);
	if($result -> num_rows > 0)
	{
		$_SESSION['acno']=$v1;
		header("location: custmainpage.php");
		
	}
	else
	{
		
		echo("userid or password is not correct");
	}
	
	
}


?>
<form name = form1 method = "post" action = "custlogin.php">
<table width=100% align = left>
<tr> <td width="50%"> 
<table width=80% border = 1 cellspacing = 5 cellpadding = 5>
<tr> <td colspan=2> Customer Login </td> </tr>
<tr> <td > Ac No </td> <td> <input type = text name = text1> </td> </tr>
<tr> <td > Password </td> <td> <input type = password name = text2> </td> </tr>
<tr> <td > </td> <td> <input type = submit name = Login style = "height:35px; width:150px"> </td> </tr>
</table>
</td> <td width="50%"> <img src="images/pic1.png" style="width:100%;"> </td> </tr>
</table>
</form>
<table width = 100%>
<tr height = 200> <td> </td> </tr>
</table>
<img src="images/head2.png">
</body>
</html>