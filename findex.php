<?php
$con=mysqli_connect ("localhost","root","");
if (!$con)
 {
	 die( "connection failed".mysqli_connect_error());
 }
 $a=$_POST['sname'];
 $b=$_POST ['fname'];
 $c=$_POST ['mname'];
 $d=$_POST['DOB'];
    $e=$_POST['gender'];
    $f=$_POST['address'];
    $g=$_POST['appid'];
    $h=$_POST['password'];
 $i=$_POST ['repassword'];
 $j=$_POST ['course'];
    $k=$_POST['marks1'];
    $l=$_POST['marks2'];
    $m=$_POST['jee'];



    if($i!=$h || $a==NULL || $b==NULL || $c==NULL || $d==NULL || $e==NULL || $f==NULL || $g==NULL || $h==NULL || $i==NULL || $j==NULL || $k==NULL || $l==NULL || $m==NULL)
    {
        echo"Password Dont Match";
        echo '<script type="text/javascript">'; 
echo 'alert("review your entries");'; 
echo 'window.location.href = "index6.html";';
echo '</script>';
    }
    else{
        $sql="INSERT INTO `se1`.`std` (`sname`, `fname`, `mname`, `DOB`, `gender`, `address`, 
        `appid`, `password`, `course`, `marks1`, `marks2`, `jee`, `TIMESTAMP`)
         VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$j','$k','$l','$m',current_timestamp())";    
        //  $sql2="INSERT INTO `se1`.`academic` (`appid`,`tenth`, `twelth`, `jeerank`, `courseopted`) VALUES ('$g','$k', '$l', '$m', '$j')";    
        //  $sql3="INSERT INTO `se1`.`personal` (`appid`,`name`, `fathername`, `mothername`, `DOB`, `gender`, `address`) VALUES ('$g','$a','$b','$c','$d','$e','$f')";      
    }

 if($con->query($sql)==true)
 {
    $insert=true;
 }
 else
 {
     echo"Error : $sql <br> $con->error";
    }
    if($insert==true){
        echo "<p> Thanks for Registration </p>";
        header("Location:index9.html");
    }
?>