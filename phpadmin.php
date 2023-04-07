<?php

$con=mysqli_connect ("localhost","root","");
$a=$_POST['aname'];
$b=$_POST['passk'];
 $con->select_db("se1");
 
 $sq="select * from admin where adminname='$a' and pass='$b'; ";
 $res1=$con->query($sq); 
 $count = $res1->num_rows; 
 if ($count==1)
 {	session_start();
	$_SESSION['Name'] = $a;
	 header ("location: php4.php");
 }
 else
	 echo "INVALID CREDENTIALS"
 ?>