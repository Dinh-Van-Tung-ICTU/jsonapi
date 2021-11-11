<?php 

	//Tao class Sinhvien
class Sinhvien{
		public $hoTen;
		public $namSinh;
		public $diaChi;

		public function __construct($hoten, $namsinh, $diachi){
			$this->hoTen = $hoten;
			$this->namSinh = $namsinh;
			$this->diaChi = $diachi;
		}
	//2. Tao mang

}
 	$mangSV = [];
 		//3. Them ptu vao mang
	array_push($mangSV, new Sinhvien("DINH VAN TUNG",2000,"BAC KAN"));
	array_push($mangSV, new Sinhvien("DINH VAN TUNG 2",2000,"BAC KAN 2"));

	//4. chuyen dinh dang cua mang thanh json
	echo json_encode($mangSV);

 ?>