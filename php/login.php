<?php
require_once "config.php";
//require_once "function.php";
//echo "adf";
// exit;

error_reporting(E_ALL);
ini_set('display_errors', 1);


	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	$q = "
		SELECT `id`,`name` FROM user WHERE `username` = '$username' AND `password` = '$password' LIMIT 1
	";

	$result = $conn->query($q);	

	if ($result && $result->num_rows > 0 ){
		while ($row = $result->fetch_assoc()) {
			session_start();
			$_SESSION['userid'] = $row['id'];
			header("Location: ../kanban/index.html");			

		}
	} 
	



?>