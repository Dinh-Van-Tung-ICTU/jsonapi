<?php 

include_once("dbcon.php");

$query = "SELECT * FROM student";
$data = mysqli_query($connect,$query);

class Sinhvien{

		public $Id;
		public $hoTen;
		public $namSinh;
		public $diaChi;
		public $email;

		public function __construct($id,$hoten, $namsinh, $diachi,$email){
			$this->Id = $id;
			$this->hoTen = $hoten;
			$this->namSinh = $namsinh;
			$this->diaChi = $diachi;
			$this->email = $email;
		}
	//2. Tao mang

}
 	$mangSV = [];
 		//3. Them ptu vao mang
 	while($row = mysqli_fetch_array($data)){
 		array_push($mangSV,new Sinhvien($row['id'],$row['hoten'],$row['namsinh'],$row['diachi'],$row['email']));


}
	//4. chuyen dinh dang cua mang thanh json
	echo json_encode($mangSV);
 ?>