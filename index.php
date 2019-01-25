<?php
class Kelas{ // class
	protected $jumlah; // method
		public function belajar(){
		echo "Sedang belajar<br>";
	}
	public function tampil_jumlah(){
		echo"Jumlah mahasiswa adalah ".$this->jumlah."<br>";
	}
}

class StudyGroup extends Kelas{
public function setjumlah($jumlah){
	$this->jumlah=$jumlah;
	echo "jumlah mahasiswa adalah ".$this->jumlah."<br>";

}
}

$d34102 = new StudyGroup(); //objek
$d34102->setjumlah(34);
$d34102->tampil_jumlah();


//$d34102=new Kelas();
//$d34102->belajar();
//$d34102->jumlah=34;
//$d34102->tampil_jumlah();
//$d34101 = new Kelas();
//$d34101->setjumlah(8);
?>