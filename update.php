<?php 


include_once 'dbcon.php';

$id = $_POST['idsv'];
$hoten = $_POST['hotensv'];
$namsinh=$_POST['namsinhsv'];
$diachi = $_POST['diachisv'];
$email = $_POST['emailsv'];

$query = "UPDATE student SET hoten = '$hoten', namsinh = '$namsinh', diachi = '$diachi', email = '$email' WHERE id = '$id' ";
if(mysqli_query($connect,$query)){
	echo "SUCSESS";
}else{
	echo "ERROR";
}



 ?>