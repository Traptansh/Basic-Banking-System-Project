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


<table align = center border = 1 width = 80% cellpadding = 5 cellspacing = 5>

<tr> <td colspan=5> Customer Transaction List </td> </tr>
<tr> <td> Tran No </td> <td> Date </td> <td> Ac NO </td> <td> Db Amt </td> <td> Cr Amt </td> <td> Details </td> </tr>
<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar = "select * from Trantab where acno=$v1 order by TranNo desc";
	$result = $conn -> query($sqlvar);
	while($row = $result -> fetch_row())
	{
		echo("<tr> <td>".$row[0]." </td> <td>".$row[1]." </td> <td>".$row[2]." </td> <td>".$row[3]." </td> <td>".$row[4]." </td> <td>".$row[5]." </td> </tr>");
		
	}
	
?>

</table>
<a href=custmainpage.php> Back </a>
<table width = 100%>
<tr height = 200> <td> </td> </tr>
</table>
<img src="images/head2.png">
</body>
</html>