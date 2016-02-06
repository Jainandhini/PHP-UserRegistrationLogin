<?php

include 'db_connection.php';

$user=$_POST['username'];
$pwd=$_POST['password'];
echo "Validating ....";
#check if userid already exists

$isUserIDavail="select * from test where name='$user'";
$result1=mysqli_query($db,$isUserIDavail)or die(mysql_error());;

if(mysqli_num_rows($result1) !=0){
	echo "Sorry, user id already exists! 
			Please click <a href='index.html'>here</a> to retry providing a different user id...";
}
else{
	$reguser="insert into test(name,password) values('$user','$pwd')";
	$result=mysqli_query($db,$reguser)or die(mysql_error());
	echo "registered succesfully!!";
	
}
?>