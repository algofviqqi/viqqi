<?php
//class mobil
Class Mobil {
	public $nama;
	public $merk;
	
	function getInfoNama(){
		return $this->nama;
	}
	function getInfoMerk(){
		return $this->merk;
	}
	function setInfoNama($a){
		$this->nama=$a;
	}
	function setInfoMerk($a){
		$this->merk=$a;
	}
}
//main
$ferrari=new Mobil();
$ferrari->setInfoNama("xxx");
$ferrari->setInfoMerk("aaa");
echo "Nama Mobil :".$ferrari->getInfoNama()."<br>";
echo "Merk :".$ferrari->getInfoMerk();	

?>
