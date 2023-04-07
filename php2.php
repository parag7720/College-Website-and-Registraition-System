<?php

$con = new mysqli("localhost","root","");
$a=$_POST['aid'];
$b=$_POST['psw'];
 $con->select_db("se1");
 
 $sq="select * from std where appid='$a' and password='$b'; ";
 $res1=$con->query($sq); 
 $count = $res1->num_rows; 
 if ($count==1)
 {	session_start();
	$_SESSION['Name'] = $a;
	 header ("location: php3.php");
 }
 else
	 echo "INVALID CREDENTIALS"
 ?>