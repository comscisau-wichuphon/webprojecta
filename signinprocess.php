<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sign in process</title>
</head>
<body>
<?php 

$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$host = "localhost";
$userdb = "root";
$passworddb = "";
$dbname = "comscia_db";

$conn = mysqli_connect($host,$userdb,$passworddb,$dbname);

$strsql = "select * from user_tb where uname='".$uname."' and upassword='".$upassword."'";

$result = mysqli_query($conn,$strsql);

if($row = mysqli_fetch_array($result)){
	echo "ok";

}else{
	echo "user name and password ไม่ถูกต้อง";


}

 ?>
	
</body>
</html>