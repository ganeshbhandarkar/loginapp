<?php

if()
require "conn.php";
$username = "test";
$password = "test";
$mysql_qry = "select * from users where username like '$username' and password like '$password'";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
	echo "\n\n\n";
	echo "logged in ";
}else{
	echo "not logged";
}



?>
