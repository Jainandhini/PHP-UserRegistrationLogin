<?php

include 'db_connection.php';

$user=$_POST['username'];
$pwd=$_POST['password'];
echo "Validating ....";
#check if userid already exists

$checkLogin="select * from test where name='$user'";
	//echo $checkLogin;
$result=mysqli_query($db,$checkLogin)or die(mysql_error());;

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)) {
		if($pwd==$row['password']){
			echo  "<br/>Welcome back $user";
		}
		else{
			echo "<br/>Sorry, incorrect login!
			Please click <a href='index.html'>here</a> to retry login...";
		}
	}
	
}


else{
	echo "Sorry, user is not registered yet! 
			Please click <a href='index.html'>here</a> to register and retry login...";
}

?>