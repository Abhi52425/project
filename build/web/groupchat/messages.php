<html>
<head>
<meta http-equiv="refresh" content="2">	
</head>
	
<body>
<?php
	
$link = mysqli_connect('localhost','groupchat','groupchat','users');
if(!$link)	{
	die('Could not connect'.mysql_error());
}




$query = "SELECT * FROM `messages`";

if($result=mysqli_query($link,$query))	{
	while($row=mysqli_fetch_row($result))	{
		echo $row['3']." says: ".$row['1']."</br>";
	}
	mysqli_free_result($result);
}
mysqli_close($link);
?>
	
	
	
	
	
	
</body>

</html>