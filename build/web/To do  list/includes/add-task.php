<?php
	session_start();
	$task = strip_tags( $_SESSION['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');

	include("connect.php");

	mysqli_query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

	$query = mysqli_query("SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time'");

	while( $row = mysqli_fetch_assoc($query) ){
		$task_id = $row['id'];
		$task_name = $row['task'];
	}

	mysqli_close();

	echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
?>