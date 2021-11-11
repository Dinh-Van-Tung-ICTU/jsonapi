<?php 


require_once "dbcon.php";

$hoten= $_POST['hotensv'];
$namsinh = $_POST['namsinhsv'];
$diachi =  $_POST['diachisv'];
$email =  $_POST['emailsv'];
$query = "INSERT INTO student VALUES (null, '$hoten', '$namsinh', '$diachi','$email')";


if(mysqli_query($connect,$query)){
	//thanh cong
	echo "SUCSESS";
}else{
	//loi
	echo "ERROR";
}




 ?>