<?php 


include_once 'dbcon.php';

$id = $_POST['idsv'];
$query = "DELETE FROM student WHERE id = '$id'";
if(mysqli_query($connect,$query)){
	echo "SUCSESS";
}else{
	echo "ERROR";
}


 ?>