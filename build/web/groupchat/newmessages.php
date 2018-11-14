<?php
session_start();

if(ISSET($_POST['message']))
{
$link = mysqli_connect('localhost', 'groupchat', 'groupchat', 'users');
if(!$link)	{
	die('Could not connect'. mysqli_error());
}
$message=mysqli_real_escape_string($link, $_POST['message']);
$username=mysqli_real_escape_string($link, $_SESSION['username']);


$sql="INSERT into `messages`('message','username') 
	VALUES('$message','$username')";
$result=mysqli_query($link,$sql);

mysqli_close($link);
}
echo '<html>';
echo '<head></head><body>';
echo '<form action="newmessage.php" method="POST">';
echo '<input type="text" name="message"/>';
echo '<input type="submit" name="Send"/>';
echo '</form>';
echo '</body></html>';


?>