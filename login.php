


<?php


session_start();

//print_r($_session);
	$email="umarfaraz005@gmail.com";
	$password="1234";
	
	if (isset($_POST['email']) and isset($_POST['password'])) {
		$mail=$_POST['email'];
		$pas=$_POST['password'];
	 	
	 	if($email==$mail and $password==$pas){
			//$_SESSION['login'] = "true";
	 		echo "login is successful";
	 		//header('location:daishbord.php');
	 	}else{
 			echo "invalid passwod";
 		}
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
 

  <!-- <?php echo $mail ?>
 --> </body>
</html>