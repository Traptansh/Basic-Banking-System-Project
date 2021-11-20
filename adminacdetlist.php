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
<tr> <td> Ac Name </td> <td> Details </td> <td> Facilities </td> <td> Min Bal </td> </tr>
<?php
include("connfile.php");

	$sqlvar = "select * from actypetab order by actypename";
	$result = $conn -> query($sqlvar);
	while($row = $result -> fetch_row())
	{
		echo("<tr> <td>".$row[0]." </td> <td>".$row[1]." </td> <td>".$row[2]." </td> <td>".$row[3]." </td> </tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> Back </a>
<table width = 100%>
<tr height = 200> <td> </td> </tr>
</table>
<img src="images/head2.png">
</body>
</html>