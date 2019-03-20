<?php
session_start();

if(isset($_session['login']) and $_session['login']=="true"){
header('location:dashboad.php');	
}

//print_r($_session);

?>
<?php

 $db=new PDO('erozgar','root','');
//    $db->setAttribute(PDO::ATTER_ERRMODE,PDO :: ERRMODE_EXCEPTION);
//$db->SetAttribute(PDO::ATTER_EMULATE_PREPARS,false);
//     
     
    $data= db_query("select*from `users`");
$getdata=$data->fetchall(PDO::FETCH_ASSOC);
print_r($getdata);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body style="color:blue;">
<center>
<form method="post" action="login.php">
<input type="email" name="email"  placeholder="please enter your name"  required /><br>
<input type="password" name="password"  placeholder="please enter your password" required /><br>
<input type="submit" name="submit"  style="color:blue;" value="cick_me"/>

</form>
</center>
<?php
// $firtname='umar';

// echo 'firtname  $firtname';  // single quation is fast for string values  here is result is 'firtname  $firtname'
// echo "	</br>";
// echo "firtname $firtname";    // double qutation is used for showing varivale values and string values both a

// $counter=0;
//  while ($counter <100) {
//  	echo '<b style="color:red;">	Umarfara</b> </br>';
//  	$counter ++;
//  	# code...
//  }

// foreach ($variable as $key => $value) {
// 	# code...
// }

?>


</body>
</html>