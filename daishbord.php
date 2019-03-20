
<?php

session_start();
if( !(isset($_SESSION['login']) and $_SESSION['login']=="true")){
	//echo 'login successfully';
	header('location:E-rozgar.php');
	unset($_session['login']);
	session_destroy();
	header('location:E-rozgar.php');

	exit();

}

echo $_SESSION['login'];


if((isset($_GET['logout'])) and $_GET['logout']=="true"){
	header('location:E-Rozgar.php');
	unset($_session['login']);
	session_destroy();
	header('location:E-Rozgar.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
</head>
<body>
	<center>
 <b>here is dashboard</b>
<a href="?logout=true"> logout</a>
</center>
</body>
</html>