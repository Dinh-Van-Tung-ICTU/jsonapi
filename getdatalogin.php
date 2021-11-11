<?php 
include_once 'dbcon.php';
$query = "SELECT * FROM tbl_login";
$data = mysqli_query($connect,$query);

class DangNhap{

		public $taikhoan;
		public $matkhau;

		public function __construct($tk,$mk){
			$this->taikhoan = $tk;
			$this->matkhau = $mk;
		}
	//2. Tao mang

}
	$mang = [];
	while($row = mysqli_fetch_array($data)){
		array_push($mang,new DangNhap($row['taikhoan'],$row['matkhau']));
	}

	echo json_encode($mang);

 ?>